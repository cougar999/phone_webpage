var _AIPI_KEY = '<!--{$assign.aipikey}-->';

function _AIPI_getInterface(name, callback) {
	window.external.strInterfaceName = name;
	WebAppCall('GetInterface', function(data, status){
		if (status == 'ok' && data == '1') { 
			if (callback) callback(true); 
		}
	});
}
function _AIPI_getCurrentPhone(){
	if (typeof WebAppLocalStorage == 'undefined') return null;
	var phoneInfo = WebAppLocalStorage("aipi" + _AIPI_KEY);
	if (!phoneInfo) return null;
	return JSON.parse(phoneInfo);
}

function _AIPI_addDownload(phone, info, callback) {
	var func = "InitDownload";
	_AIPI_getInterface(func, function(result){
		if (!result) return;
		phone = phone || _AIPI_getCurrentPhone();
		if (!phone && !phone.imei) return;
		var imei = phone.imei;
		window.external.strPhoneImei = imei;
		window.external.strDownloadInfo = info;
		WebAppCall(func, callback);
	});
}

function _AIPI_formatFileType(path) {
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


function _AIPI_formatFileExt (path) {
	var ext = '';
	var index = path.indexOf('?');
	if (index > -1) { ext = path.substr(0, index); }
	else { ext = path; }
	var index = ext.lastIndexOf('.');
	if (index > -1) {
		ext = ext.substr(index + 1);
	}
	return ext.toLowerCase();
};

var _AIPI_hex_chr = "0123456789abcdef";
function _AIPI_rhex(num)
{
  str = "";
  for(j = 0; j <= 3; j++)
    str += _AIPI_hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) + _AIPI_hex_chr.charAt((num >> (j * 8)) & 0x0F);
  return str;
}

function _AIPI_str2blks_MD5(str)
{
  nblk = ((str.length + 8) >> 6) + 1;
  blks = new Array(nblk * 16);
  for(i = 0; i < nblk * 16; i++) blks[i] = 0;
  for(i = 0; i < str.length; i++)
    blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8);
  blks[i >> 2] |= 0x80 << ((i % 4) * 8);
  blks[nblk * 16 - 2] = str.length * 8;
  return blks;
}

function _AIPI_add(x, y)
{
  var lsw = (x & 0xFFFF) + (y & 0xFFFF);
  var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
  return (msw << 16) | (lsw & 0xFFFF);
}

function _AIPI_rol(num, cnt)
{
  return (num << cnt) | (num >>> (32 - cnt));
}

function _AIPI_cmn(q, a, b, x, s, t)
{
  return _AIPI_add(_AIPI_rol(_AIPI_add(_AIPI_add(a, q), _AIPI_add(x, t)), s), b);
}
function _AIPI_ff(a, b, c, d, x, s, t)
{
  return _AIPI_cmn((b & c) | ((~b) & d), a, b, x, s, t);
}
function _AIPI_gg(a, b, c, d, x, s, t)
{
  return _AIPI_cmn((b & d) | (c & (~d)), a, b, x, s, t);
}
function _AIPI_hh(a, b, c, d, x, s, t)
{
  return _AIPI_cmn(b ^ c ^ d, a, b, x, s, t);
}
function _AIPI_ii(a, b, c, d, x, s, t)
{
  return _AIPI_cmn(c ^ (b | (~d)), a, b, x, s, t);
}

function _AIPI_calcMD5(str)
{
  x = _AIPI_str2blks_MD5(str);
  a =  1732584193;
  b = -271733879;
  c = -1732584194;
  d =  271733878;

  for(i = 0; i < x.length; i += 16)
  {
    olda = a;
    oldb = b;
    oldc = c;
    oldd = d;

    a = _AIPI_ff(a, b, c, d, x[i+ 0], 7 , -680876936);
    d = _AIPI_ff(d, a, b, c, x[i+ 1], 12, -389564586);
    c = _AIPI_ff(c, d, a, b, x[i+ 2], 17,  606105819);
    b = _AIPI_ff(b, c, d, a, x[i+ 3], 22, -1044525330);
    a = _AIPI_ff(a, b, c, d, x[i+ 4], 7 , -176418897);
    d = _AIPI_ff(d, a, b, c, x[i+ 5], 12,  1200080426);
    c = _AIPI_ff(c, d, a, b, x[i+ 6], 17, -1473231341);
    b = _AIPI_ff(b, c, d, a, x[i+ 7], 22, -45705983);
    a = _AIPI_ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
    d = _AIPI_ff(d, a, b, c, x[i+ 9], 12, -1958414417);
    c = _AIPI_ff(c, d, a, b, x[i+10], 17, -42063);
    b = _AIPI_ff(b, c, d, a, x[i+11], 22, -1990404162);
    a = _AIPI_ff(a, b, c, d, x[i+12], 7 ,  1804603682);
    d = _AIPI_ff(d, a, b, c, x[i+13], 12, -40341101);
    c = _AIPI_ff(c, d, a, b, x[i+14], 17, -1502002290);
    b = _AIPI_ff(b, c, d, a, x[i+15], 22,  1236535329);    

    a = _AIPI_gg(a, b, c, d, x[i+ 1], 5 , -165796510);
    d = _AIPI_gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
    c = _AIPI_gg(c, d, a, b, x[i+11], 14,  643717713);
    b = _AIPI_gg(b, c, d, a, x[i+ 0], 20, -373897302);
    a = _AIPI_gg(a, b, c, d, x[i+ 5], 5 , -701558691);
    d = _AIPI_gg(d, a, b, c, x[i+10], 9 ,  38016083);
    c = _AIPI_gg(c, d, a, b, x[i+15], 14, -660478335);
    b = _AIPI_gg(b, c, d, a, x[i+ 4], 20, -405537848);
    a = _AIPI_gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
    d = _AIPI_gg(d, a, b, c, x[i+14], 9 , -1019803690);
    c = _AIPI_gg(c, d, a, b, x[i+ 3], 14, -187363961);
    b = _AIPI_gg(b, c, d, a, x[i+ 8], 20,  1163531501);
    a = _AIPI_gg(a, b, c, d, x[i+13], 5 , -1444681467);
    d = _AIPI_gg(d, a, b, c, x[i+ 2], 9 , -51403784);
    c = _AIPI_gg(c, d, a, b, x[i+ 7], 14,  1735328473);
    b = _AIPI_gg(b, c, d, a, x[i+12], 20, -1926607734);
    
    a = _AIPI_hh(a, b, c, d, x[i+ 5], 4 , -378558);
    d = _AIPI_hh(d, a, b, c, x[i+ 8], 11, -2022574463);
    c = _AIPI_hh(c, d, a, b, x[i+11], 16,  1839030562);
    b = _AIPI_hh(b, c, d, a, x[i+14], 23, -35309556);
    a = _AIPI_hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
    d = _AIPI_hh(d, a, b, c, x[i+ 4], 11,  1272893353);
    c = _AIPI_hh(c, d, a, b, x[i+ 7], 16, -155497632);
    b = _AIPI_hh(b, c, d, a, x[i+10], 23, -1094730640);
    a = _AIPI_hh(a, b, c, d, x[i+13], 4 ,  681279174);
    d = _AIPI_hh(d, a, b, c, x[i+ 0], 11, -358537222);
    c = _AIPI_hh(c, d, a, b, x[i+ 3], 16, -722521979);
    b = _AIPI_hh(b, c, d, a, x[i+ 6], 23,  76029189);
    a = _AIPI_hh(a, b, c, d, x[i+ 9], 4 , -640364487);
    d = _AIPI_hh(d, a, b, c, x[i+12], 11, -421815835);
    c = _AIPI_hh(c, d, a, b, x[i+15], 16,  530742520);
    b = _AIPI_hh(b, c, d, a, x[i+ 2], 23, -995338651);

    a = _AIPI_ii(a, b, c, d, x[i+ 0], 6 , -198630844);
    d = _AIPI_ii(d, a, b, c, x[i+ 7], 10,  1126891415);
    c = _AIPI_ii(c, d, a, b, x[i+14], 15, -1416354905);
    b = _AIPI_ii(b, c, d, a, x[i+ 5], 21, -57434055);
    a = _AIPI_ii(a, b, c, d, x[i+12], 6 ,  1700485571);
    d = _AIPI_ii(d, a, b, c, x[i+ 3], 10, -1894986606);
    c = _AIPI_ii(c, d, a, b, x[i+10], 15, -1051523);
    b = _AIPI_ii(b, c, d, a, x[i+ 1], 21, -2054922799);
    a = _AIPI_ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
    d = _AIPI_ii(d, a, b, c, x[i+15], 10, -30611744);
    c = _AIPI_ii(c, d, a, b, x[i+ 6], 15, -1560198380);
    b = _AIPI_ii(b, c, d, a, x[i+13], 21,  1309151649);
    a = _AIPI_ii(a, b, c, d, x[i+ 4], 6 , -145523070);
    d = _AIPI_ii(d, a, b, c, x[i+11], 10, -1120210379);
    c = _AIPI_ii(c, d, a, b, x[i+ 2], 15,  718787259);
    b = _AIPI_ii(b, c, d, a, x[i+ 9], 21, -343485551);

    a = _AIPI_add(a, olda);
    b = _AIPI_add(b, oldb);
    c = _AIPI_add(c, oldc);
    d = _AIPI_add(d, oldd);
  }
  return _AIPI_rhex(a) + _AIPI_rhex(b) + _AIPI_rhex(c) + _AIPI_rhex(d);
}

var _ApMessage = false;
function ApMessage(title, okcallback, message) {
	if (_ApMessage) return;
	else _ApMessage = true;
	if (!message) message = '';
	var content = '<div style="text-align:center; color: #3C3C3C; font-size: 14px; line-height: 130%; font-family:Microsoft Yahei;">' + 
		'<div><p style="margin:0;padding:15px 0;"><span id="messagetit">' + title +'</span></p></div>' +
		'<div><p style="margin:0;padding:0;">' + message + '</p></div>' +
		'<p style="margin:0;padding:0;"><input id="messageok" type="button" value="确定" style="padding:4px; font-size:13px; font-weight:700; width:121px; height:30px; text-align:center; border:none; background:transparent url(http://res1.pcr5.appdear.com/resources/img/index_bg.gif) no-repeat -2px -205px;cursor:pointer;" /></p>' +
		'</div>';
	var box = null;
	if (parent) {
		try {
			box = parent.jQuery.fn.colorbox;
			parent.jQuery.fn.colorbox({html:content,width:'600px', height:'180px', close:false, scrolling:false, overlayClose:false, opacity:0.5},function(){
				parent.jQuery('#messageok').one('click', function(){
					jQuery(this).unbind('click');
					_ApMessage = false;
					if (okcallback)	{ okcallback(box, jQuery('#messagesmsg').get(0)); }
					else { box.close(); }
				});
			});
		} catch(ex) {
			box = jQuery.fn.colorbox;
			jQuery.fn.colorbox({html:content,width:'600px', height:'180px', close:false, scrolling:false, overlayClose:false, opacity:0.5},function(){
				jQuery('#messageok').one('click', function(){
					jQuery(this).unbind('click');
					_ApMessage = false;
					if (okcallback)	{ okcallback(box, jQuery('#messagesmsg').get(0)); }
					else { box.close(); }
				});
			});
		} 
	} else {
		box = jQuery.fn.colorbox;
		jQuery.fn.colorbox({html:content,width:'600px', height:'180px', close:false, scrolling:false, overlayClose:false, opacity:0.5},function(){
			jQuery('#messageok').one('click', function(){
				jQuery(this).unbind('click');
				_ApMessage = false;
				if (okcallback)	{ okcallback(box, jQuery('#messagesmsg').get(0)); }
				else { box.close(); }
			});
		});
	}
};


function ApAddSoft(id, url, title, callback) {
	var phone = _AIPI_getCurrentPhone();
	if (!phone || !phone['imei']) {
		ApMessage('请先连接手机再进行操作，否则无法使用此功能');
		return 0;
	}
	if (id && (typeof(id) == 'object' || typeof(id) == 'function' || typeof(id) == 'boolean')) return -1;
	if (!url || typeof(url) != 'string' || url.indexOf('http://') != 0) return -2;
	if (!title || typeof(title) != 'string') return -3;
	if (callback && typeof(callback) != 'function') return -4;
	var pos = url.indexOf('?');
	if (pos > 0) {
		var str = url.substr(0, pos);
	} else {
		var str = url;
	}
	id = _AIPI_KEY + '-' + (id || _AIPI_calcMD5(str));
	var ext = _AIPI_formatFileExt(url);
	if (!ext) return -5;
	var type = _AIPI_formatFileType(url);
	if (!type || type != '应用程序') return -6;
	if (url.indexOf('?') != 0) 
		url += '&rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	else
		url += '?rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	url = url.replace(/\"/, '\\\"');
	var data = (title||'') + '|' + ((ext||'') + (type||'')) + '|' + (ext||'') + '|' + (type||'') + '|' + (phone.imei||'');
	var task  = '{"protocoltype":"loaditem", "loaditem":[{' + '"id":"' + (id||0) + '",' + '"url":"' + (url||'') + '",' + '"appid":"' + ('') + '",' + '"data":"' + (data||'') + '",' + '"type":"appdown",' + '"installto":"' + 0 + '",' + '"update":"' + 0 + '"' + '}]}';
	var downurl = 'appdear://' + task;
	_AIPI_addDownload(phone, downurl, function(data, status){
		if (callback) {
			callback(status == 'ok');
		}
	});
	return true;
}

function ApAddMusic(id, url, title, callback) {
	var phone = _AIPI_getCurrentPhone();
	if (!phone || !phone['imei']) {
		ApMessage('请先连接手机再进行操作，否则无法使用此功能');
		return 0;
	}
	if (id && (typeof(id) == 'object' || typeof(id) == 'function' || typeof(id) == 'boolean')) return -1;
	if (!url || typeof(url) != 'string' || url.indexOf('http://') != 0) return -2;
	if (!title || typeof(title) != 'string') return -3;
	if (callback && typeof(callback) != 'function') return -4;
	var pos = url.indexOf('?');
	if (pos > 0) {
		var str = url.substr(0, pos);
	} else {
		var str = url;
	}
	id = _AIPI_KEY + '-' + (id || _AIPI_calcMD5(str));
	var ext = _AIPI_formatFileExt(url);
	if (!ext) return -5;
	var type = _AIPI_formatFileType(url);
	if (!type || type != '音频') return -6;
	title = title.replace(/[\*,\&,\\,\/,\?,\|,\:,\<,\>,"]/, ' ');
	if (url.indexOf('?') != 0) 
		url += '&rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	else
		url += '?rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	url = url.replace(/\"/, '\\\"');
	var data = (title||'') + '|' + ((ext||'') + (type||'')) + '|' + (ext||'') + '|' + (type||'') + '|' + (phone.imei||'');
	var task  = '{"protocoltype":"loaditem", "loaditem":[{' + '"id":"' + (id||0) + '",' + '"url":"' + (url||'') + '",' + '"appid":"' + ('') + '",' + '"data":"' + (data||'') + '",' + '"type":"appdown",' + '"installto":"' + 0 + '",' + '"update":"' + 0 + '"' + '}]}';
	var downurl = 'appdear://' + task;
	_AIPI_addDownload(phone, downurl, function(data, status){
		if (callback) {
			callback(status == 'ok');
		}
	});
	return true;
}

function ApAddBook(id, url, title, callback) {
	var phone = _AIPI_getCurrentPhone();
	if (!phone || !phone['imei']) {
		ApMessage('请先连接手机再进行操作，否则无法使用此功能');
		return 0;
	}
	if (id && (typeof(id) == 'object' || typeof(id) == 'function' || typeof(id) == 'boolean')) return -1;
	if (!url || typeof(url) != 'string' || url.indexOf('http://') != 0) return -2;
	if (!title || typeof(title) != 'string') return -3;
	if (callback && typeof(callback) != 'function') return -4;
	var pos = url.indexOf('?');
	if (pos > 0) {
		var str = url.substr(0, pos);
	} else {
		var str = url;
	}
	id = _AIPI_KEY + '-' + (id || _AIPI_calcMD5(str));
	var ext = _AIPI_formatFileExt(url);
	if (!ext) return -5;
	var type = _AIPI_formatFileType(url);
	if (!type || type != '文档') return -6;
	title = title.replace(/[\*,\&,\\,\/,\?,\|,\:,\<,\>,"]/, ' ');
	if (url.indexOf('?') != 0) 
		url += '&rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	else
		url += '?rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	url = url.replace(/\"/, '\\\"');
	var data = (title||'') + '|' + ((ext||'') + (type||'')) + '|' + (ext||'') + '|' + (type||'') + '|' + (phone.imei||'');
	var task  = '{"protocoltype":"loaditem", "loaditem":[{' + '"id":"' + (id||0) + '",' + '"url":"' + (url||'') + '",' + '"appid":"' + ('') + '",' + '"data":"' + (data||'') + '",' + '"type":"appdown",' + '"installto":"' + 0 + '",' + '"update":"' + 0 + '"' + '}]}';
	var downurl = 'appdear://' + task;
	_AIPI_addDownload(phone, downurl, function(data, status){
		if (callback) {
			callback(status == 'ok');
		}
	});
	return true;
}

function ApAddVideo(id, url, title, callback) {
	var phone = _AIPI_getCurrentPhone();
	if (!phone || !phone['imei']) {
		ApMessage('请先连接手机再进行操作，否则无法使用此功能');
		return 0;
	}
	if (id && (typeof(id) == 'object' || typeof(id) == 'function' || typeof(id) == 'boolean')) return -1;
	if (!url || typeof(url) != 'string' || url.indexOf('http://') != 0) return -2;
	if (!title || typeof(title) != 'string') return -3;
	if (callback && typeof(callback) != 'function') return -4;
	var pos = url.indexOf('?');
	if (pos > 0) {
		var str = url.substr(0, pos);
	} else {
		var str = url;
	}
	id = _AIPI_KEY + '-' + (id || _AIPI_calcMD5(str));
	var ext = _AIPI_formatFileExt(url);
	if (!ext) return -5;
	var type = _AIPI_formatFileType(url);
	if (!type || type != '视频') return -6;
	title = title.replace(/[\*,\&,\\,\/,\?,\|,\:,\<,\>,"]/, ' ');
	if (url.indexOf('?') != 0) 
		url += '&rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	else
		url += '?rsid=' + encodeURI(id) + '&rsname=' + encodeURI(title);
	url = url.replace(/\"/, '\\\"');
	var data = (title||'') + '|' + ((ext||'') + (type||'')) + '|' + (ext||'') + '|' + (type||'') + '|' + (phone.imei||'');
	var task  = '{"protocoltype":"loaditem", "loaditem":[{' + '"id":"' + (id||0) + '",' + '"url":"' + (url||'') + '",' + '"appid":"' + ('') + '",' + '"data":"' + (data||'') + '",' + '"type":"appdown",' + '"installto":"' + 0 + '",' + '"update":"' + 0 + '"' + '}]}';
	var downurl = 'appdear://' + task;
	_AIPI_addDownload(phone, downurl, function(data, status){
		if (callback) {
			callback(status == 'ok');
		}
	});
	return true;
}

if (/imei=/.test(location.href)) {
	var pos = location.href.indexOf('?');
	if (location.href.indexOf('?') > -1) {
		var param = location.href.substring(pos + 1);
		var array = param.split(/&/);
		var map = {};
		for (var i = 0; i < array.length; i++) {
			var item = array[i].split('=');
			var key = item[0] || '';
			var val = item[1] || '';
			map[key]= val; 
		}
		if (typeof WebAppLocalStorage == 'function') {
			WebAppLocalStorage("aipi" + _AIPI_KEY, JSON.stringify(map));
		}
	}
}

if (typeof jQuery != 'undefined') {
	if (typeof jQuery.colorbox == 'undefined') {
		document.write('<link href="http://res3.pcr5.appdear.com/resources/lib/colorbox/colorbox.css" rel="stylesheet" type="text/css" />');
		document.write('<script type="text/javascript" src="http://res4.pcr5.appdear.com/resources/lib/colorbox/jquery.colorbox.js"></script>');
	}
}