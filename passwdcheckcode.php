<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
$tp_tpl_layout = "layout_block.html";

if (isset($_REQUEST['mobile']) && $_REQUEST['mobile']!="") {
	$mobile= $_REQUEST['mobile'];
	$detail = ap_core_post("AP_INT_PASSWD_CHECK_CODE", array('mobile' => $mobile));
	echo json_encode($detail);
} else {
	$detail = 'failed';
}

?>
