<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");

$tp_tpl_layout = "layout_block.html";

$apps = $_REQUEST['apps'] ? $_REQUEST['apps'] : array();
$data = array();
foreach($apps as $key => $value) {
	$detail = ap_core_feed('AP_INT_APPINFO', array('appid' => $value['value'] ? $value['value'] : $value, 'appname' => $value['title']));
	if (!empty($detail) && ($value['vendor'] < $detail['versioncode'])) {
		if ($value['value'] && $value['system'] != 1) {
			$data[] = array_merge($value, $detail);
		} else {
			$data[] = null;
		}
	}
}

if ($tp_tpl_page != '') {
	$tp_tpl_assign['data'] = $data;
} else {
	echo json_encode($data);
}
?>
