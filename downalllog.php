<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");


$detail = ap_core_feed("AP_INT_DOWNALL_LOG",array('tplid' => $_GET['tplid'], 'tplcode' => $_GET['tplcode'],'tplname' => $_GET['tplname']));
echo json_encode($detail);

?>
