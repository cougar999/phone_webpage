<!--{config_load file="smarty.conf"}-->
<div class="content"><div class="wrap">

	<div class="scroll">
		
		<div id="coinsbox">
			<!--{if $assign.shopid != -1}-->
			<h1 id="rankname">积分排行榜 <!-- <small>我在1000人中排名12</small> --></h1>
			<div class="scorelist">
			<div class="scoretable" id="ranklist">
				<table border="0" cellspacing="0" cellpadding="0" width="100%">
					<colgroup>
						<col width="160" />
						<col width="auto" />
						<col width="180" />
					</colgroup>
					<tr>
						<th>排名</th>
						<th>账号名称</th>
						<th>总积分</th>
					</tr>
					<tbody id="rankinglist">
						<!--{foreach key=key item=items from=$assign.ranking.page.items}-->
						<tr>
							<td class="tc"><i><!--{$key+1}--></i></td>
							<td class="tc"><span class="salesname"><!--{$items.salesname}--></span></td>
							<td class="tc"><span><!--{$items.coins}--></strong></td>
						</tr>
						<!--{/foreach}-->
					</tbody>
				</table>
			</div>
			</div>
			<!--{else}-->
			<!--{$assign.logoutmsg}-->
			<!--{/if}-->
		</div>
		<!--{include file=wgt-paging.tpl page=$assign.ranking.page.pagenum}-->
	</div>
</div></div>