<!--{feed int=AP_INT_C_BOOKLIST cid=$column_id order=0 pageno=1 count=12 iscrack=$smarty.request.iscrack|default:0 ret='colomunlist'}-->
<div class="unit">
	<div class="titlebar">
		<h2><!--{$column_name}--></h2>
		<span class="cssright more"><a href="#" id="ebook-btn-all">下载全部</a></span>
	</div>
	<div class="content clear">
		<!--{foreach key=key item=item from=$colomunlist.page.items name=list}-->
		<dl class="<!--{if $key > 2}-->no<!--{/if}-->">
			<a class="img" href="/appstore/book-intro.html?bid=<!--{$item.bookid}-->" title="<!--{$item.book}-->"><img src="<!--{if $item.imgurl != ''}--><!--{$item.imgurl}-->_sf_88x122.png<!--{else}--><!--{/if}-->" width="88" height="120"></a>
			<h3><a href="/appstore/book-intro.html?bid=<!--{$item.bookid}-->" title="<!--{$item.book}-->"><!--{$item.book|truncate_utf8_string:8:"...":true}--></a></h3>
			<p><span>作者:</span><a href="/appstore/author.html?aid=<!--{$item.authorid}-->" onclick="gotopage(this); return false;"><!--{$item.author|truncate_utf8_string:6:"...":true}--></a></p>
			<!-- <p><span>服务费:</span><!--{if $item.price}--><!--{math equation='(x/100 + y/100)' x=$item.price|default:0 y=0}-->元<!--{else}-->免费<!--{/if}--></p> -->
			<p><span>服务费:</span>免费</p>
			<p><span>上架日期:</span><!--{$item.date}--></p>
			<!-- <p class="down"><a id="<!--{$item.bookid}-->" href="<!--{if $item.formatitems[0].downloadurl && ($item.formatitems[0].downloadurl!='#')}--><!--{$item.formatitems[0].downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$tpl_code2}-->&code2_id=<!--{$tpl_code2_id}--><!--{/if}-->" type="5" price="<!--{math equation='(x)/100' x=$item.price|default:0}-->" servicefee="0"  title="<!--{$item.book}-->"  class="lf f0 change <!--{if $item.price}-->addcart<!--{else}-->downinit<!--{/if}-->"  onclick="return false;"></a></p> -->
			<p class="down"><a id="<!--{$item.bookid}-->" href="<!--{if $item.formatitems[0].downloadurl && ($item.formatitems[0].downloadurl!='#')}--><!--{$item.formatitems[0].downloadurl}-->&code1=<!--{$tpl_code1}-->&code1_id=<!--{$tpl_code1_id}-->&code2=<!--{$tpl_code2}-->&code2_id=<!--{$tpl_code2_id}--><!--{/if}-->" type="5" price="0" servicefee="0"  title="<!--{$item.book}-->"  class="lf f0 change downinit"  onclick="return false;"></a></p>
			<div class="clear"></div>
			<p class="bookdesc"><!--{$item.desc|truncate_utf8_string:26:"...":true}--></p>
		</dl>
		<!--{/foreach}-->
		 <div class="clear"></div>
		<div style="background-color:#ECF5FC;height:25px;text-align:center">
			<ul style="width:88px" class="pagination">
			</ul>
		</div>
	</div>
</div>


