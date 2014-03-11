$(document).ready(function(){
	/* 下载软件操作 */
	$('.downinit').live('click', function(){
		if ($(this).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) { return false; }
		if(!$(this).attr("is_sc")){
			if (checkphone() == false) { return false; }
		}
		//if (checkdiskbuyanddown() == false) { return false; }
		if ($.trim(this.href) == '' || this.href == location.href){
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
	
});
