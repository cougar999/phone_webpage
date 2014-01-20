<!--{foreach key=key item=menu_ranking from=$menulist.list.items}-->
<!--{if in_array($menu_ranking.menucode ,array(1331,1332,200005,200006))}-->
<div class="unit">
	<div class="titlebar">
		<h2><!--{$menu_ranking.menuname}--></h2>
	</div>
	<div id="topdownload-list">
		<div class="content" id="content-<!--{$menu_ranking.menuid}-->">
		<!--{feed int=AP_INT_BOARD_LIST cid=$menu_ranking.menuid order=0 pageno=1 count=10 ret='boardlist'}-->
		<!--{foreach key=key item=item_b from=$boardlist.page.items name=list}-->
		<!--{feed int=AP_INT_BOARD_SOFTLIST bid=$item_b.bid bsid=0 order=0 pageno=1 count=10 ret='boardsoftlist'}-->
		<!--{foreach key=key item=item from=$boardsoftlist.page.items name=list}-->
			<dl class="<!--{if $smarty.foreach.list.iteration%2==1}-->even<!--{else}-->odd<!--{/if}-->">
				<dt class="rank-icon<!--{$smarty.foreach.list.iteration}--> <!--{if $smarty.foreach.list.iteration == 1}-->no<!--{/if}-->">
					<a title="<!--{$item.name}-->" href="#" onclick="return false;"><!--{$item.name|truncate_utf8_string:10:"...":true}--></a>
					<span class="cssright"><!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}--></span>
				</dt>
				<dd class="rank-dd clear  <!--{if $smarty.foreach.list.iteration != 1}-->no<!--{/if}-->">
					<div class="cssleft" style="position:relative;">
						<a href="<!--{if $smarty.get.navtype==2}-->/appstore/game-detail.html<!--{else}-->/appstore/soft.html<!--{/if}-->?softid=<!--{$item.softid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><img src="<!--{$item.imgurl}-->_sf_48x48.png" title="<!--{$item.name}-->"></a>
					</div>
					<div class="cssleft rank-tt">
						<p><a href="<!--{if $smarty.get.navtype==2}-->/appstore/game-detail.html<!--{else}-->/appstore/soft.html<!--{/if}-->?softid=<!--{$item.softid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|truncate_utf8_string:10:"...":true}--></a></p>
						<p>
							<span><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->未知<!--{/if}--></span>
							<span><!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}--></span>
						</p>
					</div>
					<div class="down cssright"><a id="<!--{$item.softid}-->" onclick="return false;" href="<!--{if $item.downloadurl && ($item.downloadurl!='#')}--><!--{$item.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$menu_ranking.menucode}-->&code2_id=<!--{$menu_ranking.menuid}-->&code3=boardlist&code3_id=<!--{$item_b.bid}--><!--{/if}-->" installlocate="<!--{$item.installlocate}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->"  type="<!--{if 1331 == $menu_ranking.menucode}-->2<!--{else}-->1<!--{/if}-->"  price="<!--{math equation='(x)/100' x=$item.price|default:0}-->"  servicefee="<!--{math equation='(x)/100' x=$item.servicefee|default:0}-->" class="<!--{if ($item.price or $item.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit newpage<!--{/if}-->" title="<!--{$item.name}-->"></a></div>
				</dd>
			</dl>
			<!--{/foreach}-->
			<!--{/foreach}-->
			<span class="clear"></span>
		</div>
	</div>
</div>

<div class="clear" style="height:20px;"></div>
<!--{/if}-->
<!--{/foreach}-->