<?php 
session_start();
require_once("../config.php");
require_once(TP_LIB_DIR."db.class.php");

//print_r($_POST);

function checkUserName($username,$db_config){
	
	$db = new db();
	$link = $db->connect($db_config);
	
	unset($arr_input);
	$arr_input['username'] = $username;
	$sql = "select count(*) as total from ch_salesperson where username = '{$arr_input['username']}' and status = 1";
	$row = $db->row_query_one($sql);
	$db->close_db();
	if($row['total'] == 0){
		return true;
	}else{
		return false;
	}
}

function checkcode($code){
	$str_code = $_SESSION['code'];
	if($code == $str_code){
		return true;
	}
	return false;
}
$code = $_POST['code'];
$name = addslashes($_POST['username']);
$register_type = intval($_POST['register_type']);
$real_name = $_POST['real_name'];
$agent_name = $_POST['agent_name'];

switch($register_type){
	case "1":$agent_id = intval($_POST['agent_id']);break;
	case "2":
		$provinces = $_POST['provinces'];
		$city = $_POST['city'];
	break;
}
if(($register_type != 2) && (empty($agent_id) || ($agent_id <= 0))){
	echo "请选择店面！";exit;
}
if(!checkUserName($name,$db_config)){
	echo '用户名重复！';exit;
}
//if(!checkcode($code)){
//	echo '验证码错误！';exit;
//}
if(empty($agent_name)){
	echo '请输入店面名';exit;
}
if(empty($real_name)){
	echo '请输入姓名！';exit;
}
$db = new db();
$link = $db->connect($db_config);

unset($arr_input);
$arr_input['username'] = addslashes($_POST['username']);
$arr_input['agent_id'] = $agent_id;

$arr_input['password'] = addslashes($_POST['password']);
$arr_input['real_name'] = addslashes($_POST['real_name']);
$arr_input['status'] = 1;
$arr_input['telphone'] = addslashes($_POST['telphone']);
$arr_input['billing_type'] = 0;
$arr_input['flag'] = 1;

if($register_type == 2){
	$arr_input['provinces'] = addslashes($provinces);
	$arr_input['city'] = addslashes($city);
}
$create_time = date("Y-m-d h:i:s");
$arr_input['create_time'] = $create_time;

if($register_type == 2){
	unset($arr_ainput);
	$arr_ainput['username']	 = 'gryh' . addslashes($_POST['username']);	//这里指定加入的个人用户添加的店面账户的前缀
	$arr_ainput['password']	 = addslashes($_POST['password']);
	$arr_ainput['name']		 = addslashes($_POST['agent_name']);
	$arr_ainput['pid']		 = 13126;
	$arr_ainput['pname']	 = '个人用户';
	$arr_ainput['ppath']	 = '13125,13126';
	$arr_ainput['level']	 = 3;
	$arr_ainput['type']		 = 1;
	$arr_ainput['status']	 = 1;
	$arr_ainput['acc_balance']	 = 0;
	$arr_ainput['create_time'] = $create_time;
	
	$tbname = 'ch_agent';
	$str_insert_sql = $db->sql_insert($tbname, $arr_ainput);
	$db->query($str_insert_sql);
	$agent_id = $i_agent_id = mysql_insert_id();
	
	unset($arr_agent_info);
	$arr_agent_info['agent_id']			 = $i_agent_id;
	$arr_agent_info['agent_name']		 = addslashes($_POST['agent_name']);
	$arr_agent_info['feedback_des']		 = '';
	$arr_agent_info['company_province']	 = addslashes($provinces);
	$arr_agent_info['company_city']		 = addslashes($city);
	$arr_agent_info['telphone']			 = addslashes($_POST['telphone']);
	$arr_agent_info['create_time']		 = $create_time;
	$tbname = 'ch_agent_info';
	$str_insert_sql = $db->sql_insert($tbname, $arr_agent_info);
	$db->query($str_insert_sql);
}

$arr_input['agent_id'] = $agent_id;
$tbname = 'ch_salesperson';
$str_insert_sql = $db->sql_insert($tbname, $arr_input);
$result = $db->query($str_insert_sql);
if($result){
	echo 'success'; 
}
$db->close_db();
?>