<?php /* Smarty version 2.6.26, created on 2014-02-20 20:38:44
         compiled from appstore/topic_home.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'appstore/topic_home.html', 1, false),array('function', 'feed', 'appstore/topic_home.html', 15, false),array('modifier', 'default', 'appstore/topic_home.html', 15, false),array('modifier', 'strip_tags', 'appstore/topic_home.html', 23, false),array('modifier', 'truncate_utf8_string', 'appstore/topic_home.html', 23, false),array('modifier', 'date_format', 'appstore/topic_home.html', 25, false),)), $this); ?>
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
			<div id="wraper">
				
				<div id="catebar" class="clear" style="overflow:hidden">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dxsoft/catebar-soft.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				
				<div id="topiclist" class="clear">
					<?php echo smarty_function_feed(array('int' => 'AP_INT_TOPICLIST','type' => 3,'orderName' => ((is_array($_tmp=@$_GET['ordername'])) ? $this->_run_mod_handler('default', true, $_tmp, 'lastModifyTime') : smarty_modifier_default($_tmp, 'lastModifyTime')),'orderby' => ((is_array($_tmp=@$_GET['ordername'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'page' => ((is_array($_tmp=@$_GET['pageno'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'num' => 18,'ret' => 'topic'), $this);?>

					<?php $_from = $this->_tpl_vars['topic']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['topiclist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topiclist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['topiclist']['iteration']++;
?>
					<dl>
						<dt>
							<a href="/appstore/topic-detail.html?topicid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
">
								<img src="<?php echo $this->_tpl_vars['item']['logo']; ?>
" width="300" height="170">
							</a>
						</dt>
						<dd><a href="/appstore/topic-detail.html.html?topicid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 20, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 20, "...", true)); ?>
</a></dd>
						<dd><?php if ($this->_tpl_vars['item']['count']): ?><?php echo $this->_tpl_vars['item']['count']; ?>
<?php else: ?>0<?php endif; ?> 款软件</dd>
						<dd class="gray">创建时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['createTime']/1000)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 最后编辑：<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['lastModifyTime']/1000)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
						<dd class="gray">
							<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['describe'])) ? $this->_run_mod_handler('default', true, $_tmp, "没有内容") : smarty_modifier_default($_tmp, "没有内容")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 30, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 30, "...", true)); ?>

						</dd>
					</dl>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-paging.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['topic']['totalNum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				
			</div>
			
		</div>
	</div>
</div>