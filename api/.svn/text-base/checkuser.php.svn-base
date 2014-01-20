<?php 
if(empty($_REQUEST['name']))	exit;

require_once("../config.php");
require_once(TP_LIB_DIR."db.class.php");

$db = new db();
$username = $_REQUEST['name'];
$link = $db->connect($db_config);

unset($arr_input);
$arr_input['username'] = $username;
$sql = "select count(*) as total from ch_salesperson where username = '{$arr_input['username']}' and status = 1";
$row = $db->row_query_one($sql);
if($row['total']== 0){
	echo 'success';
}else{
	echo 'failed';
}
$db->close_db();
?>