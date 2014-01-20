<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

//echo 'success';
$name = $_POST['name'] ? $_POST['name'] :'';
$detail = ap_core_post("AP_INT_CHECK_NAME", array('name' => $name));
$isok = $detail[isok];
if ($isok == 1) {
	echo 'success';
}else{
	echo 'failed';
}
exit;
?>
