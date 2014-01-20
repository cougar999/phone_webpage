<?php
function smarty_function_paging($params, &$smarty)
{
	$ret = $params['ret'];
	$page = $params['page'];

	$no = $params['no'] ? $params['no'] : 1;
	$count = $page['count'] ? $page['count'] : ($page['num'] ? $page['num'] : 18);
	$pages = (int) ($page / $count) + ($page % $count ? 1 : 0);
	$pager = array();
	$pager['first'] = 1;
	$pager['prev'] = $no - 1;
	$pager['next'] = $no + 1;
	$pager['last'] = $pages;
	$pager['no'] = $no;
	
	if ($no < 5) {
		for ($i = 1; $i < 11; $i++) {
			if ($i <= $pages) {
				$pager['size'][] = $i;
			}
		}	
	} elseif ($no > ($pages - 5)) {
		for ($i = $pages - 9; $i <= $pages; $i++) {
			if ($i > 0) {
				$pager['size'][] = $i;
			}
		}	
	} else {
		for ($i = $no - 4; $i < $no + 6; $i++) {
			$pager['size'][] = $i;
		}	
	}

	if ($pager['prev'] <  $pager['first']) { $pager['prev'] = -1; }
	if ($pager['next'] >  $pager['last']) { $pager['next'] = -1; }
	if ($pager['first'] == $no) { $pager['first'] = -1; }
	if ($pager['last'] == $no || $pager['last'] == 0) { $pager['last'] = -1; }
	
	$smarty->assign($ret, $pager);
}
