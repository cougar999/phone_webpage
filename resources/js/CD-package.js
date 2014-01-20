/**
 * @description:this function is get CD-package list count
 */
$(document).ready(function(){
	$('.file_install a').live('click',function(){
		if (checkphone() == false) { return false; }
		var sid = $(this).attr("sid");
		var sname = $(this).attr("sname");
		appInstallByLocal(sid,function(data,status){
			$.floatingMessage('<span class="s addtocart"><span class="cblue">'+ sname + '</span> 已添加到安装列表</span>', {time:3000, align:"right", verticalAlign:"bottom"});
		});
		return false;
	});
	
	$(".btn_all_shopcd").click(function () {
		if (checkphone() == false) { return false; }
		cbWaiting('正在处理您选中的文件，请等待', function(box, msgEle, pointEle){
			var rows = new Array();
			$("input[name='shopcdel']:checked").each(function(i){
				rows[i] = $("#sFileIds_"+$(this).attr("sFileId"));
			});
			var length = rows.length;
			var i = 0;
			var undatacall = function() {
				var objcontent = rows[i];
				if(i >= length){
					$.colorbox.close();
					return;
				}
				objcontent.find(".file_install a").trigger("click");
				i++;
				setTimeout(undatacall, 100);
			};
			undatacall();
			return; 
		});
		
	});
});
function getFileListCount(callback){
	if(!salesid) return;
	var sql = "SELECT count(*) as total FROM `localfile`";
	var argv = [];
	WebAppDatabase(sql, argv, function(result, data) {
		if(!result)return ;
		if (callback) {
			callback(result , data.rows.item(0)['total']);
		}
	});
}

function getLocalFileList(callback){
	var sql = "SELECT sFileId,sFileName,sFileChName,sFilePath,sFileType,sFileIcon,sFileUrl,sDownloadData,nFileSize,sAppId FROM `localfile`";
	var argv = [];
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

function getLocalFileHtml(){
	getLocalFileList(function(result,data){
		var num_one = 0;
		var html_content = '';
		for (var i = 0; i < data.length; i++) {
			var id = data[i].sFileId.substring(1,data[i].sFileId.length);
			var sFileId = data[i].sFileId;
			var sFileName = data[i].sFileName;
			var sFileChName = data[i].sFileChName.substr(0,6);
			var sFilePath = data[i].sFilePath;
			var sFileType = data[i].sFileType;
			var sFileIcon = "file:///"+data[i].sFileIcon;
			var sFileUrl = data[i].sFileUrl;
			var nFileSize = data[i].nFileSize;
			var sAppId = data[i].sAppId;
			
			html_content += '<dl id="sFileIds_' + sFileId + '">'+
       		'<dd class="choosebtn"><input type="checkbox" sFileId="' + sFileId + '" name="shopcdel"></dd>'+
       		'<dd class="iconbg" style="position:relative;"><a href="/appstore/soft.html?softid='+sFileId+'&phonetype=' + phoneOptions.ios + '."><img src="' + sFileIcon + '" style="width:48px;height:48px;"><div class="mask-icon-gray"></div></a></dd>'+
       		'<dt class="sctitle"><a href="/appstore/soft.html?softid='+sFileId+'&phonetype=' + phoneOptions.ios + '.">' + sFileChName + '</a></dt>'+
       		'<dd class="czbtn">';
			html_content += '<span class="file_install"><a sid="' + sFileId + '" href="#" sname="' + sFileChName + '"></a></span>'; 
       		html_content += '</dd>'+
           		'</dl>';
       		num_one += 1;
		}
		$('.xjjctt').html(html_content);
		$("#total_count").html(num_one);
		//如果全部选中勾上全选框，全部选中状态时取消了其中一个则取消全选框的选中状态
		$("input[name='shopcdel']").each(function () {
			$(this).click(function () {
				if ($("input[name='shopcdel']:checked").length == $("input[name='shopcdel']").length) {
					$("#btn_all_shopcdelbox").attr("checked", "checked");
				}
				else $("#btn_all_shopcdelbox").removeAttr("checked");
			});
		});
	});
}