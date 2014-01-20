$(document).ready(function(){
	/* 下载软件操作 */
	$('.downinit').live('click', function(){
		if ($(this).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) { return false; }
		if(!$(this).attr("is_sc")){
			if (checkphone() == false) { return false; }
		}
		//if (checkdiskbuyanddown() == false) { return false; }
		if ($.trim(this.href) == '' || this.href == location.href || this.href.indexOf('.appdear.com/appstore/')==0 || this.href.indexOf('.appdear.com/start/')==0){
			$.floatingMessage('<span class="s wrong"><span class="cblue">' + this.title + '</span>  无法添加到下载列表</span><br>没有找到适配的文件', {time:3000, align:"right", verticalAlign:"bottom"});  
		}
		else{
			var data = {
				id : this.id,
				url : this.href,
				name : this.title,
				appid : $(this).attr('appid'),
				installlocate : $(this).attr('installlocate'),
				businesstype : $(this).attr('businesstype'),
				is_sc : $(this).attr('is_sc'),
				isbiz : $(this).attr('isbiz')
			};
			addTask(data);
		}
		return false;
	});
	
	//未绑定卡情况下，所有下载按钮失效
	var chncode = WebAppLocalStorage("schncode") || 0;
	var card = WebAppLocalStorage("accountbytermcode") || 0;
	var url = window.location.href;
	var flag = /com\/appstore\/common-tools.html/.test(url);
	if (card && !flag && chncode == "1100000") {
		var card_info = JSON.parse(card),
			isok = card_info.isok;
		var remainingdate = card_info.remainingdate;
		if (isok == 2) {
			$('.downinit').attr('href', "javascript:void(0)");
			$('.downinit').die('click');
			$('.downinit').live('click',function(){
				cbConfirm ('爱皮下载服务卡已过期，请您绑定新卡',function(){
					jumpUrl("activecard","");
				},null);
				return false;
			});
		} else if (isok < 1 ) {
			$('.downinit').attr('href', "javascript:void(0)");
			$('.downinit').die('click');
			$('.downinit').live('click',function(){
				cbConfirm ('请先绑定爱皮下载服务卡',function(){
					jumpUrl("activecard","");
				},null);
				return false;
			});
		}
	}
	return false;
});

/*会员卡激活页促销包下载*/
$("#ad_clear a").live('click', function(id){
	if (checkphone() == false) {
		return false;
	}
	if (checkios() == false) {
		return false;
	}
	
	if ($(this).hasClass("pakage1")) {
		var id = 1;
	} else if ($(this).hasClass("pakage2")) {
		var id = 2;
	} else if ($(this).hasClass("pakage3")) {
		var id = 3;
	} else {
		var id = 4;
	}
	
	var phonetype = getCurrentPhone().phonetype;
	if (phonetype == 3) {
		$.getJSON('/resources/ad/pakage' + id + '.json', function(data){
			var downlist = jQuery.makeArray(data);
			var downlistleng = data.length;
			if (downlistleng == 0) {
				setTimeout(function(){
					cbMessage('没有找到合适的文件');
				}, 1000);
				return false;
			}
			cbWaiting('正在处理文件，请等待', function(){
				var undatacall = function(){
					if (!downlist || downlist.length == 0) {
						$.colorbox.close();
						return;
					}
					var i = downlistleng - downlist.length;
					var appid = data[i].appid; 
					var version = data[i].version;
					var versioncode = data[i].versioncode;
					var apps = [appid, version, versioncode];
					/*checkapp(apps, function(arr_result){ // 验证是否已经安装，新版不建立app表的情况下会出现bug 遂暂时不验证
						var result = arr_result[$(this).attr("appid")|| $(this).attr("title")];
						var item = downlist.shift(downlist.length, 1);
						if (data[i].url == '' || data[i].url == location.href || data[i].url.indexOf('appdear.com/appstore/') == 0 || data[i].url.indexOf('appdear.com/start/') == 0) {
							$.floatingMessage('<span class="s wrong"><span class="cblue">' + data[i].title + '</span>  无法添加到下载列表</span><br>没有找到适配的文件', {
								time: 3000,
								align: "right",
								verticalAlign: "bottom"
							});
						} else if (result == -1) {
							$.floatingMessage('<span class="s wrong"><span class="cblue">' + data[i].title + '</span>  已经安装过了</span>', {
								time: 3000,
								align: "right",
								verticalAlign: "bottom"
							});
						} else {
							addTask(data[i].id, data[i].url, data[i].title, data[i].appid);
							$.floatingMessage('<span class="s addtodown"><span class="cblue">' + data[i].title + '</span>  已添加到下载列表</span>', {
								time: 3000,
								align: "right",
								verticalAlign: "bottom"
							});
						}
						setTimeout(undatacall, 1000);
					});*/
					var item = downlist.shift(downlist.length, 1);
					var rows = {
						id : data[i].id,
						url : data[i].url,
						name : data[i].title,
						appid : data[i].appid
					};
					addTask(rows);
					setTimeout(undatacall, 1000);
				};
				undatacall();
			});
		}, 'json');
	} else if (phonetype == 8) {
		$.getJSON('/resources/ad/pakage' + id + '_ios.json', function(data){
			var downlist = jQuery.makeArray(data);
			var downlistleng = data.length;
			if (downlistleng == 0) {
				setTimeout(function(){
					cbMessage('没有找到合适的文件');
				}, 1000);
				return false;
			}
			cbWaiting('正在处理文件，请等待', function(){
				var undatacall = function(){
					if (!downlist || downlist.length == 0) {
						$.colorbox.close();
						return;
					}
					var i = downlistleng - downlist.length;
					//var result = checkapp(data[i].appid, data[i].version, data[i].versioncode);
					var item = downlist.shift(downlist.length, 1);
					/*if (data[i].url == '' || data[i].url == location.href || data[i].url.indexOf('appdear.com/appstore/') == 0 || data[i].url.indexOf('appdear.com/start/') == 0) {
						$.floatingMessage('<span class="s wrong"><span class="cblue">' + data[i].title + '</span>  无法添加到下载列表</span><br>没有找到适配的文件', {
							time: 3000,
							align: "right",
							verticalAlign: "bottom"
						});
					}
					else if (result == -1) {
						$.floatingMessage('<span class="s wrong"><span class="cblue">' + data[i].title + '</span>  已经安装过了</span>', {
							time: 3000,
							align: "right",
							verticalAlign: "bottom"
						});
					}
					else {
						addTask(data[i].id, data[i].url, data[i].title, data[i].appid);
						$.floatingMessage('<span class="s addtodown"><span class="cblue">' + data[i].title + '</span>  已添加到下载列表</span>', {
							time: 3000,
							align: "right",
							verticalAlign: "bottom"
						});
					}*/
					var rows = {
						id : data[i].id,
						url : data[i].url,
						name : data[i].title,
						appid : data[i].appid
					};
					addTask(rows);
					setTimeout(undatacall, 1000);
				};
				undatacall();
			});
		}, 'json');
	} else {
		cbMessage('您的手机不支持此操作！'); 
		return false;
	}
	return false;
});