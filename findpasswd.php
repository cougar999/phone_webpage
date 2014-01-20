<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
	$mobile = $_POST['username'];
	$checkcode = $_POST['password'];
	$detail = ap_core_post("AP_INT_FIND_PASSWD", array('mobile' => $mobile, 'checkcode' => $checkcode));
	echo json_encode($detail);
} else {
	echo 'failed';
}
?>
