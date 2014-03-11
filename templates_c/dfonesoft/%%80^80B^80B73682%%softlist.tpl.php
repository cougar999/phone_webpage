<?php /* Smarty version 2.6.26, created on 2014-02-20 20:37:47
         compiled from dxsoft/softlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'feed', 'dxsoft/softlist.tpl', 2, false),array('modifier', 'default', 'dxsoft/softlist.tpl', 2, false),array('modifier', 'strip_tags', 'dxsoft/softlist.tpl', 11, false),array('modifier', 'truncate_utf8_string', 'dxsoft/softlist.tpl', 11, false),array('modifier', 'sizetext', 'dxsoft/softlist.tpl', 12, false),)), $this); ?>
<div id="softlist" class="clear">
	<?php echo smarty_function_feed(array('int' => 'AP_INT_CATELIST','cId' => ((is_array($_tmp=@$_GET['catid'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')),'sort' => ((is_array($_tmp=@$_GET['sort'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['sort']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['sort'])),'page' => ((is_array($_tmp=@$_GET['pageno'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)),'num' => 18,'ret' => 'catelistalllist'), $this);?>

	<?php $_from = $this->_tpl_vars['catelistalllist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['catelisteach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catelisteach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['catelisteach']['iteration']++;
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
				<?php if ($this->_tpl_vars['item']['price']): ?><div class="icon_coins"><?php echo $this->_tpl_vars['item']['price']; ?>
</div><?php endif; ?></li>
				<li><a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 8, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 8, "...", true)); ?>
</a></li>
				<li class="gray"><?php if ($this->_tpl_vars['item']['size']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('sizetext', true, $_tmp) : smarty_modifier_sizetext($_tmp)); ?>
<?php else: ?>0MB<?php endif; ?></li>
				<li><div class="down f_l"><a id="<?php echo $this->_tpl_vars['item']['fileId']; ?>
" businesstype="1" isbiz="<?php echo $this->_tpl_vars['item']['price']; ?>
" href="<?php echo $this->_tpl_vars['item']['path']; ?>
&isbiz=<?php echo $this->_tpl_vars['item']['price']; ?>
" installlocate="1" appid="<?php echo $this->_tpl_vars['item']['packageName']; ?>
"  versioncode="<?php echo $this->_tpl_vars['item']['versionCode']; ?>
"  version="<?php echo $this->_tpl_vars['item']['versionName']; ?>
" title="<?php echo $this->_tpl_vars['item']['name']; ?>
" star="<?php echo $this->_tpl_vars['item']['star']; ?>
" type="1" goldcoins="<?php echo $this->_tpl_vars['item']['price']; ?>
" class="change downinit newpage"  onclick="return false;"></a></div></li>
			</ul>
		</dt>
		<dd class="gray"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['productDesc'])) ? $this->_run_mod_handler('default', true, $_tmp, "没有内容") : smarty_modifier_default($_tmp, "没有内容")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 30, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 30, "...", true)); ?>
</dd>
	</dl>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-paging.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['catelistalllist']['totalNum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>