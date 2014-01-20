<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

$mobile = $_POST['mobilenmb'] ? $_POST['mobilenmb'] :'';
$type = $_POST['type'] ? $_POST['type'] :0;
$detail = ap_core_post("AP_INT_CLOUD_CHECK_CODE", array('mobile' => $mobile, 'type' => $type));
$isok = $detail[isok];
if ($isok == 1) {
	echo 'success';
}else{
	echo 'failed';
}
exit;
?>
