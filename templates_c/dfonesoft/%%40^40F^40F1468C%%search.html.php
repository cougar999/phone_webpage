<?php /* Smarty version 2.6.26, created on 2014-02-20 11:31:46
         compiled from appstore/search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'appstore/search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<div class="content">
	<div class="wrap">
		<div class="contentside">
		<?php if ($_REQUEST['seatype'] == '1'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_APP'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_APP'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '2'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_GAME'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_GAME'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '3'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_MUSIC'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_MUSIC'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '4'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_APP'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_APP'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '5'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_BOOK'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_BOOK'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '7'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_THEMESOFT'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_THEMESOFT'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar/wgt-toolbar.tpl", 'smarty_include_vars' => array('seasele' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_NAME_APP'],'seatype' => $this->_tpl_vars['assign']['ap_int']['AP_INT_SEARCH_TYPE_APP'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			
		</div>
		<div class="scroll">
		<div class="contentbody contentwrap">
			<?php if ($_REQUEST['seatype'] == '1'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-soft-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '2'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-game-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '3'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-music-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '4'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-video-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '5'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-book-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($_REQUEST['seatype'] == '7'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-theme-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "wgt-search-app-list.tpl", 'smarty_include_vars' => array('keyword' => $_REQUEST['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		</div>
		</div>
	</div>
</div>