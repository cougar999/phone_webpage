<!--{if $smarty.request.phonetype == 3 || $smarty.request.phonetype == '3.'}-->
	<li>安卓软件</li>
<!--{elseif ($smarty.request.phonetype == 8 || $smarty.request.phonetype == '8.') && ($smarty.request.iscrack == '' || $smarty.request.iscrack == 0)}-->
	<li>苹果正版</li>
<!--{elseif ($smarty.request.phonetype == 8 || $smarty.request.phonetype == '8.') && $smarty.request.iscrack == 1}-->
	<li>苹果破解</li>
<!--{elseif $smarty.request.phonetype == 4 || $smarty.request.phonetype == '4.' || $smarty.request.phonetype == '4.40' || $smarty.request.phonetype == '4.41' || $smarty.request.phonetype == '4.42' || $smarty.request.phonetype == '4.43'}-->
	<li>塞班软件</li>
<!--{else}-->
	<li>安卓软件</li>
<!--{/if}-->