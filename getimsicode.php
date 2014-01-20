<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");
require_once("includes/post.php");

$phonetype = $_POST['phonetype'];
$detail = ap_core_post('AP_INT_GETIMSI', array('phonetype' => $phonetype));
if ($detail['result']['resultcode'] == '000000') {
	echo $detail['imsi'];
}
exit;
?>
