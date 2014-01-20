<!--{feed int=AP_INT_MENU_LIST  navid=$assign.ap_int.AP_INT_MENU_APPSOTRE_ID order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0 ret='menulist'}-->
<div id="wgt-menu-start" class="wgt-menu"><div class="menu">
		
		<!--{if $smarty.request.channelcode == '1100000' && ($smarty.request.phonetype != '8' || $smarty.request.phonetype != 8 || $smarty.request.phonetype != '8.')}-->
		<!--{menu items=$menulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_TOOLS ret='toolsmenu'}-->
		<!--{feed int=AP_INT_MENU_LIST  navid=$toolsmenu.menuid order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0 ret='toolsmenulist'}-->
		<!--{menu items=$toolsmenulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_TOOLS2 ret='toolsmenu2'}-->
		<h3 class="first">
			<!--{assign var="gotopage" value="/appstore/common-tools.html?phonetype="}-->
			<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-comtools hv">&nbsp;</span><span class="title"><!--{$toolsmenu2.menuname}--></span><span class="icon lf icon-up"></span></a>
		</h3>
		<!--{/if}-->

		<h3>
			<!--{assign var="gotopage" value="/appstore/download.html?phonetype="}-->
			<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack|cat:'&channelcode='|cat:$smarty.get.channelcode}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-feature2 hv">&nbsp;</span><span class="title">精品下载</span><span class="icon lf"></span></a>
		</h3>
		
		<!--{menu items=$menulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_APP ret='menu'}-->
		<!--{if $assign.gotopagebase == '/appstore/app_home.html'}-->
			<h3 class="">
				<!--{assign var="gotopage" value="/appstore/app_home.html?phonetype="}-->
				<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-soft hv">&nbsp;</span><span class="title"><!--{$menu.menuname}--></span><span class="icon lf icon-up"></span></a>
			</h3>
			<!--{feed int=AP_INT_MENU_LIST  navid=$menu.menuid order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0 ret='appmenulist'}-->
			<!--{menu items=$appmenulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_APP_CAT ret='catmenulist'}-->
			<!--{feed int=AP_INT_COLUMN_CAT_LIST cid=$catmenulist.menuid type=$assign.ap_int.AP_INT_CATEGORY_TYPE_APP  order=0 pageno=1 count=30 iscrack=$smarty.request.iscrack|default:0  ret='app_catlist'}-->
			<dl style="list-style-type:none;display:block;">
			<!--{section name=sect loop=$app_catlist.list.items}-->
				<!--{if $smarty.section.sect.index%2==0}-->
				<dt>
				<!--{/if}-->
					<!--{assign var="gotopage" value="/appstore/app.html?phonetype="}-->
					<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&catid='|cat:$app_catlist.list.items[sect].catid|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist lf" id="icon<!--{$app_catlist.list.items[sect].catid}-->" style="width:35%;" target="pagecontainer"><span><!--{$app_catlist.list.items[sect].name}--></span></a>
				<!--{if $smarty.section.sect.index%2==1}-->
				</dt>
				<!--{/if}-->
			<!--{/section}-->
			</dl>
		<!--{else}-->
			<h3 class="">
				<!--{assign var="gotopage" value="/appstore/app_home.html?phonetype="}-->
				<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-soft hv">&nbsp;</span><span class="title"><!--{$menu.menuname}--></span><span class="icon lf icon-down"></span></a>
			</h3>
			<!--{feed int=AP_INT_MENU_LIST  navid=$menu.menuid order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0  ret='appmenulist'}-->
			<!--{menu items=$appmenulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_APP_CAT ret='catmenulist'}-->
			<!--{feed int=AP_INT_COLUMN_CAT_LIST cid=$catmenulist.menuid type=$assign.ap_int.AP_INT_CATEGORY_TYPE_APP  order=0 pageno=1 count=30 iscrack=$smarty.request.iscrack|default:0  ret='app_catlist'}-->
			<dl style="display:none; list-style-type:none;">
			<!--{section name=sect loop=$app_catlist.list.items}-->
				<!--{if $smarty.section.sect.index%2==0}-->
				<dt>
				<!--{/if}-->
					<!--{assign var="gotopage" value="/appstore/app.html?phonetype="}-->
					<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&catid='|cat:$app_catlist.list.items[sect].catid|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist lf caticon" target="pagecontainer" style="width:35%;"><span><!--{$app_catlist.list.items[sect].name}--></span></a>
				<!--{if $smarty.section.sect.index%2==1}-->
				</dt>
				<!--{/if}-->
			<!--{/section}-->
			</dl>
		<!--{/if}-->
		<!--{menu items=$menulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_GAME ret='menu'}-->
		<!--{if $assign.gotopagebase == '/appstore/game_home.html'}-->
			<h3 class="">
				<!--{assign var="gotopage" value="/appstore/game_home.html?phonetype="}-->
				<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-game hv">&nbsp;</span><span class="title"><!--{$menu.menuname}--></span><span class="icon lf icon-up"></span></a>
			</h3>
			<!--{feed int=AP_INT_MENU_LIST  navid=$menu.menuid order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0  ret='gamemenulist'}-->
			<!--{menu items=$gamemenulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_GAME_CAT ret='catmenulist'}-->
			<!--{feed int=AP_INT_COLUMN_CAT_LIST cid=$catmenulist.menuid type=$assign.ap_int.AP_INT_CATEGORY_TYPE_GAME  order=0 pageno=1 count=30 iscrack=$smarty.request.iscrack|default:0  ret='game_catlist'}-->
			<dl style="display:block;list-style-type:none;">
				<!--{section name=sect loop=$game_catlist.list.items}-->
					<!--{if $smarty.section.sect.index%2==0}-->
					<dt>
					<!--{/if}-->
						<!--{assign var="gotopage" value="/appstore/game.html?phonetype="}-->
						<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&catid='|cat:$game_catlist.list.items[sect].catid|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist lf" target="pagecontainer" id="icon<!--{$game_catlist.list.items[sect].catid}-->" style="width:35%;"><span><!--{$game_catlist.list.items[sect].name}--></span></a>
							<!--{if $smarty.section.sect.index%2==1}-->
					</dt>
					<!--{/if}-->
				<!--{/section}-->
			</dl>
		<!--{else}-->
			<h3 class="">
				<!--{assign var="gotopage" value="/appstore/game_home.html?phonetype="}-->
				<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist hv" target="pagecontainer"><span class="icon lf icon-game hv">&nbsp;</span><span class="title"><!--{$menu.menuname}--></span><span class="icon lf icon-down"></span></a>
			</h3>
			<!--{feed int=AP_INT_MENU_LIST  navid=$menu.menuid order=0 pageno=1 count=15 iscrack=$smarty.request.iscrack|default:0  ret='gamemenulist'}-->
			<!--{menu items=$gamemenulist.list.items index='menucode' code=$assign.ap_int.AP_INT_MENUCODE_TYPE_GAME_CAT ret='catmenulist'}-->
			<!--{feed int=AP_INT_COLUMN_CAT_LIST cid=$catmenulist.menuid type=$assign.ap_int.AP_INT_CATEGORY_TYPE_GAME  order=0 pageno=1 count=30 iscrack=$smarty.request.iscrack|default:0  ret='game_catlist'}-->
			<dl style="display:none; list-style-type:none;">
				<!--{section name=sect loop=$game_catlist.list.items}-->
					<!--{if $smarty.section.sect.index%2==0}-->
					<dt>
					<!--{/if}-->
						<!--{assign var="gotopage" value="/appstore/game.html?phonetype="}-->
						<a href="<!--{$gotopage|cat:$smarty.get.phonetype|cat:'&catid='|cat:$game_catlist.list.items[sect].catid|cat:'&iscrack='|cat:$smarty.get.iscrack}-->" class="hist lf caticon" target="pagecontainer" style="width:35%;"><span><!--{$game_catlist.list.items[sect].name}--></span></a>
							<!--{if $smarty.section.sect.index%2==1}-->
					</dt>
					<!--{/if}-->
				<!--{/section}-->
			</dl>
		<!--{/if}-->
		
</div></div>