<?php /* Smarty version 2.6.26, created on 2014-02-24 22:20:07
         compiled from index_intergral.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index_intergral.html', 1, false),array('function', 'params', 'index_intergral.html', 75, false),array('modifier', 'date_format', 'index_intergral.html', 6, false),array('modifier', 'default', 'index_intergral.html', 75, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf",'scope' => 'global'), $this);?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<!-- <?php echo $this->_config[0]['vars']['version']; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
 -->
<link href="<?php echo $this->_config[0]['vars']['res1']; ?>
/resources/css<?php echo $this->_config[0]['vars']['version']; ?>
/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_config[0]['vars']['res2']; ?>
/resources/css<?php echo $this->_config[0]['vars']['version']; ?>
/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_config[0]['vars']['res2']; ?>
/resources/css<?php echo $this->_config[0]['vars']['version']; ?>
/dxt-web.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_config[0]['vars']['res3']; ?>
/resources/lib/colorbox/colorbox.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res3']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/init.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res1']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/core.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res2']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/phone.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res4']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/common.js"></script>

<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res5']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res1']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res2']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res3']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/jquery.floatingmessage.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res4']; ?>
/resources/lib/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res5']; ?>
/resources/lib/tooltip/jquery.tooltip.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res1']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/loopedSlider.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res1']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/mobile.js"></script>
<script type="text/javascript" src="<?php echo $this->_config[0]['vars']['res2']; ?>
/resources/js<?php echo $this->_config[0]['vars']['version']; ?>
/app.js"></script>
</head>
<body>
<style>
	body,html {height:100%;overflow-y:hidden;}
</style>
<table id="pageloading" border="0" style="position:absolute; left:42%; top:28%; width:20%; height:20%;z-index:900000;"><tr><td align="center" valign="middle"><img src="<?php echo $this->_config[0]['vars']['img1']; ?>
/resources/img40/loading_trans_middle.gif" /></td></tr></table>
<div class="page"><div class="wrap">
	<div class="body"><div class="wrap">
		<!-- head start -->
		<div class="head"><div class="wrap">
		</div></div>
		<!-- head end -->
		
		<!-- container start -->
		<div class="container"><div class="wrap">
		
			<!-- left start -->
			<div class="left">
				<div class="wrap">
				<?php if ($this->_tpl_vars['tp_tpl_page_plugin'] == 'start.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_start.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'appstore.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_appstore.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'mobile.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_mobile.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'member.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_member.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'operator.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_operator.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'zone.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_zone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'fitting.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_fitting.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'intergral.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_intergral.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif ($this->_tpl_vars['tp_tpl_page_plugin'] == 'favorite.php'): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu/menu_favorite.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			</div></div>
			<!-- left end -->
			
			<!-- left start -->
			<div class="right"><div class="wrap">
				
			</div></div>
			<!-- left end -->
			
			<!-- center start -->
			<div class="center"><div class="wrap">
				<iframe name="pagecontainer" id="pagecontainer" src="<?php if ($_GET['salesid']): ?><?php echo ((is_array($_tmp=@$_GET['gotopage'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['page']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['page'])); ?>
?<?php echo smarty_function_params(array('salesid' => $_GET['salesid'],'gotopage' => null), $this);?>
<?php else: ?><?php endif; ?>" frameborder="0" height="100%" width="100%"></iframe>
			</div></div>
			<!-- center end -->
			
		</div></div>
		<!-- container end -->
		
		<!-- foot start -->
		<div class="foot"><div class="wrap">
		</div></div>
		<!-- foot end -->
		
		<div class="no">
			<div id="optlog">
				<div class="tc"><a href="#" onclick="parent.fb.end();return false;">关闭</a></div>
				<p id="logs"></p>
				<div class="tc"><a href="#" onclick="parent.fb.end();return false;">关闭</a></div>
			</div>
		</div>
		<div class="no"><div id="conver"></div></div>
	</div></div>
</div></div>
</body>
</html>