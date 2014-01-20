<?php
set_time_limit(0);
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");

$apps = $_REQUEST['apps'] ? $_REQUEST['apps'] : array();
$data = array();
foreach($apps as $key => $value) {
	$detail = ap_core_feed('AP_INT_APPINFO', array('appid' => $value['value'], 'appname' => $value['title'], 'iscrack' => $value['iscrack']));
	if($_COOKIE['phonetype'] == 3){
		if (!empty($detail) && ($value['vendor'] < $detail['versioncode'])) {
			$data[$key] = $detail;
		} else {
			$data[$key] = null;
		}
	} else {
		if ($value['system'] != 1 && !empty($detail) && ($value['vendor'] < $detail['versioncode'])) {
			$data[$key] = $detail;
		} else {
			$data[$key] = null;
		}
	}
}
echo json_encode($data);
?>
