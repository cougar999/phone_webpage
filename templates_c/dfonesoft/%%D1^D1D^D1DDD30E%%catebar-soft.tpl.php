<?php /* Smarty version 2.6.26, created on 2014-02-17 21:51:22
         compiled from dxsoft/catebar-soft.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'feed', 'dxsoft/catebar-soft.tpl', 3, false),array('modifier', 'default', 'dxsoft/catebar-soft.tpl', 6, false),)), $this); ?>
<h2>应用</h2>
<ul>
	<?php echo smarty_function_feed(array('int' => 'AP_INT_GETALLCATE','sort' => 'Soft','ret' => 'catelist'), $this);?>

	<?php $_from = $this->_tpl_vars['catelist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allcate'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allcate']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['allcate']['iteration']++;
?>
	<?php if ($this->_tpl_vars['item']['resSort'] == 'android'): ?>
	<li><a href="/appstore/softlist.html?catid=<?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&sort=Soft"><?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('default', true, $_tmp, "未知应用") : smarty_modifier_default($_tmp, "未知应用")); ?>
</a></li>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>