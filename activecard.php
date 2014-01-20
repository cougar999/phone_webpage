<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
require_once("includes/feed.php");
$tp_tpl_layout = "layout_block.html";

if (isset($_REQUEST['card']) && $_REQUEST['card']!="" && isset($_REQUEST['passwd']) && $_REQUEST['passwd']!="" && isset($_REQUEST['mobile']) && $_REQUEST['mobile']!="") {
	$card= $_POST['card'];
	$passwd = $_POST['passwd'];
	$mobile = $_POST['mobile'];
	$detail = ap_core_post("AP_INT_CHECK_CARD", array('card' => $card,'passwd' => $passwd,'mobile' => $mobile));
	echo json_encode($detail);
} else {
	$detail = 'failed';
}

?>
