<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid']) && isset($_REQUEST['tasktype']) && !empty($_REQUEST['tasktype']) && isset($_REQUEST['salesname']) && !empty($_REQUEST['salesname'])) {
	$data['salesid'] = intval($_REQUEST['salesid']);
	$data['tasktype'] = intval($_REQUEST['tasktype']);
	$data['salesname'] = addslashes($_REQUEST['salesname']);
		
	$detail = ap_core_feed("AP_INT_TASK_AWARD" , $data);
	if($detail){
		echo json_encode($detail);
	}
	
}else{
	echo 'failed';
}
?>