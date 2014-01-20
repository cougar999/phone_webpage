<div id="wgt-toolbar">
<div class="wgt-bg">
<div class="lf">
	<a id="back" href="#back" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-back">&nbsp;</span></a>
	<a id="forward" href="#forward" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-forward">&nbsp;</span></a>
	<a id="refresh" href="#refresh" class="wgt-toolbar-icon" onclick="return false;"><span class="wgt-icon-refresh">&nbsp;</span></a>
</div>

<div class="wgt-bg-m lf" style="width:460px; overflow:hidden;">
	<table width="100%" cellpadding="0" cellspacing="0"><tr><td>
		<ul class='toolbarbtn lf' style="height:26px; line-height:26px;">
			<!-- <li>
				<a href="#null" onclick="multiMoveapp('sd');return false;">移到SD卡</a>
			</li>
			<li>
				<a href="#null" onclick="multiMoveapp('mem');return false;">移到内存</a>
			</li> -->
			<li>
				<a href='#null' onclick="if (checkphone() && checkmtk() && checkdisk()) $(document).trigger('appupdatedown', ['']); return false;">更新选中</a>
			</li>
			<li>
				<a href='/appupdate.html' onclick="if (checkphone() && checkmtk() && checkdisk()) $(document).trigger('appupdatedown', ['applist']); return false;">全部更新</a>
			</li>
			<li>
				<a href='/appdel.html' onclick="appdel();return false;">卸载</a>
			</li>
		</ul>
	</td></tr></table>
    </div>
</div>
</div>
