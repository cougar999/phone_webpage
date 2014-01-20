<!--{feed int=AP_INT_MENU_LIST navid=$column_id order=0 pageno=1 count=15 ret=arr_category_list'}-->
<div class="unit">
	<div class="titlebar">
		<h2><!--{$nav_name}--></h2>
		<div class="tabbar">
		<ul id="<!--{$classname}-->-nav">
		<!--{foreach key=key item=category from=$arr_category_list.list.items}-->
		<!--{if ($category.menucode!=1333) && ($category.menucode!=1334) && ($category.menucode!=1335)}-->
			<li real="<!--{$category.menuid}-->" code2="<!--{$tpl_code2}-->" code2_id="<!--{$tpl_code2_id}-->" code3="<!--{$category.menucode}-->" code3_id="<!--{$category.menuid}-->"><!--{$category.menuname}--></li>
		<!--{/if}-->
		<!--{/foreach}-->
		</ul>
		</div>
		<span class="cssright more"><a href="#" id="<!--{$classname}-->-btn-all">下载全部</a></span>
	</div>

<div id="<!--{$classname}-->-list" style="overflow:hidden">
<!--{foreach key=key item=category from=$arr_category_list.list.items}-->

<div class="content clear <!--{if $key > 0}-->no<!--{else}-->current_all<!--{/if}-->" id="content-<!--{$category.menuid}-->">
<!--{if $key == 0}-->
	<!--{feed int=AP_INT_MENU_CAT_SOFTLIST mid=$category.menuid order=0 pageno=1 count=32 ret='colomunlist'}-->
	<!--{if $colomunlist.list.items}-->
	<!--{foreach key=key_list item=item from=$colomunlist.list.items}-->
	<dl class="softa">
		<dt style="position:relative;"><a href="/appstore/soft.html?softid=<!--{$item.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><img src="<!--{$item.imgurl}-->_sf_56x56.png"></a></dt>
		<dd><a href="/appstore/soft.html?softid=<!--{$item.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name}--></a></dd>
		<dd class="re">
			<span>
				<!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}-->
			</span>
			<div class="down f_l no"><a id="<!--{$item.contentid}-->" href="<!--{if $item.downloadurl && ($item.downloadurl!='#')}--><!--{$item.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$tpl_code2}-->&code2_id=<!--{$tpl_code2_id}-->&code3=<!--{$category.menucode}-->&code3_id=<!--{$category.menuid}--><!--{/if}-->" installlocate="<!--{$item.installlocate}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->" title="<!--{$item.name}-->" type="1"  price="<!--{math equation='(x)/100' x=$item.price|default:0}-->" servicefee="<!--{math equation='(x)/100' x=$item.servicefee|default:0}-->" class="<!--{if ($item.price or $item.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit<!--{/if}--> newpage"  onclick="return false;"></a></div>
			<div class="shoucang f_l no"><a icon="<!--{$item.imgurl}-->" id="<!--{$item.contentid}-->" href="<!--{$item.downloadurl}-->" installlocate="<!--{$item.installlocate|default:1}-->" appid="<!--{$item.appid}-->"  versioncode="<!--{$item.versioncode}-->"  version="<!--{$item.version}-->" title="<!--{$item.name}-->" type="1"  price="<!--{$item.price|default:0}-->" servicefee="<!--{$item.servicefee|default:0}-->" catalog="<!--{$item.catalog}-->" size="<!--{$item.size}-->" class="collectionbtn_min shopc" onclick="return false;"></a></div>
		</dd>
	</dl>
	<div class="tooltip no">
		<h3><!--{$item.name|truncate_utf8_string:12:"...":true}--></h3>
		<div>
			<p>
				<span>大小：</span><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->未知<!--{/if}-->
			</p>
			<p>
				<span>服务费：</span><!--{if $item.price || $item.servicefee }--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=$item.servicefee|default:0}-->元<!--{else}-->免费<!--{/if}-->
			</p>
			<p><span><!--{$item.intro|default:'暂无内容'|truncate_utf8_string:55:"...":true}--></span></p>
		</div>
	</div>
	<!--{/foreach}-->
	<!--{else}-->
	<div>
		<div style="margin-left: 5px; line-height: 32px;">
			<span class="f6 t" style="color:#777777">暂无适合您手机的资源，敬请谅解...</span>
		</div>
	</div>
	<!--{/if}-->
<!--{else}-->
	<div style="margin:58px auto;text-align: center;"><img src="<!--{#res1#}-->/resources/img/loading_black_small.gif"></div>
<!--{/if}-->
</div>

<!--{/foreach}-->
</div>
</div>