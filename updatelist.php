<?php
set_time_limit(0);
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");
require_once("includes/post.php");

if (isset($_POST['installlist']) && $_POST['installlist'] != ''){
	$installlist = $_POST['installlist'] ? $_POST['installlist'] : array();
	$data = array();
	
	
	$count = count($installlist);
	$data_str = array("count" => $count, "items" =>  $installlist);
	$data_json = json_encode($data_str);
	$detail = ap_core_post("AP_INT_UPDATELIST", array("installlist" => $data_json));
	echo json_encode($detail);
			
	/*$count = count($installlist);
	print_r($installlist);
		exit;
	foreach($installlist as $key => $value) {
		$detail = ap_core_post('AP_INT_UPDATELIST', array('appid' => $value['appid'], 'versioncode' => $value['versioncode']));
		print_r($detail);
		exit;
	}*/


}
?>
