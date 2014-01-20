<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
require_once("includes/feed.php");

if (isset($_REQUEST['type']) && $_REQUEST['type']!="" && isset($_REQUEST['card']) && $_REQUEST['card']!="" && isset($_REQUEST['activecode']) && $_REQUEST['activecode']!="") {
	$type= $_REQUEST['type'];
	$card= $_REQUEST['card'];
	$activecode = $_REQUEST['activecode'];
	$mobile = $_REQUEST['mobile']?$_REQUEST['mobile']:'';
	$detail = ap_core_post("AP_INT_ACTIVE_ACCOUNT", array('type' => $type,'card' => $card,'activecode' => $activecode,'mobile' => $mobile));
	echo json_encode($detail);
} else {
	echo 'failed';
	//echo '5';
}
?>
