<?php
date_default_timezone_set('PRC');
if(empty($_REQUEST['salesid']) || empty($_REQUEST['count'])){
	echo 'failed';
	exit;
}

require_once("../config.php");
require_once(TP_LIB_DIR."db.class.php");

$db = new db();

$salesid = intval($_REQUEST['salesid']);
$pageno = $_REQUEST['pageno'] ? intval($_REQUEST['pageno']) : 1;
$count = intval($_REQUEST['count']);
$begin_num = ($pageno-1)*$count;
$link = $db->connect($db_config2);

unset($arr_output);
//获取目前正在审核兑换金币的总数
$sql = "select count(*) as totalcount from ch_mission_goldcoin_exchange where sales_id = $salesid";
$row = $db->row_query_one($sql);
$arr_output['totalcount'] = $row['totalcount'];
$arr_output['count'] = $count;
$arr_output['pageno'] = $pageno;

if($row['totalcount'] > 0){
	//获取目前正在审核兑换金币的总数
	$sql = "select create_time,goldcoin,status,description from ch_mission_goldcoin_exchange where sales_id = $salesid order by create_time desc limit $begin_num, $count";
	$row = $db->row_query($sql);
	$arr_output['items'] = $row;
}

echo json_encode($arr_output);

$db->close_db();
?>