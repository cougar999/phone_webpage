<div id="wgt-toolbar">
<div class="wgt-bg">
	<a id="back" href="#back" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-back">&nbsp;</span></a>
	<a id="forward" href="#forward" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-forward">&nbsp;</span></a>
	<a id="refresh" href="#refresh" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-refresh">&nbsp;</span></a>
	<div class="rg" id="searchform">
		<form id="seaform" action="<!--{#base#}-->/appstore/search.html" method="get" style="margin:0px; padding:0px;">
			<table border="0" cellpadding="0" cellspacing="0"  height="28" >
				<tr>
					<td>
						<!-- <ul class='multi-ddm lf'>
						<li>
							<a id="seasele" href='#'></a>
							<input type="hidden" id="seatype" name="seatype" value="<!--{$seatype|default:"1"}-->" />
							<input type="hidden" id="phonetype" name="phonetype" value="<!--{$smarty.get.phonetype|default:""}-->" />
							<input type="hidden" id="iscrack" name="iscrack" value="<!--{$smarty.get.iscrack|default:""}-->" />
						</li>
						</ul> -->
						<ul id="sealist">
							<li><a href="#1" onclick="return false;"> 软件游戏</a></li>
							<!-- <li><a href="#2" onclick="return false;">休闲游戏</a></li>-->
							<!-- <li><a href="#3" onclick="return false;">音乐歌曲</a></li>-->
							<!--  <li><a href="#4" onclick="return false;">视频短片</a></li>-->
							<li><a href="#5" onclick="return false;">电子书籍</a></li>
							<li><a href="#7" onclick="return false;">主题图片</a></li>
						</ul>
						<script type="text/javascript">
						//var seatype = $('#seatype').val(); $('#sealist').find('a[href="#' + seatype + '"]').parent().hide();
						</script>
					</td>
					<td width="182">
						<input type="text" value="<!--{if $smarty.request.keyword != ''}--><!--{$smarty.request.keyword}--><!--{else}--><!--{$seasele|default:"软件游戏"}--><!--{/if}-->" id="keyword" name="keyword" maxlength="20" />
					</td>
					<td width="62">
						<a href="<!--{#base#}-->/appstore/search.html" onclick="$('#seaform').submit(); return false;" id="submitbtn">&nbsp;</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div></div>
