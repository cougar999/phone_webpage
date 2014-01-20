<?php
require_once("includes/cache.php");
@define('TP_WEB_URL', $TP_WEB_URL ? $TP_WEB_URL : '/');
@define('TP_APP_DIR', $TP_APP_DIR ? $TP_APP_DIR : dirname(__FILE__));
@define('TP_IMG_DIR', $TP_IMG_URL ? $TP_IMG_URL : '/img/');
@define("TP_TMP_DIR", $TP_TMP_DIR ? $TP_TMP_DIR : TP_APP_DIR.'/temp/');

require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");
require_once("includes/post.php");

$sf = '_sf_'.$_GET['width'].'x'.$_GET['height'].'.png';
if (isset($_GET['uid'])) {
	$image_error = TP_APP_DIR . "/resources/imgs/app.png";
	$_GET['uid'] = $_GET['uid'] != '' ? $_GET['uid'] : $_GET['appname'];
	
	if ($_GET['uid'] != '') {
		$installlist = $_GET['uid'] ? $_GET['uid'] : array();
		//$count = count($installlist);
		$data = array("version" => 0, "appid" => $installlist);
		$data_json = json_encode($data);
		
		$dataall = json_encode(array('count' => 1, 'items' => '['.$data_json.']'));
		
		$detail = ap_core_post('AP_INT_UPDATELIST', $dataall);
				print_r($detail);
		exit;
		
		
		//$detail = ap_core_post("AP_INT_UPDATELIST", array("installlist" => $data_json));
		//echo json_encode($detail);
		 //$detail = ap_core_feed('AP_INT_APPINFO', array('appid' => $_GET['uid'], 'appname' => $_GET['appname']));
	 }
	//$detail['icon'] = str_replace('img.apk.appdear.com', 'content.appdear.com', $detail['icon']);
	$_GET['image'] = $detail['icon'] ? $detail['icon'] . $sf : '/resources/imgs/app.png';
} elseif (isset($_GET['sid'])) {
	$image_error = TP_APP_DIR . "/resources/imgs/app.png";
	if ($_GET['sid'] != '') {
		$detail = ap_core_feed('AP_INT_SOFT_INFO', array('softid' => (int) $_GET['sid']));
	}
	$detail['icon'] = str_replace('img.apk.appdear.com', 'content.appdear.com', $detail['icon']);
	$_GET['image'] = $detail['icon'] ? $detail['icon'] . $sf : '/resources/imgs/app.png';
} elseif (isset($_GET['bid'])) {
	$image_error = TP_APP_DIR . "/resources/temp/book.png";
	if ($_GET['bid'] != '') {
		$detail = ap_core_feed('AP_INT_BOOK_INFO', array('bid' => (int) $_GET['bid']));
	}
	$detail['imageurl'] = str_replace('img.apk.appdear.com', 'content.appdear.com', $detail['imageurl']);
	$_GET['image'] = $detail['imageurl'] ? $detail['imageurl'] . $sf : '/resources/temp/book.png';
}

include('image.php');
?>
