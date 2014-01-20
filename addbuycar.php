<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
$tp_tpl_layout = "layout_block.html";

$userid = $_COOKIE['userid']?$_COOKIE['userid']:'';
$sessionid = $_COOKIE['sessionid']?$_COOKIE['sessionid']:'';
$buy = $_POST['buy'] ? $_POST['buy'] : '';
//echo $buy;
if ($buy != '') {
	$contents = '{"items":[' .$buy .']}';
	$detail = ap_core_post('AP_INT_ADD_BUYCAR', array('userid' => $userid, 'sessionid' => $sessionid, 'discount' => $discount, 'contents' => $contents));
	echo json_encode($detail);
}else{
	echo 'failed';
}

?>
