<?php
require_once("config.php");
require_once("includes/template.php");
require_once("includes/post.php");

$type = $_GET['type'];
$backupall = $_GET['backupall'];
if ($type == 'app') {
	$buffer = $_POST['data'];
	$detail = ap_core_post('AP_INT_BACKUP_APP', array('uid' => $_POST['userid'], 'apps' => $buffer, 'backupall' => $backupall));
	if ($detail['result']['resultcode'] == '000000' && $detail['isok'] == 1) {
		echo 'successful';
	} else {
		echo 'failed';
	}
} elseif ($type == 'contact') {
	$buffer = $_POST['data'];
	$detail = ap_core_post('AP_INT_BACKUP_CONTACT', array('uid' => $_POST['userid'], 'items' => $buffer, 'backupall' => $backupall));
	if ($detail['result']['resultcode'] == '000000' && $detail['isok'] == 1) {
		echo 'successful';
	} else {
		echo 'failed';
	}
} elseif ($type == 'sms') {
	$buffer = $_POST['data'];
	$detail = ap_core_post('AP_INT_BACKUP_SMS', array('uid' => $_POST['userid'], 'data' => $buffer, 'backupall' => $backupall));
	if ($detail['result']['resultcode'] == '000000' && $detail['isok'] == 1) {
		echo 'successful';
	} else {
		echo 'failed';
	}
} else {
	echo 'failed';
}

exit;
?>
