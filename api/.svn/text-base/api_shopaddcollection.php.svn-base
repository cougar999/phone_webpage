<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid']) && isset($_REQUEST['contentids']) && !empty($_REQUEST['contentids']) && isset($_REQUEST['contenttype']) && !empty($_REQUEST['contenttype'])) {
	$data['salesid'] = $_REQUEST['salesid'];
	$data['contentids'] = $_REQUEST['contentids'];
	$data['contenttype'] = $_REQUEST['contenttype'];
	$data['catalog'] = $_REQUEST['catalog'];
	$data['downloadurl'] = $_REQUEST['downloadurl'];
	$data['version'] = $_REQUEST['version'];
	$data['iscrack'] = $_REQUEST['iscrack'];
		
	$detail = ap_core_feed("AP_INT_ADD_SHOP_COLLECTION" , $data);
	echo json_encode($detail);
	
}else{
	echo 'failed';
}
?>