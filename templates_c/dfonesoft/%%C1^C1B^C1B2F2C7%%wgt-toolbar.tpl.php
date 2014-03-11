<?php /* Smarty version 2.6.26, created on 2014-02-17 21:51:21
         compiled from toolbar/wgt-toolbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'toolbar/wgt-toolbar.tpl', 14, false),)), $this); ?>
<div id="wgt-toolbar">
<div class="wgt-bg">
	<a id="back" href="#back" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-back">&nbsp;</span></a>
	<a id="forward" href="#forward" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-forward">&nbsp;</span></a>
	<a id="refresh" href="#refresh" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-refresh">&nbsp;</span></a>
	<div class="rg" id="searchform">
		<form id="seaform" action="<?php echo $this->_config[0]['vars']['base']; ?>
/appstore/search.html" method="get" style="margin:0px; padding:0px;">
			<table border="0" cellpadding="0" cellspacing="0"  height="28" >
				<tr>
					<td>
						<!-- <ul class='multi-ddm lf'>
						<li>
							<a id="seasele" href='#'></a>
							<input type="hidden" id="seatype" name="seatype" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['seatype'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
" />
							<input type="hidden" id="phonetype" name="phonetype" value="<?php echo ((is_array($_tmp=@$_GET['phonetype'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
" />
							<input type="hidden" id="iscrack" name="iscrack" value="<?php echo ((is_array($_tmp=@$_GET['iscrack'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
" />
						</li>
						</ul> -->
						<ul id="sealist">
							<li><a href="#1" onclick="return false;"> 软件游戏</a></li>
							<!-- <li><a href="#2" onclick="return false;">休闲游戏</a></li>-->
							<!-- <li><a href="#3" onclick="return false;">音乐歌曲</a></li>-->
							<!--  <li><a href="#4" onclick="return false;">视频短片</a></li>-->
							<li><a href="#5" onclick="return false;">电子书籍</a></li>
							<li><a href="#7" onclick="return false;">主题图片</a></li>
						</ul>
						<script type="text/javascript">
						//var seatype = $('#seatype').val(); $('#sealist').find('a[href="#' + seatype + '"]').parent().hide();
						</script>
					</td>
					<td width="182">
						<input type="text" value="<?php if ($_REQUEST['keyword'] != ''): ?><?php echo $_REQUEST['keyword']; ?>
<?php else: ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['seasele'])) ? $this->_run_mod_handler('default', true, $_tmp, "软件游戏") : smarty_modifier_default($_tmp, "软件游戏")); ?>
<?php endif; ?>" id="keyword" name="keyword" maxlength="20" />
					</td>
					<td width="62">
						<a href="<?php echo $this->_config[0]['vars']['base']; ?>
/appstore/search.html" onclick="$('#seaform').submit(); return false;" id="submitbtn">&nbsp;</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div></div>