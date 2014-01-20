<div id="green_channel">
	<h3>快速通道</h3>
	<ul>
	<!--{foreach key=key item=category from=$green_chn_list.list.items}-->
		<li <!--{if $key > 0}--><!--{else}-->class="first"<!--{/if}-->>
			<a href="/appstore/green_channel.html?cid=<!--{$category.menuid}-->&cname=<!--{$category.menuname}-->&tplcode=<!--{$category.menucode}-->&phonetype=<!--{$smarty.get.phonetype|default:'.'}-->&iscrack=<!--{$smarty.get.iscrack|default:0}-->" cid="<!--{$category.menuid}-->" tplcode="<!--{$category.menucode}-->" cname="<!--{$category.menuname}-->" phonetype="<!--{$smarty.get.phonetype|default:'.'}-->" iscrack="<!--{$smarty.get.iscrack|default:0}-->"><!--{$category.menuname}--></a>
		</li>
	<!--{/foreach}-->
	</ul>
</div>
