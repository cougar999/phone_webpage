<?php
if ($tp_tpl_page == 'appstore') {
	$tp_tpl_layout = "index.html";
	$tp_tpl_page   = 'appstore/index.html';
	
	$headers = $_COOKIE['headers'];
	$headers = json_decode($headers, true);
	$channelcode = $_COOKIE['channelcode'];
	
	if (!isset($_GET['phonetype'])) {
		if ($_GET['phonetype'] == '') {	
			$_REQUEST['phonetype'] = $_GET['phonetype'] = strval($_COOKIE['phonetype'].'.'.$_COOKIE['phoneversion']);
			//$_REQUEST['iscrack'] = $_GET['iscrack'] = isset($_REQUEST['iscrack']) ? $_REQUEST['iscrack'] : (((int)$_GET['phonetype']) == 8 ? 1 : 0);
			$_REQUEST['iscrack'] = $_GET['iscrack'] = $headers['jailbreak'] ? $headers['jailbreak'] : 0;
			$_REQUEST['channelcode'] = $_GET['channelcode'] = ($_REQUEST['channelcode'] != '' ? $_REQUEST['channelcode'] : $channelcode);
			header('location: /appstore?gotopage=' . $_GET['gotopage']  . '&channelcode=' . ($_GET['channelcode']) . '&iscrack=' . ($_GET['iscrack']) .'&phonetype=' . ($_GET['phonetype']));
			exit;
		} else {
			$_REQUEST['phonetype'] = $_GET['phonetype'] = strval($_COOKIE['phonetype'].'.'.$_COOKIE['phoneversion']);
			$_REQUEST['iscrack'] = $_GET['iscrack'] = $_REQUEST['iscrack'];
			$_REQUEST['channelcode'] = $_GET['channelcode'] = ($_REQUEST['channelcode'] != '' ? $_REQUEST['channelcode'] : $channelcode);
		}
	} else {
		if (!isset($_GET['channelcode'])) {
			$_REQUEST['phonetype'] = $_GET['phonetype'] = $_REQUEST['phonetype'];
			//$_REQUEST['iscrack'] = $_GET['iscrack'] = isset($_REQUEST['iscrack']) ? $_REQUEST['iscrack'] : (((int)$_GET['phonetype']) == 8 ? 1 : 0);
			$_REQUEST['iscrack'] = $_GET['iscrack'] = $headers['jailbreak'] ? $headers['jailbreak'] : 0;
			$_REQUEST['channelcode'] = $_GET['channelcode'] = ($_REQUEST['channelcode'] != '' ? $_REQUEST['channelcode'] : $channelcode);
			if(strpos($_GET['gotopage'], '/appstore/green_channel.html') === false){
				header('location: /appstore?gotopage=' . $_GET['gotopage']  . '&channelcode=' . ($_GET['channelcode'])) . '&iscrack=' . ($_GET['iscrack']) .'&phonetype=' . ($_GET['phonetype']);
				exit;	
			}
		}
	}
	
} elseif ($tp_tpl_page == 'appstore/soft.html' ||$tp_tpl_page == 'appstore/game-detail.html'){
	$tp_tpl_layout = "layout_appstore.html";
	$tp_tpl_assign['referer'] = $_COOKIE['gotopage'];
} elseif ($tp_tpl_page == 'appstore/') {
	$tp_tpl_layout = "layout_appstore.html";
	$tp_tpl_page = 'appstore/download.html';
	
	$tp_tpl_assign['phonetype'] = $_COOKIE['phonetype'];
	$tp_tpl_assign['iscrack'] = $_COOKIE['iscrack'];
	$tp_tpl_assign['channelcode'] = $_COOKIE['channelcode'];
	
} elseif ($tp_tpl_page == 'appstore/search.html') {
	$tp_tpl_layout = "layout_appstore.html";
	if ($_REQUEST['search2'] != '') {
		$_REQUEST['seatype'] = $_GET['seatype'] = substr($_REQUEST['search2'], 0, 1);	
		$keyword = str_replace(" " ,"+" ,substr($_REQUEST['search2'], 2));				//处理base64_encode传参过来转码出现的+号为空字符问题
		$_REQUEST['keyword'] = $_GET['keyword'] = base64_decode($keyword);
	} elseif ($_REQUEST['search'] != '') {
		$_REQUEST['seatype'] = $_GET['seatype'] = substr($_REQUEST['search'], 0, 1);	
		$_REQUEST['keyword'] = $_GET['keyword'] = substr($_REQUEST['search'], 2);
	}
} elseif ($tp_tpl_page == 'appstore/download.html'){
	$tp_tpl_layout = "layout_appstore.html";
	$tp_tpl_page = 'appstore/download.html';
} elseif ($tp_tpl_page == 'appstore/music.html'){
	//$tp_tpl_layout = "layout_appstore_noscroll.html";
	$tp_tpl_layout = "layout_appstore.html";
	$tp_tpl_page = 'appstore/music.html';	
}else {
	$tp_tpl_layout = "layout_appstore.html";
	
	$tp_tpl_assign['phonetype'] = $_COOKIE['phonetype'];
	$tp_tpl_assign['referer'] = $_COOKIE['gotopage'];
	
}
?>
