<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
$tp_tpl_layout = "layout_block.html";

if (isset($_REQUEST['mobile']) && $_REQUEST['mobile']!="" && isset($_REQUEST['passwd']) && $_REQUEST['passwd']!="" && isset($_REQUEST['checkcode']) && $_REQUEST['checkcode']!="") {
	$mobile= $_REQUEST['mobile'];
	$passwd= $_REQUEST['passwd'];
	$checkcode = $_REQUEST['checkcode'];
	$detail = ap_core_post("AP_INT_MOBILE_REGISTER", array('mobile' => $mobile,'passwd' => $passwd,'checkcode' => $checkcode));
	echo json_encode($detail);
} else {
	echo 'failed';
}

?>
