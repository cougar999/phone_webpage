<div id="guessu">
	<div class="titleguess">
		<h2>猜你喜欢</h2>
	</div>
	<ul>
		<!--{feed int=AP_INT_PRODUCTTOP num=9 topType=4 ret='guessulike'}-->
		<!--{foreach key=key item=item from=$guessulike.data name=toplist}-->
		<li>
			<p><a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->">
				<img src="<!--{$item.icon|default:1000}-->" width="40" height="40">
			</a></p>
			<p>
				<a href="/appstore/soft.html?softid=<!--{$item.fileId|default:1000}-->&pid=<!--{$item.subId|default:0}-->&phonetype=<!--{$smarty.get.phonetype}-->"><!--{$item.name|default:"未知"|strip_tags|truncate_utf8_string:8:"...":true}--></a>
			</p>
		</li>
		<!--{/foreach}-->
	</ul>
</div>