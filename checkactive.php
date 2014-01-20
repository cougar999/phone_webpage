<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
require_once("includes/feed.php");

if (isset($_REQUEST['card']) && $_REQUEST['card']!="" && isset($_REQUEST['passwd']) && $_REQUEST['passwd']!="" && isset($_REQUEST['mobile']) && $_REQUEST['mobile']!="" && isset($_REQUEST['checkcode']) && $_REQUEST['checkcode']!="") {
	$card= $_REQUEST['card'];
	$passwd = $_REQUEST['passwd'];
	$mobile = $_REQUEST['mobile'];
	$checkcode = $_REQUEST['checkcode'];
	$detail = ap_core_post("AP_INT_ACTIVE_CARD", array('card' => $card,'passwd' => $passwd,'mobile' => $mobile,'checkcode' => $checkcode));
	echo json_encode($detail);
} else {
	echo 'failed';
}
?>
