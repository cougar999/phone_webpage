<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");

$data = $_REQUEST['data'] ? $_REQUEST['data'] : array();
$type = $_REQUEST['type'] ? $_REQUEST['type'] : '';
//$data[] = array('id' => '1', 'filetype' => 1, 'filetotlesize' => 508008, 'url' => 'http://crosscat.appdear.com/test/s603rd.sis', 'name' => '随身股同花顺版', 'uid' => 'a0005415', 'type' => 1);
//$data[] = array('id' => '2', 'filetype' => 1, 'filetotlesize' => 976912, 'url' => 'http://crosscat.appdear.com/test/weibo_10242100_3.sisx', 'name' => 'sina weibo', 'uid' => '', 'type' => 1);
foreach($data as $key => $value) {
	$value = json_decode($value, true);
	$detail = ap_core_feed('AP_INT_APPINFO', array('appid' => is_array($value) ? $value['value'] : $value, 'otherostype' => $type, 'appname' => $_GET['title']));
	if (!empty($detail) && $detail['downloadurl'] != '') {
		$data[$key] = array_merge($value, $detail);
	} else {
		if ($value['value'] == 'a0005415') {
			$detail = array('softid' => '1', 'downloadurl' => 'http://crosscat.appdear.com/test/s603rd.sis', 'name' => '随身股同花顺版');
			$data[$key] = array_merge($value, $detail);
		}	
	}
}
echo json_encode($data);
?>
