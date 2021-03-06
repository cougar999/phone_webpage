<!--{paging page=$page no=$smarty.get.pageno count=$smarty.get.count ret='page'}-->
<div id="wgt-paging" class="wgt-paging" style="clear: both"><div class="paging">
<!--{if $page.size}-->
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
	<td nowrap="nowrap" class="tc" id="pagenum" style="padding:20px 20px;">
		<div class="lf">
			<!--{if $page.last > -1}-->
			共 <!--{$page.last}--> 页 
			<!--{else}-->
			共 <!--{$page.no}--> 页 
			<!--{/if}-->
			<!--{if $page.first > -1}-->
				<a href="?<!--{params pageno=$page.first}-->" class="firstpage" onclick="gotopage(this); return false;"><span>第一页</span></a>
			<!--{else}-->
				<a onclick="return false;" class="firstpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>第一页</span></a>
			<!--{/if}-->
			<!--{if $page.prev > -1}-->
				<a href="?<!--{params pageno=$page.prev}-->" class="prevpage" onclick="gotopage(this); return false;"><span>上一页</span></a>
			<!--{else}-->
				<a onclick="return false;" class="prevpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>上一页</span></a>
			<!--{/if}-->
		</div>
		<div class="pagenums">
			<!--{foreach key=key item=item from=$page.size}-->
				<!--{if $item == $page.no}-->
					<a href="?<!--{params pageno=$item}-->" class="active" disabled="disabled" onclick="gotopage(this); return false;"><span><!--{$item}--></span></a>
				<!--{else}-->
					<a href="?<!--{params pageno=$item}-->" onclick="gotopage(this); return false;"><span><!--{$item}--></span></a>
				<!--{/if}-->
			<!--{/foreach}-->
		</div>
		<div class="lf">
			<!--{if $page.next > -1}-->
				<a href="?<!--{params pageno=$page.next}-->" class="nextpage" onclick="gotopage(this); return false;"><span>下一页</span></a>
			<!--{else}-->
				<a onclick="return false;" class="nextpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>下一页</span></a>
			<!--{/if}-->
			<!--{if $page.last > -1}-->
				<a href="?<!--{params pageno=$page.last}-->" class="lastpage" onclick="gotopage(this); return false;"><span>最末页</span></a>
			<!--{else}-->
				<a onclick="return false;" class="lastpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>最末页</span></a>
			<!--{/if}-->
		</div>
	</td>
</tr></table>
<!--{/if}-->
</div></div>