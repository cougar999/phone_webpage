<div id="softlist" class="clear">
	<!--{feed int=AP_INT_CATELIST cId=$smarty.get.catid|default:'' sort=$smarty.get.sort|default:$sort page=$smarty.get.pageno|default:1 num=18 ret='catelistalllist'}-->
	<!--{foreach key=key item=item from=$catelistalllist.data name="catelisteach"}-->
	<dl>
		<dt>
			<ul>
				<li class="imgcover"><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:"未知"}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->">
					<img src="<!--{$item.icon}-->" width="68" height="68">
				</a>
				<!--{if $item.price}--><div class="icon_coins"><!--{$item.price}--></div><!--{/if}--></li>
				<li><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|default:"未知"|strip_tags|truncate_utf8_string:8:"...":true}--></a></li>
				<li class="gray"><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->0MB<!--{/if}--></li>
				<li><div class="down f_l"><a id="<!--{$item.fileId}-->" businesstype="1" isbiz="<!--{$item.price}-->" href="<!--{$item.path}-->&isbiz=<!--{$item.price}-->" installlocate="1" appid="<!--{$item.packageName}-->"  versioncode="<!--{$item.versionCode}-->"  version="<!--{$item.versionName}-->" title="<!--{$item.name}-->" star="<!--{$item.star}-->" type="1" goldcoins="<!--{$item.price}-->" class="change downinit newpage"  onclick="return false;"></a></div></li>
			</ul>
		</dt>
		<dd class="gray"><!--{$item.productDesc|default:"没有内容"|strip_tags|truncate_utf8_string:30:"...":true}--></dd>
	</dl>
	<!--{/foreach}-->
	<!--{include file=wgt-paging.tpl page=$catelistalllist.totalNum}-->
</div>