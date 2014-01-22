<div class="side-wgt">
	<h2>下载排行榜</h2>
	<div class="ranklist clear">
		<!--{feed int=AP_INT_PRODUCTTOP num=10 topType=1 orderName='downloadCount' orderby=0 ret='downloadrank'}-->
		<!--{foreach key=key item=item from=$downloadrank.data name=ranklist}-->
		<dl>
			<dt><img src="/resources/imgs/no<!--{$key+1}-->.gif" /></dt>
			<dd>
				<a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->">
					<img src="<!--{$item.icon}-->" width="40" height="40">
				</a>
				<!--{if $item.price}--><div class="icon_coins"><!--{$item.price}--></div><!--{/if}-->
			</dd>
			<ul>
				<li><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|default:"未知"|strip_tags|truncate_utf8_string:8:"...":true}--></a></li>
				<li class="gray"><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->0MB<!--{/if}--></li>
				<li class="downBtn"><div class="down f_l"><a id="<!--{$item.fileId}-->" businesstype="1" isbiz="<!--{$item.price|default:0}-->" href="<!--{$item.path}-->&isbiz=<!--{$item.price|default:0}-->" installlocate="1" appid="<!--{$item.packageName}-->"  versioncode="<!--{$item.versionCode}-->"  version="<!--{$item.versionName}-->" title="<!--{$item.name}-->" star="<!--{$item.star}-->" type="1" goldcoins="<!--{$item.price}-->" class="change downinit newpage"  onclick="return false;"></a></div></li>
			</ul>
		</dl>
		<!--{/foreach}-->
	</div>
</div>
