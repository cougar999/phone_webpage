<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

$uid = trim($_POST['uid']);
$contactid = trim($_POST['contactid']);

if (!empty($uid) && !empty($contactid)) {
	
	$detail = ap_core_post("AP_INT_DEL_CONTACT_LIST" , array('uid' => $uid, 'contactids' => $contactid));
	echo json_encode($detail);
} else {
	//echo '{"result":{"resultcode":"000000"},"shopid":"1721","userid":"120ccc62-c461-4a67-92af-8ed55d233b8c","sv":"1.0","isok":1,"deviceid":"0"}';
	echo 'failed';
}
?>
