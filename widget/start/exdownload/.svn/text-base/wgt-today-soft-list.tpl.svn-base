<!--{feed int=AP_INT_MENU_CAT_SOFTLIST mid=$column_id order=0 pageno=1 count=32 iscrack=$smarty.request.iscrack|default:0 ret='colomunlist'}-->
<div class="unit">
	<div class="titlebar">
		<div class="bread">
	 		<ul>
	 			<li>
		 			<!--{if $nav_name=='今日推荐'}-->
						<!--{$nav_name}-->
					<!--{else}-->
						<!--{$nav_name}-->
					<!--{/if}-->
	 			</li>
	 			<li class="current_cat"></li>
	 		</ul>
	 	</div>
	<span class="cssright more"><a href="#" id="<!--{$classname}-->-btn-all">下载全部</a></span>
	</div>
	<div id="<!--{$classname}-->-list" style="overflow:hidden">
		<!--{if $colomunlist.list.items}-->
		<div class="content current_all clear" tplid="<!--{$column_id}-->" tplcode="<!--{$tpl_code2}-->" tplname="<!--{$nav_name}-->">
		<!--{foreach key=key item=items from=$colomunlist.list.items}-->
			<dl class="softa">
				<dt style="position:relative;"><a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$items.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><img src="<!--{$items.imgurl}-->_sf_56x56.png"></a><!--{if $item.isbiz == 1 && $item.goldcoin}--><div class="icon_coins"><!--{$item.goldcoin}--></div><!--{/if}--></dt>
				<dd class="softname"><a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$items.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$items.name}--></a></dd>
				<dd><!--{if $items.size}--><!--{$items.size|sizetext}--><!--{else}-->未知<!--{/if}--></dd>
				<dd class="re">
					<span>
						<!--{if $items.price || $items.servicefee }--><!--{math equation='(x/100 + y/100)' x=$items.price|default:0 y=$items.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}-->
					</span>
					<!-- <span><!--{$items.catalog}--></span>
					<span style="width:80px; height:15px; background:url(<!--{#img1#}-->/resources/img/star_fill.png) repeat-x left center;" class="lf"></span>
					<span class="ab" style="right:0px;width:<!--{math equation='(x*(50-y)/z)' x=80 y=$item.grade|default:50 z=50}-->px; height:15px; background:url(<!--{#img2#}-->/resources/img/star_hollow.png) repeat-x right center;"></span>
					 -->
					<div class="down no f_l"><a id="<!--{$items.contentid}-->" businesstype="<!--{$items.businesstype}-->" isbiz="<!--{$items.isbiz}-->" href="<!--{if $items.downloadurl && ($items.downloadurl!='#')}--><!--{$items.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$tpl_code2}-->&code2_id=<!--{$tpl_code2_id}--><!--{/if}-->" installlocate="<!--{$items.installlocate}-->" appid="<!--{$items.appid}-->"  versioncode="<!--{$items.versioncode}-->"  version="<!--{$items.version}-->" title="<!--{$items.name}-->" type="1"  price="<!--{math equation='(x)/100' x=$items.price|default:0}-->" servicefee="<!--{math equation='(x)/100' x=$items.servicefee|default:0}-->" goldcoins="<!--{if $item.goldcoin}--><!--{$item.goldcoin}--><!--{/if}-->" dt="da" class="<!--{if ($items.price or $items.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit<!--{/if}--> newpage"  onclick="return false;"></a></div>
					<!--{if $smarty.get.phonetype == '8.' || $smarty.get.phonetype == '3.' || $smarty.get.phonetype == '.'}-->
					<div class="shoucang f_l no"><a icon="<!--{$items.imgurl}-->" id="<!--{$items.contentid}-->" href="<!--{$items.downloadurl}-->" installlocate="<!--{$items.installlocate|default:1}-->" appid="<!--{$items.appid}-->"  versioncode="<!--{$items.versioncode}-->"  version="<!--{$items.version}-->" title="<!--{$items.name}-->" type="1"  price="<!--{$items.price|default:0}-->" servicefee="<!--{$items.servicefee|default:0}-->" size="<!--{$items.size}-->"  class="collectionbtn_min shopc" onclick="return false;"></a></div>
					<!--{/if}-->
				</dd>
			</dl>
			<div class="tooltip no">
				<h3><!--{$items.name|truncate_utf8_string:20:"...":true}--></h3>
				<div>
					<p>
						<span>大小：</span><!--{if $items.size}--><!--{$items.size|sizetext}--><!--{else}-->未知<!--{/if}-->
					</p>
					<p>
						<span>服务费：</span><!--{if $items.price || $items.servicefee }--><!--{math equation='(x/100 + y/100)' x=$items.price|default:0 y=$items.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}-->
					</p>
					<p><span><!--{$items.intro|default:'暂无内容'|truncate_utf8_string:55:"...":true}--></span></p>
				</div>
			</div>
		<!--{/foreach}-->
		</div>
		<!--{else}-->
		<div>
			<div style="text-align:center;line-height: 32px;padding:30px;" class="f7">
				暂无适合您手机的资源，敬请谅解...
			</div>
		</div>
		<!--{/if}-->
	</div>
</div>
