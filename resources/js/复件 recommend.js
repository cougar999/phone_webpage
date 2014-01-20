
/* recommend 推荐软件操作 */
$(document).ready(function(){
	/*$(window).resize(function(){
		//alert($(window).height());
		var xheight = $(window).height();
		var pos = xheight/120;
		log(pos);
		if(pos > 5) {
			$('.recomlist').css('max-height','100%');
			$('#recommends').css('height',xheight);
			$('body').css('overflow','hidden');
			$('.recomlist li').removeClass().eq(39).nextAll().addClass('no');
			return false;
		} else if(pos > 4) {
			$('.recomlist').css('max-height','480px');
			$('#recommends').css('height',xheight);
			$('body').css('overflow','hidden');
			$('.recomlist li').removeClass().eq(31).nextAll().addClass('no');
			return false;
		} else if (pos > 3.5) {
			$('.recomlist').css('max-height','360px');
			$('#recommends').css('height',xheight);
			$('body').css('overflow','hidden');
			$('.recomlist li').removeClass().eq(23).nextAll().addClass('no');
			return false;
		} else if (pos > 2) {
			$('.recomlist').css('max-height','240px');
			$('#recommends').css('height',xheight);
			$('body').css('overflow','hidden');
			$('.recomlist li').removeClass().eq(15).nextAll().addClass('no');
			return false;
		}
	});*/
	var phone = getCurrentPhone();
	/*var preloadapps = function(){
		ReadDataPage("SELECT * FROM app WHERE imei='" + phone.imei + "' ORDER BY system value", [], function(result, data){
			if (!result) return;
			if($('input.buyitem, input.downitem, .downinit, .addcart').length > 0){
				checkappstatus($('input.buyitem, input.downitem, .downinit, .addcart'));
			}
			log("初始化应用列表成功");
		});
	}
	*/
	times = 5;
	getInterface("pre", function(result){
	});
	var preloadapps = function(){
		ReadDataPage("SELECT * FROM app WHERE imei='" + phone.imei + "' ORDER BY dataindex", [], function(result, data){
			if (!result) {
				setTimeout(preloadapps, 10000);
				times = times - 1;
				if (times == 0) {
					clearTimeout(setTimeout(preloadapps, 10000));
				}
			} else {
				if($('input.buyitem, input.downitem, .downinit, .addcart').length > 0){
					checkappstatus($('input.buyitem, input.downitem, .downinit, .addcart'));
				}
				log("初始化应用列表成功");
			}
		});
	};
	preloadapps();
	
	getCartListCount(null, function(result) {
		if (result) {
			setShoppingCartInfo(null, result);
		}
	});
	
	$(".recomlist ul li").bind("mouseover" , function(){
		$(this).find(".reccat").addClass("no").next(".down").removeClass("no");
	}).bind("mouseleave" ,function(){
			$(this).find(".down").addClass("no");
			$(this).find(".reccat").removeClass("no");
	});
	
	$("#batchdown").live('click', function(id){
		var data = $(".recomlist li:not('.no') a.downinit");
		var downlist = jQuery.makeArray(data);
		var downlistleng = data.length;
		var downlistlengs = downlist.length;
		if (downlistleng == 0) {
			setTimeout(function(){
				cbMessage('没有找到合适的文件');
			}, 1000);
			return false;
		}
			var undatacall = function(){
				if (!downlist || downlist.length == 0) {
					//$.colorbox.close();
					$.floatingMessage('<span class="s addtodown"><span class="cblue">已添加' + downlistlengs + '</span>个应用到下载列表</span>', {
							time: 3000,
							align: "right",
							verticalAlign: "bottom"
					});
					return;
				}
				var i = downlistleng - downlist.length;
				var appid = data[i].getAttribute("appid"); 
				var version = data[i].getAttribute("version");
				var versioncode = data[i].getAttribute("versioncode");
				var apps = new Array;
				apps[0]= {
					appid : appid,
					versioncode : versioncode
				};
				checkapp(apps, function(arr_result){
					log('arr_result:'+arr_result);
					log('result:::'+result);
					var result = arr_result[appid|| data[i].title];
					var item = downlist.shift(downlist.length, 1);
					if (data[i].href == '' || data[i].href == location.href || data[i].href.indexOf('pcr.appdear.com/appstore/') == 0 || data[i].href.indexOf('pcr.appdear.com/start/') == 0) {
						downlistlengs = downlistlengs - 1;
					} else if (result == -1) {
						downlistlengs = downlistlengs - 1;
					} else {
						var rows = {
							id : data[i].id,
							url : data[i].href,
							name : data[i].title,
							appid : appid,
							installlocate : data[i].getAttribute("installlocate"),
							is_sc : data[i].getAttribute("is_sc"),
							businesstype : data[i].getAttribute("businesstype"),
							isbiz : data[i].getAttribute("isbiz")
						};
						addTask(rows, null, true);
					}
					setTimeout(undatacall, 200);
				});
			};
			undatacall();
	});
});