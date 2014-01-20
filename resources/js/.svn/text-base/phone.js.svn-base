function getInterface(name, callback) {
	window.external.strInterfaceName = name;
	WebAppCall('GetInterface', function(data, status){
		if (status == 'ok' && data == '1') { 
			if (callback) callback(true); 
		}
	});
}

function getPhoneInfo(phone){
	var phoneInfo = WebAppLocalStorage(phone);
	if (!phoneInfo) return null;
	return JSON.parse(phoneInfo);
}

function getCurrentPhone(){
	var phoneInfo = WebAppLocalStorage("phone1");
	if (!phoneInfo) return null;
	return JSON.parse(phoneInfo).phone1;
}

function getContactList(phone, callback, ingore, flag) {
	var func = "GetContactList";
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		if (flag == 1 || WebAppSessionStorage(location.href) == "true") {
			window.external.strFlag = 1;
		} else {
			window.external.strFlag = 0;
		}
		WebAppCall(func, callback);
		WebAppSessionStorage(location.href, false);
	});
	//callback({}, "ok"); 
}

function getAppList(phone, callback, ingore, flag) {
	var func = "GetAppList";
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		if (flag == 1 || WebAppSessionStorage(location.href) == "true") {
			window.external.strFlag = 1;
		} else {
			window.external.strFlag = 0;
		}
		WebAppCall(func, callback);
		WebAppSessionStorage(location.href, false);
	});
	//callback({}, "ok"); 
}

function getSMSList(phone, callback, ingore, flag) {
	var func = "GetSMSList";
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		if (flag == 1 || WebAppSessionStorage(location.href) == "true") {
			window.external.strFlag = 1;
		} else {
			window.external.strFlag = 0;
		}
		WebAppCall(func, callback);
		WebAppSessionStorage(location.href, false);
	});
	//callback({}, "ok"); 
}

function getMediaFileList(phone, type, callback, ingore, flag) {
	var func = "GetMediaFileList";
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.nType = type;
		if (flag == 1 || WebAppSessionStorage(location.href) == "true") {
			window.external.strFlag = 1;
		} else {
			window.external.strFlag = 0;
		}
		WebAppCall(func, callback);
		WebAppSessionStorage(location.href, false);
	});
	//callback({}, "ok"); //
}


//读取各种内容数量，从localstorage中读取的方法，适用于启动加载
function getContactCount(phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var contectcount = WebAppLocalStorage('contectcount_'+imei) || '0';
	if (callback) callback(contectcount);
	log('contectcount：' + contectcount);
}

function getSMSCount(phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var smscount = WebAppLocalStorage('smscount_'+imei) || '0';
	if (callback) callback(smscount);
	log('smscount：' + smscount);
}

function getAppCount(phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var appcount = WebAppLocalStorage('appcount_'+imei) || '0';
	if (callback) callback(appcount);
	log('appcount:' + appcount);
}

function getDocCount (phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var doccount = WebAppLocalStorage('mediafilecount_3_'+imei) || '0';
	if (callback) callback(doccount); 
	log('doccount:' + doccount);
}

function getVideoCount (phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var videocount = WebAppLocalStorage('mediafilecount_1_'+imei) || '0';
	if (callback) callback(videocount); 
	log('videocount:' + videocount);
}

function getMusicCount (phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var musiccount = WebAppLocalStorage('mediafilecount_2_'+imei) || '0';
	if (callback) callback(musiccount); 
	log('musiccount:' + musiccount);
}

function getImgCount (phone, callback){
	var imei = phone.imei || getCurrentPhone().imei;
	var imgcount = WebAppLocalStorage('mediafilecount_4_'+imei) || '0';
	if (callback) callback(imgcount); 
	log('imgcount:' + imgcount);
}

//获取各类内容的数量，用壳上的方法，适用于读取实时数据
function getLiveAppCount(phone, callback){
	var func = "GetAppCount";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		WebAppCall(func, callback);
	});
	//callback(1, "ok"); //
}

function getLiveContactCount(phone, callback){
	var func = "GetContactCount";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		WebAppCall(func, callback);
	});
	//callback(1, "ok"); //
}

function getLiveSMSCount(phone, callback){
	var func = "GetSMSCount";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		WebAppCall(func, callback);
	});
	//callback({}, "ok"); //
}

function getLiveMediaFileCount(phone, type, path, callback){
	var func = "GetMediaFileCount";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.nType = type;
		window.external.strPath = path;
		WebAppCall(func, callback);
	});
	//callback({}, "ok"); //
}

function initDownload (phone, info, callback, issc) {
	var func = "InitDownload";
	getInterface(func, function(result){
		if (!result) return;
		if (issc) {
			var imei ='0000000000000000';
		} else {
			phone = phone || getCurrentPhone();
			if (!phone && !phone.imei) return;
			var imei = phone.imei;
		}
		window.external.strPhoneImei = imei;
		window.external.strDownloadInfo = info;
		WebAppCall(func, callback);
	});
	//callback({}, "ok"); //
}

function appUninstall(phone, name, uid, callback) {
	var func = "AppUninstall";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strAppName = name;
		window.external.strAppUID = uid;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function moveApp2Mem(phone, appid, callback) {
	var func = "MoveApp2Mem";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strAppId = appid;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function moveApp2SD(phone, appid, callback) {
	var func = "MoveApp2SD";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strAppId = appid;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function delContact(phone, id, folder, callback) {
	var func = "DelContact";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.nIndex = id;
		window.external.nFolder = folder;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function delSMS(phone, id, folder, callback) {
	var func = "DelSMS";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.nIndex = id;
		window.external.nFolder = folder;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function delFile(phone, file, name, path, callback) {
	var func = "DelFile";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.sFile = fixNamePUN(file);
		window.external.sPath = path;
		window.external.sName = fixNamePUN(name);
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); //
}

function fileMultiCopyToPC (phone, src, target, callback) {
	var func = "MultiFileCopyToPC";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strSourceFiles = src;
		window.external.strTargetFile = target;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function addContact (phone, info, callback) {
	var func = "AddContact";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strContactInfo = info;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function setSMS (phone, info, callback) {
	var func = "SetSMS";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strSmsInfo = info;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function addSMS (phone, info, callback) {
	var func = "AddSMS";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strSmsInfo = info;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok'); 
}

function setShoppingCartInfo(phone, info, callback){
	var func = "SetShoppingCartInfo";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		window.external.strPhoneImei = phone.imei;
		window.external.strCartInfo = info;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok');
}

function setDataCache(phone, key, val, callback){
	var func = "SetDataCache";
	getInterface(func, function(result){
		if (!result) return;
		phone = phone || getCurrentPhone();
		//if (!phone && !phone.imei) return;
		window.external.strPhoneImei = (phone ? (phone.imei || '') : '');
		window.external.strKey = key;
		window.external.strData = val;
		WebAppCall(func, callback);
	});
	//callback(1, 'ok');
}

function getDownloadFileIsExist( sid, url, callback){
	var func = "GetDownloadFileIsExist";
	getInterface(func, function(result){
		if (!result) return;
		window.external.strUrl = url;
		window.external.strId = sid;
		WebAppCall(func, callback);
	});
}

function getAppLocalIsReady(callback){
	var func = "GetAppLocalIsReady";
	getInterface(func, function(result){
		if (!result) return;
		WebAppCall(func, callback);
	});
}

function appInstallByLocal(sid, callback){
	var func = "AppInstallByLocal";
	getInterface(func, function(result){
		if (!result) return;
		window.external.strId = sid;
		WebAppCall(func, callback);
	});
}

function openRegister(callback){
	var func = "OpenRegister";
	getInterface(func, function(result){
		if (!result) return;
		WebAppCall(func, callback);
	});
}

function registerFinish(name, password, callback){
	var func = "RegisterFinish";
	getInterface(func, function(result){
		if (!result) return;
		window.external.strName = name;
		window.external.strPassword = password;
		WebAppCall(func, callback);
	});
}
function getQuestMessage(callback){
	var func = "GetQuestMessage";
	getInterface(func, function(result){
		if (!result) return;
		window.external.module = "";
		window.external.func = func;
		window.external.result = null;
		window.external.data = null;
		window.external.data1 = null;
		window.external.data2 = null;
		var result = window.external.module + '_' + window.external.func;
		var listener = function(event){
			if (event.result == 'ok') { 
				//document.removeEventListener(result, listener, false);
			}
			if (event.result == 'ok' && callback) { 
				callback(event.data, event.result, event.data1, event.data2); 
			}
		};
		log('WebAppCall[' + result + ' dispatchEvent]');
		document.addEventListener(result, listener, false);
		if (parent != self) {
			parent.document.addEventListener(result, listener, false);
		}
		var event = document.createEvent("Event"); 
		event.initEvent("webapp", true, true);
		document.dispatchEvent(event);
	});
}
function openRegister(callback){
	var func = "OpenRegister";
	getInterface(func, function(result){
		if (!result) return;
		WebAppCall(func, callback);
	});
}
