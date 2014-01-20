//init
if(null == cookies('salesid') || (JSON.parse(WebAppLocalStorage("salesid")).data) != cookies('salesid')){
	(function getSalesid() {
		var salesid = JSON.parse(WebAppLocalStorage("salesid"));
		if (salesid) {
			cookies('salesid', salesid.data, {path:'/'});
		} else {
			setTimeout(getSalesid, 200);
		}
	})();
}

if(null == cookies('uid') || (JSON.parse(WebAppLocalStorage("uid")).data) != cookies('uid')){
	(function getUid() {
		var uid = JSON.parse(WebAppLocalStorage("uid"));
		if (uid) {
			cookies('uid', uid.data, {path:'/'});
		} else {
			setTimeout(getUid, 200);
		}
	})();
}

if(null == cookies('salesname') || (JSON.parse(WebAppLocalStorage("salesname")).data) != cookies('salesname')){
	(function getSalesname() {
		var salesname = JSON.parse(WebAppLocalStorage("salesname"));
		if (salesname) {
			cookies('salesname', salesname.data, {path:'/'});
		} else {
			setTimeout(getSalesname, 200);
		}
	})();
}

if(null == cookies('shopid') || (JSON.parse(WebAppLocalStorage("shopid")).data) != cookies('shopid')){
	(function getShopid() {
		var shopid = JSON.parse(WebAppLocalStorage("shopid"));
		if (shopid) {
			cookies('shopid', shopid.data, {path:'/'});
		} else {
			setTimeout(getShopid, 200);
		}
	})();
}

if(null == cookies('pcrcode') || (JSON.parse(WebAppLocalStorage("pcrcode")).data) != cookies('pcrcode')){
	(function getPcrcode() {
		var pcrcode = JSON.parse(WebAppLocalStorage("pcrcode"));
		if (pcrcode) {
			cookies('pcrcode', pcrcode.data, {path:'/'});
		} else {
			setTimeout(getPcrcode, 200);
		}
	})();
}

if(null == cookies('channelcode') || (JSON.parse(WebAppLocalStorage("channelcode")).data) != cookies('channelcode')){
	(function getChannelcode() {
		var channelcode = JSON.parse(WebAppLocalStorage("channelcode"));
		if (channelcode) {
			cookies('channelcode', channelcode.data, {path:'/'});
		} else {
			setTimeout(getChannelcode, 200);
		}
	})();
}

//初始化后，检测用户登录的渠道码，用于下载

(function(){
	var sales = WebAppLocalStorage("salesid") || 0;
	var salesid = JSON.parse(sales).data || 0;
	if(salesid) {
		$.get('/getsalesinfo.php', {said:salesid}, function(data){
			var result = JSON.parse(data) || 0;
			if (result.result.resultcode == '000000') {
				var schncode = result.schncode;
				WebAppLocalStorage("schncode", schncode);
			}
		});	
	}
})();

function checkappstatus(obj){
	var obj_this = obj;
	var rows = new Array();
	var i = 0;
	obj_this.each(function(){
		if(3 == $(this).attr("businesstype")) return;
		if ($(this).hasClass('change')) return;
		rows[i]= {
			appid : $(this).attr("appid")|| $(this).attr("title"),
			versioncode : $(this).attr("versioncode")
		};
		i++;
	});
	delete i;
	checkapp(rows ,function(arr_result){
		obj_this.each(function(){
			var result = arr_result[$(this).attr("appid")|| $(this).attr("title")];
			if (result < 0) {
				if ($(this).attr('isbiz') == 1) return;
				$(this).attr("disabled",true);
				$(this).attr("href", "javascript:void(0)");
				if($(this).hasClass('newpage')){
					$(this).css({'background':'url(' + _img4 + '/resources/img40/yianzhuang-xiao_normal.png) no-repeat'});
				} else if($(this).closest('.downinit_s').length > 0){
					if ($(this).html().length > 0) {
						$(this).css({'background':'url(' + _img4 + '/resources/img40/yianzhuang-xiao_normal.png) no-repeat'});
					} else {
						$(this).removeClass("downbtn_small").addClass("js_installed_small").hide();
					}
				} else {
					if ($(this).find('img').hasClass('imgbig')){
						$(this).removeClass('downbtnbig').addClass('installedbtnbig').find('img').attr('src', _img4 + '/resources/images/transparent.gif');;
					}else{
						$(this).find('img').attr('class', 'js_installed_mid').attr('src', _img4 + '/resources/img40/btn_installed_normal.png');
						if ($(this).attr("tagName") == 'INPUT') {
							$(this).parent().next().next().append(' <span style="color:red;">已安装</span>');
						}
					}
				}
			} else if (result > 0) {
				if ($(this).attr('isbiz') == 1) return;
				if($(this).hasClass('newpage')){
					$(this).css({'background':'url(' + _img4 + '/resources/img/gengxin-xiao_normal.png) no-repeat'});
				} else if($(this).closest('.downinit_s').length > 0){
					if ($(this).html().length > 0) {
						$(this).css({'background':'url(' + _img4 + '/resources/img/gengxin-xiao_normal.png) no-repeat'});
					} else {
						$(this).removeClass("downbtn_small").addClass("js_update_small").hide();
					}
				} else{
					if ($(this).find('img').hasClass('imgbig')){
						$(this).removeClass('downbtnbig').addClass('updatebtnbig').find('img').attr('src', _img4 + '/resources/images/transparent.gif');;
						$(this).find('img').parent().attr('href', $(this).attr('href') + '&update=1');
					}else{
						$(this).find('img').attr('class', 'js_update_mid').attr('src', _img4 + '/resources/images/transparent.gif');
						$(this).find('img').parent().attr('href', $(this).attr('href') + '&update=1');
						if ($(this).attr("tagName") == 'INPUT') {
							$(this).parent().next().next().append(' <span style="color:red;">更新</span>');
						}
					}
				}
			} else {
				return;
			}
		});
	});
	delete rows;
	delete obj_this;
}

$(document).ready(function(){
	
	if (parent.document != document) {
		$('#pageloading', parent.document).hide();
	}
	
	$(window).resize(function(){
		$('.scroll').each(function(){
			$(this).css('height', document.body.clientHeight - $('.contentside').outerHeight());
		});
		if (location.href.indexOf('download.html') > -1 ) {
			$('body').css('overflow','hidden');
		}
	});
	
	$('input.selector').live('click', function(){
		if (this.checked) {
			if (this.value && this.value != 'on') {
				$(this.value).find('input:not(:checked)').each(function(){
					if (!this.disabled)
						this.checked = true; 
				});
			} else {
				$(this).closest('thead').next('tbody').find('tr input:not(:checked)').each(function(){
					if (!this.disabled)
						this.checked = true; 
				}); 
			}
		} else {
			if (this.value && this.value != 'on') {
				$(this.value).find('input:checked').each(function(){
					if (!this.disabled)
						this.checked = false; 
				});
			} else {
				$(this).closest('thead').next('tbody').find('tr input:checked').each(function(){ 
					if (!this.disabled)
					this.checked = false; 
				});
			}
		}
	});
	
	$('#back, #forward').bind('click', function(){
		if (this.hash == '#back') {
			window.history.back();
		} else if (this.hash == '#forward') {
			window.history.forward();
		}
		return false;
	});
	
	(function () {
		setTimeout(function(){
		$('#refresh').bind('click', function(){
			if (this.hash == '#refresh') {
				WebAppSessionStorage(location.href, true);
				//location.href = location.href;
				window.location.reload(location.href);
			}
			return false;
		});
	} ,1500);
	})();
	
	$(document).ready(function(){
		$("#sealist li a").bind("click", function(){
			if($(this).attr("href") == '#1') {
				$("#seasele").removeClass().addClass("sch_soft");
			} else if ($(this).attr("href") == '#3'){
				$("#seasele").removeClass().addClass("sch_music");
			} else if ($(this).attr("href") == '#5'){
				$("#seasele").removeClass().addClass("sch_book");
			} else if ($(this).attr("href") == '#7'){
				$("#seasele").removeClass().addClass("sch_theme");
			}
			//var seasele = event.srcElement;
			var seasele = $(this);
			var seanumber = seasele[0].hash ? seasele[0].hash.substr(1) : seasele[0].firstChild.hash.substr(1);
			$('#seatype').val(seanumber);
			$('#sealist li').show();
			$(seasele).parent().parent().hide();
			return false;
		});
		
		$("#keyword").bind("click", function(){
			if($("#keyword").val()=='软件游戏' || $("#keyword").val()=='音乐歌曲' || $("#keyword").val()=='电子书籍' || $("#keyword").val()=='主题图片' ){
				$("#keyword").val('');
			};
		});
		
	});
	
	if($('input.buyitem, input.downitem, .downinit, .addcart').length > 0){
		checkappstatus($('input.buyitem, input.downitem, .downinit, .addcart'));
	}
	
	//图像预览弹出层
	$(".fileitem").live('click',function(){
		$('.fileitem').colorbox({rel:'fileitem',innerWidth:'50%',innderHeight:'30%'});
	});
	
});

$(document).ready(function(){
	$('table.treetable').each(function() {
		var settings = {expandable:true, initialState:"expanded", treeColumn:1};
		var options = $(this).metadata();
		$table = $(this).treeTable(jQuery.extend(settings, options));
	});

	$('.wgt-app-list li').live('mouseenter', function () {
			$(this).find('.softfav').show();
			$(this).find('.downinit_s').show();
			$(this).find('.softservice').hide();
			$(this).find('.downinit').show();
	}).live('mouseleave', function () {
			$(this).find('.softfav').hide();
			$(this).find('.downinit_s').hide();
			$(this).find('.softservice').show();
			$(this).find('.downinit').hide();
	});
	$('table.datatable tbody tr').live('mouseenter', function () {
			$(this).addClass("hover");
			$(this).find('.softservice').hide();
			$(this).find('.downinit').show();
			$(this).find('a.changex').trigger("change1");
	}).live('mouseleave', function () {
			$(this).removeClass("hover");
			$(this).find('.softservice').show();
			$(this).find('a.changex').trigger("change2");
	});
		
	$('a.changex').live('change1', function(){
		if ($(this).hasClass('js_update_small')) {
			$(this).show();
		} else if ($(this).hasClass('js_installed_small')) {
			$(this).show();
		}  else if ($(this).hasClass('addcart')) {
			$(this).html('<img src="' + _img4 + '/resources/images/transparent.gif" class="buy" border="0" title="' + $(this).text() + '" />');
		} else {
			$(this).html('<img src="' + _img4 + '/resources/images/transparent.gif" class="downbtn_small" border="0" title="' + $(this).text() + '" />');	
		}
	});

	$('a.changex').live('change2', function(){
		if ($(this).hasClass('js_update_small')) {
			$(this).hide();
		} else if ($(this).hasClass('js_installed_small')) {
			$(this).hide();
		} else {
			$(this).html($(this).find('img').attr('title'));
		}
	});
	
	$('.openlink').live('click',function(){
		var file = JSON.stringify ({exefile:'', openfile:this.href, windowstyle:'1'});
		setDataCache(null, 'shellexecute', file, function(data, status){
			if (status != 'ok') return;
			log('open:' + file);
		});
	});
	
}); 


$(document).ready(function(){
	var url = document.location.href;
	var ena = /^(.*\.com\/appstore\/)(store\.html|common-tools\.html|download\.html|fea\.html|top-download\.html|new\.html|app\.html|app_home\.html|game\.html|game_home\.html|music\.html|book\.html|book-index\.html|theme-soft\.html|theme-soft-detal\.html)/i.test(url);
	var ena1 = /^(.*\.com\/start\/)(feature\.html|overview\.html|datacopy\.html|exquisitepack\.html|soft\.html|download\.html)/i.test(url);
	var ena3 = /^(.*\.com\/mobile\/)(backup\.html|overview\.html|restore\.html||app\.html|contacts\.html|sms\.html|file\.html|download\.html)/i.test(url);
	var ena4 = /^(.*\.com\/member\/)(register\.html|overview\.html|buy\.html|activation\.html)/i.test(url);
	var ena5 = /^(.*\.com\/zone\/)(video\.html|music\.html|admin\.html)/i.test(url);
	var ena6 = /^(.*\.com\/fitting\/)(fittings\.html|apples\.html|ybcard\.html)/i.test(url);
	var ena7 = /^(.*\.com\/intergral\/)(intergral\.html|quests\.html|task_ranking\.html|task_rule\.html|task_exchange\.html)/i.test(url);
	var ena8 = /^(.*\.com\/favorite\/)(favorite\.html|game\.html|cd-file\.html)/i.test(url);
	if (
			parent && parent.document != document && ena ||
			parent && parent.document != document && ena1 ||
			parent && parent.document != document && ena3 ||
			parent && parent.document != document && ena4 ||
			parent && parent.document != document && ena5 ||
			parent && parent.document != document && ena6 ||
			parent && parent.document != document && ena7 ||
			parent && parent.document != document && ena8
		) {
			$('div.menu', parent.document).each(function() {
				$(this).find('h3 a').each(function(){
					$(this).removeClass("active");
					var pos = this.href.indexOf('gotopage=');
					if (pos > -1) {
						var url = this.href.substr(pos + 9);
					} else {
						var url = this.href.substr(location.href.indexOf('.com/') + 4);
					}
					var deurl = decodeURIComponent(url);
					
					pos = deurl.indexOf('&phonetype=');
					if (pos > -1) {
						url = deurl.substr(0, pos);
					} else {
						url = deurl;
					}
					
					if (location.href.indexOf(url) > -1) {
						$(this).addClass("active");
					};
				});
			});//dfone
		$('div.menu', parent.document).each(function() {
			$(this).find('ul a').each(function(){
				var pos = this.href.indexOf('gotopage=');
				if (pos > -1) {
					var url = this.href.substr(pos + 9);
				} else {
					var url = this.href.substr(location.href.indexOf('.com/') + 4);
				}
				
				var deurl = decodeURIComponent(url);
				pos = deurl.indexOf('&phonetype=');
				if (pos > -1) {
					url = deurl.substr(0, pos);
				} else {
					url = deurl;
				}
				
				if (location.href.indexOf(url) > -1) {
					$(this).removeClass("active").addClass("active");
				} else {
					$(this).removeClass("active");
				}
			});
		});
	
		$('div.menu', parent.document).each(function() {
			$(this).find('dl a').each(function(){
				var pos = this.href.indexOf('gotopage=');
				if (pos > -1) {
					var url = this.href.substr(pos + 9);
				} else {
					var url = this.href.substr(location.href.indexOf('.com/') + 4);
				}
				var deurl = decodeURIComponent(url);
				pos = deurl.indexOf('&phonetype=');
				if (pos > -1) {
					url = deurl.substr(0, pos);
				} else {
					url = deurl;
				}
				
				if (location.href.indexOf(url) > -1) {
					$(this).removeClass("active").addClass("active");
				} else {
					$(this).removeClass("active");
				}
			});
		});
	
		$('div.menu', parent.document).each(function() {
			$(this).find('h3>a').each(function(){
				var pos = this.href.indexOf('gotopage=');
				if (pos > -1) {
					var url = this.href.substr(pos + 9);
				} else {
					var url = this.href.substr(location.href.indexOf('.com/') + 4);
				}
				var deurl = decodeURIComponent(url);
				
				pos = deurl.indexOf('&phonetype=');
				if (pos > -1) {
					url = deurl.substr(0, pos);
				} else {
					url = deurl;
				}
				
				if (location.href.indexOf(url) > -1 || $(this).closest('h3').next('dl,ul').find('.active').length > 0) {
					$(this).closest('h3').removeClass("active").addClass("active");
					/*$(this).children('span.icon-down').trigger('click');
					$(this).children('span.icon-down').closest('h3').next('dl,ul').show();*/
					$(this).children('span.icon-down').removeClass("icon-down").addClass("icon-up");
					
				} else {
					$(this).closest('h3').removeClass("active");
					/*$(this).children('span.icon-up').trigger('click');
					$(this).children('span.icon-up').closest('h3').next('dl,ul').hide();*/
					$(this).children('span.icon-up').removeClass("icon-up").addClass("icon-down");
					
				}
				
			});
			if ($(this).find('h3.active').length == 0) { $(this).find('h3:first').addClass('active'); }
		});
		
	}
	
	$('div.navs').each(function() {
		$(this).find('h3>a').each(function(){
			if (location.href.indexOf(this.href) > -1) {
				$(this).closest('h3').removeClass("active").addClass("active");
			}
		});
		if ($(this).find('h3.active').length == 0) { $(this).find('h3:first').addClass('active'); }
	});
	
	$('div.cats').each(function() {
		$(this).find('h3>a').each(function(){
			var local = location.href;
			var url = this.href; 
			if (local.indexOf(url) > -1) {
				$(this).closest('h3').removeClass("active").addClass("active");
			} else if (local.indexOf('contentid=')> -1 && local.substr(local.indexOf('contentid=')+10,6) == url.substr(url.indexOf('contentid=')+10,6)) {
				$(this).closest('h3').removeClass("active").addClass("active");
			}
		});
		if ($(this).find('h3.active').length == 0) { $(this).find('h3:first').addClass('active'); }
	});
	
	$('div.sort').each(function() {
		$(this).find('h3>a').each(function(){
			if (location.href == this.href) {
				$(this).closest('h3').removeClass("active").addClass("active");
			} 
		});
	});
	
	$('#catebar li a').each(function() {
		var local = location.href;
		var url = this.href;
		if (local.indexOf(url) > -1) {
			$(this).removeClass("active").addClass("active");
		} else if (local.indexOf('catid=')> -1 && local.substr(local.indexOf('catid=')+6,24) == url.substr(url.indexOf('catid=')+6,24)) {
			$(this).removeClass("active").addClass("active");
		}
		 
	});
	
});

$(document).ready(function(){
	$('div.menu h3 a').bind('click', function() {
			$(this).closest('h3').siblings().next('dl,ul').hide();
			$(this).closest('h3').next('dl,ul').show();
			$(this).closest('h3').addClass('active');
			$(this).closest('h3').siblings().removeClass();
	});
});

//注册登录开始 
$(document).ready(function(){
	
	$('#purchase,#purchase1').bind('click', function(){
		$.colorbox({href:'/purchase-tip.html', iframe:true, width:500, height:275, close:false, overlayClose:false});
		return false;
	});
	
	$('#login').bind('click', function(){
		var sessionid = cookies('sessionid');
		var name = $.trim($('#username').val())?$.trim($('#username').val()):'';
		var passwd = $.trim($('#password').val())?$.trim($('#password').val()):'';
		if (name==''){
			cbMessage('用户名不能为空！');
			return false;
		}
		if (passwd==''){
			cbMessage('密码不能为空！');
			return false;
		}
		
		var send = {name:name, passwd:passwd};	
		jQuery.post('/userlogin.php', send, function(data){
			var resultcode = data.result.resultcode || '';
			if (resultcode=='000000'){
				var self = this;
				self.disabled = true;
				var userid = data.userid;
				var sessionid = data.sessionid;
				cookies('userid', userid, {path:'/'});
				cookies('sessionid', sessionid, {path:'/'});
				location.href="/member/overview.html?userid=" + userid + "&sessionid=" + sessionid;
			}else{
				cbMessage(data.result.resultinfo);
				return false;
			}
								
		}, 'json');
		
	});
	
	$('#logout').live('click', function(){
		cookies('userid', "", {path:'/'});
		cookies('sessionid', "", {path:'/'});
		location.href="/member/login.html";
	});
	
	$('#btn_updatepasswd').live('click', function(){
		$.colorbox({href:'/updatepasswd_page.html', iframe:true, width:'400px', height:'275px', close:false, overlayClose:false, scrolling:false });
		return false;
	});
	
	$('#assistant_logout').bind('click', function(){
		cookies('shopuserid', "", {path:'/'});
		cookies('shopid', "", {path:'/'});
		cookies('shopname', "", {path:'/'});
		location.href="/zone/login.html";
	});
	
	//推送到手机
	$("#pushtophone").live('click',  function(){
		var sid = $(this).attr("sid");
		var sname = encodeURI($(this).attr("sname"));
		$.colorbox({href:'/appstore/pushtophone.html?sid=' + sid + '&sname=' + sname, iframe:true, innerWidth:400, innerHeight:200, close:false, scrolling:false});
		return false;
	});

});

function playmedia(song) {
	var url = song.href;
	var file = JSON.stringify ({exefile:'wmplayer', openfile:url, windowstyle:'1'});
	setDataCache(null, 'shellexecute', file, function(data, status){
		if (status != 'ok') return;
		log('open:' + file);
	});
	return false;		
}