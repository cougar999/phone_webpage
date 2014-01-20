<?php
//require_once("includes/cache.php");

@define('TP_WEB_URL', $TP_WEB_URL ? $TP_WEB_URL : '/');
@define('TP_APP_DIR', $TP_APP_DIR ? $TP_APP_DIR : dirname(__FILE__));
@define('TP_IMG_DIR', $TP_IMG_URL ? $TP_IMG_URL : '/img/');
@define("TP_TMP_DIR", $TP_TMP_DIR ? $TP_TMP_DIR : TP_APP_DIR.'/temp/');

$image_error = TP_APP_DIR . "/resources/temp/app3.png";
include('image.php');
?>