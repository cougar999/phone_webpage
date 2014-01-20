function getIosAuthorize() {
	//if (!WebAppLocalStorage("iosauthorize")) return;
	var iosauthorize = WebAppLocalStorage("iosauthorize");
	if (iosauthorize && iosauthorize == 1){
		$('#cr_step1').children('.cr_message').text('授权可用，请点击下一步继续操作。');
		$('#cr_step1').find('#gotosetp2').show();
	} else {
		$('#cr_step1').children('.cr_message').html('授权不可用，请重启爱皮下载再试一次！<br />如多次尝试仍不可用，请重启电脑。');
	}
}

function startiTunes() {
	var src = '';
	var file = JSON.stringify ({exefile:'iTunes.exe', openfile:src, windowstyle:'1'});
	setDataCache(null, 'shellexecute', file, function(data, status){
		if (status != 'ok') return;
	});
	$('#cr_step2').children('.cr_message').html('正在启动iTunes，请稍候...<br />启动成功后需使用iTunes同步一个软件<a href="http://content.appdear.com/soft/ios/tongbu.zip" target="_blank" title="点此下载" class="tooltip openlink"><span style="color:blue">（点此下载）</span></a>至您的IOS设备，以便完成授权！   <a target="_blank" style="color:blue" href="/start/ios_course.html" title="操作教程" onclick="$.colorbox({href:this.href, returnFocus:true, width:980, height:650, scrolling:false, overlayclose:false});return false;">查看如何同步？</a><br />同步成功后，请关闭iTunes返回此页面，然后点击下一步按钮继续操作。<br />');
	$('#cr_step2').find('#gotosetp3').show();
	$('#cr_step2').find('#gotosetp1').show();
}

$(document).ready(function(){
	$('#gotosetp1, #gotosetp2, #gotosetp3').live('click', function(){
		if(this.hash == '#cr_step1') {
			$('#cr_step1').show().siblings().hide();
			$('#cr_progress_in').css('width','33%');
			$('.cr_stat1').css('color','#00b1ed');
		} else if (this.hash == '#cr_step2') {
			$('#cr_step2').show().siblings().hide();
			$('#cr_progress_in').css('width','66%');
			$('.cr_stat2').css('color','#00b1ed');
		} else if (this.hash == '#cr_step3') {
			$('#cr_step3').show().siblings().hide();
			$('#cr_progress_in').css('width','100%');
			$('.cr_stat3').css('color','#00b1ed');
		} else if (this.hash == '#cr_step11') {
			$('#cr_progress_in').css('width','33%');
			$('#cr_step1').show().siblings().hide();
			$('.cr_stat2, .cr_stat3').css('color','#ccc');
		}
	});
});

function updatecheck() {
	var $items = $('#defapplist').find('span.updatecheck');
	var apps = []; $items.each(function(){ 
		apps[apps.length] = {
			value:this.id, 
			vendor:this.getAttribute('vendor'), 
			system:this.getAttribute('system')
		}; 
	});
	$.post('/updatecheck.php', {apps:apps}, function(data) {
		$items.each(function(i){
			if (!data[i]) { return; }
			var version = data[i].version;
			$(this).html('<a appid="'+ data[i].appid + '" id="' + data[i].softid + '" href="' + data[i].downloadurl+ '&update=1' + '" title="' + data[i].name + data[i].version + '" class="downinit cblue" onclick="return false;"> [更新]</a>');
		});
	}, 'json');
	log('update check finish');
	return false;
}

function dispAppList(ele, phone) {
	phone = phone || getCurrentPhone();
	if (!phone || !phone.imei) return;
	getAppList(phone, function(data, status){
		if (status != 'ok') return;
		ReadDataPage("SELECT * FROM app WHERE imei='" + phone.imei + "' ORDER BY system DESC, issd DESC", [], function(result, data){
			if (!result) return;
			var rows = new Array();
			for (var i = 0; i < data.rows.length; i++) {
				var row = data.rows.item(i);
				var num = i+1;
				rows[i] = {
					name:row['name'],
					size:formatFileSize(row['applicationasize']),
					id:row['id'],
					issd:row['issd'],
					system:row['system'],
					value:row['value'],
					uid:row['value'],
					vendor:row['vendor'],
					version:row['version']
				};
			};
			$(ele + "Template").tmpl(rows).appendTo($(ele).empty());
			if(num && num != undefined && num != null) {
				$('#defapps').text('您有' + num + '个应用程序');
			} else {
				$('#defapps').text('没有找到应用程序，您可以尝试刷新页面');
			}
			updatecheck();
			delete rows;
		});
	});
};

function dispAppCount(phone, ele) {
	phone = phone || getCurrentPhone();
	if (!phone || !phone.imei) return;
	getLiveAppCount(phone, function(data, status){
		if (status != 'ok') return;
		log(status + data);
		$('#' + ele).text('您有' + data + '个应用程序');
	});
}

function undefappdel() {
	//if (checkphone() == false) { return false; }
	var phone = getCurrentPhone();
	var imei = phone.imei;
	if ($('#defapplist input:checked').length == 0) {
		cbMessage('没有找到要卸载的软件');
		log('没有找到要卸载的软件');
		return false;
	}
	cbConfirm ('您是否要卸载选择的软件?',function(){
		cbProgress('正在卸载软件，请稍等...',function(){
			var data = $('#defapplist input:checked');
			if (!data || !data.length) { 
				cbMessage('没有找到要卸载的软件');
				log('没有找到要卸载的软件'); 
				return false; 
			}
			var undatalist = jQuery.makeArray(data);
			var undataleng = data.length;
			var failedlist = [];
			var undatacall = function(){
				if (!undatalist || undatalist.length == 0) {
					$('#progressmsg').html('');
					dispAppCount(null, 'defapps');
					dispAppList('#defapplist',null,true);
					if (failedlist.length == 0)	{
						cbMessage('卸载操作完成',null,null,'卸载完成，成功卸载了'+ undataleng +'个软件 ');
						log('卸载完成，成功卸载了'+ undataleng +'个软件 ');
						sendrecoverstat(3,1,undataleng,0);//发送卸载统计
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
					return;
				}
				var item = undatalist.shift(undatalist.length, 1);
				var avgs = item.value.split('||');
				$('#progressmsg').html('正在卸载' + (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0]);
				$('#progresspoint').css('width',  (undataleng - undatalist.length) / undataleng * 100 + '%');
				appUninstall(null, avgs[0], avgs[1], function(data, status){
					if (status != 'ok') return;
					if (!data || data != 1 ) {
						failedlist[failedlist.length] = (undataleng - undatalist.length) + '/' + undataleng + ' ' + avgs[0] + ' '/* + formatErrorCode(data.eventvalue[0].result)*/;
						log(avgs[0] + '卸载失败');
					} else {
						log(avgs[0] + '卸载成功');
					};
					undatacall();
				});
			};
			undatacall();
		});
	},null);
	return false;
};

$(document).ready(function(){
	//if (checkphone() == false) { return false; }
	
	var data = getCurrentPhone();
	if(!data) {
		function getphone(){
			setTimeout(function(){
				data = getCurrentPhone();
				if(data) {
					location.href = location.href; 
				}
			}, 200);
		}
		getphone();
	}
	var phonetype = data.phonetype || '';
	var phoneversion = data.phoneversion || '';
	cookies('phonetype', phonetype, {path: '/'});
	cookies('phoneversion', phoneversion, {path: '/'});
	cookies('headers', JSON.stringify(data), {path: '/'});
	
	if (data){
		if (data.phonetype == phoneOptions.ios) {
			//显示苹果手机信息
			$('#iosoverview').fadeIn();
			$('#iosoverview #phonebasic').fadeIn();
			if (!data || data == null) {
				data.imgurl = _img1 + '/resources/temp/mobiledef.jpg';
			};
			$('#ios_logo').attr('src', data.imgurl ? data.imgurl + '_sf_35x1000.png' : _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/mobiledef.jpg');
			$('#ios_logo_big').attr('src', data.imgurl ? data.imgurl + '_sf_160x1.png' : _img1 + '/imagemobile.php?width=160&image=' + _img1 + '/resources/temp/mobiledef.jpg');
			$('#iosbasic').fadeIn();
			$('#ios_name').text(data.hname);
			var imei = data.imei;
			var osver = data.osversion;
			$('#ios_info_sn').text(imei || '').attr('title', imei || '');
			$('#ios_info_vision').text(osver || '').attr('title', osver || '');
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
			
			if (data.jailbreak > 0) {
				$('#ios_info_break').text('已越狱').attr('title', '已越狱');
			} else {
				$('#ios_info_break').text('未越狱').attr('title', '未越狱');
			}
			$('#ios_info_mac').text(data.macaddress || '').attr('title', data.macaddress||'');
			
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
			
			if (data.imei){
				$('#iosoverview #phonebasic').fadeIn();
				//IOS模式提示已激活
				jQuery.post('/getaccountbytermcode.php', {}, function(data){
					//alert($.toJSON(data));
					var cardtype = data.cardtype || '';
					var binddate = data.binddate || '';
					var faildate = data.faildate || '';
					var remainingdate = data.remainingdate || '';
					var isok = data.isok || '';
					if (cardtype && cardtype == 9){
						var cardtype = "半年卡";	
					}else if (cardtype && cardtype == 10){
						var cardtype = "年卡";	
					}else if (cardtype && cardtype == 11){
						var cardtype = "两年卡";	
					}else{
						var cardtype = "苹果卡";	
					}
					if (isok && isok == 1 ){
						$("#iosmember_is").find("dd").html('卡类型：' + cardtype + '&nbsp;&nbsp;&nbsp;激活日期：' + binddate + '&nbsp;&nbsp;&nbsp;免费下载剩余天数：' + remainingdate + '天<br/>可免费下载近20000款总价近100000元的苹果正版软件。');
						//$("#iosmember_is").find("dd").html('卡类型：' + cardtype + '&nbsp;&nbsp;&nbsp;激活日期：' + binddate + '&nbsp;&nbsp;&nbsp;免费下载剩余天数：' + remainingdate + '天<br/>购卡并绑定后，可免费下载20000款，总价近100000元的苹果正版软件。');
						$("#iosmember_not").hide();
						$("#iosmember_is").show();	
						$("#iosmember_fail").hide();
					} else if (isok && isok == 2){
						$("#iosmember_fail").find("dd").html('很抱歉！您的下载卡已于'+faildate+'过期，如有需要，请重新购卡。');
						$("#iosmember_not").hide();
						$("#iosmember_is").hide();	
						$("#iosmember_fail").show();
					} else {
						$("#iosmember_not").find("dd").html('购卡并绑定后，可免费下载20000款，总价近100000元的苹果正版软件。');
						$("#iosmember_not").show();
						$("#iosmember_is").hide();	
						$("#iosmember_fail").hide();
						$("#cardetail").live("click",function(){
							downloadAgent.navUrl('4', '/member/buy.html');
						});
					}
					return false;
				},'json');
			} else {
				$("#iosmember_not").find("dd").html('下载收费文件，需到购物车进行结账。如已购买苹果卡，可免费下载...');
						$("#iosmember_not").show();
						$("#iosmember_is").hide();	
						$("#iosmember_fail").hide();
			}
			getCartListCount(data, function(result) {
				if (result) {
					setShoppingCartInfo(null, result);
				}
				dispAppList('#defapplist'); //不显示，无实际作用，但需要在此处读ios软件列表以生产数据库
			});
			return false;
			
		} else if (data.phonetype == phoneOptions.mtk) {
			$('#mtkoverview').fadeIn();
			if (!data || data == null) { data.imgurl = _img1 + '/resources/temp/mobiledef.jpg' };
				$('#mtk_logo').attr('src', data.imgurl ? data.imgurl + '_sf_35x1000.png' : _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/mobiledef.jpg');
				$('#mtk_name').text(data.hname);
				$('#mtkbasic').show();
				var imei = data.imei;
				$('#mo_info_sn').text(imei||'').attr('title', imei||'');
				var osver = data.osversion;
				$('#mo_info_vr').text(osver || '').attr('title', osver || '');
				if (data.imei){
					//MTK模式提示已激活
					jQuery.post('/getaccountbytermcode.php', {}, function(data){
						//alert($.toJSON(data));
						var cardtype = data.cardtype || '';
						var binddate = data.binddate || '';
						var faildate = data.faildate || '';
						var remainingdate = data.remainingdate || '';
						var isok = data.isok || '';
						if (cardtype && cardtype == 5){
							var cardtype = "半年卡";	
						} else if (cardtype && cardtype == 6){
							var cardtype = "年卡";	
						} else if (cardtype && cardtype == 7){
							var cardtype = "两年卡";	
						} else {
							var cardtype = "季卡";	
						}
						if (isok && isok == 1 ){
							$("#member_is_mtk").find("dd").html('卡类型：' + cardtype + '&nbsp&nbsp&nbsp&nbsp&nbsp激活日期：' + binddate + '&nbsp&nbsp&nbsp&nbsp&nbsp免费下载剩余天数：' + remainingdate + '天');
							$("#member_not_mtk").hide();
							$("#member_is_mtk").show();	
							$("#member_fail_mtk").hide();
						} else if (isok && isok == 2){
							$("#member_fail_mtk").find("dd").html('很抱歉！您的下载卡已于'+faildate+'过期，如有需要，请重新购卡。');
							$("#member_not_mtk").hide();
							$("#member_is_mtk").hide();	
							$("#member_fail_mtk").show();
						} else {
							$("#member_not_mtk").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
							$("#member_not_mtk").show();
							$("#member_is_mtk").hide();	
							$("#member_fail_mtk").hide();
							$("#cardetail_mtk").live("click",function(){
								downloadAgent.navUrl('4', '/member/buy.html');
							});
						}
						return false;
					},'json');
				} else {
					$("#member_not_mtk").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
							$("#member_not_mtk").show();
							$("#member_is_mtk").hide();	
							$("#member_fail_mtk").hide();
							$("#cardetail_mtk").live("click",function(){
								downloadAgent.navUrl('4', '/member/buy.html');
					});
				};//MTK模式提示已激活结束
				return;
				
		} else if (data.phonetype == phoneOptions.disk){
			$('#diskoverview').show();
			if (!data || data == null) { data.imgurl = _img1 + '/resources/temp/u.png' };
				$('#disk_logo').attr('src', data.imgurl ? data.imgurl + '_sf_35x1000.png' : _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/u.png');
				$('#disk_name').text(data.hname);
				$('#diskbasic').show();
				var imei = data.imei();
				$('#mo_info_sn').text(imei||'').attr('title', imei||'');
				var osver = osversion();
				$('#mo_info_vr').text(osver || '').attr('title', osver || '');
				if (data.imei){
					//U盘模式提示已激活
					jQuery.post('/getaccountbytermcode.php', {}, function(data){
						//alert($.toJSON(data));
						var cardtype = data.cardtype || '';
						var binddate = data.binddate || '';
						var faildate = data.faildate || '';
						var remainingdate = data.remainingdate || '';
						var isok = data.isok || '';
						if (cardtype && cardtype == 5){
							var cardtype = "半年卡";	
						} else if (cardtype && cardtype == 6){
							var cardtype = "年卡";	
						} else if (cardtype && cardtype == 7){
							var cardtype = "两年卡";	
						} else {
							var cardtype = "季卡";	
						}
						if (isok && isok == 1 ){
							$("#member_is_u").find("dd").html('卡类型：' + cardtype + '&nbsp&nbsp&nbsp&nbsp&nbsp激活日期：' + binddate + '&nbsp&nbsp&nbsp&nbsp&nbsp免费下载剩余天数：' + remainingdate + '天');
							$("#member_not_u").hide();
							$("#member_is_u").show();	
							$("#member_fail_u").hide();
						} else if (isok && isok == 2){
							$("#member_fail_u").find("dd").html('很抱歉！您的下载卡已于'+faildate+'过期，如有需要，请重新购卡。');
							$("#member_not_u").hide();
							$("#member_is_u").hide();	
							$("#member_fail_u").show();
						} else {
							$("#member_not_u").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
							$("#member_not_u").show();
							$("#member_is_u").hide();	
							$("#member_fail_u").hide();
							$("#cardetail_u").live("click",function(){
								downloadAgent.navUrl('4', '/member/buy.html');
							});
						}
						return false;
					},'json');
				} else {
					$("#member_not_u").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
							$("#member_not_u").show();
							$("#member_is_u").hide();	
							$("#member_fail_u").hide();
							$("#cardetail_u").live("click",function(){
								downloadAgent.navUrl('4', '/member/buy.html');
					});
				};//U盘模式提示已激活结束	
				return;
		} else {
			$('#devoverview').fadeIn(); //信息内容区域
			$('#mo_logo').attr('src', data.imgurl ? data.imgurl + '_sf_35x1000.png' : _img1 + '/imagemobile.php?width=35&image=' + _img1 + '/resources/temp/mobiledef.jpg');
			$('#mo_name').text(data.hname); //手机名
			$('#devoverview #phonebasic').show();
			
			$('#mo_info_v').text(data.fname).attr('title', data.fname);
			$('#mo_info_p').text(data.hname).attr('title', data.hname);
			
			$('#mo_info_nt').text(data.nettype).attr('title', data.nettype);
			$('#mo_info_sc').text(data.screen + '英寸').attr('title', data.screen + '英寸');
			$('#mo_info_wh').text(data.width + ' X ' + data.height).attr('title', data.width + ' X ' + data.height);
			
			$('#mo_info_cpu').text(data.cpu || '').attr('title', data.cpu || '');
			$('#mo_info_camera').text(data.camera || '').attr('title', data.camera || '');
			$('#mo_info_blue').text(data.blue || '').attr('title', data.blue || '');
			$('#mo_info_wifi').text(data.wifi || '').attr('title', data.wifi || '');
			
			if (data.phonetype == phoneOptions.symbian) {
				$('#mo_info_os').text('Symbian').attr('title', 'Symbian');
			} else if (data.phonetype == phoneOptions.android) {
				$('#mo_info_os').text('Android').attr('title', 'Android');
			} else if (data.phonetype == phoneOptions.disk) {
				$('#mo_info_os').text('Disk').attr('title', 'Disk');
			} else if (data.phonetype == phoneOptions.iphone) {
				$('#mo_info_os').text('Iphone').attr('title', 'Iphone');
			} else if (data.phonetype == phoneOptions.windows) {
				$('#mo_info_os').text('Windows').attr('title', 'Windows');
			} else if (data.phonetype == phoneOptions.mtk) {
				$('#mo_info_os').text('MTK').attr('title', 'MTK');
			} else {
				$('#mo_info_os').text('未知').attr('title', '未知');
			}
			
			$('#phoneinfo').show();
			$('#mo_info_sn').text(data.imei || '').attr('title', data.imei || '');
			$('#mo_info_vr').text(data.phoneosversion || '').attr('title', data.phoneosversion || '');
			
			if (data.filelist){
				//RAM 信息
				var disk = JSON.parse(data.filelist);
				if (disk && disk.file && disk.file.length > 0 && disk.file[0].totalmemory && disk.file[0].totalmemory != '0byte' && disk.file[0].usedmemory != '0byte') {
					var info = disk.file[0];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					var usedmemory = formatSpace(usedmemory, info.usedmemory);
					var totalmemory = formatSpace(totalmemory, info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent, '#mo_ram');
					$('#mo_ram').next('div').children('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_ram').parent().css('visibility', 'visible');
				}
				else {
					if (phonetype == phoneOptions.symbian) {
						$('#mo_ram').next('div').children('span').text('Symbian手机不支持').next('span').text('');
					} else if (phonetype == phoneOptions.mtk) {
						$('#mo_ram').next('div').children('span').text('非智能手机不支持').next('span').text('');
					} else {
						$('#mo_ram').next('div').children('span').text('此手机不支持').next('span').text('');
					}
				}
				
				//ROM 信息
				if (disk && disk.file && disk.file.length > 1 && disk.file[1].totalmemory && disk.file[1].totalmemory != '0byte' && disk.file[1].usedmemory != '0byte') {
					var info = disk.file[1];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					var usedmemory = formatSpace(usedmemory, info.usedmemory);
					var totalmemory = formatSpace(totalmemory, info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent, '#mo_rom');
					$('#mo_rom').next('div').children('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_rom').parent().css('visibility', 'visible');
				}
				else {
					if (phonetype == phoneOptions.symbian) {
						$('mo_rom').next('div').children('span').text('Symbian手机不支持').next('span').text('');
					} else if (phonetype == phoneOptions.mtk) {
						$('#mo_rom').next('div').children('span').text('非智能手机不支持').next('span').text('');
					} else {
						$('#mo_rom').next('div').children('span').text('此手机不支持').next('span').text('');
					}
				}
				
				// SDC信息
				if (disk && disk.file && disk.file.length > 2 && disk.file[2].totalmemory && disk.file[2].totalmemory != '0byte' && disk.file[2].usedmemory != '0byte') {
					var info = disk.file[2];
					var usedmemory = parseFloat(info.usedmemory);
					var totalmemory = parseFloat(info.totalmemory);
					var usedmemory = formatSpace(usedmemory, info.usedmemory);
					var totalmemory = formatSpace(totalmemory, info.totalmemory);
					var percent = usedmemory / totalmemory * 100;
					formatPercent(percent, '#mo_fla');
					$('#mo_fla').next('div').children('span').text('已用' + info.usedmemory).next('span').text('可用' + info.freememory);
					$('#mo_fla').parent().css('visibility', 'visible');
				}
				else {
					$('#mo_fla').next('div').children('span').text('没有SD卡').next('span').text('');
				}
			}
			
			if (data.imei){
				//Android模式提示已激活
				jQuery.post('/getaccountbytermcode.php', {}, function(data){
					//alert($.toJSON(data));
					var cardtype = data.cardtype || '';
					var binddate = data.binddate || '';
					var faildate = data.faildate || '';
					var remainingdate = data.remainingdate || '';
					var isok = data.isok || '';
					if (cardtype && cardtype == 5){
						var cardtype = "半年卡";	
					}else if (cardtype && cardtype == 6){
						var cardtype = "年卡";	
					}else if (cardtype && cardtype == 7){
						var cardtype = "两年卡";	
					}else{
						var cardtype = "季卡";	
					}
					if (isok && isok == 1 ){
						$("#member_is").show();	
						$("#member_is").find("dd").html('卡类型：' + cardtype + '&nbsp&nbsp&nbsp&nbsp&nbsp激活日期：' + binddate + '&nbsp&nbsp&nbsp&nbsp&nbsp免费下载剩余天数：' + remainingdate + '天');
						$("#member_not").hide();
						$("#member_fail").hide();
					} else if (isok && isok == 2){
						$("#member_fail").find("dd").html('很抱歉！您的下载卡已于'+faildate+'过期，如有需要，请重新购卡。');
						$("#member_not").hide();
						$("#member_is").hide();	
						$("#member_fail").show();
					} else {
						$("#member_not").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
						//$("#member_not").find("dd").html('购卡并成功激活后，可在有效期内为该手机无限次免费下载所有资源...');
						$("#member_not").show();
						$("#member_is").hide();	
						$("#member_fail").hide();
						$("#cardetail").live("click",function(){
							downloadAgent.navUrl('4', '/member/buy.html');
						});
					}
					return false;
				},'json');
			} else {
				$("#member_not").find("dd").html('下载收费文件，需到购物车进行结账。如已购买下载卡，可免费下载...');
						$("#member_not").show();
						$("#member_is").hide();	
						$("#member_fail").hide();
			}
			
		}
		
		getCartListCount(data, function(result) {
			if (result) {
				setShoppingCartInfo(null, result);
			}
			dispAppList('#defapplist');
			//dispAppCount(null,'defapps');
		});
	}
});

$(document).live('appupdatedown', function(event, applist){
	if (checkphone() == false) { return false; }
	if (checkdisk() == false) return false;
	if (applist == 'applist'){
		var data = jQuery.makeArray($('#applist tr a.downinit'));
	} else {
		var data = jQuery.makeArray($('#defapplist a.downinit'));
	}
	$(data).each(function(i, item){ data[i] = item.id+'||'+item.href+'||'+item.title });
	cbWaiting('正在添加更新到下载列表', function(){
		$('#optlog>#logs').html('');
			cbProgress('正在添加更新到下载列表', function(){
				if (!data || !data.length) { $('#progressmsg').html('没有找到要更新的软件 <a href="#" onclick="$(this).colorbox.close(); return false;" class="cblue">关闭</a>'); return false; }
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
							appid : 0,
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
