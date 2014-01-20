<!--{foreach key=key item=menu_ranking from=$menulist.list.items}-->
<!--{if in_array($menu_ranking.menucode ,array(1331,1332,200005,200006,200053,200054))}-->
<div class="unit">
	<div class="titlebar">
		<h2><!--{$menu_ranking.menuname}--></h2>
	</div>
	<div id="topdownload-list">
		<div class="content" id="content-<!--{$menu_ranking.menuid}-->">
		<!--{feed int=AP_INT_BOARD_LIST cid=$menu_ranking.menuid order=0 pageno=1 count=10 iscrack=$smarty.request.iscrack|default:0 ret='boardlist'}-->
		<!--{foreach key=key item=item_b from=$boardlist.page.items name=list}-->
		<!--{feed int=AP_INT_BOARD_SOFTLIST bid=$item_b.bid bsid=0 order=0 pageno=1 count=10 iscrack=$smarty.request.iscrack|default:0 ret='boardsoftlist'}-->
		<!--{foreach key=key item=item from=$boardsoftlist.page.items name=list}-->
			<dl class="<!--{if $smarty.foreach.list.iteration%2==1}-->even<!--{else}-->odd<!--{/if}-->">
				<dd class="rank-dd clear">
					<div class="cssleft">
						<a href="<!--{if $smarty.get.navtype==2}-->/appstore/game-detail.html<!--{else}-->/appstore/soft.html<!--{/if}-->?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$item.softid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><img src="<!--{$item.imgurl}-->_sf_48x48.png" title="<!--{$item.name}-->"></a>
					</div>
					<div class="lf rank-tt">
						<p><a href="<!--{if $smarty.get.navtype==2}-->/appstore/game-detail.html<!--{else}-->/appstore/soft.html<!--{/if}-->?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$item.softid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|truncate_utf8_string:10:"...":true}--></a></p>
						<p>
							<span><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->未知<!--{/if}--></span>
							<!--<span><!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}--></span>-->
						</p>
					</div>
					<div class="down f_l no"><a id="<!--{$item.softid}-->" onclick="return false;" businesstype="<!--{$item.businesstype}-->" isbiz="<!--{$item.isbiz}-->" href="<!--{if $item.downloadurl && ($item.downloadurl!='#')}--><!--{$item.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$menu_ranking.menucode}-->&code2_id=<!--{$menu_ranking.menuid}-->&code3=boardlist&code3_id=<!--{$item_b.bid}--><!--{/if}-->" installlocate="<!--{$item.installlocate}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->"  type="<!--{if 1331 == $menu_ranking.menucode}-->2<!--{else}-->1<!--{/if}-->"  price="<!--{math equation='(x)/100' x=$item.price|default:0}-->"  servicefee="<!--{math equation='(x)/100' x=$item.servicefee|default:0}-->" class="<!--{if ($item.price or $item.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit newpage<!--{/if}-->" title="<!--{$item.name}-->"></a></div>
					<!--{if $smarty.get.phonetype == '8.' || $smarty.get.phonetype == '3.' || $smarty.get.phonetype == '.'}-->
					<div class="shoucang f_l no"><a icon="<!--{$item.imgurl}-->" id="<!--{$item.softid}-->" href="<!--{$item.downloadurl}-->" installlocate="<!--{$item.installlocate|default:1}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->" title="<!--{$item.name}-->" type="1"  price="<!--{$item.price|default:0}-->" servicefee="<!--{$item.servicefee|default:0}-->" catalog="<!--{$item.catalog}-->" size="<!--{$item.size}-->" class="collectionbtn_min shopc" onclick="return false;"></a></div>
					<!--{/if}-->
				</dd>
			</dl>
			<!--{/foreach}-->
			<!--{/foreach}-->
		</div>
	</div>
</div>

<!--{/if}-->
<!--{/foreach}-->