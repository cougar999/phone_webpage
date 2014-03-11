<?php /* Smarty version 2.6.26, created on 2014-03-11 13:19:13
         compiled from dxsoft/downloadrank.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'feed', 'dxsoft/downloadrank.tpl', 4, false),array('modifier', 'default', 'dxsoft/downloadrank.tpl', 9, false),array('modifier', 'strip_tags', 'dxsoft/downloadrank.tpl', 15, false),array('modifier', 'truncate_utf8_string', 'dxsoft/downloadrank.tpl', 15, false),array('modifier', 'sizetext', 'dxsoft/downloadrank.tpl', 16, false),)), $this); ?>
<div class="side-wgt">
	<h2>下载排行榜</h2>
	<div class="ranklist clear">
		<?php echo smarty_function_feed(array('int' => 'AP_INT_PRODUCTTOP','num' => 10,'topType' => 1,'orderName' => 'downloadCount','orderby' => 0,'ret' => 'downloadsA'), $this);?>

		<?php $_from = $this->_tpl_vars['downloadsA']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ranklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ranklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['ranklist']['iteration']++;
?>
		<dl>
			<dt><img src="/resources/imgs/no<?php echo $this->_tpl_vars['key']+1; ?>
.gif" /></dt>
			<dd>
				<a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
">
					<img src="<?php echo $this->_tpl_vars['item']['icon']; ?>
" width="40" height="40">
				</a>
				<?php if ($this->_tpl_vars['item']['unitPrice']): ?><div class="icon_coins"><?php echo $this->_tpl_vars['item']['unitPrice']; ?>
</div><?php endif; ?></li>
			</dd>
			<ul>
				<li><a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 8, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 8, "...", true)); ?>
</a></li>
				<li class="gray"><?php if ($this->_tpl_vars['item']['size']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('sizetext', true, $_tmp) : smarty_modifier_sizetext($_tmp)); ?>
<?php else: ?>0MB<?php endif; ?></li>
				<li class="downBtn"><div class="down f_l"><a id="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
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
		</dl>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div>