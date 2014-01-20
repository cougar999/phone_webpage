<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."template.php");
require_once(TP_LIB_DIR."post.php");
require_once(TP_LIB_DIR."feed.php");

$data['mid'] = intval($_REQUEST['mid']);
$data['order'] = 0;
$data['pageno'] = 1;
$data['count'] = 32;
$data['iscrack'] = intval($_REQUEST['iscrack']);
$debug = isset($_REQUEST['debug']) ? true : false;

$detail = ap_core_feed("AP_INT_MENU_CAT_SOFTLIST" , $data);
echo json_encode($detail);
//print_r($detail);
?>