<?php /* Smarty version 2.6.26, created on 2014-03-04 22:29:35
         compiled from appstore/store.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'appstore/store.html', 1, false),array('function', 'feed', 'appstore/store.html', 20, false),array('modifier', 'default', 'appstore/store.html', 20, false),array('modifier', 'strip_tags', 'appstore/store.html', 29, false),array('modifier', 'truncate_utf8_string', 'appstore/store.html', 29, false),array('modifier', 'sizetext', 'appstore/store.html', 30, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<div class="content">
	<div class="wrap">
		<div class="contentside">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="scroll">
			<div class="sright">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dxsoft/downloadrank.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="sleft">
				
				<div id="catebar" class="clear" style="overflow:hidden">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dxsoft/catebar-soft.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dxsoft/catebar-game.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				
				<div id="softlist" class="clear">
					<div class="tc downall"><a href="#null">下载全部</a></div>
					<?php echo smarty_function_feed(array('int' => 'AP_INT_RECOMMEND','num' => 18,'ret' => 'recommendlistA','page' => ((is_array($_tmp=@$_GET['pageno'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1))), $this);?>

					<?php $_from = $this->_tpl_vars['recommendlistA']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommendlisteach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommendlisteach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['recommendlisteach']['iteration']++;
?>
					<dl>
						<dt>
							<ul>
								<li class="imgcover"><a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
">
									<img src="<?php echo $this->_tpl_vars['item']['icon']; ?>
" width="68" height="68">
								</a>
								<?php if ($this->_tpl_vars['item']['unitPrice']): ?><div class="icon_coins"><?php echo $this->_tpl_vars['item']['unitPrice']; ?>
</div><?php endif; ?></li>
								<li><a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 8, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 8, "...", true)); ?>
</a></li>
								<li class="gray"><?php if ($this->_tpl_vars['item']['size']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('sizetext', true, $_tmp) : smarty_modifier_sizetext($_tmp)); ?>
<?php else: ?>0MB<?php endif; ?></li>
								<li><div class="down f_l"><a id="<?php echo $this->_tpl_vars['item']['fileId']; ?>
" businesstype="1" isbiz="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['unitPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" href="<?php echo $this->_tpl_vars['item']['path']; ?>
&isbiz=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['unitPrice'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" installlocate="1" appid="<?php echo $this->_tpl_vars['item']['packageName']; ?>
"  versioncode="<?php echo $this->_tpl_vars['item']['versionCode']; ?>
"  version="<?php echo $this->_tpl_vars['item']['versionName']; ?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
" star="<?php echo $this->_tpl_vars['item']['star']; ?>
" type="1" goldcoins="<?php echo $this->_tpl_vars['item']['unitPrice']; ?>
" class="change <?php if ($this->_tpl_vars['item']['black'] && $this->_tpl_vars['item']['black'] == 1): ?>downdisable<?php else: ?>downinit<?php endif; ?> newpage"  onclick="return false;"></a></div></li>
							</ul>
						</dt>
						<dd class="gray"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['productDesc'])) ? $this->_run_mod_handler('default', true, $_tmp, "没有内容") : smarty_modifier_default($_tmp, "没有内容")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 30, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 30, "...", true)); ?>
</dd>
					</dl>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-paging.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['recommendlist']['totalNum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				
			</div>
			
		</div>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
	$(".downall a").click(function(){
		if (this.disabled == true || $(this).hasClass('disabled')) { return false; }
		if (checkphone() == false) { return false; }
		if (checkdiskbuyanddown() == false) { return false; }
		$('#colorbox').css({'width':'600px','height':'200px'});
		$('#colorbox').html('<div id="cboxWrapper" style="width: 600px; height: 200px; "><div><div id="cboxTopLeft" style="float: left; "></div><div id="cboxTopCenter" style="float: left; width: 600px; "></div><div id="cboxTopRight" style="float: left; "></div></div><div style="clear: left; "><div id="cboxMiddleLeft" style="float: left; height: 200px; "></div><div id="cboxContent" style="float: left; width: 600px; height: 180px; "><div id="cboxLoadedContent" style="width: 540px; overflow-x: hidden; overflow-y: hidden; height: 130px; "></div><div id="cboxLoadingOverlay" style="float: left; display: none; "></div><div id="cboxLoadingGraphic" style="float: left; display: none; "></div><div id="cboxTitle" style="float: left; display: block; "></div><div id="cboxCurrent" style="float: left; display: none; "></div><div id="cboxNext" style="float: left; display: none; "></div><div id="cboxPrevious" style="float: left; display: none; "></div><div id="cboxSlideshow" style="float: left; display: none; "></div><div id="cboxClose" style="float: left; "></div></div><div id="cboxMiddleRight" style="float: left; height: 180px; "></div></div><div style="clear: left; "><div id="cboxBottomLeft" style="float: left; "></div><div id="cboxBottomCenter" style="float: left; width: 600px; "></div><div id="cboxBottomRight" style="float: left; "></div></div></div>');
		$('#cboxLoadedContent').html('<div class="tc">' + 
			'<div class="progresshead"><p><span id="progresstit">正在处理您选中的文件，请等待</span></p></div>' +
			'<div class="progressbar"><div id="progresswait" class="waiting"><div class="progressbg"></div></div></div>' +
			'<table class="progressfoot fixwidth" style="width:100%;"><tr><td class="fixwidth"><span id="progressmsg"></span></td></tr></table>' +
			'</div>');
		cbWaiting('正在处理您选中的文件，请等待', function(box, msgEle, pointEle){
			var objcontent = $(".downall").parent("div").find("ul");
			var length = objcontent.length;
			var length_down = objcontent.find("a.downinit").length;
			var i = 0;
			var downi = 0;
			var undatacall = function() {
				if(i > length){
					$.floatingMessage('<span class="s addtodown"><span class="cblue">已添加' + downi + '</span>个应用到下载列表</span>', {
						time: 3000,
						align: "right",
						verticalAlign: "bottom"
					});
					$.colorbox.close();
					return;
				}
				if(objcontent.find("a.addcart").eq(i).length > 0){
					if (objcontent.find("a.addcart").eq(i).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) {
					}else{
						objcontent.find("a.addcart").eq(i).trigger("click");
					}
				}
				if(objcontent.find("a.downinit").eq(i).length > 0){
					if (objcontent.find("a.downinit").eq(i).attr("disabled") == 'disabled' || $(this).hasClass('disabled')) {
					}else{
						var id = objcontent.find("a.downinit").eq(i).attr("id");
						var url = objcontent.find("a.downinit").eq(i).attr("href") + '&dt=da';
						var title = objcontent.find("a.downinit").eq(i).attr("title");
						var appid = objcontent.find("a.downinit").eq(i).attr("appid");
						var installlocate = objcontent.find("a.downinit").eq(i).attr("installlocate");
						var is_sc = objcontent.find("a.downinit").eq(i).attr("is_sc") || 0;
						var businesstype = objcontent.find("a.downinit").eq(i).attr("businesstype") || 1;
						var isbiz = objcontent.find("a.downinit").eq(i).attr("isbiz") || 0;
						var dt = objcontent.find("a.downinit").eq(i).attr("dt") || 0;
						var rows = {
							id : id,
							url : url,
							name : title,
							appid : appid,
							installlocate : installlocate,
							is_sc : is_sc,
							businesstype : businesstype,
							isbiz : isbiz,
							dt:dt
						};
						addTask(rows, null, true);
						downi++;
					}
				}
				i++;
				setTimeout(undatacall, 200);
			}
			undatacall();
			return; 
		});
	});
</script>