<!--{feed int=AP_INT_SEARCHLIST keyword=$keyword order=$smarty.get.order|default:0 pageno=$smarty.get.pageno|default:1 num=18 ret='applistnewA'}-->
<div class="section">
	<div style="padding: 15px 15px;">
		<div style="border: 1px solid #d2d2d2; padding: 8px 8px;" class="f4 b">
			在<font color="#f04e06"><!--{$assign.ap_int.AP_INT_SEARCH_TYPE_NAME_APP}--></font>中搜索“<!--{$smarty.request.keyword}-->”共有<!--{$applistnew.totalNum|default:0}-->条结果：
		</div>
	</div>
</div>
<div class="section" id="softlist">
	<!--{foreach key=key item=item from=$applistnewA.data name="catelisteach"}-->
	<dl>
		<dt>
			<ul>
				<li class="imgcover"><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:"未知"}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->">
					<img src="<!--{$item.icon}-->" width="68" height="68">
				</a>
				<!--{if $item.unitPrice}--><div class="icon_coins"><!--{$item.unitPrice}--></div><!--{/if}--></li>
				<li><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|default:"未知"|strip_tags|truncate_utf8_string:8:"...":true}--></a></li>
				<li class="gray"><!--{if $item.size}--><!--{$item.size|sizetext}--><!--{else}-->0MB<!--{/if}--></li>
				<li><div class="down f_l"><a id="<!--{$item.fileId|default:0}-->" businesstype="1" isbiz="<!--{$item.unitPrice|default:0}-->" href="<!--{$item.path}-->&isbiz=<!--{$item.unitPrice|default:0}-->" installlocate="1" appid="<!--{$item.packageName}-->"  versioncode="<!--{$item.versionCode}-->"  version="<!--{$item.versionName}-->" title="<!--{$item.name}-->" star="<!--{$item.star}-->" type="1" goldcoins="1" class="change <!--{if $item.black && $item.black == 1}-->downdisable<!--{else}-->downinit<!--{/if}--> newpage"  onclick="return false;"></a></div></li>
			</ul>
		</dt>
		<dd class="gray"><!--{$item.productDesc|default:"没有内容"|strip_tags|truncate_utf8_string:30:"...":true}--></dd>
	</dl>
	<!--{/foreach}-->
</div>
