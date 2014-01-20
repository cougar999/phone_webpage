<h2>游戏</h2>
<ul>
	<!--{feed int=AP_INT_GETALLCATE  sort='Game' ret='catelist'}-->
	<!--{foreach key=key item=item from=$catelist.data name="allcate"}-->
	<!--{if $item.resSort == 'android'}-->
	<li><a href="/appstore/softlist.html?catid=<!--{$item._id|default:0}-->&sort=Game"><!--{$item.name|default:"未知应用"}--></a></li>
	<!--{/if}-->
	<!--{/foreach}-->
</ul>