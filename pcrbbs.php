<?php
// include http client class
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");
require_once("includes/post.php");

require_once('includes/HttpClient.class.php');


// from passport.php
/**
* Passport 加密函数
*
* @param		string		等待加密的原字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		原字串经过私有密匙加密后的结果
*/
function passport_encrypt($txt, $key) {

	// 使用随机数发生器产生 0~32000 的值并 MD5()
	srand((double)microtime() * 1000000);
	$encrypt_key = md5(rand(0, 32000));

	// 变量初始化
	$ctr = 0;
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for($i = 0; $i < strlen($txt); $i++) {
		// 如果 $ctr = $encrypt_key 的长度，则 $ctr 清零
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		// $tmp 字串在末尾增加两位，其第一位内容为 $encrypt_key 的第 $ctr 位，
		// 第二位内容为 $txt 的第 $i 位与 $encrypt_key 的 $ctr 位取异或。然后 $ctr = $ctr + 1
		$tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
	}

	// 返回结果，结果为 passport_key() 函数返回值的 base64 编码结果
	return base64_encode(passport_key($tmp, $key));

}

/**
* Passport 解密函数
*
* @param		string		加密后的字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		字串经过私有密匙解密后的结果
*/
function passport_decrypt($txt, $key) {

	// $txt 的结果为加密后的字串经过 base64 解码，然后与私有密匙一起，
	// 经过 passport_key() 函数处理后的返回值
	$txt = passport_key(base64_decode($txt), $key);

	// 变量初始化
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for ($i = 0; $i < strlen($txt); $i++) {
		// $tmp 字串在末尾增加一位，其内容为 $txt 的第 $i 位，
		// 与 $txt 的第 $i + 1 位取异或。然后 $i = $i + 1
		$tmp .= $txt[$i] ^ $txt[++$i];
	}

	// 返回 $tmp 的值作为结果
	return $tmp;

}

/**
* Passport 密匙处理函数
*
* @param		string		待加密或待解密的字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		处理后的密匙
*/
function passport_key($txt, $encrypt_key) {

	// 将 $encrypt_key 赋为 $encrypt_key 经 md5() 后的值
	$encrypt_key = md5($encrypt_key);

	// 变量初始化
	$ctr = 0;
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for($i = 0; $i < strlen($txt); $i++) {
		// 如果 $ctr = $encrypt_key 的长度，则 $ctr 清零
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		// $tmp 字串在末尾增加一位，其内容为 $txt 的第 $i 位，
		// 与 $encrypt_key 的第 $ctr + 1 位取异或。然后 $ctr = $ctr + 1
		$tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
	}

	// 返回 $tmp 的值作为结果
	return $tmp;

}

/**
* Passport 信息(数组)编码函数
*
* @param		array		待编码的数组
*
* @return	string		数组经编码后的字串
*/
function passport_encode($array) {

	// 数组变量初始化
	$arrayenc = array();

	// 遍历数组 $array，其中 $key 为当前元素的下标，$val 为其对应的值
	foreach($array as $key => $val) {
		// $arrayenc 数组增加一个元素，其内容为 "$key=经过 urlencode() 后的 $val 值"
		$arrayenc[] = $key.'='.urlencode($val);
	}

	// 返回以 "&" 连接的 $arrayenc 的值(implode)，例如 $arrayenc = array('aa', 'bb', 'cc', 'dd')，
	// 则 implode('&', $arrayenc) 后的结果为 ”aa&bb&cc&dd"
	return implode('&', $arrayenc);

}

$passport_url 	  = 'http://pcrbbs.appdear.com/api/passport.php';
$passport_forward = 'http://pcrbbs.appdear.com';
//$passport_url 	  = 'http://localhost/pcrbbs/api/passport.php';
//$passport_forward = 'http://localhost/pcrbbs';
$passport_key	  = 'o78fcaQ7f0PeIdG5v9jbp64aL824m6j7V7';
$passport_debug	  = true;
$channel_host 	  = '10.10.100.6:8066';
$channel_user	  = 'amoeba';
$channel_pass	  = 'T4L9TNrNfu81o';
//$channel_host 	  = '172.16.16.74';
//$channel_user	  = 'root';
//$channel_pass	  = '123456';

$salesid = $_GET['salesid'];
//$salesid = 1009; //980;
if ($salesid) {
	$link = mysql_connect($channel_host, $channel_user, $channel_pass);
	if ($link) { 
		mysql_query("SET NAMES 'utf8'", $link);
		$query = sprintf("SELECT username, password, email, real_name FROM channel.ch_salesperson WHERE id='%s'", $salesid);
		$result = mysql_query($query, $link);
		if ($result) {
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($row) {
				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'] ? $row['email'] : ('ca_' . $row['username'] . '@appdear.com');
				$realname = $row['real_name'];
			}
			mysql_free_result($result);
		}
		mysql_close($link);
	}
	
	if (!$username) {
		//exit;
		$action		= 'logout';
		$autharray	= array(
			'time'		=> time()
		);
		$auth = passport_encrypt(passport_encode($autharray), $passport_key);
		$forward = $passport_forward;
		$verify	= md5($action.$auth.$forward.$passport_key);
		header("Location: $passport_url".
			"?action=$action".
			"&auth=".rawurlencode($auth).
			"&forward=".rawurlencode($forward).
			"&verify=$verify");
		exit;
	}
	
	$action		= 'login';
	$autharray	= array(
		'time'		=> time(),
		'username'	=> $username,
		'password'	=> $password,
		'email'		=> $email,
		'realname'	=> $realname
	);

	$auth = passport_encrypt(passport_encode($autharray), $passport_key);
	$forward = $passport_forward;
	$verify	= md5($action.$auth.$forward.$passport_key);
	header("Location: $passport_url".
		"?action=$action".
		"&auth=".rawurlencode($auth).
		"&forward=".rawurlencode($forward).
		"&verify=$verify");
	exit;
} else {
	$action		= 'logout';
	$autharray	= array(
		'time'		=> time()
	);
	$auth = passport_encrypt(passport_encode($autharray), $passport_key);
	$forward = $passport_forward;
	$verify	= md5($action.$auth.$forward.$passport_key);
	header("Location: $passport_url".
		"?action=$action".
		"&auth=".rawurlencode($auth).
		"&forward=".rawurlencode($forward).
		"&verify=$verify");
	exit;
}
?>