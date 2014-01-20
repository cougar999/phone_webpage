<?php
require_once(TP_LIB_DIR.'HttpClient.class.php');

$_GET['salesid'] = $_COOKIE['salesid'];
$tp_tpl_assign['shopid'] = $_COOKIE['shopid'];
$tp_tpl_assign['logoutmsg'] = '<div style="padding:200px;font-size:20px;color:red;text-align:center;line-height:30px;">您尚未登录，暂不支持使用该功能。<br>重启客户端并登录后，即可使用！如果没有登录账号，请联系我们开通。</div>';

if ($tp_tpl_page == 'intergral') {
	$tp_tpl_layout = "index_intergral.html";
	$tp_tpl_page   = 'intergral/index.html';

} elseif ($tp_tpl_page == 'intergral/') {
	$tp_tpl_layout = "layout_intergral.html";
	$tp_tpl_page = 'intergral/index.html';
} elseif ($tp_tpl_page == 'intergral/task_ranking.php') {
	require_once("gMemcache.php");
	$memcache = new MemCache(MEMCACHE_HOST1, MEMCACHE_POST);
	
	//$memcache->connect(MEMCACHE_HOST1, MEMCACHE_POST);
	
	//$memcache->addServer(MEMCACHE_HOST1, MEMCACHE_POST);
	//$memcache->addServer(MEMCACHE_HOST2, MEMCACHE_POST);
	//$memcache->addServer(MEMCACHE_HOST3, MEMCACHE_POST);
	//$memcache->addServer(MEMCACHE_HOST4, MEMCACHE_POST);
	
	$pageno = intval($_GET['pageno']) > 0 ? intval($_GET['pageno']) : 1;

	$i_pageno_hash = ceil($pageno/10);
	if(!$memcache->get('cointop'.$i_pageno_hash)){
		$data['pageno'] = $i_pageno_hash;
		$data['count'] = 500;
		$str_data_cache = ap_core_feed("AP_INT_COINS_TOP" , $data);
		//print_r($str_data_cache);
		
		
		$pagecount = 50;
		unset($str_data_cache2);
		$str_data_cache2['shopid'] = $str_data_cache['shopid'];
		$str_data_cache2['page']['totalcount'] = $str_data_cache['page']['totalcount'];
		$str_data_cache2['page']['pagenum'] = $pagecount;
		$str_data_cache2['page']['pageno'] = $pageno;
		for($i = $pagecount*($pageno-1); $i < $pagecount*$pageno;$i++){
			if($i < $str_data_cache['page']['totalcount']){
				$str_data_cache2['page']['items'][$i] = $str_data_cache['page']['items'][$i%500];
			}
		}
		$tp_tpl_assign['ranking'] = $str_data_cache2;
		$tp_tpl_layout = "layout_intergral.html";
		$tp_tpl_page = $tp_tpl_page;
		//$memcache->add('cointop'.$i_pageno_hash, $str_data_cache, false, MEMCACHE_TIME);
		//$memcache->delete('cointop');
		
	}
	/*$str_data_cache1 = $memcache->get('cointop'.$i_pageno_hash);
	
	
	$pagecount = 50;
	unset($str_data_cache2);
	$str_data_cache2['shopid'] = $str_data_cache1['shopid'];
	$str_data_cache2['page']['totalcount'] = $str_data_cache1['page']['totalcount'];
	$str_data_cache2['page']['pagenum'] = $pagecount;
	$str_data_cache2['page']['pageno'] = $pageno;
	for($i = $pagecount*($pageno-1); $i < $pagecount*$pageno;$i++){
		if($i < $str_data_cache1['page']['totalcount']){
			$str_data_cache2['page']['items'][$i] = $str_data_cache1['page']['items'][$i%500];
		}
	}
	$tp_tpl_assign['ranking'] = $str_data_cache2;
	$tp_tpl_layout = "layout_intergral.html";
	$tp_tpl_page = $tp_tpl_page;*/
	
} else {
	$tp_tpl_layout = "layout_intergral.html";
	$salesid = $_GET['salesid'];
	$tp_tpl_assign['salesid'] = $salesid;
	$tp_tpl_page = $tp_tpl_page;
}
?>
