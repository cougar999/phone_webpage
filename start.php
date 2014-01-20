<?php

if ($tp_tpl_page == 'start') {
	$tp_tpl_layout = "index_offline.html";
	$tp_tpl_page   = 'start/overview.html';
} elseif ($tp_tpl_page == 'start/') {
	$tp_tpl_layout = "layout_start.html";
	$tp_tpl_page = 'start/overview.html';
} elseif ($tp_tpl_page == 'start/recommend.html') {
	$tp_tpl_layout = "layout_start.html";
	$tp_tpl_page = 'start/recommend.html';
} else {
	$tp_tpl_layout = 'layout.html';
	$tp_tpl_page = $tp_tpl_page;
}

?>
