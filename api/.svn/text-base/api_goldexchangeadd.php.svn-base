<?php
date_default_timezone_set('PRC');
require_once("../config.php");
require_once(TP_LIB_DIR."db.class.php");

function getGoldScaleInterface($slaesId=0){
	$rt  = array('code'=>'','data'=>array());
	if(!empty($slaesId)){
		$url = constant("AP_INT_GET_COIN_SCALE")."?type=getGoldScale&salesId={$slaesId}";
		return json_decode(file_get_contents($url),true);
	}
	return $rt;
}
if('interface' == $_REQUEST['rqType']){
	echo json_encode(getGoldScaleInterface(intval($_REQUEST['salesid'])));
	exit;
}
if(empty($_REQUEST['salesid']) || empty($_REQUEST['telphone']) || empty($_REQUEST['goldcoin']) || empty($_REQUEST['shopid'])  || empty($_REQUEST['ex_type']))	exit;

$db = new db();

$salesid = intval($_REQUEST['salesid']);
$shopid = intval($_REQUEST['shopid']);
$telphone = addslashes($_REQUEST['telphone']);
$goldcoin = intval($_REQUEST['goldcoin']);
$totalcoins = intval($_REQUEST['totalcoins']);
$ex_type = intval($_REQUEST['ex_type']);

$cur_scale  = intval($_REQUEST['cur_scale']);
$df_scale   = getGoldScaleInterface($salesid);
$df_scale   = intval($df_scale['data'][0]['gold_scale']);

$link = $db->connect($db_config2);

//获取目前正在审核兑换金币的总数
$sql = "select sum(goldcoin) as count from ch_mission_goldcoin_exchange where sales_id = $salesid and status=1";
$row = $db->row_query_one($sql);
$int_count = intval($row['count']);
unset($arr_output);

if(0 == $df_scale) $arr_output['result'] = '1001';
elseif($cur_scale != $df_scale) $arr_output['result'] = '1002';
elseif(0 != $goldcoin%$df_scale) $arr_output['result'] = '1003';
elseif($totalcoins >= ($int_count + $goldcoin)){

	unset($arr_input);
	$arr_input['sales_id'] = $salesid;
	$arr_input['shopid'] = $shopid;
	$arr_input['telphone'] = $telphone;
	$arr_input['goldcoin'] = $goldcoin;
	$arr_input['status'] = 1;
	$arr_input['create_time'] = date('Y-m-d H:i:s');
	$arr_input['ex_type'] = $ex_type;
	$arr_input['goldmoney'] = intval($goldcoin/$df_scale);
	switch ($ex_type){
		case 1:
			$arr_input['payment_mobnumber'] = addslashes($_REQUEST['payment_mobnumber']);
			break;
		case 2:
			$arr_input['account_name'] = addslashes($_REQUEST['account_name']);
			$arr_input['identity_card'] = addslashes($_REQUEST['identity_card']);
			$arr_input['bank_card_no'] = addslashes($_REQUEST['bank_card_no']);
			$arr_input['bank_name'] = addslashes($_REQUEST['bank_name']);
			break;
	}
	$tbname = 'ch_mission_goldcoin_exchange';
	
	if (@$db->row_insert($tbname, $arr_input)){
		$arr_output['result'] = 1;
	}else{
		$arr_output['result'] = 'faild';
	}
}else{
	$arr_output['result'] = 2;//前端调用表示已有金币数超出兑换不能再次提交
}
echo json_encode($arr_output);
$db->close_db();
?>