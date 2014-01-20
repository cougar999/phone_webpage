<?php
date_default_timezone_set('PRC');
ini_set('memory_limit', '1000M'); 
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid']) && isset($_REQUEST['pageno']) && !empty($_REQUEST['pageno']) && isset($_REQUEST['count']) && !empty($_REQUEST['count'])) {
	$data['salesid'] = $_REQUEST['salesid'];
	$data['pageno'] = $_REQUEST['pageno'];
	$data['count'] = $_REQUEST['count'];
		
	$detail = ap_core_feed("AP_INT_GET_SHOP_COLLECTION" , $data);
	
	echo json_encode($detail);
}else{
	echo 'failed';
}
?>