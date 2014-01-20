<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

$tp_tpl_appname = "aipisoft";
$tp_tpl_layout = isset($tp_tpl_layout) ? $tp_tpl_layout : "layout.html";
$tp_tpl_assign = array('tp' => $tp, 'ap_int' => $ap_int);
$tp_tpl_instance = tp_tpl_engine($tp_tpl_appname);
$tp_tpl_layout = "layout.html";
$tp_tpl_page = "order.html";

$orderitem = stripslashes(json_encode($_POST));

$userid = $_POST["userid"];
$sessionid = $_POST["sessionid"];

//$count = substr_count($_POST["items"][0],"contentid"); 只适合单个文件，不适合促销包
$filecount = $_POST["filecount"]? $_POST["filecount"]:0;
$discount = $_POST["discount"]? $_POST["discount"]:0;
$total_price = $_POST["total_price"]? $_POST["total_price"]:0;


	
$orderitem = str_replace('|', ',', $orderitem);
$orderitem = str_replace("\\", '', $orderitem);
$orderitem = str_replace("\'", '\"', $orderitem);

$items = $_POST["items"][0];
$items = str_replace('|', ',', $items);

$pattern = "/contentname':'(.*?)(?:'|\")(.*?)','type/i";
$items = preg_replace($pattern, replaceyin($items) , $items);

function replaceyin($string){
	$pattern = "/contentname':'(.*?)','type/i";
	preg_match($pattern , $string, $data);
	$string = str_replace(array("'","\""),array("\'",'\"'),$data[1]);
	
	return "contentname':'".$string."','type";
}

$items = str_replace("'", '"', $items);

$contents = '{"items":[' .$items .']}';


$detail = ap_core_post('AP_INT_CREATE_ORDER', array('userid' => $userid, 'sessionid' => $sessionid, 'discount' => $discount, 'contents' => $contents));

$json_str =  $orderitem;
$json = json_decode($json_str, true);

if ($tp_tpl_page != '') {
	$tp_tpl_assign['count'] = $filecount;
	$tp_tpl_assign['discount'] = $discount;
	$tp_tpl_assign['total_price'] = $total_price;
	$tp_tpl_assign['resultcode'] = $detail[result][resultcode];
	$tp_tpl_assign['order'] = $detail;
	
	$detail = ap_core_post('AP_INT_GETACCOUNT_BYTERMCODE');
	
	$tp_tpl_assign['account_resultcode'] = $detail[result][resultcode];
	$tp_tpl_assign['account_isok'] = $detail[isok];
	tp_tpl_display($tp_tpl_instance, $tp_tpl_page, $tp_tpl_layout, $tp_tpl_assign, $tp_tpl_page_plugin);
} else {
	echo json_encode($data);
}
exit;
?>
