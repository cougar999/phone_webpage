<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid'])) {
	$data['salesid'] = intval($_REQUEST['salesid']);
		
	$detail = ap_core_feed("AP_INT_GET_TOTAL_COIN" , $data);
	if($detail){
		echo json_encode($detail);
	}
}else{
	echo 'failed';
}
?>