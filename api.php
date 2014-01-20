<?php
$tp_tpl_layout = "layout.html";
$key_map = array();
$key_map['bguboFGOMDLY'] = 'baidu';
if ($tp_tpl_page == 'api/aipidown.js') {
	$key = $_REQUEST['key'];
	if ($key == 'test') {
		$tp_tpl_assign['aipikey'] = 'test';
	} else {
		$aipikey = $key_map[$key];
		if (!empty($aipikey)) {
			$tp_tpl_assign['aipikey'] = $aipikey;
		} else {
			exit;
		}
	}
}