<?php
include_once('config.php');
include_once('common.php');

$items = array();

$items[0] 	= array('cid' => '1', 'name' => '元旦促销包', 'imgurl' => '../resources/images/temp.png', 'price' => '1.3', servicefee => '0', rescount => '2', 'desc' => '高考终于过了，6月25号就可以上网查分数了，而今天，正是查分数的这天。诸葛飞邀请诸葛承均他们这些人一起去网吧查分。&ldquo;老板，五台机子。&rdquo;诸葛飞给了50的押金要了五台机子，其实这五个人每个人家里都有电脑的，但是他们也许是对自己的成绩很有信心，要把自己的快乐分享给自己最好的兄弟们。张静媛由于学校还没有放假，所以现在还是在WD。&ldquo;粗爷，你这么有把握的样子，你估计自己能考多少分啊？&rdquo;诸葛飞心想这诸葛承均明显是想...');
$resources = array();
$resources[] = array ('rid'=>'100001','rname' => '我的神仙男友12', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00001.txt?rsid=100001', rprice => '2', rservicefee => '0');
$resources[] = array ('rid'=>'100011','rname' => '玉女养成记', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00011.txt?rsid=100011', rprice => '2', rservicefee => '0');

$items[0]['resources'] = $resources;
$items[1] 	= array('cid' => '2', 'name' => '新年促销包', 'imgurl' => '../resources/images/temp.png', 'price' => '1.24', servicefee => '0', rescount => '2', 'desc' => '新年定制版网页浏览软件');

$resources = array();
$resources[] = array ('rid'=>'100008','rname' => '拷住极品美男子', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00008.txt?rsid=100008', rprice => '2.3', rservicefee => '0');
$resources[] = array ('rid'=>'100011','rname' => '玉女养成记', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00007.txt?rsid=100007', rprice => '1.1', rservicefee => '0');

$items[1]['resources'] = $resources;


$page['items'] = $items;
$ret['list'] = $page;
echo json_encode($ret);
