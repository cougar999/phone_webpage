<?php
if ($tp_tpl_page == 'operator') {
	$tp_tpl_layout = "index.html";
	$tp_tpl_page   = 'operator/index.html';
} elseif ($tp_tpl_page == 'operator/') {
	$tp_tpl_layout = "layout_operator.html";
	$tp_tpl_page = 'operator/overview.html';
} else {
	$tp_tpl_layout = "layout_operator.html";
	$tp_tpl_page = $tp_tpl_page;
}
?>
