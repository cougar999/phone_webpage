<div>
	<div class="halfagnle_head">
		<li class="bgla"></li>
		<li class="bglb">
			<h3 class="" style="padding:12px 0 0 5px;font-size:15px;color:#2179cb"><!--{php}-->echo intval(date("m"));<!--{/php}-->月积分排行</h3>
		</li>
		<li class="bglc"></li>
	</div>
	<!--{feed int=AP_INT_GET_SALSESRANKING said=$assign.salesid  curmonth=1 ret='ranking'}-->
	<div class="ranking">
		<table class="datatable f_l" cellspacing="1">
		    <tbody id="table_tr">
		    <!--{foreach key=key item=items from=$ranking.json}-->
		    	<!--{if $key < 5}-->
		    	<tr>
		        	<td <!--{if $key<3}-->class="ranking-front"<!--{/if}-->>
		        		<span class="pos_img<!--{$key+1}-->"></span>
		        		<span title="<!--{$items.leveldesc}-->" style="width:215px"><!--{$items.salesperson_name}--></span>
		        		<span class="" style="height:30px;"></span>
		        		<span class="">积分：<!--{if !empty($items.score)}--><!--{$items.score}--><!--{else}-->0<!--{/if}--></span>
		        	</td>
		    	</tr>
		    	<!--{else}-->
		    	<!--{php break;}-->
		    	<!--{/if}-->
		    <!--{/foreach}-->
		    </tbody>
		</table>
		<table class="datatable f_l" cellspacing="1">
		    <tbody id="table_tr">
		    <!--{foreach key=key item=items from=$ranking.json}-->
		    	<!--{if $key >= 5}-->
		    	<tr>
		        	<td <!--{if $key<3}-->class="ranking-front"<!--{/if}-->>
		        		<span class="pos_img<!--{$key+1}-->"></span>
		        		<span title="<!--{$items.leveldesc}-->" style="width:215px"><!--{$items.salesperson_name}--></span>
		        		<span class="" style="height:30px;"></span>
		        		<span class="">积分：<!--{if !empty($items.score)}--><!--{$items.score}--><!--{else}-->0<!--{/if}--></span>
		        	</td>
		        </tr>
		        <!--{else}-->
		    	<!--{php continue;}-->
		    	<!--{/if}-->
		    <!--{/foreach}-->
		    </tbody>
		</table>
		<div class="clear"></div>
	</div>
	<div class="halfagnle_foot">
		<li class="bgld"></li>
		<li class="bgle"></li>
		<li class="bglf"></li>
	</div>
</div>