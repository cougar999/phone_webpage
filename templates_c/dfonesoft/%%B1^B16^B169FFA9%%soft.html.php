<?php /* Smarty version 2.6.26, created on 2014-02-17 22:12:17
         compiled from appstore/soft.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'feed', 'appstore/soft.html', 1, false),array('function', 'config_load', 'appstore/soft.html', 2, false),array('modifier', 'default', 'appstore/soft.html', 1, false),array('modifier', 'date_format', 'appstore/soft.html', 13, false),array('modifier', 'sizetext', 'appstore/soft.html', 17, false),)), $this); ?>
<?php echo smarty_function_feed(array('int' => 'AP_INT_SOFTDETAIL','pId' => ((is_array($_tmp=@$_GET['pid'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'fileId' => $_GET['softid'],'ret' => 'softdetail'), $this);?>

<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<div class="content"><div class="wrap">
	<div class="contentside">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	
	<div class="scroll">
	<div class="right">
		<div id="softside">
			<ul class="softcons">
				<li>分　类：<?php echo $this->_tpl_vars['softdetail']['data']['category']; ?>
</li>
				<li>更　新：<?php echo ((is_array($_tmp=$this->_tpl_vars['softdetail']['data']['createTime']/1000)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</li>
				<li>下　载：<?php echo $this->_tpl_vars['softdetail']['data']['downloadCount']; ?>
次</li>
				<!-- <li>系　统：andriod2.0以上</li>
				<li>开发商：北京完成</li> -->
				<li>大　小：<?php echo ((is_array($_tmp=$this->_tpl_vars['softdetail']['data']['size'])) ? $this->_run_mod_handler('sizetext', true, $_tmp) : smarty_modifier_sizetext($_tmp)); ?>
</li>
				<!-- <li>语　言：<?php echo ((is_array($_tmp=$this->_tpl_vars['softdetail']['data']['size'])) ? $this->_run_mod_handler('sizetext', true, $_tmp) : smarty_modifier_sizetext($_tmp)); ?>
</li> -->
			</ul>
			
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dxsoft/guessulike.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>
	<div class="center">
		<div class="section">
				<div id="softinfos">
					<dl class="clear" style="overflow: hidden">
						<dt>
							<p class="softimg"><img src="<?php echo ((is_array($_tmp=@$this->_tpl_vars['softdetail']['data']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
" width="70" height="70"></p>
							<p>
							<a id="<?php echo $this->_tpl_vars['item']['fileId']; ?>
" businesstype="1" isbiz="1" href="<?php echo $this->_tpl_vars['softdetail']['data']['path']; ?>
" installlocate="1" appid="<?php echo $this->_tpl_vars['item']['packageName']; ?>
"  versioncode="<?php echo $this->_tpl_vars['item']['versionCode']; ?>
"  version="<?php echo $this->_tpl_vars['item']['versionName']; ?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
" star="<?php echo $this->_tpl_vars['item']['star']; ?>
" type="1" goldcoins="1" class="change downinit newpage" onclick="return false;"><img src="/resources/imgs/btn_down_middle_normal.png" /></a>
							</p>
						</dt>
						<dd style="width: 80%">
							<p>
								<strong><?php echo ((is_array($_tmp=@$this->_tpl_vars['softdetail']['data']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
</strong>
								<?php echo ((is_array($_tmp=@$this->_tpl_vars['softdetail']['data']['version'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

							</p>
							<p class="gray"><?php echo ((is_array($_tmp=@$this->_tpl_vars['softdetail']['data']['productDesc'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
</p>
						</dd>
					</dl>
					
					<div id="softfocus">
						<div id="pic_focus_cont">
							<div id="pic_focus">
									<div id="slideimgbar" class="slideimgbar"></div>
									<ul class="slideimglist">
										<?php $_from = $this->_tpl_vars['softdetail']['data']['previewMap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['imglist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['imglist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['imglist']['iteration']++;
?>
										<li id="photo-<?php echo $this->_foreach['imglist']['iteration']; ?>
" class="dl_line" style="background:url(/resources/img40/loading_trans_small.gif) no-repeat center center;">
											<img src="<?php echo $this->_tpl_vars['item']; ?>
&width=120&height=240" width="240" />
										</li>
										<?php endforeach; endif; unset($_from); ?>
									</ul>
							</div>
							<div id="pic_btns">
							<a class="last"></a>
							<span class="center_dot"></span>
							<a class="next"></a>
							</div>
							<script>
								$(document).ready(function(){
									$("#pic_focus").slideimg({gostart_on:false,imgshow_num:3,hdCallBack:function(){
									}});
								});
							</script>
						</div>
					</div>
					
				</div>
				
				
		</div>	
	</div>
	</div>
</div></div>