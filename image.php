<?php
//require_once 'includes/cache.php';
@define('TP_WEB_URL', $TP_WEB_URL ? $TP_WEB_URL : '/');
@define('TP_APP_DIR', $TP_APP_DIR ? $TP_APP_DIR : dirname(__FILE__));
@define('TP_IMG_DIR', $TP_IMG_URL ? $TP_IMG_URL : '/img/');
@define("TP_TMP_DIR", $TP_TMP_DIR ? $TP_TMP_DIR : TP_APP_DIR.'/temp/');
//error_reporting(E_ALL ^ E_NOTICE);
//ini_set('display_errors', 'On');
function imageerrorprocess($errno, $errstr, $errfile, $errline) {
	//print_r(func_get_args());
	switch ($errno) {
		case E_USER_NOTICE:
        	break;
        case E_USER_WARNING:
	    case E_USER_ERROR:
			if ($_GET['process'] != 1) { 
				$url = $_SERVER['REQUEST_URI'] . '&process=1';
				header('location: ' . $url);
			} else {
				header('Pragma: no-cache');
				header('Cache-Control: no-cache');
				header('Cache-Control: max-age=0');
				header('HTTP/1.0 404 Not Found');
			}
			exit;    
		default:
        	break;
    }
}
set_error_handler("imageerrorprocess");

if(version_compare(phpversion(), "5.2.0", "<")) {
	if (!function_exists("pathinfo_filename")) {
		function pathinfo_filename($path) {
			$temp = pathinfo($path);
			if($temp['extension'])
			$temp['filename'] = substr($temp['basename'],0 ,strlen($temp['basename'])-strlen($temp['extension'])-1);
			return $temp;
		}
	}
} else {
	if (!function_exists("pathinfo_filename")) {
		function pathinfo_filename($path) {
			return pathinfo($path);
		}
	}
}

// default
$type = array("jpg", "jpeg", "gif", "png", "bmp");
if ($image_error == '') $image_error = TP_APP_DIR . "/resources/temp/404.png";
$expire = 3600;
$expire_error = 3600;
$base = TP_APP_DIR;
define("TEMP", TP_TMP_DIR . "image");
define("QUALITY", 9);
if ($_GET["ps"] != "") {
	$list = explode("-", $_GET["ps"]);
	if (count($list) == 0) {
		$list = parse_str($_GET["ps"]);
		foreach ($list as $key => $value) {
			$_GET[$key] = $value;
		}
	} else {
		for($i = 0; $i < count($list); $i+=2) {
			$_GET[$list[$i]] = $list[$i+1];
		}
	}
}
// params
$path = $_GET["path"];			// user request	
$image = $_GET["image"];		// user request
if ($image == "") {
	$image = basename($path);
 	$path = dirname($path);
	if ($path == "" || $path == '.') {
		$path = $TP_APP_DIR . TP_IMG_DIR;
	} else {
		$path = $TP_APP_DIR . $path;
	}
} else {
	if (!ImageDownload($image, $base, $path)) {
		$path = dirname($image);
		$image = basename($image);
		if ($path == "" || $path == '.') {
			$path = $TP_APP_DIR . TP_IMG_DIR;
		} else {
			$path = $TP_APP_DIR . $path;
		}
	}
}

$image =  str_replace("__38__", "&", $image);
$zoom = $_GET["zoom"];				// user request
$width = $_GET["width"];			// user request
$height = $_GET["height"];			// user request
$watermark = $_GET["water"];		// user request
$token = $_GET["token"];
if ($width == "" || $height == "") {
	$watermark = "water.png";
} elseif ($width > 150 || $height > 150) {
	$watermark = "water.png";
}
$watermark = "";

//echo $base . "/" . $path . "/" . $image;
//exit;

// check
if (!$image) { 
	if (($width == "" || $width == 0) && ($height == "" || $height == 0)) {
		$new = ImageCustomSize($image_error, $width, $height);
		ImageOutput($new, $expire_error);
	} else {
		$new = ImageCustomSize($image_error, $width, $height);
		ImageOutput(TEMP . "/" . $new, $expire_error);
	}
	exit;
} else {
	$original = iconv("utf-8", "utf-8", $base . "/" . $path . "/" . $image);
	if (!file_exists($original)) {
		//echo "exit $original"; exit;
		//ImageOutput($image_error, $expire_error);
		$new = ImageCustomSize($image_error, $width, $height);
		ImageOutput(TEMP . "/" . $new, $expire_error);
		exit;
	}
	$pathinfo_filename = pathinfo_filename($original);
	$extension = strtolower($pathinfo_filename["extension"]);
	if (!in_array($extension, $type)) {
		ImageOutput($original, $expire_error);
		exit;
	}
	
	// process
	if ($width || $height) { // output custom size image
		$new = ImageCustomSize($original, $width, $height);
		if ($watermark) {
			$new = ImageWatermark(TEMP . "/" . $new, $watermark);
		}
		if (!file_exists($new)) {
			ImageOutput(TEMP . "/" . $new, $expire);
		} else {
			ImageOutput($new, $expire);
		}
		exit;
	} else if ($zoom) { // output zoom in or zoom out image
		$new = ImageZoom($original, $zoom);
		if ($watermark) {
			$new = ImageWatermark(TEMP . "/" . $new, $watermark);
		}
		if (!file_exists($new)) {
			ImageOutput(TEMP . "/" . $new, $expire);
		} else {
			ImageOutput($new, $expire);
		}
		exit;
	} else if ($watermark) { // output watermark image
		$new = ImageWatermark($original, $watermark);
		if (!file_exists($new)) {
			ImageOutput(TEMP . "/" . $new, $expire);
		} else {
			ImageOutput($new, $expire);
		}
		exit;
	} else { // output original image
		ImageOutput($original, $expire);
		exit;
	}
}

/**
 * download image
 */
function ImageDownload(&$image, &$base, &$path) {
	if (strpos($image, 'http://') === false) {
		return false;
	}
	$pathinfo = pathinfo_filename($image);
	$local = md5($image) . "." . $pathinfo['extension'];
	if (!file_exists(TEMP . "/" . $local)) {
		if (($handle = @fopen($image, 'r')) && ($fp = @fopen(TEMP . "/" . $local, 'w'))) {
			$count = 5;
			do {
				if (flock($fp , LOCK_EX)){      
					while (($char = fgetc($handle)) !== false) {
						fwrite($fp, $char);
					}
					flock($fp , LOCK_UN);
					break;
				}
				sleep(10);
				$count--;
			} while ($count);
			fclose($handle);
			fclose($fp);
		} else {
			trigger_error("image download error : $image", E_USER_ERROR);
		}
	}
	$image = $local;
	$base = TEMP;
	$path = '';	
	return $image;
}

/**
 * custom size
 */
function ImageCustomSize($image, $w, $h) {
	if (($w == "" || $w == 0) && ($h == "" || $h == 0)) {
		return $image;
	}
	$pathinfo_filename = pathinfo_filename($image);
	$base = str_replace(array("/", "\\"), array("_", "_") ,$path_parts['dirname']);
	if ($base == "") {
		$newName = $pathinfo_filename["filename"]  . "_width_$w" . "_height_$h." . $pathinfo_filename["extension"];
	} else {
		$newName = $base . "_" . $pathinfo_filename["filename"]  . "_width_$w" . "_height_$h." . $pathinfo_filename["extension"];
	}
	
	if (file_exists(TEMP . "/" . $newName)) {
		return $newName;
	}
	
	if ($fp = fopen($image, 'r')) {      
		if (flock($fp , LOCK_SH)){      
		    flock($fp , LOCK_UN);      
		}
		fclose($fp);
	}

	list($width, $height, $type, $attr) = getimagesize($image);
	switch ($type) {
		case 1: $img = imagecreatefromgif($image); break;
		case 2: $img = imagecreatefromjpeg($image); break;
		case 3: $img = imagecreatefrompng($image); break;
		case 6: $img = imagecreatefrombmp($image); break;
		default: return $image;
	}

	if (($w == "" || $w == 0) && ($h != "" && $h > 0)) {
		// ref height
		$w = $width / $height * $h;
		
	}

	if (($h == "" || $h == 0) && ($w != "" && $w > 0)) {
		// ref width
		$h = $height / $width * $w;
		
	}

	if ($w > $width || $h > $height) { 
		// image size > original
		// zoomout original crop
		$zoomW = $w / $width;
		$zoomH = $h / $height;
		$zoom = $zoomW > $zoomH ? $zoomW : $zoomH;

		$newWidth = floor($zoom*$width);
		$newHeight = floor($zoom*$height);
		if ($type == 1) {
			$newImg = imagecreate($newWidth, $newHeight);
		} else {
			$newImg = imagecreatetruecolor($newWidth, $newHeight);
		}
		if($type == 1){
            imagealphablending($newImg, false);
            imagesavealpha($newImg, true);
        }
        if($type == 3){
            imagesavealpha($img, true);
			imagealphablending($newImg, false);
			imagesavealpha($newImg, true);
        }
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		imagedestroy($img);
		if ($w == 0) {
			$w1 = $newWidth;
		} else {
			$w1 = $w > $newWidth ? $newWidth : $w;
		}
		if ($h == 0) {
			$h1 = $newHeight;
		} else {
			$h1 = $h > $newHeight ? $newHeight : $h;
		}
		
		if ($w1 == $newWidth) {
			$srcX1 = 0;
			$srcX2 = $w1;
		} else {
			$srcX1 = $newWidth / 2 - $w1 / 2;
			$srcX2 = $w1 + ($newWidth / 2 - $w1 / 2);
		}

		if ($h1 == $newHeight) {
			$srcY1 = 0;
			$srcY2 = $h1;
		} else {
			$srcY1 = $newHeight / 2 - $h1 / 2;
			$srcY2 = $h1 + ($newHeight / 2 - $h1 / 2);
		}
		if ($type == 1) {
			$newImg1 = imagecreate($w1, $h1);
		} else {
			$newImg1 = imagecreatetruecolor($w1, $h1);
		}
		if($type == 1){
            imagealphablending($newImg1, false);
            imagesavealpha($newImg1, true);
        }
        if($type == 3){
			imagealphablending($newImg1, false);
			imagesavealpha($newImg1, true);
        }
		imagecopy($newImg1, $newImg, 0, 0, $srcX1, $srcY1, $srcX2, $srcY2);
		imagedestroy($newImg);
	} else {
		$zoomW = $w / $width;
		$zoomH = $h / $height;
		$zoom = $zoomW > $zoomH ? $zoomW : $zoomH;

		$newWidth = floor($zoom*$width);
		$newHeight = floor($zoom*$height);
		if ($type == 1) {
			$newImg = imagecreate($newWidth, $newHeight);
		} else {
			$newImg = imagecreatetruecolor($newWidth, $newHeight);
		}
		if($type == 1){
            imagealphablending($newImg, false);
            imagesavealpha($newImg, true);
        }
        if($type == 3){
            imagesavealpha($img, true);
			imagealphablending($newImg, false);
			imagesavealpha($newImg, true);
        }
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		imagedestroy($img);
		if ($w == 0) {
			$w1 = $newWidth;
		} else {
			$w1 = $w > $newWidth ? $newWidth : $w;
		}
		if ($h == 0) {
			$h1 = $newHeight;
		} else {
			$h1 = $h > $newHeight ? $newHeight : $h;
		}
		
		if ($w1 == $newWidth) {
			$srcX1 = 0;
			$srcX2 = $w1;
		} else {
			$srcX1 = $newWidth / 2 - $w1 / 2;
			$srcX2 = $w1 + ($newWidth / 2 - $w1 / 2);
		}

		if ($h1 == $newHeight) {
			$srcY1 = 0;
			$srcY2 = $h1;
		} else {
			$srcY1 = $newHeight / 2 - $h1 / 2;
			$srcY2 = $h1 + ($newHeight / 2 - $h1 / 2);
		}
		if ($type == 1) {
			$newImg1 = imagecreate($w1, $h1);
		} else {
			$newImg1 = imagecreatetruecolor($w1, $h1);
		}
		if($type == 1){
            imagealphablending($newImg1, false);
            imagesavealpha($newImg1, true);
        }
        if($type == 3){
			imagealphablending($newImg1, false);
			imagesavealpha($newImg1, true);
        }
		imagecopy($newImg1, $newImg, 0, 0, $srcX1, $srcY1, $srcX2, $srcY2);
		imagedestroy($newImg);
	}

	switch($type) {
		case 1: 
			$black=ImageColorAllocate($newImg1,0,0,0);
			$green=ImageColorAllocate($newImg1,0,255,0);
			$white=ImageColorAllocate($newImg1,255,255,255); 
			$trans=ImageColorTransparent($newImg1,$white);
			ImageFill($newImg1,0,0,$white); 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagegif($newImg1, TEMP . "/" . $newName)) {}
			}
			break;
		case 2:
			if (!file_exists(TEMP . "/" . $newName)) { 
				if(imagejpeg($newImg1, TEMP . "/" . $newName, QUALITY * 10)) {}
			}
			break;
		case 3: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagepng($newImg1, TEMP . "/" . $newName, QUALITY)) {}
			}
			break;
		case 6: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagebmp($newImg1, TEMP . "/" . $newName, imagecolorclosest(255,255,255))) {}
			}
			break;
	}
	imagedestroy($newImg1);
	return $newName;
}

/**
 * zoom in or zoom out
 */
function ImageZoom($image, $zoom) {
	$pathinfo_filename = pathinfo_filename($image);
	$base = str_replace(array("/", "\\"), array("_", "_") ,$path_parts['dirname']);
	if ($base == "") {
		$newName = $pathinfo_filename["filename"]  . "_zoom_$zoom." . $pathinfo_filename["extension"];
	} else {
		$newName = $base . "_" . $pathinfo_filename["filename"]  . "_zoom_$zoom." . $pathinfo_filename["extension"];
	}
		
	if (file_exists(TEMP . "/" . $newName)) {
		return $newName;
	}
	
	if ($fp = fopen($image, 'r')) {      
		if (flock($fp , LOCK_SH)){   
		    flock($fp , LOCK_UN);      
		}
		fclose($fp);
	}

	list($width, $height, $type, $attr) = getimagesize($image);
	switch ($type) {
		case 1: $src = imagecreatefromgif($image); break;
		case 2: $src = imagecreatefromjpeg($image); break;
		case 3: $src = imagecreatefrompng($image); break;
		case 6 : $src = imagecreatefrombmp($image); break;
	}
	$newWidth = floor($zoom*$width);
	$newHeight = floor($zoom*$height);
	if ($type == 1) {
		$new = imagecreate($newWidth, $newHeight);
	} else {
		$new = imagecreatetruecolor($newWidth, $newHeight);
	}
	if($type == 1){
		imagealphablending($new, false);
		imagesavealpha($new, true);
	}
	if($type == 3){
		imagesavealpha($src, true);
		imagealphablending($new, false);
		imagesavealpha($new, true);
	}
	imagecopyresampled($new, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
	imagedestroy($src);

	switch($type) {
		case 1: 
			$black=ImageColorAllocate($new,0,0,0);
			$green=ImageColorAllocate($new,0,255,0);
			$white=ImageColorAllocate($new,255,255,255); 
			$trans=ImageColorTransparent($new,$white);
			ImageFill($new,0,0,$white); 
			if(imagegif($new, TEMP . "/" . $newName)) {}
				
			break;
		case 2: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagejpeg($new, TEMP . "/" . $newName, QUALITY * 10)) {}
			}
			break;
		case 3: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagepng($new, TEMP . "/" . $newName)) {}
			}
			break;
		case 6: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagebmp($new, TEMP . "/" . $newName, imagecolorclosest(255,255,255))) {}
			}
			break;
	}
	imagedestroy($new);
	return $newName;
}

/**
 * watermark
 */
function ImageWatermark($image, $watermark, $watertype=2) {
	$pathinfo_filename = pathinfo_filename($image);
	$base = str_replace(array("/", "\\"), array("_", "_") ,$path_parts['dirname']);
	if ($base == "") {
		$newName = $pathinfo_filename["filename"]  . "_watermark_$watermark." . $pathinfo_filename["extension"];
	} else {
		$newName = $base . "_" . $pathinfo_filename["filename"]  . "_watermark_$watermark." . $pathinfo_filename["extension"];
	}
		
	if (file_exists(TEMP . "/" . $newName)) {
		return $newName;
	}
	
	if ($fp = fopen($image, 'r')) {      
		if (flock($fp , LOCK_SH)){   
		    flock($fp , LOCK_UN);      
		}
		fclose($fp);
	}
	
	list($width, $height, $type, $attr) = getimagesize($image);
	
	switch ($type) {
		case 1:	$src = imagecreatefromgif($image); break;
		case 2:	$src = imagecreatefromjpeg($image); break;
		case 3:	$src = imagecreatefrompng($image); break;
		case 6:	$src = imagecreatefrombmp($image); break;
	}
	
	if ($type == 1) {
		$new = imagecreate($width, $height);
	} else {
		$new = imagecreatetruecolor($width, $height);
	}
	if($type == 1){
		imagealphablending($new, false);
		imagesavealpha($new, true);
	}
	if($type == 3){
		imagesavealpha($src, true);
		imagealphablending($new, false);
		imagesavealpha($new, true);
	}

	imagecopy($new, $src, 0, 0, 0, 0, $width, $height);
	imagedestroy($src);

	switch($watertype)
	{
		case 1:   // text
			imagestring($new, 2, 3, $height-15, $watermark, $black);
		break;
		case 2:   // image
			list($water_width, $water_height, $water_type, $water_attr) = getimagesize($watermark);
			switch ($water_type) {
				case 1:	$water = imagecreatefromgif($watermark); break;
				case 2:	$water = imagecreatefromjpeg($watermark); break;
				case 3:	$water = imagecreatefrompng($watermark); break;
				case 6:	$water = imagecreatefrombmp($watermark); break;
			}
			if($water_type == 1){
				imagealphablending($water, false);
				imagesavealpha($water, true);
			}
			if($water_type == 3){
				imagealphablending($water, false);
				imagesavealpha($water, true);
			}
			//imagecopy($new, $water, $width-$water_width, $height-$water_height, 0, 0, $water_width, $water_height); // watermark locatin 
			$startX = 0;
			$startY = 0;
			for ($startX = 0; $startX < $width; $startX += $water_width) {
				for ($startY = 0; $startY < $height; $startY += $water_height) {
					imagecopy($new, $water, $startX, $startY, 0, 0, $water_width, $water_height); // watermark locatin
				}
			}
			imagedestroy($water);
		break;
	}

	switch($type) {
		case 1: 
			$black=ImageColorAllocate($new,0,0,0);
			$green=ImageColorAllocate($new,0,255,0);
			$white=ImageColorAllocate($new,255,255,255); 
			$trans=ImageColorTransparent($new,$white);
			ImageFill($new,0,0,$white); 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagegif($new, TEMP . "/" . $newName)) {}
			}
			break;
		case 2: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagejpeg($new, TEMP . "/" . $newName, QUALITY * 10)) {}
			}
			break;
		case 3: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagepng($new, TEMP . "/" . $newName, QUALITY)) {}
			}
			break;
		case 6: 
			if (!file_exists(TEMP . "/" . $newName)) {
				if(imagebmp($new, TEMP . "/" . $newName, imagecolorclosest(255,255,255))) {}
			}
			break;
	}

	imagedestroy($new);
	return $newName;
}

/** 
 * image index folder
 */
function ImageIndex($file) {

}

/**
 * output image and exit
 */
function ImageOutput($output, $expire=600) {
	if (basename($output) == '') {
		trigger_error("image outout error : $output", E_USER_ERROR);
	}
	$pathinfo_filename = pathinfo_filename($output);
	$extension = strtolower($pathinfo_filename["extension"]);
	switch($extension){
		case "gif": $ctype="image/gif"; break;
		case "png": $ctype="image/png"; break;
		case "jpg":
		case "jpeg": $ctype="image/jpeg"; break;
		case "bmp": $ctype="image/bmp"; break;
		default: $ctype="application/force-download";
	}

	$time = time();
	header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');
	//header('Cache-Control: max-age='.$expire.',must-revalidate');
	header('Expires: '.gmdate('D, d M Y H:i:s', $time + $expire).' GMT');
	header('Pragma: Pragma');
	header('Accept-Ranges: bytes');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.@filesize($output));
	header('Content-type: '.$ctype);
	header('Content-Disposition: inline; filename="'.(basename($output)).'"');
	readfile($output);
	exit;
}

function imagecreatefrombmp($filename) {
	//Ouverture du fichier en mode binaire
	if (! $f1 = fopen($filename,"rb")) return FALSE;
	//1 : Chargement des ent��tes FICHIER
	$FILE = unpack("vfile_type/Vfile_size/Vreserved/Vbitmap_offset", fread($f1,14));
	if ($FILE['file_type'] != 19778) return FALSE;
	//2 : Chargement des ent��tes BMP
	$BMP = unpack('Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel'.
                '/Vcompression/Vsize_bitmap/Vhoriz_resolution'.
                '/Vvert_resolution/Vcolors_used/Vcolors_important', fread($f1,40));
	$BMP['colors'] = pow(2,$BMP['bits_per_pixel']);
	if ($BMP['size_bitmap'] == 0) $BMP['size_bitmap'] = $FILE['file_size'] - $FILE['bitmap_offset'];
	$BMP['bytes_per_pixel'] = $BMP['bits_per_pixel']/8;
	$BMP['bytes_per_pixel2'] = ceil($BMP['bytes_per_pixel']);
	$BMP['decal'] = ($BMP['width']*$BMP['bytes_per_pixel']/4);
	$BMP['decal'] -= floor($BMP['width']*$BMP['bytes_per_pixel']/4);
	$BMP['decal'] = 4-(4*$BMP['decal']);
	if ($BMP['decal'] == 4) $BMP['decal'] = 0;
	//3 : Chargement des couleurs de la palette
	$PALETTE = array();
	if ($BMP['colors'] < 16777216)
	{
		$PALETTE = unpack('V'.$BMP['colors'], fread($f1,$BMP['colors']*4));
	}
	//4 : Cr��ation de l'image
	$IMG = fread($f1,$BMP['size_bitmap']);
	$VIDE = chr(0);
	$res = imagecreatetruecolor($BMP['width'],$BMP['height']);
	$P = 0;
	$Y = $BMP['height']-1;
	while ($Y >= 0)
	{
		$X=0;
		while ($X < $BMP['width'])
		{
			if ($BMP['bits_per_pixel'] == 24)
				$COLOR = unpack("V",substr($IMG,$P,3).$VIDE);
			elseif ($BMP['bits_per_pixel'] == 16)
			{  
				$COLOR = unpack("n",substr($IMG,$P,2));
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
			}
			elseif ($BMP['bits_per_pixel'] == 8)
			{  
				$COLOR = unpack("n",$VIDE.substr($IMG,$P,1));
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
			}
			elseif ($BMP['bits_per_pixel'] == 4)
			{
				$COLOR = unpack("n",$VIDE.substr($IMG,floor($P),1));
				if (($P*2)%2 == 0) $COLOR[1] = ($COLOR[1] >> 4) ; else $COLOR[1] = ($COLOR[1] & 0x0F);
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
			}
			elseif ($BMP['bits_per_pixel'] == 1)
			{
				$COLOR = unpack("n",$VIDE.substr($IMG,floor($P),1));
				if     (($P*8)%8 == 0) $COLOR[1] =  $COLOR[1]        >>7;
				elseif (($P*8)%8 == 1) $COLOR[1] = ($COLOR[1] & 0x40)>>6;
				elseif (($P*8)%8 == 2) $COLOR[1] = ($COLOR[1] & 0x20)>>5;
				elseif (($P*8)%8 == 3) $COLOR[1] = ($COLOR[1] & 0x10)>>4;
				elseif (($P*8)%8 == 4) $COLOR[1] = ($COLOR[1] & 0x8)>>3;
				elseif (($P*8)%8 == 5) $COLOR[1] = ($COLOR[1] & 0x4)>>2;
				elseif (($P*8)%8 == 6) $COLOR[1] = ($COLOR[1] & 0x2)>>1;
				elseif (($P*8)%8 == 7) $COLOR[1] = ($COLOR[1] & 0x1);
				$COLOR[1] = $PALETTE[$COLOR[1]+1];
			}
			else
				return FALSE;
			imagesetpixel($res,$X,$Y,$COLOR[1]);
			$X++;
			$P += $BMP['bytes_per_pixel'];
		}
		$Y--;
		$P+=$BMP['decal'];
	}
	//Fermeture du fichier
	fclose($f1);
	return $res;
}

function imagebmp ($im, $fn = false) {
	if (!$im) return false;

	if ($fn === false) $fn = 'php://output';
	$f = fopen ($fn, "w");
	if (!$f) return false;

	//Image dimensions
	$biWidth = imagesx ($im);
	$biHeight = imagesy ($im);
	$biBPLine = $biWidth * 3;
	$biStride = ($biBPLine + 3) & ~3;
	$biSizeImage = $biStride * $biHeight;
	$bfOffBits = 54;
	$bfSize = $bfOffBits + $biSizeImage;

	//BITMAPFILEHEADER
	fwrite ($f, 'BM', 2);
	fwrite ($f, pack ('VvvV', $bfSize, 0, 0, $bfOffBits));

	//BITMAPINFO (BITMAPINFOHEADER)
	fwrite ($f, pack ('VVVvvVVVVVV', 40, $biWidth, $biHeight, 1, 24, 0, $biSizeImage, 0, 0, 0, 0));

	$numpad = $biStride - $biBPLine;
	for ($y = $biHeight - 1; $y >= 0; --$y)
	{
		for ($x = 0; $x < $biWidth; ++$x)
		{
			$col = imagecolorat ($im, $x, $y);
			fwrite ($f, pack ('V', $col), 3);
		}
		for ($i = 0; $i < $numpad; ++$i)
		fwrite ($f, pack ('C', 0));
	}
	fclose ($f);
	return true;
}
exit;
?>