
function ReadDataPage(sql, argv, callback, page, pagesize){
	page = page || 0;
	pagesize = pagesize || 2000;
	sql = sql + " LIMIT " + page + ',' + pagesize;
	WebAppDatabase(sql, argv, function(result, data) {
		log("ReadDataPage start");
		if (callback) callback(result, data);
		log("ReadDataPage end");
	});
}

//删除本地存储
function delLocalStorage(key) {
	if (!window.external) window.external = {};
	if (window.localStorage) {
		if (key) {
			localStorage.removeItem(key);
			log('delete localStorage ' + key +'OK');
			console.log('delete localStorage ' + key +'OK');
		}
	}
}

//清除所以本地存储
function clearLocalStorage() {
	if (!window.external) window.external = {};
	if (window.localStorage) {
			localStorage.clear();
			log('clear localStorage OK');
			console.log('clear localStorage OK');
	}
}

//删除指定key的本地会话存储
function delSessionStorage(key) {
	if (!window.external) window.external = {};
	if (window.sessionStorage) {
		if (key) {
			sessionStorage.removeItem(key);
			log('delete sessionStorage'+key+' OK');
			console.log('delete sessionStorage'+key+' OK');
		}
	}
}

//删除所有本地会话存储
function clearSessionStorage() {
	if (!window.external) window.external = {};
	if (window.sessionStorage) {
			sessionStorage.clear();
			log('clear sessionStorage OK');
			console.log('clear sessionStorage OK');
	}
}


/*
 * 定义弹窗，基于Jquery colorbox
 */

//进度条,title标题，message信息
function cbProgress (title, callback, box, message) {
	var box = box || $.colorbox;
	if (!message) message = '';
	var content = '<div class="tc">' + 
		'<div class="progresshead"><p><span id="progresstit">' + title +'</span></p></div>' +
		'<div class="progressbar"><div id="progresspoint" class="progress"><div class="progressbg"></div></div></div>' +
		'<table class="progressfoot fixwidth" style="width:100%;"><tr><td class="fixwidth"><span id="progressmsg">' + message + '</span></td></tr></table>' +
		'</div>';
	$.colorbox({html:content,width:'500px',height:'200px', close:false, overlayClose:false, opacity:0.5},function(){
		if (callback) {
			callback(box, $('#progressmsg').get(0), $('#progresspoint').get(0));
		}
	});
}

//等待条,title标题，message信息，barcallback回调,box指定窗口
function cbWaiting(title, barcallback, box, message) {
	var box = box || $.colorbox;
	if (!message) message = '';
	var content = '<div class="tc">' + 
		'<div class="progresshead"><p><span id="progresstit">' + title +'</span></p></div>' +
		'<div class="progressbar"><div id="progresswait" class="waiting"><div class="progressbg"></div></div></div>' +
		'<table class="progressfoot fixwidth" style="width:100%;"><tr><td class="fixwidth"><span id="progressmsg">' + message + '</span></td></tr></table>' +
		'</div>';
	$.colorbox({html:content, width:'600px', height:'180px', close:false, overlayClose:false, opacity:0.5}, function(){
		if (barcallback) {
			barcallback(box, $('#progressmsg').get(0), $('#progresswait').get(0));
		}
	});
};

//提示窗口，点击确定关闭
function cbMessage(title, okcallback, box, message) {
	box = box || $.colorbox;
	if (!message) message = '';
	var content = '<div class="tc">' + 
		'<div class="messagehead"><p><span id="messagetit">' + title +'</span></p></div>' +
		'<div class="messagebar"><p id="messagesmsg">' + message + '</p></div>' +
		'<p class="messagefoot"><input id="messageok" type="button" value="确定" class="f1 b btn" /></p>' +
		'</div>';
	box({html:content,width:'600px', height:'180px', close:false, scrolling:false, overlayClose:false, opacity:0.5},function(){
		$('#messageok').one('click', function(){
			$(this).unbind('click');
			if (okcallback)	{ okcallback(box, $('#messagesmsg').get(0)); }
			else { box.close(); }
		});
	});
};

//确认窗口,点击确定执行下一步
function cbConfirm(title, okcallback, cancelcallback, box, message) {
	box = box || $.colorbox;
	if (!message) message = '';
	var content = '<div class="tc">' + 
		'<div class="confirmhead"><p><span id="confirmtit">' + title +'</span></p></div>' +
		'<div class="confirmbar"><p id="confirmmsg">' + message + '</p></div>' +
		'<p class="confirmfoot"><input id="confirmok" type="button" value="确定" class="f1 b btn" />&nbsp;&nbsp;&nbsp;<input id="confirmcancel" type="button" class="f1 b btn" value="取消" class="f1 b btn" /></p>' +
		'</div>';
	box({html:content, width:'600px', close:false, overlayClose:false, opacity:0.5}, function(){
		$('#confirmok').one('click', function(){
			if (okcallback)	{ okcallback(box, $('#confirmmsg').get(0)); }
			else { box.close(); }
		});
		$('#confirmcancel').one('click', function(){
			if (cancelcallback)	{ cancelcallback(box, $('#confirmmsg').get(0)); }
			else { box.close(); }
		});
	});
};


function fixJsonString(str) {
	if (!str) return;
	return(str.replace(/(\\u[0-9abcdef]{4})/ig, function(a) { return eval('"' + a + '"'); }));
};

function fixNameString(str) {
	if (!str) return;
	return(str.replace(/[^.a-zA-Z0-9_\u4e00-\u9fa5\，；。“”:！\/]/ig, ''));
};
function fixNamePUN(str) {
	if (!str) return;
	return(str.replace(/[‘’]/g, "'"));
}

function formatContactName(item) {
	var name = '';
	if (item.name && item.name.length > 0) {
		name = item.name[0].value;
	} else {
		var fn = item.firstname && item.firstname.length ? item.firstname[0].value : '';
		var ln = item.lastname && item.lastname.length ? item.lastname[0].value : '';
		name = fn + ln;
	}
	return name;
};

function formatErrorCode(code) {
	var s = '';
	if (code == 1) { s = '设备错误，请检查设备后再试'; } 
	else if (code == 100) { s = '设备正忙'; }
	else if (code == 200) { s = '操作失败，请重新再试'; }
	else if (code == 300) { s = '手机连接中断，请检查USB线'; }
	else if (code == 301) { s = '手机连接中断，请检查USB线'; }
	else if (code == 302) { s = '手机无法正常访问，请检查手机状态'; }
	else if (code == 400) { s = '手机内存已满，请删除部分内容后重新安装'; }
	else if (code == 401) { s = '未找到SD卡，请插入SD卡重试'; }
	else if (code == 500) { s = '安装文件出现错误'; }
	else if (code == 501) { s = '安装文件出现错误'; }
	else if (code == 502) { s = '安装到手机失败，请重新安装'; }
	else if (code == 503) { s = '未找到SD卡，请插入SD卡重试'; }
	else if (code == 504) { s = '安装到手机失败，请重新安装'; }
	else if (code == 506) { s = '您的手机不支持此文件'; }
	else if (code == 507) { s = '安装到手机失败，请重新安装'; }
	else if (code == 508) { s = '下载文件出现错误，请重新下载'; }
	else if (code == 509) { s = 'SD卡空间不足，请更换新卡重试'; }
	else if (code == 510) { s = '您的手机不支持此文件'; }
	else if (code == 600) { s = '安装到手机失败，请重新安装'; }
	else if (code == 601) { s = '安装到手机失败，请重新安装'; }
	else if (code == 602) { s = '安装到手机失败，请重新安装'; }
	else if (code == 603) { s = '安装到手机失败，请重新安装'; }
	else if (code == 604) { s = '安装到手机失败，请重新安装'; }
	else if (code == 700) { s = '手机无法正常访问，请检查手机状态'; }
	else if (code == 701) { s = '此文件已存在于您手机中，无需重新下载'; }
	else if (code == 800) { s = 'SIM卡不存在'; }
	else if (code == 801) { s = '无法发送短信'; }
	return s;
};

//格式化数字，默认为小数点后两位数
function CurrencyFormatted(amount) {
    var i = parseFloat(amount);
    if(isNaN(i)) { i = 0.00; }
    var minus = '';
    if(i < 0) { minus = '-'; }
    i = Math.abs(i);
    i = parseInt((i + .005) * 100);
    i = i / 100;
    s = new String(i);
    if(s.indexOf('.') < 0) { s += '.00'; }
    if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
    s = minus + s;
    return s;
}

//格式化数字，可定义小数点后位数，有浮点bug
function formatNumber(pnumber,decimals){
    if (isNaN(pnumber)) { return 0 ;};
    if (pnumber=='') { return 0 ;};

    var snum = new String(pnumber);
    var sec = snum.split('.');
    var whole = parseFloat(sec[0]);
    var result = '';
     
    if(sec.length > 1){
        var dec = new String(sec[1]);
        dec = String(parseFloat(sec[1])/Math.pow(10,(dec.length - decimals)));
        dec = String(whole + Math.round(parseFloat(dec))/Math.pow(10,decimals));
        var dot = dec.indexOf('.');
        if(dot == -1){
            dec += '.';
            dot = dec.indexOf('.');
        }
        while(dec.length <= dot + decimals) { dec += '0'; }
        result = dec;
    } else{
        var dot;
        var dec = new String(whole);
        dec += '.';
        dot = dec.indexOf('.');    
        while(dec.length <= dot + decimals) { dec += '0'; }
        result = dec;
    }  
    return result;
}

function formatFileType(path) {
	var type = '';
	if (/^(.*)(\.jpg|\.jpeg|\.gif|\.png|\.bmp|\.tiff|\.psd|\.eps|\.ai|\.raw)/i.test(path)) {
		type = "图片";
	} else if (/^(.*)(\.3gp|\.mp4|\.avi|\.mpeg|\.rm|\.rmvb|\.mov)/i.test(path)) {
		type = "视频";
	} else if (/^(.*)(\.mp3|\.wma|\.wav|\.ape|\.amr|\.midi\.ogg)/i.test(path)) {
		type = "音频";
	} else if (/^(.*)(\.sis|\.sisx|\.apk|\.jar|\.jra|\.wgz|\.swf|\.zip|\.azip|\.ipa)/i.test(path)) {
		type = "应用程序";
	} else if (/^(.*)(\.txt|\.epub|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx|\.pdf|\.umd)/i.test(path)) {
		type = "文档";
	} else {
		type = "";
	}
	return type;
};


function formatFileExt (path) {
	var ext = '';
	var index = path.indexOf('?');
	if (index > -1) { ext = path.substr(0, index); }
	else{
		ext = path;
	}
	var index = ext.lastIndexOf('.');
	if (index > -1) {
		ext = ext.substr(index + 1);
	}
	return ext.toLowerCase();
};

function formatFileExtType(exttype) {
	var type = '';
	if (exttype.indexOf('图片') > -1) {
		type = "图片";
	} else if (exttype.indexOf('视频') > -1) {
		type = "视频";
	} else if (exttype.indexOf('音频') > -1) {
		type = "音频";
	} else if (exttype.indexOf('应用程序') > -1) {
		type = "应用程序";
	} else if (exttype.indexOf('文档') > -1) {
		type = "文档";
	} else {
		type = "";
	}
	return type;
};

function formatFileSize(size) {
	var text = '';
	if (size < 1024) {
		text = size;
		if (size < 1) {
			text = '';
		} else {
			text = parseInt(text) + 'B';
		}
	} else if (size > 1024 && size < 1024 * 1024) {
		text = size / 1024;
		text = CurrencyFormatted(text) + 'KB';
	} else if (size > 1024 * 1024 && size < 1024 * 1024 * 1024) {
		text = size / 1024 / 1024;
		text = CurrencyFormatted(text) + 'MB';
	} else if (size > 1024 * 1024 * 1024) {
		text = size / 1024 / 1024 / 1024;
		text = CurrencyFormatted(text) + 'GB';
	}
	return text;
};

function formatTime(time) {
	var text = '';
	//item.retimes =  (item.filetotlesize - item.filedownloadsize) / item.speed;
	if (time < 60) {
		if (time < 1) {
			text = '1秒';
		} else {
			text = parseInt(time) + '秒';
		}
	} else if (time > 60 && time < 60 * 60) {
		time = parseInt(time / 60) + time % 60 / 100;
		time = formatNumber(time,2) + '分钟';
	} else if (time > 60 * 60 && time < 60 * 60 * 24) {
		time = parseInt(time / 60 / 60) +  time % (60 / 60) / 100;
		time = formatNumber(time,2) + '小时';
	} else if (time > 60 * 60 * 24) {
		time = parseInt(time / 60 / 60 / 24) + time % (60 / 60 / 24) / 100;
		time = formatNumber(time,2) + '天';
	}
	return text;
};

function formatSpace(space,source) {
	if (!space) return;
	if (source.indexOf('KB') > -1) {
		space = space * 1024;
	} else if (source.indexOf('MB') > -1) {
		space = space * 1024 * 1024;
	} else if (source.indexOf('GB') > -1) {
		space = space * 1024 * 1024 * 1024;
	} 
	return space;
};

function formatPercent(percent,ele) {
	if (!percent) return;
	if (percent >= 0 && percent < 50) {
		$(ele).children('div').css('background-image', 'url(' + _img1 + '/resources/img/green.png)').css('width', percent + '%');
	} else if (percent >= 50 && percent < 80) {
		$(ele).children('div').css('background-image', 'url(' + _img1 + '/resources/img/yellow.png)').css('width', percent + '%');
	} else if (percent >= 80) {
		$(ele).children('div').css('background-image', 'url(' + _img1 + '/resources/img/red.png)').css('width', percent + '%');
	}
};

function checkphone () {
	//var phone1 = WebAppSessionStorage('phone1');
	var data = getCurrentPhone();
	if (!data || !data.imei) {
		log("imei no 请先连接手机再进行操作，否则无法使用此功能");
		$('.loadings').hide();
		cbMessage('请先连接手机再进行操作，否则无法使用此功能');
		return false;
	} else {
		return true;
		console.log(data);
		log("imei ok");
	}
};

function checkios() {
	try {
		var phone = getCurrentPhone();
		if (!phone && !phone.imei) return;
		if (phone && phone.phonetype == phoneOptions.ios) { 
			if (document.body.clientHeight > 0 && document.body.clientWidth > 0) {
				setTimeout(function(){
					$('.loadings').hide();
					cbMessage('此功能不支持Iphone手机下使用');
				}, 500);
			}
			return false; 
		}
	} catch (e) { 
		return false; 
	}
	return true;
};

function checkdisk () {
	try {
		var result = getCurrentPhone();
		if (result == '─') result = '';
		var phone = result;
		if (phone && phone.phonetype == phoneOptions.disk) { 
			if (document.body.clientHeight > 0 && document.body.clientWidth > 0) {
				setTimeout(function(){
					$('.loadings').hide();
					cbMessage('此功能不支持U盘模式下使用', null, null, '请重新重新连接设备并切换到手机模式下后再试');
				}, 500);
			}
			return false; 
		}
	} catch (e) { 
		return false; 
	}
	return true;
};

var checkmtk = function() {
	try {
		var result = getCurrentPhone();
		if (result == '─') result = '';
		var phone = result;
		if (phone && phone.phonetype == phoneOptions.mtk) { 
			if (document.body.clientHeight > 0 && document.body.clientWidth > 0) {
				setTimeout(function(){
					$('.loadings').hide();
					cbMessage('此功能不支持非智能手机下使用');
				}, 500);
			}
			return false; 
		}
	} catch (e) { 
		return false; 
	}
	return true;
};

var checkdiskbuyanddown = function() {
	try {
		var phone = getCurrentPhone();
		if (!phone && !phone.imei) return;
		if (phone && phone.phonetype == phoneOptions.mtk) { 
			if (document.body.clientHeight > 0 && document.body.clientWidth > 0) {
				setTimeout(function(){
					$('.loadings').hide();
					cbMessage('此功能不支持该模式下使用',{},{}, '请重新重新连接设备并切换到U盘模式下后再试');
				}, 500);
			}
			return false; 
		}
	} catch (e) { 
		return false; 
	}
	return true;
};

function navUrl(id, url) {
	var p = {protocoltype:'gotourl', id:id.toString(), url:url};
	setDataCache(null, p.protocoltype, JSON.stringify(p), function(data, status){
		log('gotourl ok');
	});
}

function jumpUrl(tab, menu) {
	setDataCache(null, tab, menu, function(data, status){
		log('gotourl ok');
	});
}

function sendsms (nmber, message, successful, failed) {
	if (checkphone() == false) return false;
	if (checkios() == false) return false;
	try {
		cbWaiting('正在发送短信，请稍候', function(){
				var phone = getCurrentPhone();
				var imei = phone.imei;
				var phonetype = phone.phonetype;
				var type = '';
				if (phonetype == phoneOptions.symbian)	{ type = '2'; } 
				else if (phonetype == phoneOptions.android) { type = '2'; }
				else if (phonetype == phoneOptions.mtk) { type = '2'; }
				var	shopid = phone.Shopid;
				var	termid = phone.hansetid;
				var salesid = phone.Salesid;
				var channelcode = phone.Channelcode;
				var content = '1_0_0_1_' + imei + ',' + shopid + ',' + termid + ',' + salesid + ',' + channelcode;
				nmber = nmber || smssendnum || '';
				var nmbers = nmber.split(',');
				var undatalist = nmbers;
				var undataleng = nmbers.length;
				var failedlist = [];
				var undatacall = function() {
					if (!undatalist || undatalist.length == 0) {
						if (failedlist.length == 0)	{
							cbMessage('发送短信成功', function(){ document.location.href = '/member/overview.html';$(this).colorbox.close(); }, null, '收到短信后请按提示进行操作');
						} else {
							cbMessage('发送短信失败  ' + failedlist[0], null, null, successful||'');
						}
						return false;
					}
					var item = undatalist.shift(undatalist.length, 1);
					if (message) {
						message = message;
						addSMS(null, fixJsonString(JSON.stringify({protocoltype:'addsms', sms:[{address:item, message:message}]})), function(data, status){
							if(status != 'ok') return;
							if (!data || data != 1)	{
								failedlist[failedlist.length] = formatErrorCode('');
								//failedlist[failedlist.length] = formatErrorCode(data.eventvalue[0].result);
								log("发送失败");
							}
							setTimeout(function(){
								undatacall();
							}, 100);
						});
					} else if (content) {
						message = content;
						addSMS(null, fixJsonString(JSON.stringify({protocoltype:'addsms', sms:[{address:item, message:message}]})), function(data, status){
							if(status != 'ok') return;
							if (!data || data != 1)	{
								failedlist[failedlist.length] = formatErrorCode('');
								//failedlist[failedlist.length] = formatErrorCode(data.eventvalue[0].result);
								log("发送失败");
							}
							setTimeout(function(){
								undatacall();
							}, 100);
						});
					} else {
						failedlist[failedlist.length] = '请稍后再试';
						setTimeout(function(){
							undatacall();
						}, 100);
					}
				};
				undatacall();
		}, parent.$.fn.colorbox );
	} catch (e) { 
		return false; 
	}
	return true;
};

/**
 * 这个方法是比较手机里的应用与当前data集合里的是否存在
 * @param array data
 * appid
 * version
 * versioncode
 * @returns array result
 */
function checkapp(data,callback) {
	if(!data) return false;
	var cdata = data;
	var phone = getCurrentPhone();
	if(!phone) return;
	var imei = phone.imei;
	var phonetype = phone.phonetype;
	getAppList(null, function(data, status){
		if (status != 'ok') return;
		var sql = "SELECT uid,name,vendor,version,system FROM `app` WHERE imei=?";
		var argv = [imei];
		if(1 == cdata.length){
			sql += " and uid=?";
			argv = [imei, cdata[0].appid];
		}
		WebAppDatabase(sql, argv, function(result, data){
			if (!result) return;
			var rows = new Array();
			var arr_result = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				if((phonetype == phoneOptions.symbian)){
					var appid = row['name'];
				}else{
					var appid = row['uid'];
				}
				rows[appid] = {
					system		:	row['system'],
					version		:	row['version'],
					versioncode	:	row['vendor']
				};
			}
			
			for(var j = 0; j < cdata.length; j++){
				var appid = cdata[j]['appid'];
				var versioncode_j = cdata[j]['versioncode'];
				//判断相同软件是否存在手机
				if(rows && rows[appid]){
					//系统内置软件
					//var system = rows[appid]['system'];
					var versioncode_i = rows[appid]['versioncode'];//数据库取出
					/*if (system && system == 1)  {
						arr_result[appid] = -1;
					}*/
					//拥有versioncode的手机设备需要比较
					if(phonetype == phoneOptions.ios){
						var version_i = rows[appid]['version'];
						var arr_versioncode_i = version_i.replace(/([a-z]|[A-Z]+)/g,"").split(".");
						var arr_versioncode_j = versioncode_j.replace(/([a-z]|[A-Z]+)/g,"").split(".");
						var version_length = (arr_versioncode_i.length >= arr_versioncode_j.length ? arr_versioncode_i.length : arr_versioncode_j.length);
						for(var i = 0; i < version_length; i++){
							var page_soft_j = parseInt(arr_versioncode_j[i]);
							if(arr_versioncode_i.length <= i){var phone_soft_i = 0;}else{var phone_soft_i = parseInt(arr_versioncode_i[i]);}//版本号右侧不够比较均用0代替
							if(arr_versioncode_j.length <= i){var page_soft_j = 0;}else{var page_soft_j = parseInt(arr_versioncode_j[i]);}//版本号右侧不够比较均用0代替
							if(phone_soft_i < page_soft_j){
								arr_result[appid] = 1;break;
							}else if(phone_soft_i == page_soft_j){
								arr_result[appid] = -1;continue;
							}else{
								arr_result[appid] = -1;break;
							}
						}
						
					}else{
						if(versioncode_i && versioncode_j){
							if (versioncode_i < parseInt(versioncode_j)) {
								arr_result[appid] = 1;	// update
							}else{
								arr_result[appid] = -1;	// disabled
							}
						} else {
							arr_result[appid] = 0; // buy
						}
					}
					if(phonetype == phoneOptions.symbian){
						arr_result[appid] = -1;
					}
				}else{
					arr_result[appid] = 0;
				}
			}
			if(callback){callback( arr_result);}
		});
	}, true);
};

var sendrecoverstat = function(type,resultcode,succcount,failcount){
	jQuery.post('/recovernotice.php', {type:type,resultcode:resultcode,succcount:succcount,failcount:failcount}, function(data){
		//alert(type + '+' + resultcode + '+' + succcount + '+' + failcount);
	},'json');
};


function addTaskList(data,phone){
	if (checkphone() == false) { return false; }
	phone = phone || getCurrentPhone();
	var taskList = data;
	var undatalist = taskList;
	var undataleng = taskList.length;
	var failedlist = [];
	var undatacall = function() {
		if (!undatalist || undatalist.length == 0) {
			var imei = ((phone && phone.imei) ? phone.imei || '' : '');
			delBuyCar(phone, [] ,function(result,data){
				if (!result) return;
				setShoppingCartInfo(null, 0, function(data, status){
					if (status != 'ok') return;
				});
				//setTimeout(function(){
					document.location.href='/appstore/clear-cart.html';
				//	},1000*(undataleng-1));
			});
			delete taskList;
			return; 
		}
		var item = undatalist.shift(undatalist.length, 1);
		if (item.groupid){
			if ($.trim(item.url) == ''){
				$.floatingMessage('<span class="s wrong"><span class="cblue">' + item.title + '</span>  无法添加到购物车</span><br>没有找到适配的文件', {time:3000, align:"right", verticalAlign:"bottom"}); 
				return; 
			}
			//addTaskPack(item.id, item.url, item.title, item.groupid , item.groupname, item.groupsid);
			$.floatingMessage('<span class="s addtodown"><span class="cblue">' + item.groupname + ' - ' + item.title + '</span>  已开始下载，详情请到下载任务查看。</span>', {time:3000, align:"right", verticalAlign:"bottom"});
		}else{
			var data = {
				id : item.id,
				url : item.url,
				name : item.title,
				appid : item.appid,
				installlocate : item.installlocate
			};
			addTask(data);			
		}
		setTimeout(undatacall, 1000);
	};
	undatacall();
}

/*addTash tips控制是否弹出对话框 true是不弹*/
function addTask(data, phone, tips){
	var id = data.id;
	var url = data.url;
	var name = data.name;
	var appid = data.appid;
	var installlocate = data.installlocate || 0;
	var is_sc = data.is_sc;
	var businesstype = data.businesstype || 1;
	var isbiz = data.isbiz || 0;
	var groupid = data.groupid || 0;
	var dt = data.dt || 0;
	if (!id) return this;
	if (!url) return this;
	if (!name) return this;
	if (typeof(installlocate) == 'undefined' || installlocate == ''){
		installlocate = 0;
	}
	if(1 == is_sc){
		var imei = '0000000000000000';
	}else{
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		
		var imei = ((phone && phone.imei) ? phone.imei || '' : '');
	}
	if (/&ref=$/.test(url)) {
		url += encodeURIComponent(document.referrer);
	}
	//var data = (name||'') + '|' + ((formatFileExt(url)||'') + (formatFileType(url)||'')) + '|' + (formatFileExt(url)||'') + '|' + (formatFileType(url)||'') + '|' + (imei||'');
	var data = (name||'') + '|apk应用程序' + '|apk' + '|应用程序' + '|' + (imei||'');
	if (url.indexOf("&update=1") > 0) {
		var update = 1;
	}else {
		var update = 0;
	}
	//按照文件类型在di前面加前缀
	var filetype = formatFileType(url);
	if  (filetype && filetype == '图片') {
		id = 'p' + id;
	} else if (filetype && filetype == '视频') {
		id = 'v' + id;
	} else if (filetype && filetype == '音频') {
		id = 'm' + id;
	} else if (filetype && filetype == '文档') {
		id = 'b' + id;
	} else if (filetype && filetype == '应用程序') {
		if(GetQueryString('iscrack') == 1){
			id = 'is' + id;
		}else{
			id = 's' + id;
		}
	} else {
		id = id;
	}

	var task  = '{"protocoltype":"loaditem", "loaditem":[{' + '"id":"' + (id||0) + '",' + '"url":"' + (url||'') + '",' + '"appid":"' + (appid||'') + '",' + '"data":"' + (data||'') + '",' + '"type":"appdown",' + '"installto":"' + installlocate + '",' + '"businesstype":"' + businesstype + '",' + '"isbiz":"' + isbiz + '",' + '"update":"' + update + '",' + '"groupid":"'+ groupid + '",' + '"dt":"' + dt + '"}]}';
	var downurl = 'dxt://' + task;
	initDownload(phone, downurl, function(data, status){
		if(status != 'ok') return;
		if(!tips || tips == false){
			$.floatingMessage('<span class="s addtodown"><span class="cblue">' + name + '</span>  已开始下载，详情请到下载任务查看。</span>', {time:3000, align:"right", verticalAlign:"bottom"});	
		}
	},is_sc);
	log("下载传壳数据:"+task);
}

var gotopage = function(a) {
	if (a.disabled) return false;
	return gotopageurl(a.href);
};

var gotopageurl = function(url) {
	location.href = url;
	return false;
};

function StringBuffer()
{ 
    this.buffer = []; 
} 

StringBuffer.prototype.append = function append(string)
{ 
    this.buffer.push(string); 
    return this; 
}; 

StringBuffer.prototype.toString = function toString()
{ 
    return this.buffer.join(""); 
}; 

var Base64 = {
    codex : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    encode : function (input)
    {
        var output = new StringBuffer();
        var enumerator = new Utf8EncodeEnumerator(input);
        while (enumerator.moveNext())
        {
            var chr1 = enumerator.current;
            enumerator.moveNext();
            var chr2 = enumerator.current;
            enumerator.moveNext();
            var chr3 = enumerator.current;
            var enc1 = chr1 >> 2;
            var enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            var enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            var enc4 = chr3 & 63;
            if (isNaN(chr2))
            {
                enc3 = enc4 = 64;
            }
            else if (isNaN(chr3))
            {
                enc4 = 64;
            }
            output.append(this.codex.charAt(enc1) + this.codex.charAt(enc2) + this.codex.charAt(enc3) + this.codex.charAt(enc4));
        }
        return output.toString();
    },
    decode : function (input)
    {
        var output = new StringBuffer();
        var enumerator = new Base64DecodeEnumerator(input);
        while (enumerator.moveNext())
        {
            var charCode = enumerator.current;
            if (charCode < 128)
                output.append(String.fromCharCode(charCode));
            else if ((charCode > 191) && (charCode < 224))
            {
                enumerator.moveNext();
                var charCode2 = enumerator.current;

                output.append(String.fromCharCode(((charCode & 31) << 6) | (charCode2 & 63)));
            }
            else
            {
                enumerator.moveNext();
                var charCode2 = enumerator.current;

                enumerator.moveNext();
                var charCode3 = enumerator.current;

                output.append(String.fromCharCode(((charCode & 15) << 12) | ((charCode2 & 63) << 6) | (charCode3 & 63)));
            }
        }
        return output.toString();
    }
};
function Utf8EncodeEnumerator(input)
{
    this._input = input;
    this._index = -1;
    this._buffer = [];
}
Utf8EncodeEnumerator.prototype =
{
    current: Number.NaN,
    moveNext: function()
    {
        if (this._buffer.length > 0)
        {
            this.current = this._buffer.shift();
            return true;
        }
        else if (this._index >= (this._input.length - 1))
        {
            this.current = Number.NaN;
            return false;
        }
        else
        {
            var charCode = this._input.charCodeAt(++this._index);

            // "\r\n" -> "\n"
            //
            if ((charCode == 13) && (this._input.charCodeAt(this._index + 1) == 10))
            {
                charCode = 10;
                this._index += 2;
            }

            if (charCode < 128)
            {
                this.current = charCode;
            }
            else if ((charCode > 127) && (charCode < 2048))
            {
                this.current = (charCode >> 6) | 192;
                this._buffer.push((charCode & 63) | 128);
            }
            else
            {
                this.current = (charCode >> 12) | 224;
                this._buffer.push(((charCode >> 6) & 63) | 128);
                this._buffer.push((charCode & 63) | 128);
            }

            return true;
        }
    }
};

function Base64DecodeEnumerator(input)
{
    this._input = input;
    this._index = -1;
    this._buffer = [];
}

Base64DecodeEnumerator.prototype =
{
    current: 64,
    moveNext: function()
    {
        if (this._buffer.length > 0)
        {
            this.current = this._buffer.shift();
            return true;
        }
        else if (this._index >= (this._input.length - 1))
        {
            this.current = 64;
            return false;
        }
        else
        {
            var enc1 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc2 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc3 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var enc4 = Base64.codex.indexOf(this._input.charAt(++this._index));
            var chr1 = (enc1 << 2) | (enc2 >> 4);
            var chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            var chr3 = ((enc3 & 3) << 6) | enc4;
            this.current = chr1;
            if (enc3 != 64)
                this._buffer.push(chr2);

            if (enc4 != 64)
                this._buffer.push(chr3);
            return true;
        }
    }
};
var base64 = Base64;

function GetQueryString(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = document.location.search.substr(1).match(reg);
	if (r!=null) return unescape(r[2]); return null;
}
/**
 * js 分页
 * @param row
 * 			count		每页数据量
 * 			totalcount  总共数据量
 * 			pageno      当前分页号
 * @param string		绑定js页面跳转所需的按钮classname前缀
 * @returns {String}
 */
function getListPagingJS(row, string){
	var count = row.count;
	var totalcount = row.totalcount;
	var pageno = row.pageno;
	
	var totalpage= Math.ceil(totalcount / count);
	
	var html = '<div id="wgt-paging" class="wgt-paging"><div class="paging">';
	if(totalcount > count){
		html += '<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td nowrap="nowrap" class="tc" id="pagenum" style="padding:20px 20px;">';
		html += '<div class="lf">共 ' + totalpage + ' 页';
		if(pageno > 1){
			html += '<a href="" class="firstpage ' + string + 'firstpage"><span>第一页</span></a>';
			html += '<a href="" class="prevpage ' + string + 'prevpage"><span>上一页</span></a>';
		}else{
			html += '<a href="javascript:return false;"  disabled="disabled" class="firstpage"><span>第一页</span></a>';
			html += '<a href="javascript:return false;"  disabled="disabled" class="prevpage"><span>上一页</span></a>';
		}
		html += '</div>';
		html += '<div class="pagenums">';
		var pages = Math.ceil(totalcount/count);
		var size = new Array();
		var k = 0;
		if (pageno < 5) {
			for (var __i = 1; __i < 11; __i++) {
				if (__i <= pages) {
					size[k] = __i;
					k++;
				}
			}
		} else if (pageno > (pages - 5)) {
			for (var __i = pages - 9; __i <= pages; __i++) {
				if (__i > 0) {
					size[k] = __i;
					k++;
				}
			}	
		} else {
			for (var __i = pageno - 4; __i < pageno + 6; __i++) {
				size[k] = __i;
				k++;
			}	
		}
		$.each(size,function(__i,__pageno){
			if(__pageno == pageno){
				html += '<a href="javascript:return false;" class="active" disabled="disabled"><span>' + __pageno + '</span></a>';
			}else{
				html += '<a href="" class="' + string + 'pageno"><span>' + __pageno + '</span></a>';
			}
		});
		html += '</div>';
		html += '<div class="lf">';
		if(pageno >= pages){
			html += '<a href="javascript:return false;"  disabled="disabled" class="nextpage"><span>下一页</span></a>';
			html += '<a href="javascript:return false;"  disabled="disabled" class="lastpage"><span>最末页</span></a>';
		}else{
			html += '<a href="" class="nextpage ' + string + 'nextpage"><span>下一页</span></a>';
			html += '<a href="" class="lastpage ' + string + 'lastpage"><span>最末页</span></a>';
		}
		html += '</div>';
		html += '</td></tr></table>';
	}
	html += '</div></div>';
	return html;
}

/*
功能：验证身份证号码是否有效
提 示信息：未输入或输入身份证号不正确！
使用：validateIdCard(obj)
返回：0,1
*/
function validateIdCard(obj)
{
	var strIDno = obj;
	if(!/^\d{17}(\d|x)$/i.test(strIDno)&&!/^\d{15}$/i.test(strIDno))
		return 1; //非法身份证号

	return 0;
}