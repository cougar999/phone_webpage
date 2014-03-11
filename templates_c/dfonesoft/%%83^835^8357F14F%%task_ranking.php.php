<?php /* Smarty version 2.6.26, created on 2014-02-24 22:20:24
         compiled from intergral/task_ranking.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'intergral/task_ranking.php', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<div class="content"><div class="wrap">

	<div class="scroll">
		
		<div id="coinsbox">
			<?php if ($this->_tpl_vars['assign']['shopid'] != -1): ?>
			<h1 id="rankname">积分排行榜 <!-- <small>我在1000人中排名12</small> --></h1>
			<div class="scorelist">
			<div class="scoretable" id="ranklist">
				<table border="0" cellspacing="0" cellpadding="0" width="100%">
					<colgroup>
						<col width="160" />
						<col width="auto" />
						<col width="180" />
					</colgroup>
					<tr>
						<th>排名</th>
						<th>账号名称</th>
						<th>总积分</th>
					</tr>
					<tbody id="rankinglist">
						<?php $_from = $this->_tpl_vars['assign']['ranking']['page']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['items']):
?>
						<tr>
							<td class="tc"><i><?php echo $this->_tpl_vars['key']+1; ?>
</i></td>
							<td class="tc"><span class="salesname"><?php echo $this->_tpl_vars['items']['salesname']; ?>
</span></td>
							<td class="tc"><span><?php echo $this->_tpl_vars['items']['coins']; ?>
</strong></td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
			</div>
			</div>
			<?php else: ?>
			<?php echo $this->_tpl_vars['assign']['logoutmsg']; ?>

			<?php endif; ?>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-paging.tpl", 'smarty_include_vars' => array('page' => $this->_tpl_vars['assign']['ranking']['page']['pagenum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div></div>