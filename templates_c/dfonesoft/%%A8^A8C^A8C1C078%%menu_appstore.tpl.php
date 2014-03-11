<?php /* Smarty version 2.6.26, created on 2014-02-17 21:53:31
         compiled from menu/menu_appstore.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'menu/menu_appstore.tpl', 4, false),)), $this); ?>
<div id="wgt-menu-start" class="wgt-menu"><div class="menu">
<h3>
	<?php $this->assign('gotopage', "/appstore/store.html?phonetype="); ?>
	<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['gotopage'])) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['phonetype']) : smarty_modifier_cat($_tmp, $_GET['phonetype'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&channelcode=') : smarty_modifier_cat($_tmp, '&channelcode=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['channelcode']) : smarty_modifier_cat($_tmp, $_GET['channelcode'])); ?>
" target="pagecontainer" class="feature"><span class="title">精品下载</span></a>
</h3>
<h3>
	<?php $this->assign('gotopage', "/appstore/topic_home.html?phonetype="); ?>
	<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['gotopage'])) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['phonetype']) : smarty_modifier_cat($_tmp, $_GET['phonetype'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&channelcode=') : smarty_modifier_cat($_tmp, '&channelcode=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['channelcode']) : smarty_modifier_cat($_tmp, $_GET['channelcode'])); ?>
" target="pagecontainer" class="topic"><span class="title">专题列表</span></a>
</h3>
<h3>
	<?php $this->assign('gotopage', "/appstore/app_home.html?phonetype="); ?>
	<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['gotopage'])) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['phonetype']) : smarty_modifier_cat($_tmp, $_GET['phonetype'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&channelcode=') : smarty_modifier_cat($_tmp, '&channelcode=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['channelcode']) : smarty_modifier_cat($_tmp, $_GET['channelcode'])); ?>
" target="pagecontainer" class="soft"><span class="title">应用下载</span></a>
</h3>
<h3>
	<?php $this->assign('gotopage', "/appstore/game_home.html?phonetype="); ?>
	<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['gotopage'])) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['phonetype']) : smarty_modifier_cat($_tmp, $_GET['phonetype'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '&channelcode=') : smarty_modifier_cat($_tmp, '&channelcode=')))) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['channelcode']) : smarty_modifier_cat($_tmp, $_GET['channelcode'])); ?>
" target="pagecontainer" class="game"><span class="title">游戏下载</span></a>
</h3>
</div></div>