<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
require_once("includes/feed.php");

if (isset($_REQUEST['said']) && $_REQUEST['said']!="") {
	$said= $_REQUEST['said'];
	$detail = ap_core_post("AP_INT_GET_SALES_INFO", array('said' => $said));
	echo json_encode($detail);
} else {
	echo 'failed';
	//echo '5';
}
?>
