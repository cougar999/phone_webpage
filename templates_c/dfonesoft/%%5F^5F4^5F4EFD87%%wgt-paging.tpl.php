<?php /* Smarty version 2.6.26, created on 2014-02-17 21:51:25
         compiled from wgt-paging.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'paging', 'wgt-paging.tpl', 1, false),array('function', 'params', 'wgt-paging.tpl', 13, false),)), $this); ?>
<?php echo smarty_function_paging(array('page' => $this->_tpl_vars['page'],'no' => $_GET['pageno'],'count' => $_GET['count'],'ret' => 'page'), $this);?>

<div id="wgt-paging" class="wgt-paging" style="clear: both"><div class="paging">
<?php if ($this->_tpl_vars['page']['size']): ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
	<td nowrap="nowrap" class="tc" id="pagenum" style="padding:20px 20px;">
		<div class="lf">
			<?php if ($this->_tpl_vars['page']['last'] > -1): ?>
			共 <?php echo $this->_tpl_vars['page']['last']; ?>
 页 
			<?php else: ?>
			共 <?php echo $this->_tpl_vars['page']['no']; ?>
 页 
			<?php endif; ?>
			<?php if ($this->_tpl_vars['page']['first'] > -1): ?>
				<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['page']['first']), $this);?>
" class="firstpage" onclick="gotopage(this); return false;"><span>第一页</span></a>
			<?php else: ?>
				<a onclick="return false;" class="firstpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>第一页</span></a>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['page']['prev'] > -1): ?>
				<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['page']['prev']), $this);?>
" class="prevpage" onclick="gotopage(this); return false;"><span>上一页</span></a>
			<?php else: ?>
				<a onclick="return false;" class="prevpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>上一页</span></a>
			<?php endif; ?>
		</div>
		<div class="pagenums">
			<?php $_from = $this->_tpl_vars['page']['size']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['page']['no']): ?>
					<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['item']), $this);?>
" class="active" disabled="disabled" onclick="gotopage(this); return false;"><span><?php echo $this->_tpl_vars['item']; ?>
</span></a>
				<?php else: ?>
					<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['item']), $this);?>
" onclick="gotopage(this); return false;"><span><?php echo $this->_tpl_vars['item']; ?>
</span></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
		<div class="lf">
			<?php if ($this->_tpl_vars['page']['next'] > -1): ?>
				<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['page']['next']), $this);?>
" class="nextpage" onclick="gotopage(this); return false;"><span>下一页</span></a>
			<?php else: ?>
				<a onclick="return false;" class="nextpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>下一页</span></a>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['page']['last'] > -1): ?>
				<a href="?<?php echo smarty_function_params(array('pageno' => $this->_tpl_vars['page']['last']), $this);?>
" class="lastpage" onclick="gotopage(this); return false;"><span>最末页</span></a>
			<?php else: ?>
				<a onclick="return false;" class="lastpage2" disabled="disabled" onclick="gotopage(this); return false;"><span>最末页</span></a>
			<?php endif; ?>
		</div>
	</td>
</tr></table>
<?php endif; ?>
</div></div>