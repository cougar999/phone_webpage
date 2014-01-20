<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid']) && isset($_REQUEST['collectionids']) && !empty($_REQUEST['collectionids'])) {
	$data['salesid'] = $_REQUEST['salesid'];
	$data['collectionids'] = $_REQUEST['collectionids'];
		
	$detail = ap_core_feed("AP_INT_DEL_SHOP_COLLECTION" , $data);
	echo json_encode($detail);
	
}else{
	echo 'failed';
}
?>