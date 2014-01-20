<?php
//print_r($_GET);
//phpinfo();
//exit;
date_default_timezone_set('PRC');
require_once("config.php");
require_once("includes/template.php");
require_once("includes/feed.php");
include("gMemcache.php");

$tp_tpl_appname = "dfonesoft";
$tp_tpl_layout = isset($tp_tpl_layout) ? $tp_tpl_layout : "layout.html";
$tp_tpl_assign = array('tp' => $tp, 'ap_int' => $ap_int);
$tp_tpl_instance = tp_tpl_engine($tp_tpl_appname);

$tp_tpl_page = isset($tp_tpl_page) ? $tp_tpl_page : ($_GET['tp_tpl_page'] != '' ? $_GET['tp_tpl_page'] : 'index.html');

$tp_tpl_page_group = explode("/", $tp_tpl_page);
$tp_tpl_page_plugin = (strpos($tp_tpl_page_group[0], ".") ? substr($tp_tpl_page_group[0], 0, strpos($tp_tpl_page_group[0], ".")) : $tp_tpl_page_group[0]) . ".php";

if (file_exists($tp_tpl_page_plugin) && $tp_tpl_page_plugin != 'index.php') { require($tp_tpl_page_plugin); }
$tp_tpl_assign['tp_tpl_page'] = $tp_tpl_page;
$tp_tpl_assign['tp_tpl_page_group'] = $tp_tpl_page_group;
$tp_tpl_assign['tp_tpl_page_plugin'] = $tp_tpl_page_plugin;
$tp_tpl_assign['tp_tpl_layout'] = $tp_tpl_layout;

function getInitInfo(){
	//初始化数据
	$data = array();
	$arr_initinfo = array();
	$data['bid']				= AP_INITINFO_BID;
	$data['tplcode']			= AP_INITINFO_TPLCODE;
	$data['versioncode']		= AP_INITINFO_VERSIONCODE;
	$data['sectionversion']		= AP_INITINFO_SECTIONVERSION;
	
	$arr_init_data = ap_core_feed("AP_INT_INIT_INFO" , $data);
	
	if(!empty($arr_init_data['list']['items'])){
		foreach ($arr_init_data['list']['items'] as $row){
			$arr_initinfo[$row['code']] = $row['sectionid'];
		}
		ksort($arr_initinfo);
	}
	
	return $arr_initinfo;
}
$arr_init_data = getInitInfo();

$tp_tpl_assign['ap_int']['AP_INT_MENU_START_ID'] = $arr_init_data[AP_INT_MENUCODE_TYPE_START];
$tp_tpl_assign['ap_int']['AP_INT_MENU_APPSOTRE_ID'] = $arr_init_data[AP_INT_MENUCODE_APPSTORE];

tp_tpl_display($tp_tpl_instance, $tp_tpl_page, $tp_tpl_layout, $tp_tpl_assign, $tp_tpl_page_plugin);
?>
