	<div class="task_box">
		<h1><span>金币总排行</span></h1>
		<div class="rg tasktext">注：该排行榜更新时间间隔为5分钟。</div>
	</div>
	<div class="clear"></div>
	<div class="ranking clear">
		<table class="datatable2 f_l" cellspacing="1" width="98%">
			<colgroup>
				<col width="46">
				<col width="545">
				<col width="auto">
			</colgroup>
		    <tbody id="table_tr">
		    <tr>
		    	<th class="first">排名</th>
		    	<th>姓名</th>
		    	<th>金币总数</th>
		    </tr>
		    <!--{foreach key=key item=items from=$ranking.page.items}-->
		    	<tr>
		        	<td  class="tc brd-right <!--{if (($key==0) && ($smarty.get.pageno <= 1))}-->ranknum1<!--{elseif (($key==1) && $smarty.get.pageno <= 1)}-->ranknum2<!--{elseif (($key==2) && $smarty.get.pageno <= 1)}-->ranknum3<!--{elseif (($key<3) && $smarty.get.pageno <= 1)}-->pos_img1<!--{else}-->pos_img2<!--{/if}-->">
		        		<strong><!--{$key+1}--></strong>
	        		</td>
	        		<td>
		        		<span class="salesname"><!--{$items.salesname}--></span>
		        	</td>	
		        	<td>	
		        		<span class="quest_gold"></span><span class="<!--{if (($key<3) && ($smarty.get.pageno <= 1))}-->cred b<!--{/if}-->"><!--{$items.coins}--></strong>
	        		</td>
		    	</tr>
		    <!--{/foreach}-->
		    </tbody>
		</table>
		<div class="clear"></div>
	</div>
	<!--{include file=wgt-paging.tpl page=$ranking.page.pagenum}-->
