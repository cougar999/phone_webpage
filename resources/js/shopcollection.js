$(document).ready(function(){
	$('.cjnav1 li').live('click',function(){
		//$(".cjnav1 li").removeClass("hover");
		//$(this).addClass("hover");
		switch($(this).attr("id")){
			case "favorite-soft":
				gotopageurl('/favorite/favorite.html?phonetype='+GetQueryString('phonetype')+'&iscrack='+GetQueryString('iscrack'));
			break;
			case "favorite-game":
				gotopageurl('/favorite/game.html?phonetype='+GetQueryString('phonetype')+'&iscrack='+GetQueryString('iscrack'));
			break;
		}
	});
	$(".shopc").live("click",function(){
		//加入连点标记
		if($(this).attr("is_addc") == 1)return false;$(this).attr("is_addc","1");
		
		if(null == cookies('salesid')) return false;
		var salesid = cookies('salesid');
		var phonetype = parseInt(GetQueryString('phonetype'));
		var obj_this = $(this);
		phonetype = phonetype ? phonetype : (cookies('phonetype') || 3);
		iscrack = GetQueryString('iscrack') || 0;
		var send = {salesid : salesid, contentids : $(this).attr("id"), contenttype : $(this).attr("type"), downloadurl : $(this).attr("href"), version : $(this).attr("version"), iscrack : iscrack};
		var row = {
			contentid:$(this).attr("id"),
			contentname:$(this).attr("title"),
			appid:$(this).attr("appid"),
			type:$(this).attr("type"),
			price:$(this).attr("price"),
			servicefee:$(this).attr("servicefee"),
			catalog:$(this).attr("catalog") || '',
			downloadurl:$(this).attr("href"),
			version:$(this).attr("version"),
			versioncode:$(this).attr("versioncode"),
			icon:$(this).attr("icon"),
			installlocate:$(this).attr("installlocate"),
			size:$(this).attr("size"),
			phonetype:phonetype,
			iscrack:iscrack
		};
		getShopCollectionListCount(salesid,'',function(result, data_count){
			if(data_count >= 1000){
				$.floatingMessage('<span class="s wrong">您的收藏已经达到上限1000条，不能再添加了！<br>请整理您的收藏，删除一些后继续添加！</span>', {time:3000, align:"right", verticalAlign:"bottom"});
				obj_this.attr("is_addc","0");
				return ;
			}else{
				jQuery.post('/api/api_shopaddcollection.php?phonetype=' + phonetype + ".", send, function(data){
					var resultcode = data.result.resultcode || '';
					if (resultcode=='000000'){
						if (data.isok == '2'){
							$.floatingMessage('<span class="s wrong"><span class="cblue">'+ row.contentname + '</span> 已添加到收藏夹,不能多次添加</span>', {time:3000, align:"right", verticalAlign:"bottom"});
							obj_this.attr("is_addc","0");
						}else{
							var add_row = {
									id : data.list.items[0].id,
									contentid:data.list.items[0].contentid || row.contentid,
									contentname:data.list.items[0].name || row.contentname,
									appid:data.list.items[0].appid || row.appid,
									type:data.list.items[0].type || row.type,
									price:data.list.items[0].price || row.price,
									servicefee:data.list.items[0].servicefee || row.servicefee,
									catalog:data.list.items[0].catalog || row.catalog,
									downloadurl:data.list.items[0].downloadurl || row.downloadurl,
									version:data.list.items[0].version || row.version,
									versioncode:data.list.items[0].versioncode || row.versioncode,
									icon:data.list.items[0].icon || row.icon,
									installlocate:data.list.items[0].installlocate || row.installlocate,
									size:data.list.items[0].size || row.size,
									phonetype:data.list.items[0].phonetype || row.phonetype,
									iscrack:data.list.items[0].iscrack || row.iscrack
								};
							$.floatingMessage('<span class="s addtocart"><span class="cblue">'+ row.contentname + '</span> 已添加到收藏夹，请到本地安装查看。</span>', {time:3000, align:"right", verticalAlign:"bottom"});
							obj_this.attr("is_addc","0");
							if(data_count != 0){
								checkShopCollectionData(salesid,add_row,function(result,data){
									if (!result) return ;
									if (data == 0){
										addShopCollection(salesid , add_row , function(result , data){
											if (!result) return;
										});
									}
								});
							}
							delete add_row;
						}
					}else{
						$.floatingMessage('<span class="s addtocart"><span class="cblue">'+ row.contentname + '</span> 添加失败，请稍后再试</span>', {time:3000, align:"right", verticalAlign:"bottom"});
						$obj_this.attr("is_addc","0");
					}
				},'json');
				delete row;
			}
		});
	});
	
	$(".shopcdel").live("click",function(){
		var collectionids = $(this).attr("id");
		cbConfirm("<p style='height:30px;'>您确认要删除该收藏的软件吗?</p>",function(){
			if(null == cookies('salesid')) return false;
			var salesid = cookies('salesid');
			var send = {salesid : salesid, collectionids : collectionids};
			var row = {
					collectionids:collectionids
				};
			jQuery.post('/api/api_shopdelcollection.php', send, function(data){
				var resultcode = data.result.resultcode || '';
				if (resultcode=='000000'){
					delShopCollection(salesid, row, function(result, data){
						if(!result) return ;
						var pid = $("#collectionids_"+row.collectionids).parent(".xjjctt").attr("id");
						$("#collectionids_"+row.collectionids).remove();
						var total_count = parseInt($("#total_count").html()) - 1;
						$("#total_count").html(total_count);
						if('' == $("#"+pid).html()){
							$("#"+pid).html('<div style="padding:100px;text-align:center;font-size:14px;font-weight:800;">暂无收藏数据</div>');
						}
					});
				}
			},'json');
			$.colorbox.close();
		},null);
		return false;
	});
	
	$("#btn_all_shopcdelbox").click(function () {//当点击全选框时
		var flag = $("#btn_all_shopcdelbox").attr("checked") || false;//判断全选按钮的状态
		$("input[name='shopcdel']").each(function () {//查找每一个Id以Item结尾的checkbox
			$(this).attr("checked", flag);//选中或者取消选中
		});
	});
	
	$(".btn_all_shopcdel").click(function () {
		cbConfirm("<p style='height:30px;'>您确认要删除已选中的这些收藏的软件吗?</p>",function(){
			if(null == cookies('salesid')) return false;
			var salesid = cookies('salesid');
			var arr_collectionids = new Array();
			var i = 0;
			$("input[name='shopcdel']:checked").each(function(){
				arr_collectionids[i] = $(this).attr("collectionid");
				i++;
			});
			var collectionids = arr_collectionids.join(",");
			var send = {salesid : salesid, collectionids : collectionids};
			var row = {
					collectionids:collectionids
				};
			jQuery.post('/api/api_shopdelcollection.php', send, function(data){
				var resultcode = data.result.resultcode || '';
				if (resultcode=='000000'){
					delShopCollection(salesid, row, function(result, data){
						if(!result) return ;
						for(var i = 0;i < arr_collectionids.length ;i++){
							var id = arr_collectionids[i];
							$("#collectionids_"+id).remove();
						}
						var total_count = parseInt($("#total_count").html()) - i;
						$("#total_count").html(total_count);
						if('' == $(".xjjctt").html()){
							$(".xjjctt").html('<div style="padding:100px;text-align:center;font-size:14px;font-weight:800;">暂无收藏数据</div>');
						}
					});
				}
			},'json');
			$.colorbox.close();
		},null);
	});
	
	$(".btn_all_shopcdown").click(function () {
		cbWaiting('正在处理您选中的文件，请等待', function(box, msgEle, pointEle){
			var rows = new Array();
			$("input[name='shopcdel']:checked").each(function(i){
				rows[i] = $("#collectionids_"+$(this).attr("collectionid"));
			});
			var length = rows.length;
			var i = 0;
			var undatacall = function() {
				var objcontent = rows[i];
				if(i >= length){
					$.colorbox.close();
					return;
				}
				if(!getCurrentPhone() || !getCurrentPhone().imei){
					objcontent.find("a.addcart").attr("class","downinit");
				}else{
					objcontent.find("a.addcart").trigger("click");
				}
				objcontent.find("a.downinit").trigger("click");
				if(!getCurrentPhone() || !getCurrentPhone().imei){
					objcontent.find("a.downinit").attr("class","addcart");
				}
				i++;
				setTimeout(undatacall, 100);
			};
			undatacall();
			return; 
		});
		
	});
});

function createDatabaseShopCollection(callback, ingore){
	if (ingore) {
		if(callback)
			callback({}, "ok");
		return; 
	}
	var sql = "CREATE TABLE IF NOT EXISTS `shopcollection` (" +
			"id INTEGER, " +
			"salesid VARCHAR(36), " +
			"contentid INTEGER, " +
			"contentname TEXT, " +
			"appid TEXT, " +
			"type INTEGER, " +
			"price FLOAT, " +
			"servicefee FLOAT, " +
			"catalog TEXT, " +
			"downloadurl TEXT, " +
			"version TEXT, " +
			"versioncode TEXT, " +
			"icon TEXT, " +
			"installlocate INTEGER, " +
			"size FLOAT, " +
			"phonetype INTEGER, " +
			"iscrack INTEGER" +
			")";
	var argv = [];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
	});
}

function writeDatabaseForInterface(type, sort, pageno, count){
	if(null == cookies('salesid')) return false;
	var salesid = cookies('salesid');
	var pageno = pageno || 1;
	var count = count || 1000;
	send = {salesid:salesid, pageno:pageno, count:count};
	getShopCollectionListCount(salesid,'',function(result, data){
		if (!salesid) return;
		if(data == 0){
			var get_start_time = new Date().getTime();
			jQuery.post('/api/api_shopgetcollectionlist.php', send, function(data){
				var get_end_time = new Date().getTime() - get_start_time;
				var resultcode = data.result.resultcode || '';
				if (resultcode=='000000' && data && data.page && data.page.totalcount > 0) {
					var write_start_time = new Date().getTime();
					var db = openDatabase('WebAppDatabase', '1.0', 'Offline data storage', (5*1024*1024));
					db.transaction(function(t) {
						for (var i = 0; i < data.page.items.length; i++) {
							var items = data.page.items[i];
							var row = {
								id:items.id,
								contentid:items.contentid,
								contentname:items.name,
								appid:items.appid,
								type:items.type,
								price:items.price,
								servicefee:items.servicefee,
								catalog:items.catalog,
								downloadurl:items.downloadurl,
								version:items.version,
								versioncode:items.versioncode,
								icon:items.icon,
								installlocate:items.installlocate,
								size:items.size,
								phonetype:items.phonetype,
								iscrack:items.iscrack || 0
							};
							var sql = "insert into `shopcollection` (id,salesid, contentid, contentname, appid, type, price, servicefee, catalog, downloadurl, version, versioncode, icon, installlocate, size, phonetype, iscrack) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
							var argv = [row.id, salesid, row.contentid, row.contentname, row.appid, row.type, row.price, row.servicefee, row.catalog, row.downloadurl, row.version, row.versioncode, row.icon, row.installlocate, row.size, row.phonetype, row.iscrack];
							t.executeSql(sql, argv);
						}
					});
					var write_end_time = new Date().getTime() - write_start_time;
					jQuery.get('/track.html' + '?get=' + get_end_time + '&write=' +  write_end_time);
					getShopCollectionPage(type,sort);
				}else{
					log("服务内部错误");
					getShopCollectionPage(type,sort);
					return;
				}
			},'json');
		}else{
			getShopCollectionPage(type,sort);
			return;
		}
	});
}

function checkShopCollectionData(salesid,row,callback){
	if(!salesid) return;
	if((null == row) || !row.contentid || !row.type)return ;
	var sql = "SELECT count(*) as total FROM `shopcollection` WHERE salesid=? AND contentid=? AND type=? AND phonetype=? AND iscrack=?";
	var argv = [salesid,row.contentid,row.type,row.phonetype,row.iscrack];
	WebAppDatabase(sql, argv, function(result, data) {
		if (callback) {
			callback(result ,data.rows.item(0)['total']);
		}
	});
}

function getShopCollectionListCount(salesid,row, callback){
	if(!salesid) return;
	var sql = "SELECT count(*) as total FROM `shopcollection` WHERE salesid=?";
	var argv = [salesid];
	if(row.phonetype && row.type){
		sql += " AND phonetype=? AND type=? AND iscrack=?";
		var argv = [salesid,row.phonetype,row.type,row.iscrack];
	}
	createDatabaseShopCollection();
	WebAppDatabase(sql, argv, function(result, data) {
		if(!result)return ;
		if (callback) {
			callback(result , data.rows.item(0)['total']);
		}
	});
}

function getShopCollectionList(salesid,row,callback,sort){
	if (!salesid) return;
	if(!row.phonetype || !row.type) return ;
	if(!sort){sort = " order by id desc";}
	var sql = "SELECT id,contentid,contentname,appid,type,price,servicefee,catalog,downloadurl,version,versioncode,icon,installlocate,size FROM `shopcollection` WHERE salesid=? AND phonetype=? AND type=? AND iscrack=?" + sort;
	var argv = [salesid,row.phonetype,row.type,row.iscrack];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
		var rows = new Array();
		for (var i = 0; i < data.rows.length; i++) {
			var row = data.rows.item(i);
			rows[i] = row;
		}
		if (callback) callback(result, rows);
	});
}

function addShopCollection(salesid,row,callback){
	if (!salesid) return;
	var sql = "insert into `shopcollection` (id,salesid, contentid, contentname, appid, type, price, servicefee, catalog, downloadurl, version, versioncode, icon, installlocate, size, phonetype, iscrack) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	var argv = [row.id, salesid, row.contentid, row.contentname, row.appid, row.type, row.price, row.servicefee, row.catalog, row.downloadurl, row.version, row.versioncode, row.icon, row.installlocate, row.size, row.phonetype, row.iscrack];
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
		if (callback) callback(result, data);
	});
}

function delShopCollection(salesid, data, callback){
	if (!salesid) return;
	var sql = "delete from `shopcollection` where salesid=?";
	var argv = [salesid];
	if(data.collectionids){
		sql += " AND id in ("+data.collectionids+")";
		//var argv = [salesid, data.collectionids];
	}
	WebAppDatabase(sql, argv, function(result, data) {
		if (!result) return;
		if (callback) callback(result, data);
	});
}

function getShopCollectionPage(type,sort){
	if(null != cookies('salesid')){
		var salesid = cookies('salesid');
		var phonetype = parseInt(GetQueryString('phonetype'));
		phonetype = phonetype ? phonetype : (cookies('phonetype') || 3);
		if ((null != getCurrentPhone()) && (null != getCurrentPhone().phonetype) && getCurrentPhone().phonetype) {
			phonetype = getCurrentPhone().phonetype;
		}
		var row = {
			phonetype:phonetype,
			type:type,
			iscrack:GetQueryString('iscrack') || 0
		};
		getShopCollectionListCount(salesid,row,function(result,data){
			var no_data_html = '<div style="padding:100px;text-align:center;font-size:14px;font-weight:800;">暂无收藏数据</div>';
			if(data > 0){
				getShopCollectionList(salesid,row,function(result,data){
					var num_one = 0;
					var html_content = '';
					for (var i = 0; i < data.length; i++) {
						var type = data[i].type;
						var collectionid = data[i].id;
						var id = data[i].contentid;
						var sname = data[i].contentname || '';
						var name = data[i].contentname ? data[i].contentname.substr(0,6) : '';
						var icon = data[i].icon;
						var downloadurl = data[i].downloadurl+"&code1=shoucang";
						var installlocate = data[i].installlocate;
						var appid = data[i].appid;
						var versioncode = data[i].versioncode;
						var version = data[i].version;
						var price = data[i].price/100;
						var servicefee = data[i].servicefee/100;
						var catalog = data[i].catalog || '';
						switch(type){
							case 1:
								html_content += '<dl id="collectionids_' + collectionid + '">'+
		                       		'<dd class="choosebtn"><input type="checkbox" collectionid="' + collectionid + '" name="shopcdel"></dd>'+
		                       		'<dd class="iconbg" style="position:relative;"><a href="/appstore/soft.html?softid='+id+'&phonetype=' + GetQueryString('phonetype') + '&iscrack=' + GetQueryString('iscrack') + '"><img src="' + icon + '_sf_48x48.png"><div class="mask-icon-gray"></div></a><span class="cache"></span></dd>'+
		                       		'<dt class="sctitle"><a href="/appstore/soft.html?softid='+id+'&phonetype=' + GetQueryString('phonetype') + '&iscrack=' + GetQueryString('iscrack') + '">' + name + '</a></dt>'+
		                       		'<dd class="czbtn">'+'<span class="price">';
								if(8 == parseInt(GetQueryString('phonetype'))){
									if (price || servicefee){
										html_content += (price+servicefee)+"元";
		                       		}else{
		                       			html_content += '免费';
		                       		}
								}else{
									html_content += catalog.substr(0,6);
								}
								html_content += '</span><span class="down f_l no"><a is_sc="1" id="' + id + '" href="' + downloadurl + '" installlocate="' + installlocate + '" appid="' + appid + '" versioncode="' + versioncode + '"  version="' + version + '" title="' + sname + '" type="1"  price="' + price + '" servicefee="' + servicefee + '" class="';
	                       		if (price || servicefee){
	                       			html_content += "addcart";
	                       		}else{
	                       			html_content += 'downinit';
	                       		} 
	                       		html_content += ' newpage" onclick="return false;"></a></span>'+
		                       		'<span class="caozuo f_l no"><a id="' + collectionid + '" class="shopcdel" contenttype="1"></a></span>'+
		                       		'</dd>'+
		                       		'</dl>';
	                       		num_one += 1;
								break;
							case 2:
								html_content += '<dl id="collectionids_' + collectionid + '">'+
		                       		'<dd class="choosebtn"><input type="checkbox" collectionid="' + collectionid + '" name="shopcdel"></dd>'+
		                       		'<dd class="iconbg" style="position:relative;"><a href="/appstore/game-detail.html?softid='+id+'&phonetype=' + GetQueryString('phonetype') + '&iscrack=' + GetQueryString('iscrack') + '"><img src="' + icon + '_sf_48x48.png"><div class="mask-icon-gray"></div></a><span class="cache"></span></dd>'+
		                       		'<dt class="sctitle"><a href="/appstore/game-detail.html?softid='+id+'&phonetype=' + GetQueryString('phonetype') + '&iscrack=' + GetQueryString('iscrack') + '">' + name + '</a></dt>'+
		                       		'<dd class="czbtn">'+
		                       		'<span class="price">';
								if(8 == parseInt(GetQueryString('phonetype'))){
									if (price || servicefee){
										html_content += (price+servicefee)+"元";
		                       		}else{
		                       			html_content += '免费';
		                       		}
								}else{
									html_content += catalog.substr(0,6);
								}
								html_content += '</span><span class="down f_l no"><a is_sc="1" id="' + id + '" href="' + downloadurl + '" installlocate="' + installlocate + '" appid="' + appid + '" versioncode="' + versioncode + '"  version="' + version + '" title="' + sname + '" type="2"  price="' + price + '" servicefee="' + servicefee + '" class="';
	                       		if (price || servicefee){
	                       			html_content += "addcart";
	                       		}else{
	                       			html_content += 'downinit';
	                       		} 
	                       		html_content += ' newpage" onclick="return false;"></a></span>'+
		                       		'<span class="caozuo f_l no"><a id="' + collectionid + '" class="shopcdel" contenttype="2"></a></span>'+
		                       		'</dd>'+
		                       		'</dl>';
	                       		num_one += 1;
								break;
							case 3:break;
							case 4:break;
							case 5:break;
						}
					}
					$(".xjjctt").html(html_content);
					$("#total_count").html(num_one);
					if($('a.downitem, a.addcart, .downinit, .addcart').length > 0){
						checkappstatus($('a.downitem, a.addcart, .downinit, .addcart'));
					}
					var arr_sid = new Array();
					$(".xjjctt").find("dl").each(function(i){
						var sid = $(this).find(".down a").attr("id");
						var downloadurl = $(this).find(".down a").attr("href");
						arr_sid[i] = {
									sid			: sid,
									downloadurl	: downloadurl 
								};
					});
					var sidleng = arr_sid.length;
					var undatacall = function(){
						if (!arr_sid || arr_sid.length == 0) {
							return;
						}
						var sid = arr_sid[0].sid;
						if(1 == GetQueryString('iscrack')){
							sid = 'is' + sid;
						}else{
							sid = 's' + sid;
						}
						var downloadurl = arr_sid[0].downloadurl; 
						getDownloadFileIsExist(sid,downloadurl,function(data,status,data1){
							var item = arr_sid.shift(arr_sid.length, 1);
							if(status != 'ok') return;
							if(1 == GetQueryString('iscrack')){
								var re_sid = data1.substring(2,data1.length);
							}else{
								var re_sid = data1.substring(1,data1.length);
							}
							//log("name:" + data + "::" + re_sid);
							if(data == 1){
								$("#"+re_sid).parent().parent().parent().find(".cache").attr("class","cache_yes");
							}
							undatacall();
						});
						//setTimeout(undatacall, 1000);
					};
					undatacall();
					$(".xjjctt").find("dl").each(function(){
						$(this).bind("mouseenter" , function(){
							$(this).find(".price").addClass("no");
							$(this).find(".down").removeClass("no");
							$(this).find(".caozuo").removeClass("no");
							
						}).bind("mouseleave" ,function(){
							$(this).find(".price").removeClass("no");
							$(this).find(".down").addClass("no");
							$(this).find(".caozuo").addClass("no");
							
						});
					});
					//如果全部选中勾上全选框，全部选中状态时取消了其中一个则取消全选框的选中状态
					$("input[name='shopcdel']").each(function () {
						$(this).click(function () {
							if ($("input[name='shopcdel']:checked").length == $("input[name='shopcdel']").length) {
								$("#btn_all_shopcdelbox").attr("checked", "checked");
							}
							else $("#btn_all_shopcdelbox").removeAttr("checked");
						});
					}); 
				},sort);
			}else{
				$(".xjjctt").html(no_data_html);
			}
		});
		delete salesid;
		delete row;
	}
}