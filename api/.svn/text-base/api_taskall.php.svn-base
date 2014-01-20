<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid'])) {
	$data['salesid'] = intval($_REQUEST['salesid']);
	$data['task1time'] = $_REQUEST['task1time'] ? $_REQUEST['task1time'] : 0;
	$data['task2time'] = $_REQUEST['task2time'] ? $_REQUEST['task2time'] : 0;
	$data['task3time'] = $_REQUEST['task3time'] ? $_REQUEST['task3time'] : 0;
	$data['task4time'] = $_REQUEST['task4time'] ? $_REQUEST['task4time'] : 0;
		
	$detail = ap_core_feed("AP_INT_TASK_ALL" , $data);
	if($detail){
		echo json_encode($detail);
	}
	//echo $detail = '{"totalcoin":135,"result":{"resultcode":"000000"},"shopid":"11221","sv":"1.0","deviceid":"DDFSDFSDF","array":[{"tid":1,"timestamp":1698521,"tstatus":1},{"tid":2,"timestamp":1698521,"tstatus":2},{"tid":3,"timestamp":1698521,"tstatus":3},{"tid":4,"timestamp":1698521,"tstatus":3}]}';
	//echo $detail = '{"result":{"resultcode":"000000"},"imsi": "123212321232123","isok":0,"sv":"1.0"}';
	
}else{
	echo 'failed';
}
?>