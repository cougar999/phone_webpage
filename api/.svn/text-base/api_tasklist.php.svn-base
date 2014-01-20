<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['salesid']) && !empty($_REQUEST['salesid']) && isset($_REQUEST['tasktype']) && !empty($_REQUEST['tasktype'])) {
	$data['salesid'] = intval($_REQUEST['salesid']);
	$data['tasktype'] = intval($_REQUEST['tasktype']);
	$data['pageno'] = $_REQUEST['pageno'] ? intval($_REQUEST['pageno']) : 0;
	$data['count'] = $_REQUEST['count'] ? intval($_REQUEST['count']) : 30;
	
	$detail = ap_core_feed("AP_INT_TASK_LIST" , $data);
	if($detail){
		echo json_encode($detail);
	}
	//echo $detail = '{"result":{"resultcode":"000000"},"shopid":"11221","page":{"totalcount":3,"items":[{"id":3,"name":"nametest","opertime":"2012-07-29 10:10:10","status":3,"coin":1,"desc":"连续3天登录"},{"id":2,"name":"nametest","opertime":"2012-07-28 10:10:10","status":2,"coin":1,"desc":"连续2天登录"},{"id":1,"name":"nametest","opertime":"2012-07-27 10:10:10","status":1,"coin":1,"desc":"连续1天登录"}],"pagenum":1,"pageno":1},"sv":"1.0","deviceid":"DDFSDFSDF"}';
	
}else{
	echo 'failed';
}
?>