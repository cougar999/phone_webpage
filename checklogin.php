<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$detail = ap_core_post("AP_INT_USER_LOGIN", array('name' => $username,'passwd' => $password));
	echo json_encode($detail);
} else {
	echo 'failed';
}
?>
