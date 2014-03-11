<?php /* Smarty version 2.6.26, created on 2014-02-17 21:53:30
         compiled from appstore/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'appstore/index.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<?php if ($_REQUEST['phonetype'] != '8' || $_REQUEST['phonetype'] != 8 || $_REQUEST['phonetype'] != '8.'): ?>
/appstore/store.html
<?php else: ?>
/appstore/store.html
<?php endif; ?>