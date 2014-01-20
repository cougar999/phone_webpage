<!--{foreach key=key item=items from=$colomunlist.list.items}-->
	<li>
		<span class="imgshadow">
			<!--<a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$items.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->"><img src="<!--{$items.imgurl}-->_sf_48x48.png" /></a>-->
			<img src="<!--{$items.imgurl}-->_sf_48x48.png" />
			<!--{if $items.isbiz == 1}--><img src="<!--{#res3#}-->/resources/img40/icon_tuijian.png" class="icon_tuiguang" /><!--{/if}-->
		</span>
		<p class="recname">
		<!--<a href="/appstore/soft.html?iscrack=<!--{$smarty.get.iscrack}-->&softid=<!--{$items.contentid}-->&phonetype=<!--{$smarty.get.phonetype}-->" title="<!--{$items.name}-->"><!--{$items.name}--></a>-->
			<!--{$items.name}-->
		</p>
		<p class="reccat"><!--{$items.catalogname}--></p>
		<div class="down no">
			<a id="<!--{$items.contentid}-->" businesstype="<!--{$items.businesstype}-->" isbiz="<!--{$items.isbiz}-->" href="<!--{if $items.downloadurl && ($items.downloadurl!='#')}--><!--{$items.downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}--><!--{/if}-->" installlocate="<!--{$items.installlocate}-->" appid="<!--{$items.appid}-->"  versioncode="<!--{$items.versioncode}-->"  version="<!--{$items.version}-->" title="<!--{$items.name}-->" type="1"  price="<!--{math equation='(x)/100' x=$items.price|default:0}-->" servicefee="<!--{math equation='(x)/100' x=$items.servicefee|default:0}-->" class="<!--{if ($items.price or $items.servicefee) && ($smarty.get.phonetype != '3.') && ($smarty.get.phonetype != '.')}-->addcart<!--{else}-->downinit<!--{/if}--> newpage"  onclick="return false;"></a>
		</div>
	</li>
<!--{/foreach}-->