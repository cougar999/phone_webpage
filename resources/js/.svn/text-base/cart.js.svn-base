$(document).ready(function(){
	// 购物车操作
	$('.addcart').live('click', function(){
		if ($(this).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) { return false; }
		if(!$(this).attr("is_sc")){
			if (checkphone() == false) { return false; }
		}
		var row = {
				id : this.id,
				url : this.href,
				name : this.title,
				appid : $(this).attr('appid'),
				installlocate : $(this).attr('installlocate'),
				businesstype : $(this).attr('businesstype'),
				is_sc : $(this).attr('is_sc'),
				isbiz : $(this).attr('isbiz')
			};
		jQuery.post('/getaccountbytermcode.php', {}, function(data){
			var isok = data.isok || '';
			var faildate = data.faildate || '';
			if ((isok && isok == 1) || row.is_sc == 1){
				//if (checkdiskbuyanddown() == false) { return false; }
				if ($.trim(row.url) == '' || row.url == location.href || row.url.indexOf('.appdear.com/appstore/')==0 || row.url.indexOf('.appdear.com/start/')==0){
					$.floatingMessage('<span class="s wrong"><span class="cblue">' + row.name + '</span>  无法添加到下载列表</span><br>没有找到适配的文件', {time:3000, align:"right", verticalAlign:"bottom"});  
				}else{
					addTask(row);
				}
			} else if (isok && isok == 2) {
				cbConfirm('您的爱皮下载卡已过期，请重新绑定！', function(){
					$.colorbox.close();
					jumpUrl('register', '');
				}, null, null, '点击确定可跳转至激活页面，取消则继续操作。');
				return false;
			} else{
				$('#cboxOverlay').css({'opacity': '0.9', 'cursor': 'auto', 'display': 'block'});
				$.post('/frame_card.tpl',row,function(data){
					$('#colorbox').css({'width':'515px','height':'390px', 'top': '154px', 'left': '449px', 'display':'block'});
					$('#colorbox').html('<div id="cboxWrapper" style="width: 515px; height: 390px; "><div><div id="cboxTopLeft" style="float: left; "></div><div id="cboxTopCenter" style="float: left; width: 515px; "></div><div id="cboxTopRight" style="float: left; "></div></div><div style="clear: left; "><div id="cboxMiddleLeft" style="float: left; height: 390px; "></div><div id="cboxContent" style="float: left; width: 515px; height: 390px; "><div id="cboxLoadedContent" style="width: 455px; overflow-x: hidden; overflow-y: hidden; height: 340px; "></div><div id="cboxLoadingOverlay" style="float: left; display: none; "></div><div id="cboxLoadingGraphic" style="float: left; display: none; "></div><div id="cboxTitle" style="float: left; display: block; "></div><div id="cboxCurrent" style="float: left; display: none; "></div><div id="cboxNext" style="float: left; display: none; "></div><div id="cboxPrevious" style="float: left; display: none; "></div><div id="cboxSlideshow" style="float: left; display: none; "></div><div id="cboxClose" style="float: left; "></div></div><div id="cboxMiddleRight" style="float: left; height: 390px; "></div></div><div style="clear: left; "><div id="cboxBottomLeft" style="float: left; "></div><div id="cboxBottomCenter" style="float: left; width: 515px; "></div><div id="cboxBottomRight" style="float: left; "></div></div></div>');
					$('#cboxLoadedContent').html(data);
					$('#btn_checkcard_close').click(function(){
						$("#colorbox,#cboxOverlay").hide();
					});
					$("#btn_checkcard").bind("click",function(){
						if (checkphone() == false) {return false;}
						if (checkdisk() == false) return false;
						var phonetype = getCurrentPhone().phonetype;
						var ele = this;
						var card = $.trim($("#card").val());
				    	var activecode = $.trim($("#passwd").val());
				    	var mobile = $.trim($("#mobile").val());
				    	var type = $.trim($("#type").val());
						var phonett = /^(130|131|132|133|134|135|136|137|138|139|147|150|151|152|153|155|156|157|158|159|180|182|185|186|187|188|189)[0-9]{8}$/i;
				    	if(card==''){
							$("#card").parent().find('.help-block').html('<font style="color:red">请输入您的卡号</font>');
							setTimeout(function(){
								$("#card").parent().find('.help-block').html('&nbsp;');
							},3000);
							return false;
						}
				    	if(/^[0-9]{16}$/i.test(card) == false){
				    		$("#card").parent().find('.help-block').html('<font style="color:red">卡号格式错误</font>'); 
							setTimeout(function(){
								$("#card").parent().find('.help-block').html('&nbsp;');
							},3000);
							return false;
						}
						//检测苹果卡和phonetype是否一致
						if(/^[0-9][0-9][1]\d{13}$/i.test(card) == true ){
							if (phonetype != 8 && phonetype != 10) {
								$("#card").parent().find('.help-block').html('<font style="color:red">您使用的是苹果卡 ，请连接IOS设备</font>'); 
								setTimeout(function(){
									$("#card").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							}
						}
						if(/^[0-9][0-9][1]\d{13}$/i.test(card) == false){
							if (phonetype == 8 || phonetype == 10) {
								$("#card").parent().find('.help-block').html('<font style="color:red">您使用的是IOS设备，不能激活普通卡</font>'); 
								setTimeout(function(){
									$("#card").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							}
						}
				    	if(activecode==''){
				    		$("#passwd").parent().find('.help-block').html('<font style="color:red">请输入您的激活码</font>'); 
							setTimeout(function(){
								$("#passwd").parent().find('.help-block').html('&nbsp;');
							},3000);
							return false;
						}
				    	if(/^[0-9]{6}$/i.test(activecode) == false){
				    		$("#passwd").parent().find('.help-block').html('<font style="color:red">激活码必须是6位数字，请重新输入</font>'); 
							setTimeout(function(){
								$("#passwd").parent().find('.help-block').html('&nbsp;');
							},3000);
							return false;
						}
						if (mobile && phonett.test(mobile)!= true ){
				    		$("#mobile").parent().find('.help-block').html('<font style="color:red">手机号码格式错误</font>'); 
							setTimeout(function(){
								$("#mobile").parent().find('.help-block').html('&nbsp;');
							},3000);
							return false;
						}
						$("#passwd").parent().find('.help-block').html('<img src="'+_img1+'/resources/img40/loading_trans_small.gif">'); 
						jQuery.post('/activeaccount.php', {card:card, activecode:activecode,type:type,mobile:mobile}, function(data){
							if (data && data.result && data.isok && data.isok == 1) {$("#active_checkcard").hide();
								//$("#active_checkcard_success").html('<center>激活成功<span><font color="red">3</font>秒后自动下载"'+row.name+'"!</span></center>').show();
								$("#colorbox,#cboxOverlay").hide();
								addTask(row);
								return false;
							} else if (data && data.result && data.isok && data.isok == 2) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">卡号或激活码不正确！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else if (data && data.result && data.isok && data.isok == 3) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">卡号或激活码不正确！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else if (data && data.result && data.isok && data.isok == 4) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">激活码已被激活过！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else if (data && data.result && data.isok && data.isok == 5) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">终端设备已被绑定过！终端已绑定，不可使用同一终端绑定多个下载卡！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else if (data && data.result && data.isok && data.isok == 6) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">下载卡和设备不相符！使用苹果手机不能激活除苹果外的其他设备下载卡！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else if (data && data.result && data.isok && data.isok == 7) {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">下载卡和设备不相符！除苹果手机外的其他手机设备不能激活苹果下载卡！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							} else {
								$("#passwd").parent().find('.help-block').html('<font style="color:red">激活失败！操作出错，请检查卡号激活码，稍后重试！</font>'); 
								setTimeout(function(){
									$("#passwd").parent().find('.help-block').html('&nbsp;');
								},3000);
								return false;
							}
						},'json');
				    	return false;
					});
				});
			}
		},'json');
		return false;
	});
	
	$('.delcart').live('click', function(del_confirm){
		var self = this;
		cbConfirm('您是否要' + self.title + '?', function(){
			phone = getCurrentPhone();
			if (!phone && !phone.imei) return;
			var imei = phone.imei;
			getCartList(phone,function(result,buy){
				if(!result) return ;
				if(buy){
					var ids = buy.split('|');
					var idsnum = ids.length;
					var index = jQuery.inArray(self.id, ids);
					buy = '';
					for (i = 0; i < ids.length; i++) {
						if (i == index) continue;
						if (buy == '') buy = ids[i];
						else buy = buy + '|' + ids[i];
					}
					buy == '' ? '-' : buy;
					var send = {buy:buy};
					row = JSON.parse(self.id);
					delBuyCar(phone,row,function(result,data){
						if(!result) return ;
						$.post('/cart.php?phonetype='+GetQueryString('phonetype'), send, function(data){
							
							$.colorbox.close();
							setShoppingCartInfo(null, (idsnum-1), function(data, status){
								if (status != 'ok') return;
							});
							$('.contentbody').replaceWith($(data).find('.contentbody'));
							if (!buy) {	$('#cart_empty').show(); }
							return false;
						});
					});
					delete ids;
					delete buy;
					delete row;
				}else{
					$.colorbox.close();
				}
			});
		});
	});
	
	//购物车生成订单按钮
	$('#createorder').live('click', function(){
		if ($(this).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) { return false; }
		phone = getCurrentPhone();
		if (!phone && !phone.imei) return;
		getCartListCount(phone, function(result,data){
			var buycar_count = result;
			if(buycar_count > 0){
				getCartList(phone,function(result,buy){
					if (!result) return;
					buy = buy.replace(/\"/g,"'");
					var filecount = $('#filecount').val()?$('#filecount').val():0;
					var discount = $('#discount').val()?$('#discount').val():100;
					var send = {userid:$('#userid').val(), sessionid:$('#sessionid').val(), filecount:filecount,  discount:discount, total_price:$('#newprice').val(),items:[buy]};
					jQuery.post('/order.php', send, function(data){
						$.fn.colorbox({html:data ,width:470, height:300, opacity:0, close:false, scrolling:false, iframe:false});
						return false;
					});
					delete buy;
				});
			}else{
				cbMessage('您的购物车没有商品，不能生成订单！'); 
				return false;
			}
		});
		return false;
	});
	
	$('#pay_type_1').bind('click', function(){
		
		$('#account').hide();
		$('#pay_type_1').hide();
		$('#pay_type_2').show();
		$('#account_msg').show();
		$('#account_login').show();
		
		$('#account_content').show();
		
		$('#shop').show();
		$('#shop_msg').hide();
		$('#shop_login').hide();
		
		$('#shop_title').removeClass('account_title');
		$('#shop_content').removeClass('account_content');
		
		$('#account_title').addClass('account_title');
		$('#account_content').addClass('account_content');
		
	});
	
	$('#cancel_account').live('click', function(){
		$('#account').show();
		$('#pay_type_1').show();
		$('#account_msg').hide();
		$('#account_login').hide();
		$('#account_title').removeClass('account_title');
		$('#account_content').removeClass('account_content');
	});
	
	$('#pay_type_2').live('click', function(){
		
		$('#shop').hide();
		$('#shop_msg').show();
		$('#shop_login').show();
		
		$('#shop_content').show();
		
		$('#account').show();
		$('#pay_type_1').show();
		$('#pay_type_2').hide();
		$('#account_msg').hide();
		$('#account_login').hide();
	
		$('#account_title').removeClass('account_title');
		$('#account_content').removeClass('account_content');
		
		$('#shop_title').addClass('account_title');
		$('#shop_content').addClass('account_content');
	});
	
	$('#cancel_shop').live('click', function(){
		$('#shop').show();
		$('#pay_type_2').show();
		$('#shop_msg').hide();
		$('#shop_login').hide();
		$('#shop_title').removeClass('account_title');
		$('#shop_content').removeClass('account_content');
	});
	
	//会员卡或者绑定手机号的卡的支付
	$('#paybycard').bind('click', function(){
		var self = this;
		var card = $.trim($('#card').val());
    	if(card == ''){
    		cbMessage('请输入您的下载卡号'); 
			return false;
		}
    	var reg1 = /^([0-9])\d{15}$/;
    	var reg2 = /^([0-9])\d{10}$/;
    	if(!reg1.test(card) && !reg2.test(card)){
    		cbMessage('下载卡号格式错误 ');
			return false;
		}
		
		var token = $.trim($('#token').val());
		var orderid = $.trim($('#orderid').val());
			
		var send = {card:card, token:token, orderid:orderid};
		jQuery.post('/paybycard.php', send, function(data){
			if (data && data.isok && data.isok==1){
				self.disabled = true;
				$.colorbox({href:'/pay-success.html', innerWidth:600, innerHeight:320, opacity:0, close:false});
				return false;
			}else{
				cbMessage('付款失败，请重新输入卡号！');
				return false;
			}
		}, 'json');
			
	});
	$('#paybyshop').live('click', function(){
		var self = this;
		
		var username = $('#assistant').val();
		var pwd = $('#assistant_pwd').val();
		var orderid = $('#orderid').val();
		var price = $('#price').val();
		var token = $('#token').val();
		var shoporder = $('#shoporder').val();
		
		if(username==''){
			cbMessage('请输入您的店员账号'); 
			return false;
		}
		if(pwd==''){
			cbMessage('请输入您的店员账号密码'); 
			return false;
		}
		if(shoporder==''){
			cbMessage('请输入顾客的消费单号'); 
			return false;
		}
		var send = {username:username, passwd:pwd, orderid:orderid, price:price, token:token, shoporder:shoporder};
		jQuery.post('/paybyshop.php', send, function(data){
			if (data && data.isok && data.isok ==1){
				self.disabled = true;
				$.colorbox({href:'/pay-success.html', innerWidth:600, innerHeight:320, opacity:0, close:false});
				
				return false;
			}else{
				cbMessage('付款失败，请重新输入店员账号、密码和消费单号！');
				return false;
			}
			
		}, 'json');
		
	});
});

function createDatabaseCart(phone, callback, ingore){
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	var sql = "CREATE TABLE IF NOT EXISTS cart (contentid INTEGER, contentname TEXT, type INTEGER, price FLOAT, servicefee FLOAT, downloadurl TEXT, size FLOAT, imei VARCHAR(64))";
	var argv = [];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
	});
	//callback({}, "ok"); //
}

function checkCart(phone, contentid, type, callback){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	if(!contentid && !type) return;
	createDatabaseCart(phone);
	var sql = "select count(*) as total from cart where imei=? and contentid=? and type=?";
	var argv = [phone.imei , contentid , type];
	WebAppDatabase(sql, argv, function(result, data) {
		if (callback) {
			callback(result ? data.rows.item(0)['total'] : 0);
		}
	});
}

function getCartListCount(phone,callback){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	createDatabaseCart(phone);
	var sql = "select count(*) as total from cart where imei=?";
	var argv = [phone.imei];
	WebAppDatabase(sql, argv, function(result, data) {
		if (callback) {
			callback(result ? data.rows.item(0)['total'] : 0);
		}
	});
	//callback({}, "ok"); //
}

function getCartList(phone,callback, ingore){
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	createDatabaseCart(phone);
	var sql = "select contentid,contentname,type,price,servicefee,downloadurl,size from cart where imei=?";
	var argv = [phone.imei];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
		var buy = '';
		for (var i = 0; i < data.rows.length; i++) {
			var row = data.rows.item(i);
			var num = i+1;
			buy += 
				'{"contentid":'+row['contentid']+
				',"contentname":"'+row['contentname']+
				'","type":'+row['type']+
				',"price":'+row['price']+
				',"servicefee":'+row['servicefee']+
				',"downloadurl":"'+row['downloadurl']+
				'","size":"'+row['size']+'"}';
			if(num < data.rows.length){buy += '|';}
		}
		if (callback) callback(result, buy);
	});
}

function addBuyCar(phone, row, callback){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	createDatabaseCart(phone);
	var sql = "insert into `cart`(contentid, contentname, type, price, servicefee, downloadurl, size, imei) values (?,?,?,?,?,?,?,?)";
	var argv = [row.contentid, row.contentname, row.type, row.price, row.servicefee, row.downloadurl, row.size, phone.imei];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
	});
}

function delBuyCar(phone, data, callback){
	phone = phone || getCurrentPhone();
	if (!phone && !phone.imei) return;
	createDatabaseCart(phone);
	var sql = "delete from `cart` where imei=?";
	var argv = [phone.imei];
	if(data.contentid && data.type){
		sql += " and contentid=? and type=?";
		var argv = [phone.imei, data.contentid, data.type];
	}
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
		if (callback) callback(result, data);
	});
}