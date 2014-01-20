<?php
require_once('HttpClient.class.php');

function ap_core_feed($int, $data=array(), $debug=false) {
	$feedlog = TP_APP_DIR.'/log/feed.log';
	$errlog = TP_APP_DIR.'/log/err.log';
	if (is_array($int)) {
		$feed = constant($params['int']);
		$data = $params;
	} elseif (is_string($int)) {
		$feed = constant($int);
		$data = $data;
	}
	

	$req = parse_url($feed);
	$client = new HttpClient($req['host'], $req['port'] ? $req['port'] : 80);
	$client->setDebug($debug);
	
	$headers = $_COOKIE['headers'];
	$shopid = $_COOKIE['shopid'];
	$uid = $_COOKIE['uid'];
	$salesid = $_COOKIE['salesid'];
	$channelcode = $_REQUEST['channelcode'] ? $_REQUEST['channelcode'] : $_COOKIE['channelcode'];
	$pcrcode = $_COOKIE['pcrcode'];
	$headers = json_decode($headers, true);
	$requres = apache_request_headers();
	
	$i_hash_phone = explode('.', $_REQUEST['phonetype']);
	$i_phonetype = intval($i_hash_phone[0]);
	$i_phoneversion = $i_hash_phone[1];
	$iscrack = intval($_REQUEST['iscrack']);
	
	if (!is_null($headers) && intval($headers['phonetype']) > 0) {
		$headers = $client->headers = array(
			'Version' => $requres['Version'] ? $requres['Version'] : $headers['Version'],
			'User-Agent' => $requres['User-Agent'] ? $requres['User-Agent'] : $headers['User-Agent'],
			'Platform' => $requres['Platform'] ? $requres['Platform'] : $headers['Platform'],
			'Deviceid' => $requres['Deviceid'] ? $requres['Deviceid'] : $headers['Deviceid'],
			'Shopid' => $requres['Shopid'] ? $requres['Shopid'] : ($shopid ? $shopid : $headers['Shopid']),
			'Authid' => $requres['Authid'] ? $requres['Authid'] : $headers['Authid'],
			'Termid' => $requres['Termid'] ? $requres['Termid'] : $headers['hansetid'],
			'Phonetype' => $i_phonetype ? $i_phonetype :($requres['Phonetype'] ? $requres['Phonetype'] : $headers['phonetype']),
			'Phoneversion' => $i_phoneversion ? $i_phoneversion :($requres['Phoneversion'] ? $requres['Phoneversion'] : $headers['phoneversion']),
			'Phoneosversion' => $requres['phoneosversion'] ? $requres['phoneosversion'] : $headers['phoneosversion'],
			//'Iscrack' => $iscrack ? $iscrack : ($requres['jailbreak'] ? $requres['jailbreak'] : $headers['jailbreak']),
			'Iscrack' => $requres['jailbreak'] ? $requres['jailbreak'] : $headers['jailbreak'],
			'Phoneno' => $requres['Phoneno'] ? $requres['Phoneno'] : $headers['phoneno'],
			'Termcode' => $requres['Termcode'] ? $requres['Termcode'] : $headers['imei'] != '' ? $headers['imei'] : '-1',
			'Trackid' => $requres['Trackid'] ? $requres['Trackid'] : $headers['Trackid'],
			'Salesid' => $requres['Salesid'] ? $requres['Salesid'] : $headers['Salesid'],
			'uid' => $requres['uid'] ? $requres['uid'] : $headers['uid'],
			'Channelcode' => $requres['Channelcode'] ? $requres['Channelcode'] : ($channelcode ? $channelcode : $headers['Channelcode']),
			'Timestamp' => time()
		);
	} else {
		$headers = $client->headers = array(
			'Version' => $requres['Version'] ? $requres['Version'] : ($pcrcode ? $pcrcode : '0'),
			'User-Agent' => $requres['User-Agent'] ? $requres['User-Agent'] : 'Aipi-pc-retail',
			'Platform' => $requres['Platform'] ? $requres['Platform'] : '1',
			'Deviceid' => $requres['Deviceid'] ? $requres['Deviceid'] : '0',
			'Shopid' => $requres['Shopid'] ? $requres['Shopid'] : ($shopid ? $shopid : '0'),
			'Authid' => $requres['Authid'] ? $requres['Authid'] : '0',
			'Termid' => $requres['Termid'] ? $requres['Termid'] : '-1',
			'Phonetype' => $i_phonetype ? $i_phonetype :($requres['Phonetype'] ? $requres['Phonetype'] : 0),
			'Phoneversion' => $i_phoneversion ? $i_phoneversion :($requres['Phoneversion'] ? $requres['Phoneversion'] : 0),
			'Phoneosversion' => $requres['phoneosversion'] ? $requres['phoneosversion'] : '-1',
			//'Iscrack' => $iscrack ? $iscrack : ($requres['jailbreak'] ? $requres['jailbreak'] : $headers['jailbreak']),
			'Iscrack' => $requres['jailbreak'] ? $requres['jailbreak'] : $headers['jailbreak'],
			'Termcode' => $requres['Termcode'] ? $requres['Termcode'] : '-1',
			'Trackid' => $requres['Trackid'] ? $requres['Trackid'] : '0',
			'Salesid' => $requres['Salesid'] ? $requres['Salesid'] : ($salesid ? $salesid : '0'),
			'uid' => $requres['uid'] ? $requres['uid'] : ($uid ? $uid : '0'),
			'Channelcode' => $requres['Channelcode'] ? $requres['Channelcode'] : ($channelcode ? $channelcode : '0'),
			'Timestamp' => time()
		);
	}
	
	$client->get($req[path], $data);
	$status = $client->getStatus();
	$cache = constant('TP_CAH_DIR') . md5($req[path] . '?' . http_build_query($data));
		
	if ($status != '200') {
		if ($feedfp = fopen($feedlog, 'a')) {
			$log = sprintf("%s %s %s %s %s %s\nrequest:%s\nresponse:%s\n\n", 
				date('Y-m-d H:i:s u'),
				$_SERVER['REMOTE_ADDR'], 
				$status, 
				($req['host'] . ' ' . ($req['port'] ? $req['port'] : 80)) . ' ' . $req[path], 
				$client->getError(), 
				$cache,
				var_export($headers, true) . var_export($data, true),
				$client->getContent());
			fwrite($feedfp, $log);
			fclose($feedfp);
		}
	    $content = @file_get_contents($cache);
	} else {
		$content = $client->getContent();
		if ($cachefp = fopen($cache, 'w')) {
			fwrite($cachefp, $content);
			fclose($cachefp);
		}
	}
	if (!empty($content)) {
		$json = json_decode($content, true);
		if ($debug) { var_dump($json); }
		if ($json['result']['resultcode'] != '000000' || (isset($json['result']['isok']) && $json['result']['isok'] != 1)) {
			if ($errfp = fopen($errlog, 'a')) {
				$log = sprintf("%s %s %s %s %s %s\nrequest:%s\nresponse:%s\n\n", 
					date('Y-m-d H:i:s u'), 
					$_SERVER['REMOTE_ADDR'], 
					$client->getStatus(), 
					($req['host'] . ' ' . ($req['port'] ? $req['port'] : 80)) . ' ' . $req[path], 
					$client->getError(), 
					$cache,
					var_export($headers, true) . var_export($data, true),
					$json == null ? $content : var_export($json, true));
				fwrite($errfp, $log);
				fclose($errfp);
			}
		}
		return $json;
	}	
}
