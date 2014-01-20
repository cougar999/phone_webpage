<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");
require_once("includes/feed.php");


$detail = ap_core_post("AP_INT_GETACCOUNT_BYTERMCODE");
echo json_encode($detail);

?>
