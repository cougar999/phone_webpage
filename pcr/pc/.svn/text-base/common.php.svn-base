<?php

$headers = getallheaders();
//extract($headers);
header("Content-Type: application/json");

$sv = '1.0';
$shopid = 'test-store-id';
$deviceid = 'test-device-id';

$ret = array();
$ret['result'] 		= array('resultcode' => '000000');
$ret['sv'] 			= $sv;
$ret['shopid'] 		= $shopid;
$ret['deviceid'] 	= $deviceid;

$page = array();
$page['pages'] 		= 1;
$page['pageno'] 	= 1;
$page['pagenum'] 	= 2;
$page['totalcount'] = 2;