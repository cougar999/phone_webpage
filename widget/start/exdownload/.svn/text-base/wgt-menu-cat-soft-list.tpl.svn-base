<!--{feed int=AP_INT_MENU_LIST navid=$column_id order=0 pageno=1 count=99 iscrack=$smarty.request.iscrack|default:0 ret=arr_category_list'}-->
<div class="unit">
	<div class="titlebar">
		<div class="bread">
	 		<ul>
	 			<li><!--{$nav_name}--></li>
	 			<li class="current_cat"></li>
	 		</ul>
	 	</div>
		<span class="cssright more"><a href="#" id="<!--{$classname}-->-btn-all">下载全部</a></span>
		
		<!--{if $nav_name != '精品推荐'}-->
		<div class="cat_sele">
			<div class="current_catname"><a href="##">新品推荐</a></div>
			<ul id="<!--{$classname}-->-nav">
				<!--{foreach key=key item=category from=$arr_category_list.list.items}-->
				<!--{if ($category.menucode!=1333) && ($category.menucode!=1334) && ($category.menucode!=1335)}-->
					<li real="<!--{$category.menuid}-->" code2="<!--{$tpl_code2}-->" code2_id="<!--{$tpl_code2_id}-->" code3="<!--{$category.menucode}-->" code3_id="<!--{$category.menuid}-->" tplname="<!--{$category.menuname}-->"> - <span><!--{$category.menuname}--></span></li>
				<!--{/if}-->
				<!--{/foreach}-->
			</ul>
		</div>
		<!--{/if}-->
	</div>

<div id="<!--{$classname}-->-list" style="overflow:hidden">
<!--{foreach key=key item=category from=$arr_category_list.list.items}-->

<div class="content clear <!--{if $key > 0}-->no<!--{else}-->current_all<!--{/if}-->" id="content-<!--{$category.menuid}-->" tplid="<!--{$category.menuid}-->" tplcode="<!--{$category.menucode}-->" tplname="<!--{$category.menuname}-->">
<!--{if $key == 0}-->
	<!--{feed int=AP_INT_MENU_CAT_SOFTLIST mid=$category.menuid order=0 pageno=1 count=36 iscrack=$smarty.request.iscrack|default:0 ret='colomunlist'}-->
	<!--{if $colomunlist.list.items}-->
	<!--{foreach key=key_list item=item from=$colomunlist.list.items}-->
	<dl class="softa">
		<dt style="position:relative;">
			<a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$item.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->">
				<img src="<!--{$item.imgurl}-->_sf_72x72.png">
			</a>
			<!--{if $item.isbiz == 1 && $item.goldcoin}--><div class="icon_coins"><!--{$item.goldcoin}--></div><!--{/if}-->
		</dt>
		<dd class="softname">
			<a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$item.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name}--></a>
		</dd>
		<dd><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->未知<!--{/if}--></dd>
		<dd class="re">
			<span>
				<!--{if $smarty.request.phonetype == '.' || $smarty.request.phonetype == 3 || $smarty.request.phonetype == '3.'}-->
					<!--{if $item.version}--><!--{$item.version}--><!--{else}-->未知<!--{/if}-->
				<!--{else}-->
					<!--<!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}-->-->
				<!--{/if}-->
			</span>
			<div class="down f_l no"><a id="<!--{$item.contentid}-->" businesstype="<!--{$item.businesstype}-->" isbiz="<!--{$item.isbiz}-->" href="<!--{if $item.downloadurl && ($item.downloadurl!='#')}--><!--{$item.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$tpl_code2}-->&code2_id=<!--{$tpl_code2_id}-->&code3=<!--{$category.menucode}-->&code3_id=<!--{$category.menuid}--><!--{/if}-->" installlocate="<!--{$item.installlocate}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->" title="<!--{$item.name}-->" type="1"  price="<!--{math equation='(x)/100' x=$item.price|default:0}-->" servicefee="<!--{math equation='(x)/100' x=$item.servicefee|default:0}-->" goldcoins="<!--{if $item.goldcoin}--><!--{$item.goldcoin}--><!--{/if}-->" dt="da" class="<!--{if $item.isbusi == 1}-->change<!--{/if}--><!--{if ($item.price or $item.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit<!--{/if}--> newpage"  onclick="return false;"></a></div>
			<!--{if $smarty.get.phonetype == '8.' || $smarty.get.phonetype == '3.' || $smarty.get.phonetype == '.'}-->
			<div class="shoucang f_l no"><a icon="<!--{$item.imgurl}-->" id="<!--{$item.contentid}-->" href="<!--{$item.downloadurl}-->" installlocate="<!--{$item.installlocate|default:1}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->" title="<!--{$item.name}-->" type="1"  price="<!--{$item.price|default:0}-->" servicefee="<!--{$item.servicefee|default:0}-->" catalog="<!--{$item.catalog}-->" size="<!--{$item.size}-->" class="collectionbtn_min shopc" onclick="return false;"></a></div>
			<!--{/if}-->
		</dd>
	</dl>
	<!--{/foreach}-->
	<!--{else}-->
	<div>
		<div style="text-align:center;line-height: 32px;padding:30px;" class="f7">
			暂无适合您手机的资源，敬请谅解...
		</div>
	</div>
	<!--{/if}-->
<!--{else}-->
	<div style="margin:28px auto;text-align: center;"><img src="<!--{#res1#}-->/resources/img40/loading_trans_middle.gif"></div>
<!--{/if}-->
</div>

<!--{/foreach}-->
</div>
</div>