<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['sid']) && !empty($_REQUEST['sid']) && isset($_REQUEST['sname']) && !empty($_REQUEST['sname']) && isset($_REQUEST['mobile']) && !empty($_REQUEST['mobile']) && isset($_REQUEST['issub'])) {
	$data['sid'] = intval($_REQUEST['sid']);
	$data['sname'] = $_REQUEST['sname'];
	$data['mobile'] = $_REQUEST['mobile'];
	$data['issub'] = $_REQUEST['issub'];
	$data['from']   = 'pc';					//日志分析推送来源
		
	$detail = ap_core_feed("AP_INT_SEND_SOFT_MESSAGE" , $data);
	//sleep(3);
	echo json_encode($detail);
	//echo $detail = '{"result":{"resultcode":"000000"},"imsi": "123212321232123","isok":0,"sv":"1.0"}';
	
}else{
	echo 'failed';
}
?>