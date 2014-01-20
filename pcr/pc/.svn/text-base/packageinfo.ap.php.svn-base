<?php
include_once('config.php');
include_once('common.php');

$items = array();

$ret['cid'] = '1';
$ret['imgurl'] = '../resources/images/temp.png';
$ret['name'] = '元旦促销包';
$ret['price'] = '0';
$ret['desc'] = '高考终于过了，6月25号就可以上网查分数了，而今天，正是查分数的这天。诸葛飞邀请诸葛承均他们这些人一起去网吧查分。&ldquo;老板，五台机子。&rdquo;诸葛飞给了50的押金要了五台机子，其实这五个人每个人家里都有电脑的，但是他们也许是对自己的成绩很有信心，要把自己的快乐分享给自己最好的兄弟们。张静媛由于学校还没有放假，所以现在还是在WD。&ldquo;粗爷，你这么有把握的样子，你估计自己能考多少分啊？&rdquo;诸葛飞心想这诸葛承均明显是想...';
$ret['rescount'] = '2';


$items[] = array ('rid'=>'100001','rname' => '我的神仙男友12', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00001.txt?rsid=100001', rtype => '8',  rprice => '200',rservicefee => '0');
$items[] = array ('rid'=>'100011','rname' => '玉女养成记', 'downloadurl' => 'http://pd.appdear.com/zwzx/ebook/CY01/CY00011.txt?rsid=100011',  rtype => '8', rprice => '200',rservicefee => '0');



$ret['list']['count'] = 2;
$ret['list']['items'] = $items;
echo json_encode($ret);
