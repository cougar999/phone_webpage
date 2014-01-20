$(document).ready(function(){
	var data = getCurrentPhone();
	if (data) {
		if (data.phonetype == phoneOptions.ios) {
			//ios苹果手机
			$('#ios_logo_big').attr('src', data.imgurl ? data.imgurl + '_sf_160x1000.png' : 'http://' + _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/mobiledef.jpg');
			$('#iosbasic, #mb_btm').show();
			$('#iosinfo').fadeIn();
			$('#ios_name').text(data.hname);
			
			//填写信息
			$('#ios_info_nicknamett').text(data.hname);
			$('#ios_info_nickname').text(data.hname);
			$('#ios_info_os').text(data.producttype).attr('title', data.producttype);
			$('#ios_info_type').text(data.model).attr('title', data.model);
			$('#ios_info_imei').text(data.imei).attr('title', data.imei);
			$('#ios_info_color').text(data.color).attr('title', data.color);
			$('#ios_info_vision').text(data.phoneosversion).attr('title', data.phoneosversion);
			if (data.activestate == 'Activated') {
				$('#ios_info_active').text('已激活').attr('title', '已激活');
			} else {
				$('#ios_info_active').text('未激活').attr('title', '未激活');
			}
			$('#ios_info_area').text(data.location).attr('title', data.location);
			if (data.jailbreak > 0 ) {
				$('#ios_info_break').text('已越狱').attr('title', '已越狱');
			} else {
				$('#ios_info_break').text('未越狱').attr('title', '未越狱');
			}
			$('#ios_info_mac').text(data.macaddress).attr('title', data.macaddress);
			if (data.filelist){
				var disk = JSON.parse(data.filelist);
				if (disk && disk.file && disk.file.length > 0 && disk.file[0].totalmemory && disk.file[0].totalmemory != '0byte' && disk.file[0].usedmemory != '0byte') {
					var info = disk.file[1];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					var usedmemory = formatSpace(usedmemory, info.usedmemory);
					var totalmemory = formatSpace(totalmemory, info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent, '#ios_ram');
					$('#ios_ram').next('div').children('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#ios_ram').parent().css('visibility', 'visible');
				} else {
					if (phonetype == phoneOptions.symbian) {
						$('#ios_ram').next('div').children('span').text('Symbian手机不支持').next('span').text('');
					} else if (phonetype == phoneOptions.mtk) {
						$('#ios_ram').next('div').children('span').text('非智能手机不支持').next('span').text('');
					} else {
						$('#ios_ram').next('div').children('span').text('此手机不支持').next('span').text('');
					}
				}
			}
			
			dispContactCount(null, 'ios_contact', true);
			dispAppCount(null, 'ios_app', true);
			
		} else {
			$('#phoneinfo, #mb_btm').show(); 
			$('#mo_logo').attr('src', data.imgurl ? data.imgurl + '_sf_232x1000.png' : 'http://' + _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/mobiledef.jpg');
			
			if (data.filelist) {
				var disk = JSON.parse(data.filelist);
				if (disk && disk.file && disk.file.length > 0 && disk.file[0].totalmemory  && disk.file[0].totalmemory != '0byte' && disk.file[0].usedmemory != '0byte') {
					var info = disk.file[0];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					usedmemory = formatSpace(usedmemory,info.usedmemory);
					totalmemory = formatSpace(totalmemory,info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent,'#mo_ram');
					$('#mo_ram').next('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_ram').parent().show();
				} else {
					if (data.phonetype == phoneOptions.symbian) { $('#mo_ram').next('span').text('Symbian手机不支持').next('span').text('');	} 
					else if (data.phonetype == phoneOptions.mtk) { $('#mo_ram').next('span').text('非智能手机不支持').next('span').text(''); }
					else { $('#mo_ram').next('span').text('此手机不支持').next('span').text(''); }
				}
				
				//ROM 信息
				if (disk && disk.file && disk.file.length > 1 && disk.file[1].totalmemory  && disk.file[1].totalmemory != '0byte' && disk.file[1].usedmemory != '0byte') {
					var info = disk.file[1];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					usedmemory = formatSpace(usedmemory,info.usedmemory);
					totalmemory = formatSpace(totalmemory,info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent,'#mo_rom');
					$('#mo_rom').next('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_rom').parent().show();
				} else {
					if (data.phonetype == phoneOptions.symbian) { $('mo_rom').next('div').children('span').text('Symbian手机不支持').next('span').text('');	} 
					else if (data.phonetype == phoneOptions.mtk) { $('#mo_rom').next('div').children('span').text('非智能手机不支持').next('span').text(''); }
					else { $('#mo_rom').next('div').children('span').text('此手机不支持').next('span').text(''); }
				}
				
				// SDC信息
				if (disk && disk.file && disk.file.length > 2 && disk.file[2].totalmemory  && disk.file[2].totalmemory != '0byte' && disk.file[2].usedmemory != '0byte') {
					var info = disk.file[2];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					var usedmemory = formatSpace(usedmemory,info.usedmemory);
					var totalmemory = formatSpace(totalmemory,info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent,'#mo_fla');
					$('#mo_fla').next('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_fla').parent().show();
				} else {
					$('#mo_fla').next('div').children('span').text('没有SD卡').next('span').text('');
				}
			}
			
		}
	}
	
});

function updatecheck() {
	var $items = $('#applist').find('span.updatecheck');
	var apps = [],imgs = []; 
	$items.each(function(n){ 
		apps[0] = {
			appid:$(this).attr("index"),
			versioncode:this.getAttribute('vendor') || this.getAttribute('version')
		};
		imgs[0] = {
			appid:$(this).attr("index"),
			versioncode:0
		};
		$.post('/updatelist.php', {installlist:apps}, function(data) {
			if (!data) { return; }
			if (data.items && data.items.length > 0) {
				var version = data.items[0].versionName;
				var pre = data.items[0].pre;
				if(pre && pre == 1){
					
				} else {
					$($items[n]).html('<a id='+data.items[0].softwareId+' businesstype=1 isbiz=0 href='+data.items[0].downloadUrl+'&isbiz=0 installlocate=1 appid='+data.items[0].appId+' versioncode='+data.items[0].versionCode+' version='+data.items[0].versionName+' title='+data.items[0].name+' star='+data.items[0].star+' type=1 class=downinit>更新至</a><span class="f0 c2">' + version + '</span>');
				}
			}
		}, 'json');
		$.post('/updatelist.php', {installlist:imgs}, function(data) {
			if (!data) { return; }
			if (data.items && data.items.length > 0) {
				var imgurl = data.items[0].icon;
					$($items[n]).closest("tr").find(".imgsurl").attr("src",data.items[0].icon);
			}
		}, 'json');
	});
	return false;
}
/*
function updatecheck() {
	var $items = $('#applist').find('span.updatecheck');
	var apps = []; 
	$items.each(function(){ 
		apps[apps.length] = {
			appid:$(this).attr("index"),
			versioncode:this.getAttribute('vendor') || this.getAttribute('version')
		}; 
	});
	
	$.post('/updatelist.php', {installlist:apps}, function(data) {
		$items.each(function(i){
			if (!data[i]) { return; }
			var version = data[i].version;
			$(this).html('<a appid="'+ data[i].appid + '" id="' + data[i].softid + '" href="' + data[i].downloadurl+ '&update=1' + '" title="' + data[i].name + data[i].version + '" class="downinit small_btn">更新</a><span class="f0 c2">' + data[i].version + '</span>');
		});
		log('update check finish');
	}, 'json');
	return false;
}
*/







function dispAppList(ele, phone, ingore, flag){
	if (checkphone() == false) { return false; }
	if (checkdisk() == false) { return false; }
	$('.loadings').show();
	phone = phone || getCurrentPhone();
	phonetype = phone.phonetype || '';
	phoneversion = phone.phoneversion || '';
	var disk = JSON.parse(phone.filelist);
	if(disk && disk.file[2] && disk.file[2].totalmemory){
		var diskMem = parseFloat(disk.file[2].totalmemory);
	}
	var iscrack = phone.jailbreak || 0;
	if (!phone && !phone.imei) return;
	getAppList(phone, function(data, status){
		if (status != 'ok') return;
		ReadDataPage("SELECT * FROM app WHERE imei='" + phone.imei + "' ORDER BY system DESC,issd DESC", [], function(result, data){
			if (!result) return;
			var rows = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				var num = i+1;
				rows[i] = {
					index:num,
					name:fixNameString(row['name']),
					size:formatFileSize(row['applicationasize']),
					id:row['id'],
					issd:row['issd'],
					system:row['system'],
					value:row['value'],
					uid:row['uid'],
					vendor:row['vendor'],
					version:row['version'],
					phonetype:phonetype + '.' + phoneversion,
					sdcard:diskMem,
					iscrack:iscrack
				};
			}
			if (!num) {
				$('#optdesc').html('(0)');
			} else {
				$('#optdesc').html('(' + num + ')');	
			}
			WebAppLocalStorage('appcount_' + phone.imei, num);
			$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
			updatecheck();
			delete rows;
			$('.loadings').fadeOut();
		});
	}, ingore, flag);
	log('list apps done');
};

function dispSMSList(ele, phone, ingore, flag){
	if (checkphone() == false) { return false; }
	$('.loadings').show();
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		getSMSList(phone, function(data, status){
			if (status != 'ok') return;
			ReadContactMap(phone, function(cats){
				ReadDataPage("SELECT * FROM sms WHERE imei='" + phone.imei + "'", [], function(result, data){
					if (!result) return;
					var rows = new Array();
					for (var i = 0; i < data.rows.length; i++) {
						var row = data.rows.item(i);
						var num = i+1;
						var phonenumber = row['address'] || '';
						phonenumber = phonenumber.replace(/[^0-9]/g, '');
						rows[i] = {
							index:num,
							id:row['id'],
							type:row['type'],
							message:fixNameString(row['message']),
							address:cats[phonenumber] ? cats[phonenumber] : row['address'],
							date:row['date'],
							dataindex:row['dataindex'],
							json:JSON.stringify(row)
						};
					}
					if (!num) {
						$('#optdesc').html('(0)');
					} else {
						$('#optdesc').html('(' + num + ')');	
					}
					WebAppLocalStorage('smscount_' + phone.imei, num);
					$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
					delete rows;
					$('.loadings').fadeOut();
				});
			});
		}, ingore, flag);
		log('list sms done');
};

function dispContactList(ele, phone, ingore, flag){
	if (checkphone() == false) { return false; }
	$('.loadings').show();
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getContactList(phone, function(data, status){
		if (status != 'ok') return;
		ReadDataPage("SELECT * FROM contacts WHERE imei='" + phone.imei + "'", [], function(result, data){
			if (!result) return;
			var rows = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				var num = i+1;
				rows[i] = {
					index:num,
					id:[{value:row['id']}]?[{value:row['id']}]:'',
					group:[{value:row['contact_group']}]?[{value:row['contact_group']}]:'',
					lastname:[{value:row['lastname']}]?[{value:row['lastname']}]:'',
					firstname:[{value:row['firstname']}]?[{value:row['firstname']}]:'',
					name:[{value: row['name']}]?[{value: row['name']}]:'',
					midlename:[{value:row['midlename']}]?[{value:row['midlename']}]:'',
					mobile:[{value:row['mobile']}]?[{value:row['mobile']}]:'',
					mobile_home:[{value:row['mobile_home']}]?[{value:row['mobile_home']}]:'',
					mobile_work:[{value:row['mobile_work']}]?[{value:row['mobile_work']}]:'',
					tel_home:[{value:row['tel_home']}]?[{value:row['tel_home']}]:'',
					tel_work:[{value:row['tel_work']}]?[{value:row['tel_work']}]:'',
					telephone:[{value:row['telephone']}]?[{value:row['telephone']}]:'',
					email:[{value:row['email']}]?[{value:row['email']}]:'',
					email_home:[{value:row['email_home']}]?[{value:row['email_home']}]:'',
					email_work:[{value:row['email_work']}]?[{value:row['email_work']}]:''
				};
				rows[i].json = JSON.stringify(rows[i]);
			}
			if (!num) {
				$('#optdesc').html('(0)');
			} else {
				$('#optdesc').html('(' + num + ')');	
			}
			WebAppLocalStorage('contectcount_' + phone.imei, num);
			$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
			delete rows;
			$('.loadings').fadeOut();
		});
	}, ingore, flag);
	log('list contacts done');
};

var contactMap = null;
function ReadContactMap(phone, callback){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	if (contactMap) {
		if (callback) callback(contactMap);
	} else {
		contactMap = {};
		ReadDataPage("SELECT * FROM contacts WHERE imei='" + phone.imei + "'", [], function(result, data){
			if (!result) return;
			var contactMap = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				var name = row['name'] ? row['name'] : (row['lastname'] + row['lastname']);
				var number;
				
				number = row['tel_custom'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				number = row['mobile'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				number = row['mobile_home'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				number = row['mobile_work'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				
				number = row['telephone'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				number = row['tel_home'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
				number = row['tel_work'];
				if (number) {
					number = number.replace(/[^0-9]/g, '');
					contactMap[number] = name;
				}
			}
			if (callback) callback(contactMap);
		});
	}
};

function dispMediaFileList(ele, type, phone, ingore, flag){
	if (checkphone() == false) { return false; }
	$('.loadings').show();
		phone = phone || getCurrentPhone();
		if (!phone && !phone.imei) return;
		getMediaFileList(phone, type, function(data, status){
			if (status != 'ok') return;
			ReadDataPage("SELECT * FROM file WHERE mediatype='"+type+"' AND imei='" + phone.imei + "'", [], function(result, data){
				if (!result) return;
				var rows = new Array();
				for (var i = 0; i < data.rows.length; i++) {
					var row = data.rows.item(i);
					var num = i+1;
					rows[i] = {
						index:num,
						id:row['id'],
						name:row['name'],
						fileext:formatFileExt(row['name']),
						mediatype:row['mediatype'],
						type:row['type'],
						ref:row['ref'],
						time:row['time'],
						path:row['absolutepath'],
						filesize:row['filesize']
					};
				}
				if (!num) {
					$('#optdesc').html('(0)');
				} else {
					$('#optdesc').html('(' + num + ')');	
				}
				WebAppLocalStorage('mediafilecount_' + type+'_' + phone.imei, num);
				$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
				delete rows;
				$('.loadings').fadeOut();
			});
		}, ingore, flag);
		log('media file ' + type + ' list done');
};

//读取localstorage，显示应用数量 phone：phone1、phone2选择手机，ele目标dom，num是否只显示数字，1是，不填则否，
function dispAppCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getAppCount(phone, function(data){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '个应用程序';	
		}
	});
}

function dispContactCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getContactCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '位联系人';	
		}	
	});
}

function dispSMSCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getSMSCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '条短信';	
		}
	});
}

function dispDocCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getDocCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '个文档';	
		}
	});
}

function dispVideoCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getVideoCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '个视频';	
		}
	});
}

function dispMusicCount(phone,ele,num){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getMusicCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '个音乐文件';	
		}
	});
}

function dispImgCount(phone, ele, num) {
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getImgCount(phone, function(data, status){
		if (!data) return;
		var area = document.getElementById(ele);
		if(!area) return;
		if (num) {
			area.innerHTML = data;
		} else {
			area.innerHTML = '您有  ' +data + '张图片';	
		}
	});
}

//调用壳上命令获取各类内容数量
function dispLiveAppCount(phone, callback) {
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getLiveAppCount(phone, function(data, status){
		if(status != 'ok') return;
		if (callback) callback(data);
	});
}

function dispLiveContactCount(phone, callback) {
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getLiveContactCount(phone, function(data, status){
		if(status != 'ok') return;
		if (callback) callback(data);
	});
}

function dispLiveSMSCount(phone, callback) {
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getLiveSMSCount(phone, function(data, status){
		if(status != 'ok') return;
		if (callback) callback(data);
	});
}

function dispLiveMediaFileCount(phone, type, path, callback) {
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	getLiveMediaFileCount(phone, type, path, function(data, status){
		if(status != 'ok') return;
		if (callback) callback(data);
	});
}

function viewContact (id, ele, phone){
	if(!id) return;
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
		ReadDataPage("SELECT * FROM contacts WHERE id='"+id+"' AND imei='" + phone.imei + "'", [], function(result, data){
			if (!result) return;
			var rows = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				rows[i] = {
					id:row['id'],
					lastname:row['lastname'],
					firstname:row['firstname'],
					name:row['name'],
					middlename:row['middlename'],
					mobile:row['mobile'],
					mobile_home:row['mobile_home'],
					mobile_work:row['mobile_work'],
					tel_home:row['tel_home'],
					tel_work:row['tel_work'],
					telephone:row['telephone'],
					email:row['email'],
					email_home:row['email_home'],
					email_work:row['email_work']
				};
			}
			$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
			delete rows;
		});
}

function appdel() {
	if (checkphone() == false) { return false; }
	var phone = getCurrentPhone();
	var imei = phone.imei;
	if ($('#applist input:checked').length == 0) {
		cbMessage('没有找到要卸载的软件');
		log('没有找到要卸载的软件');
		return false;
	}
	cbConfirm ('您是否要卸载选择的软件?',function(){
		cbProgress('正在卸载软件，请稍等...',function(){
			var data = $('#applist input:checked');
			if (!data || !data.length) {
				cbMessage('没有找到要卸载的软件');
				log('没有找到要卸载的软件'); 
				return false; 
			}
			var undatalist = jQuery.makeArray(data);
			var undataleng = data.length;
			var failedlist = [];
			var failnumber = 0;
			var undatacall = function(){
				if (!undatalist || undatalist.length == 0) {
					$('#progressmsg').html('');
					dispAppList('#applist', null, false);
					if (failedlist.length == 0)	{
						if (failnumber != 0) {
							cbMessage('卸载操作完成',null,null,'成功卸载了'+ (undataleng - failnumber) +'个软件，有 ' + failnumber + '个内置应用无法删除');
							log('卸载完成，成功卸载了'+ (undataleng - failnumber) +'个软件 ');
							sendrecoverstat(3,1,undataleng - failnumber,0);//发送卸载统计
							$('.loadings').fadeOut();
						} else {
							cbMessage('卸载操作完成',null,null,'卸载完成，成功卸载了'+ undataleng +'个软件');
							log('卸载完成，成功卸载了'+ undataleng +'个软件 ');
							sendrecoverstat(3,1,undataleng,0);//发送卸载统计
						}
						
					} else {
						cbMessage('卸载完成，成功卸载了'+ (undataleng - failedlist.length) +'个软件，无法卸载的软件 '+ failedlist.length + '个 ');
						log('卸载完成，成功卸载了'+ (undataleng - failedlist.length) +'个软件，无法卸载的软件 '+ failedlist.length + '个 ');
						sendrecoverstat(3,1,undataleng - failedlist.length,failedlist.length);//发送卸载统计
						var optlog = '';
						$(failedlist).each(function(i, v){
							optlog += '<span>' + v + ' 卸载失败</span><br />';
						});
						$('#optlog>#logs').html(optlog);
					}
					return false;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = item.value.split('||');
				if (avgs && avgs[2] == 1) {
					failnumber = failnumber + 1;
					undatacall();
				} else {
					$('#progressmsg').html('正在卸载' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0]);
					$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
					appUninstall(null, avgs[0], avgs[1], function(data, status){
						if (status != 'ok') return;
						if (!data || data != 1 ) {
							failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0] + ' '/* + formatErrorCode(data.eventvalue[0].result)*/;
							//cbMessage('卸载失败');
							log('卸载失败');
						} else {
							//cbMessage('卸载成功');
							log('卸载成功');
						};
						undatacall();
					});
				}
			};
			undatacall();
		});
	},null);
	return false;
};

$(".moveapp2mem").live("click",function(){
	var row = this;
	var appsel = $(row).closest("tr").attr("rel");
	cbWaiting('正在移动应用程序，请稍候...', function(){
		moveApp2Mem(null, appsel, function(data, status){
			if (status != 'ok') return;
			if (data && data == 1){
				$(row).parent().html('<div>手机内存<br /><a href="#null" class="moveapp2SD" onclick="return false;">移到SD卡</a></div>');
				$('#progresstit').html('');
				$('#progressmsg').html('<br><br>成功完成移动操作!  <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
				$('.progressbar').remove();
			} else {
				$('#progresstit').html('');
				$('#progressmsg').html('移动操作失败!  <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
				$('.progressbar').remove();
				return false;
			}
		});
	});
});

$(".moveapp2SD").live("click",function(){
	var row = this;
	var appsel = $(row).closest("tr").attr("rel");
	cbWaiting('正在移动应用程序，请稍候...', function(){
		moveApp2SD(null, appsel, function(data, status){
			if (status != 'ok') return;
			if (data && data == 1){
				$(row).parent().html('<div>SD卡<br /><a href="#null" class="moveapp2mem" onclick="return false;">移到内存</a></div>');
				$('#progresstit').html('');
				$('#progressmsg').html('<br><br>成功完成移动操作!  <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
				$('.progressbar').remove();
			} else {
				$('#progresstit').html('');
				$('#progressmsg').html('移动操作失败!  <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
				$('.progressbar').remove();
				return false;
			}
		});
	});
});

function multiMoveapp (target) {
	if (checkphone() == false) { return false; }
	var data = $('#applist input:checked');
	if (!data || !data.length || data.length == 0) {
		cbMessage('没有找到要移动的文件');
		log('没有找到要移动的文件');
		return false;
	}
	var undatalist = jQuery.makeArray(data);
	var undataleng = data.length;
	var failedlist = [];
	var selectWrong = false;
	/*$.each(undatalist, function(index){
		if (target == 'mem' && undatalist[index].value.indexOf('issd=0') > -1) {
			cbMessage('您选择的内容已在该位置，无需移动');
			selectWrong = true;
			return false; 
		} else if (target == 'sd' && undatalist[index].value.indexOf('issd=1') > -1) {
			cbMessage('您选择的内容已在该位置，无需移动');
			selectWrong = true;
			return false;
		}
	});
	if (selectWrong == true) return false;*/
	
	cbConfirm ('您是否要移动选择的文件?',function(){
		cbProgress('正在移动文件，请稍等...',function(){
			$('#progressmsg').html('正在准备');
			if (!data || !data.length) {
				cbMessage('没有找到要移动的文件');
				log('没有找到要移动的文件'); 
				return false; 
			}
			
			var undatacall = function(){
				if (!undatalist || undatalist.length == 0) {
					$('#progressmsg').html('正在刷新');
					dispAppList('#applist', null, false, 1);
					
					if (failedlist.length == 0)	{
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						$('#progressmsg').html('<br /><br />移动完成，成功移动了'+ undataleng +'个文件  <a href="#" onclick="$.colorbox.close(); return false;" class="cblue">关闭</a>');
						//sendrecoverstat('5'+type,1,undataleng,0);//发送移动统计数据
					} else {
						cbConfirm('移动操作完成', null, null, null, '移动完成，成功移动了' + (undataleng - failedlist.length) +'个文件，无法移动的文件 '+ failedlist.length + '个 ');
						//sendrecoverstat('5'+type,1,undataleng - failedlist.length,failedlist.length);//发送删除统计数据
					}
					return false;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = item.value.split('||');
				$('#progressmsg').html('正在移动' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0]);
				$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
				
				if (target == 'mem' && avgs[3].indexOf('issd=0') > -1) {
					failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0];
					undatacall();
				} else if (target == 'sd' && avgs[3].indexOf('issd=1') > -1) {
					failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0];
					undatacall();
				}
				
				if (target == 'mem') {
					moveApp2Mem(null, avgs[1], function(data, status){
						if (status != 'ok') return;
						if (data && data ==1) {
							log('移动成功');
						} else {
							failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0];
							log('移动失败');
						};
						undatacall();
					});
				} else if (target == 'sd') {
					moveApp2SD(null, avgs[1], function(data, status){
						if (status != 'ok') return;
						if (data && data ==1) {
							log('移动成功');
						} else {
							failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0];
							log('移动失败');
						};
						undatacall();
					});
				}
				
			};
			undatacall();
		});
	},null);
	return false;
	
	
	
}


function filedel() {
	if (checkphone() == false) { return false; }
	var phone = getCurrentPhone();
	var imei = phone.imei;
	
	if ($('#filelist input:checked').length == 0) {
		cbMessage('没有找到要删除的文件');
		log('没有找到要删除的文件');
		return false;
	}
	cbConfirm ('您是否要删除选择的文件?',function(){
		cbProgress('正在删除文件，请稍等...',function(){
			$('#progressmsg').html('正在准备');
			var data = $('#filelist input:checked');
			if (!data || !data.length) {
				cbMessage('没有找到要删除的文件');
				log('没有找到要删除的文件'); 
				return false; 
			}
			var undatalist = jQuery.makeArray(data);
			var undataleng = data.length;
			var failedlist = [];
			var undatacall = function(){
				if (!undatalist || undatalist.length == 0) {
					//cbMessage('删除操作完成');
					$('#progressmsg').html('正在刷新');
					var find = location.href.indexOf('file');
					var type = 3;
					if (find > -1) { type = location.href.substr(find + 4, 1); }
					
					dispMediaFileList('#filelist', type, null, false);
					
					if (failedlist.length == 0)	{
						//cbConfirm('删除操作完成', null, null, null, '删除完成，成功删除了' + undataleng +'个文件 ');
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						$('#progressmsg').html('<br /><br />删除完成，成功删除了'+ undataleng +'个文件  <a href="#" onclick="$.colorbox.close(); return false;" class="cblue">关闭</a>');
						sendrecoverstat('5'+type,1,undataleng,0);//发送删除统计数据
					} else {
						cbConfirm('删除操作完成', null, null, null, '删除完成，成功删除了' + (undataleng - failedlist.length) +'个文件，无法删除的文件 '+ failedlist.length + '个 ');
						sendrecoverstat('5'+type,1,undataleng - failedlist.length,failedlist.length);//发送删除统计数据
					}
					return false;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = item.value.split('||');
				if (avgs[0].indexOf('360') > -1) { undatacall();  }
				$('#progressmsg').html('正在删除' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[1]);
				$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
				delFile(null, avgs[0], avgs[1], avgs[2], function(data, status){
					if (status != 'ok') return;
					if (data && data ==1) {
						log('删除成功');
					} else {
						failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[1] + ' '/* + formatErrorCode(data.eventvalue[0].result)*/;
						log('删除失败');
					};
					undatacall();
				});
			};
			undatacall();
		});
	},null);
	return false;
};

function delimg(img){
	if (checkphone() == false) {
		return false;
	}
	var phone = getCurrentPhone();
	var imei = phone.imei;
	var file = $(img).attr('rev');
	var avgs = file.split('||');

	cbConfirm('您是否要删除选择的文件?', function(){
		cbProgress('正在删除文件，请稍等...', function(){
			delFile(null, avgs[0], avgs[1], avgs[2], function(data, status){
				if (status != 'ok') return;
				if (data && data == 1) {
					/*$('#progresspoint').css('width', '100%');
					$('#progresstit').html('删除操作完成！');*/
					$('#progresstit').html(' ');
					$('.progressbar').remove();
					$('#progressmsg').html('<br /><br />删除' + avgs[1] + '成功  <a href="#" onclick="$(this).colorbox.close();return false;" class="cblue" >关闭</a>');
					log('删除成功');
					$(img).closest('div').remove();
					var num = parseFloat($('#optdesc').html().replace(/[^0-9]/ig,""));
					var num = num - 1;
					$('#optdesc').html('您有  ' + num + '张图片');
					//preimg('#filelist');
					return false;
				} else {
					$('#progresstit').html('');
					$('.progressbar').remove();
					$('#progressmsg').html('<br /><br />删除' + avgs[1] + '失败 <a href="#null" onclick="$(this).colorbox.close();return false;" class="cblue" >关闭</a>');
					log('删除失败');
					return false;
				};
			});
		});
	});
	return false;
}
function contactdel() {
	if (checkphone() == false) { return false; }
	var phone = getCurrentPhone();
	var imei = phone.imei;
	if ($('#contactlist input:checked').length == 0) {
		cbMessage('没有找到要删除的联系人');
		log('没有找到要删除的联系人');
		return false;
	}
	cbConfirm ('您是否要删除选择的联系人?',function(){
		cbProgress('正在删除联系人，请稍等...', function(){
			var data = $('#contactlist input:checked');
			if (!data || !data.length) { 
				cbMessage('没有找到要删除的联系人');
				log('没有找到要删除的联系人'); 
				return false; 
			}
			var undatalist = jQuery.makeArray(data);;
			var undataleng = data.length;
			var failedlist = [];
			var undatacall = function(){
				$('#progressmsg').html('正在刷新');
				if (!undatalist || undatalist.length == 0) {
					dispContactList('#contactlist', null, false);
					if (failedlist.length == 0)	{
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						$('#progressmsg').html('<br /><br />删除完成，成功删除了'+ undataleng +'个联系人  <a href="#" onclick="$.colorbox.close(); return false;" class="cblue">关闭</a>');
						sendrecoverstat(6,1,undataleng,0);//发送删除通讯录统计信息
					} else {
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						$('#progressmsg').html('<br /><br />删除完成，成功删除了'+ (undataleng - failedlist.length) +'个联系人，无法删除的联系人 '+ failedlist.length + '个 ' +'<a href="#optlog" class="optlog" onclick="$colorbox.close({html:this); return false;">查看</a> <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
						sendrecoverstat(6,1,undataleng - failedlist.length,failedlist.length);//发送删除通讯录统计信息
						var optlog = '';
						$(failedlist).each(function(i, v){
							optlog += '<span>' + v + ' 删除失败</span><br />';
						}); 
						$('#optlog>#logs', parent.document).html(optlog);
					}
					return;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = JSON.parse(item.value);
				if (avgs.name){
					if (avgs.name.indexOf('360') > -1) { undatacall();  }	
				}
				$('#progressmsg').html('正在删除' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs.name[0].value);
				$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
				delContact(null, avgs.id[0].value, avgs.group[0].value, function(data, status){
					if (status != 'ok') return;
					if (!data || data !=1) {
						failedlist[failedlist.length] = '' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs.name[0].value;
						log('删除失败');
					} else {
						log('删除成功');
					};
					undatacall();
				});
			};
			undatacall();
		});
	},null);
	return false;
}

function SMSdel() {
	if (checkphone() == false) { return false; }
	var phone = getCurrentPhone();
	var imei = phone.imei;
	if ($('#smslist input:checked').length == 0) {
		cbMessage('没有找到要删除的短信');
		log('没有找到要删除的短信');
		return false;
	}
	cbConfirm ('您是否要删除选择的短信', function(){
		cbProgress('正在删除短信，请稍等...', function(){
			var data = $('#smslist input:checked');
			if (!data || !data.length) { 
				cbMessage('没有找到要删除的短信');
				log('没有找到要删除的短信'); 
				return false; 
			}
			var undatalist = jQuery.makeArray(data);;
			var undataleng = data.length;
			var failedlist = [];
			var undatacall = function(){
				if (!undatalist || undatalist.length == 0) {
					$('#progressmsg').html('正在刷新');
					dispSMSList('#smslist', null, false);
					if (failedlist.length == 0)	{
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						//$('#progresstit').html('删除短信完成');
						$('#progressmsg').html('<br /><br />删除完成，成功删除了' + undataleng +'条短信   <a href="#" onclick="$.colorbox.close(); return false;" class="cblue">关闭</a>');
						sendrecoverstat(7,1,undataleng,0);//发送删除短信统计信息
					} else {
						$('#progresstit').html(' ');
						$('.progressbar').remove();
						//$('#progresstit').html('删除短信完成');
						$('#progressmsg').html('<br /><br />删除完成，成功删除了' + (undataleng - failedlist.length) +'个短信，无法删除的短信 '+ failedlist.length + '个 ' + '<a href="#optlog" onclick="$.colorbox({html:this}); return false;">查看</a> <a href="#" onclick="$(this).colorbox.close(); return false;">关闭</a>');
						sendrecoverstat(7,1,undataleng - failedlist.length,failedlist.length);//发送删除短信统计信息
						var optlog = '';
						$(failedlist).each(function(i, v){
							optlog += '<span>' + v + ' 删除失败</span><br />';
						});
						$('#optlog>#logs', parent.document).html(optlog);
					}
					return;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = JSON.parse(item.value);
				$('#progressmsg').html('正在删除' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs.message);
				$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
				delSMS(null,avgs.id, avgs.type, function(data, status){
					if (status != 'ok') return;
					if (!data || data !=1) {
						failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs.message;
						log('删除失败');
					} else {
						log('删除成功');
					};
					undatacall();
				});
			};
			undatacall();
		});
	});
	return false;
}

function preimg(ele) {
	if (checkphone() == false) { return false; }
	var phone = getCurrentPhone(),
		imei = phone.imei,
		phonetype = phone.phonetype,
		singlephonefilecache = WebAppLocalStorage("singlephonefilecache");
		
	if (phone){
		dispLiveMediaFileCount(phone, 4, '', function(data){
			if (!data) return;
			$('#optdesc').html('您有  ' + data + '张图片');
			getMediaFileList(null,4, function(data, status){
				if (status != 'ok') return;
				ReadDataPage("SELECT * FROM file WHERE mediatype='4' AND imei='" + imei + "'", [], function(result, data){
					if (!result) return;
					var rows = new Array();
					$(ele).empty();
					for (var i = 0; i < data.rows.length; i++) {
						var row = data.rows.item(i);
						var num = i+1;
						var parentpath = '', parentpath2 = '';
						if (phonetype == phoneOptions.symbian) {
							parentpath = '\\\\E:\\'; parentpath2 = '\\\\E:\\';
						} else if (phonetype == phoneOptions.android) {
							if (row['absolutepath'].indexOf('/mnt/sdcard/') == 0) { 
								parentpath = '/mnt/sdcard/'; parentpath2 = '/mnt/sdcard/';
							} else {
								parentpath = '/sdcard/'; parentpath2 = '/sdcard/';
							}
						} else if (phonetype == phoneOptions.mtk) {
							parentpath = 'E:\\'; parentpath2 = 'E:\\'; 
						}
						var abspath = row['absolutepath'].substr(parentpath.length);
						var source = '{"protocoltype":"filecopy", "parentpath":"' + parentpath2 + '", "filecopy":[{"filename":"' + abspath + row['name'] + '"}]}';
						var base = singlephonefilecache + imei + '\\';
						
						var bigname = row['name'].toLowerCase();
						if(phonetype != phoneOptions.android){
							var name = bigname;
						} else {
							if (bigname.indexOf('.jpg') > -1){
							var name = bigname.replace(/\.jpg$/, '_na.jpg');
							} else if (bigname.indexOf('.png') > -1) {
								var name = bigname.replace(/\.png$/, '_na.jpg');
							} else if (bigname.indexOf('.gif') > -1) {
								var name = bigname.replace(/\.gif/, '_na.jpg');
							}
						}
						
						var src = 'file:///' + base + abspath;
						rows[i] = {
							index:num,
							id:row['id'],
							name:name,
							fileext:formatFileExt(row['name']),
							mediatype:row['mediatype'],
							type:row['type'],
							ref:row['ref'],
							time:row['time'],
							path:src,
							filesize:row['filesize'],
							source:source,
							base:base,
							mbpath:row['absolutepath'],
							mbname:row['name']
						};
					}
					var undatalist = rows;
					var undataleng = rows.length;
					var failedlist = [];
					var i = 0;
					var undatacall = function() {
						if (!undatalist || undatalist.length == 0) {
							return; 
						}
						var item = undatalist.shift(0, 1);
						fileMultiCopyToPC(null, item.source.replace(/\\/g, '\\\\'), item.base, function(result, status){
							if (status != 'ok') return;
							if (result && result == 1) {
								//var src = 'file:///' + base;
								log(src + item.base);
								$(ele + "Template").tmpl(item).appendTo(ele);
							}
							undatacall();
						});
						
					};
					undatacall();
					
				});
			}, false);
		});
	}
}

//打开文件 预览
$('.fileprev').live('click', function(){
	if (checkphone() == false) { return false; }
	if (checkdisk() == false) return false;
	if (checkios() == false) return false;
	var namex = $(this).text();
	cbWaiting('正在从设备中读取数据请等待', function(){
		var phone = getCurrentPhone();
		var imei = phone.imei || '';
		var phonetype = phone.phonetype;
		var find = location.href.indexOf('file');
		if (find > -1) { type = location.href.substr(find + 4, 1); }
		getMediaFileList(null, type, function(data, status){
			if (status != 'ok') return;
			ReadDataPage("SELECT * FROM file WHERE mediatype='"+type+"' AND imei='" + imei + "' AND name='" + namex + "'" , [], function(result, data){
				if (!result) return;
				var rows = new Array();
				for (var i = 0; i < data.rows.length; i++) {
					var row = data.rows.item(i);
					var num = i+1;
					
					var parentpath = '', parentpath2 = '';
					if (phonetype == phoneOptions.symbian) {
						parentpath = '\\\\E:\\'; parentpath2 = '\\\\E:\\';
					} else if (phonetype == phoneOptions.android) {
						if (row['absolutepath'].indexOf('/mnt/sdcard/') == 0) { 
							parentpath = '/mnt/sdcard/'; parentpath2 = '/mnt/sdcard/';
						} else {
							parentpath = '/sdcard/'; parentpath2 = '/sdcard/';
						}
					} else if (phonetype == phoneOptions.mtk) {
						parentpath = 'E:\\'; parentpath2 = 'E:\\'; 
					}
					
					var abspath = row['absolutepath'].substr(parentpath.length);
					var source = '{"protocoltype":"filecopy", "parentpath":"' + parentpath2 + '", "filecopy":[{"filename":"' + abspath + row['name'] + '"}]}';
					var singlephonefilecache = WebAppLocalStorage("singlephonefilecache");
					var base = singlephonefilecache + imei + '\\';
					
					rows[i] = {
						name:row['name'],
						fileext:formatFileExt(row['name']),
						mediatype:row['mediatype'],
						type:row['type'],
						time:row['time'],
						path:row['absolutepath'],
						filesize:row['filesize']
					};
					fileMultiCopyToPC(null, source.replace(/\\/g, '\\\\'), base, function(result, status){
						if (status != 'ok') return;
						$.colorbox.close();
						if (result && result == 1) {
							var src = base + abspath + namex;
							var file = JSON.stringify ({exefile:'', openfile:src, windowstyle:'1'});
							setDataCache(null, 'shellexecute', file, function(data, status){
								if (status != 'ok') return;
								log('open:' + file);
							});
						}
					});
				};
				delete rows;
			});
		}, true);
		
		
	});
	return false;
});

$(document).live('appupdatedown', function(event, applist){
	if (checkphone() == false) { return false; }
	if (checkdisk() == false) return false;
	
	//未绑定卡情况下，所有下载按钮失效
	var chncode = JSON.parse(WebAppLocalStorage("channelcode")).data || 0;
	var card = WebAppLocalStorage("accountbytermcode") || 0;
	var url = window.location.href;
	var flag = /com\/appstore\/common-tools.html/.test(url);
	if (card && !flag && chncode == "1100000") {
		var card_info = JSON.parse(card),
			isok = card_info.isok;
		var remainingdate = card_info.remainingdate;
		if (isok == 2) {
			cbConfirm ('爱皮下载服务卡已过期，请您绑定新卡',function(){
				jumpUrl("activecard","");
			},null);
			return false;
		} else if (isok < 1 ) {
			cbConfirm ('请先绑定爱皮下载服务卡',function(){
				jumpUrl("activecard","");
			},null);
			return false;
		}
	}
	
	if (applist == 'applist'){
		var data = jQuery.makeArray($('#applist tr a.downinit'));
	} else {
		var data = jQuery.makeArray($('#applist input:checked').parent().siblings().find("a.downinit"));
	}
	$(data).each(function(i, item){ data[i] = item.id+'||'+item.href+'||'+item.title;});
	cbWaiting('正在添加更新到下载列表', function(){
		$('#optlog>#logs').html('');
			cbProgress('正在添加更新到下载列表', function(){
				if (!data || !data.length) {
					$('#progressmsg').html('没有找到要更新的软件 <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
					return false; 
				}
				var undatalist = data;
				var undataleng = data.length;
				var failedlist = [];
				var undatacall = function() {
					if (!undatalist || undatalist.length == 0) {
						if (failedlist.length == 0)	{
							$('#progressmsg').html('检测完成，已将'+ undataleng +'个可升级软件添加到下载列表   <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
							sendrecoverstat(4,1,undataleng,0);//发送应用更新统计信息
						} else {
							$('#progressmsg').html('检测完成，已将'+ (undataleng - failedlist.length) +'个软件添加到下载列表，无法更新的软件 '+ failedlist.length + '个 ' +'<a href="#optlog" onclick="$(this).colorbox({this}); return false;" class="cblue">查看</a> <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>');
							sendrecoverstat(4,1,undataleng - failedlist.length,failedlist.length);//发送应用更新统计信息
							var optlog = '';
							$(failedlist).each(function(i, v){
								optlog += '<span>' + v + ' 更新失败</span><br />';
							});
							$('#optlog>#logs').append(optlog);
						}
						return;
					}
					var item = undatalist.shift(undatalist.length, 1);
					var avgs = item.split('||');
					$('#progressmsg').html('正在更新' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[2]);
					$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
					if (!avgs[0] || !avgs[1]) {
						failedlist[failedlist.length] = avgs[2];
					} else {
						var rows = {
							id : avgs[0],
							url : avgs[1],
							name : avgs[2],
							appid : 0
						};
						addTask(rows);
					}
					setTimeout(undatacall, 1000);
				};
				undatacall();
			}, parent.$.fn.colorbox);
	});
	return false;
});	