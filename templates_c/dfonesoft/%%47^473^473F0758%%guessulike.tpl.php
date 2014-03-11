<?php /* Smarty version 2.6.26, created on 2014-02-20 11:32:15
         compiled from dxsoft/guessulike.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'feed', 'dxsoft/guessulike.tpl', 6, false),array('modifier', 'default', 'dxsoft/guessulike.tpl', 9, false),array('modifier', 'strip_tags', 'dxsoft/guessulike.tpl', 13, false),array('modifier', 'truncate_utf8_string', 'dxsoft/guessulike.tpl', 13, false),)), $this); ?>
<div id="guessu">
	<div class="titleguess">
		<h2>猜你喜欢</h2>
	</div>
	<ul>
		<?php echo smarty_function_feed(array('int' => 'AP_INT_PRODUCTTOP','num' => 9,'topType' => 4,'ret' => 'guessulike'), $this);?>

		<?php $_from = $this->_tpl_vars['guessulike']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['toplist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['toplist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['toplist']['iteration']++;
?>
		<li>
			<p><a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
">
				<img src="<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
" width="40" height="40">
			</a></p>
			<p>
				<a href="/appstore/soft.html?softid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['fileId'])) ? $this->_run_mod_handler('default', true, $_tmp, 1000) : smarty_modifier_default($_tmp, 1000)); ?>
&pid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['subId'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&phonetype=<?php echo $_GET['phonetype']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知") : smarty_modifier_default($_tmp, "未知")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate_utf8_string', true, $_tmp, 8, "...", true) : smarty_modifier_truncate_utf8_string($_tmp, 8, "...", true)); ?>
</a>
			</p>
		</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>