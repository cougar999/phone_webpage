<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");


if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '' && isset($_POST['type']) && $_POST['type'] != '') {
	$mobile = $_POST['username'];
	$checkcode = $_POST['password'];
	$type = $_POST['type'];
	$detail = ap_core_post("AP_INT_CHECK_CLOUD_MOBILE", array('mobile' => $mobile, 'checkcode' => $checkcode, 'type' => $type));
	echo json_encode($detail);
} else {
	echo '{"result":{"resultcode":"000000"},"shopid":"1721","userid":"882e40b0-7634-4277-8bf7-7d488f05268f","sv":"1.0","isok":1,"deviceid":"0"}';
	//echo 'failed';
}
?>
