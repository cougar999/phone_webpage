<div id="softlist" class="clear">
	<!--{feed int=AP_INT_CATELIST cId=$smarty.get.catid|default:'' sort=$smarty.get.sort|default:$sort page=$smarty.get.pageno|default:1 num=18 ret='catelistall'}-->
	<!--{foreach key=key item=item from=$catelistall.data name="catelisteach"}-->
	<dl>
		<dt>
			<ul>
				<li class="imgcover"><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:"未知"}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->">
					<img src="<!--{$item.icon}-->" width="68" height="68">
				</a>
				<!-- <div class="icon_coins">1</div> --></li>
				<li><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|default:"未知"|strip_tags|truncate_utf8_string:8:"...":true}--></a></li>
				<li class="gray"><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->0MB<!--{/if}--></li>
				<li><div class="down f_l"><a id="<!--{$item.fileId}-->" businesstype="1" isbiz="1" href="<!--{$item.path}-->&isbiz=1" installlocate="1" appid="<!--{$item.packageName}-->"  versioncode="<!--{$item.versionCode}-->"  version="<!--{$item.versionName}-->" title="<!--{$item.name}-->" star="<!--{$item.star}-->" type="1" goldcoins="1" class="change downinit newpage"  onclick="return false;"></a></div></li>
			</ul>
		</dt>
		<dd class="gray"><!--{$item.productDesc|default:"没有内容"|strip_tags|truncate_utf8_string:30:"...":true}--></dd>
	</dl>
	<!--{/foreach}-->
	<!--{include file=wgt-paging.tpl page=$catelistall.totalNum}-->
</div>