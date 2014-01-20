<?php

if ($tp_tpl_page == 'mobile') {
	$tp_tpl_layout = "index_offline.html";
	$tp_tpl_page   = 'mobile/index.html';
} elseif ($tp_tpl_page == 'mobile/') {
	$tp_tpl_layout = "layout_mobile.html";
	$tp_tpl_page = 'mobile/index.html';
} else {
	$tp_tpl_layout = 'layout_mobile.html';
	$tp_tpl_page = $tp_tpl_page;
}

?>
