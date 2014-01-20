<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."feed.php");

if (isset($_REQUEST['cardno']) && !empty($_REQUEST['cardno'])) {
	$data['cardno'] = $_REQUEST['cardno'];
		
	$detail = ap_core_feed("AP_INT_GET_CARD_INFO" , $data);
	echo json_encode($detail);
	//echo $detail = '{"result":{"resultcode":"000000"},"imsi": "123212321232123","isok":0,"sv":"1.0"}';
	
}else{
	echo 'failed';
}
?>