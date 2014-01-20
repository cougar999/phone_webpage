<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

$tp_tpl_appname = "aipisoft";
$tp_tpl_layout = isset($tp_tpl_layout) ? $tp_tpl_layout : "layout.html";
$tp_tpl_assign = array('tp' => $tp, 'ap_int' => $ap_int);
$tp_tpl_instance = tp_tpl_engine($tp_tpl_appname);
$tp_tpl_layout = "layout_block.html";
$tp_tpl_page = "contactrestorelist.html";

$detail = ap_core_post('AP_INT_RESTORE_CONTACT', array('uid' => $_REQUEST['userid'], 'pageno' => 1, 'count' => -1));
if ($detail['result']['resultcode'] == '000000' && $detail['contacts']['items'] != '') {
	$data = array('contacts' => $detail['contacts']['items']);
} else {
}

if ($data && $data['contacts']) {
	foreach($data['contacts'] as $key => $value) {
		$data['contacts'][$key]['data'] = json_encode($value);
	}
}

if ($tp_tpl_page != '') {
	$tp_tpl_assign['data'] = $data;
	$tp_tpl_assign['datacount'] = count($data['contacts']);
	$tp_tpl_assign['tp_tpl_page'] = $tp_tpl_page;
	$tp_tpl_assign['tp_tpl_page_group'] = $tp_tpl_page_group;
	$tp_tpl_assign['tp_tpl_page_plugin'] = $tp_tpl_page_plugin;
	$tp_tpl_assign['tp_tpl_layout'] = $tp_tpl_layout;
	tp_tpl_display($tp_tpl_instance, $tp_tpl_page, $tp_tpl_layout, $tp_tpl_assign, $tp_tpl_page_plugin);
} else {
	echo json_encode($data);
}
exit;
?>
