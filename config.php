<?php
$default_timezone = 'PRC';
if ($date_default_timezone) {
	date_default_timezone_set($default_timezone);
} else {
	date_default_timezone_set('PRC');
}
define('TP_APP_DIR', dirname(__FILE__));
define('TP_TPL_DIR', dirname(__FILE__).'/templates/');
define('TP_LIB_DIR', dirname(__FILE__).'/includes/');
define('TP_PlG_DIR', dirname(__FILE__).'/plugins/');
define('TP_WGT_DIR', dirname(__FILE__).'/widget/');
define('TP_CAH_DIR', dirname(__FILE__).'/cache/');

define('TP_WEB_URL', '/');
define('TP_RES_URL', '/');

/*$db_config["hostname"]    = "10.10.100.6:8066";    //服务器地址
$db_config["username"]    = "amoeba";        //数据库用户名
$db_config["password"]    = "T4L9TNrNfu81o";        //数据库密码
$db_config["database"]    = "channel";        //数据库名称
$db_config["charset"]     = "utf8";

$db_config2["hostname"]    = "10.10.100.6:8066";    //服务器地址
$db_config2["username"]    = "amoeba";        //数据库用户名
$db_config2["password"]    = "T4L9TNrNfu81o";        //数据库密码
$db_config2["database"]    = "channel2_portal";        //数据库名称
$db_config2["charset"]     = "utf8";*/


$db_config["hostname"]    = "118.145.22.12:3306";    	//服务器地址
$db_config["username"]    = "dfone";        			//数据库用户名
$db_config["password"]    = "wsl_970438";        		//数据库密码
$db_config["database"]    = "channel";        			//数据库名称
$db_config["charset"]     = "utf8";

$db_config2["hostname"]    = "118.145.22.12:3306";    	//服务器地址
$db_config2["username"]    = "dfone";        			//数据库用户名
$db_config2["password"]    = "wsl_970438";        		//数据库密码
$db_config2["database"]    = "channel2_portal";        	//数据库名称
$db_config2["charset"]     = "utf8";


define('NORMAL_REGISTER_MEMBER_FOR_AGENT_ID', 13127);		//普通用户注册指定的店面id号

$tp = array();
$tp['TP_WEB_URL'] = TP_WEB_URL;
$tp['TP_RES_URL'] = TP_RES_URL;

define('HTTPCLIENT_TIMEOUT',		60);
define('AP_INT_DOMAIN',				'http://pc1.d-fone.com:9002'); 						//http://172.16.16.72:10016  http://pcrproxy.appdear.com(http://172.16.16.82:10016)
define('AP_INT_DOMAIN_CONTENT',		'http://118.145.22.12:9001/publish');
define('AP_INT_DOMAIN_TEST',		'http:/pc2.d-fone.com:9005'); 

define('AP_INITINFO_BID',				100006);//业务线id
define('AP_INITINFO_VERSIONCODE',		3000);//客户端版本号
define('AP_INITINFO_TPLCODE',			1000);//模板组code
define('AP_INITINFO_SECTIONVERSION',	0);//模板版本号

//memcache配置
define('MEMCACHE_HOST1', 	'118.145.22.12');
define('MEMCACHE_HOST2', 	'118.145.22.12');
define('MEMCACHE_HOST3', 	'118.145.22.12');
define('MEMCACHE_HOST4', 	'118.145.22.12');
define('MEMCACHE_POST',		'9004');
define('MEMCACHE_TIME',		'300');//单位秒

define('AP_INT_ORDER_DEFAULT',		'0');




//new api
define('AP_INT_GETALLCATE',			AP_INT_DOMAIN . '/pcr/inter/category_all.jsp');				//获得全部分类
define('AP_INT_CATELIST',			AP_INT_DOMAIN . '/pcr/inter/product_simple.jsp');			//获得分类列表
define('AP_INT_RECOMMEND',			AP_INT_DOMAIN . '/pcr/inter/product_recommend.jsp');		//获得推荐应用列表
define('AP_INT_SOFTDETAIL',			AP_INT_DOMAIN . '/pcr/inter/product_simpledetail.jsp');		//获得应用详情
define('AP_INT_PRODUCTTOP',			AP_INT_DOMAIN . '/pcr/inter/product_top.jsp');				//获得应用排行详情
define('AP_INT_SEARCHLIST',			AP_INT_DOMAIN . '/pcr/inter/product_simple.jsp');			//获得搜索列表
define('AP_INT_TOPICLIST',			AP_INT_DOMAIN . '/pcr/inter/topical_tpclist.jsp');			//获得专题列表
define('AP_INT_TOPICDETAIL',		AP_INT_DOMAIN . '/pcr/inter/topical_tpclistby.jsp');		//获得专题列表内容
define('AP_INT_UPDATELIST',			AP_INT_DOMAIN . '/pcr/pc/updatelist.jsp');					//获得软件升级列表内容






define('AP_INT_INIT_INFO',			AP_INT_DOMAIN . '/pcr/pc/initinfo.jsp');				//3.5.1.	初始化服务接口
define('AP_INT_HANSET_MATCH',		AP_INT_DOMAIN . '/pcr/v1/hansetmatch.ap');			//3.5.2.	手机终端适配接口
define('AP_INT_BANNER_LIST',		AP_INT_DOMAIN . '/pcr/v1/bannerlist.ap');			//3.5.6.	banner图片列表接口
define('AP_INT_FACTORY_LIST',		AP_INT_DOMAIN . '/pcr/v1/factorylist.ap');			//3.5.7.	获取手机终端厂商列表接口

define('AP_INT_SHOP_LOGIN',			AP_INT_DOMAIN . '/pcr/pc/shoplogin.jsp');			//3.5.4.	营业厅店员登录接口
define('AP_INT_SHOP_LOGOUT',		AP_INT_DOMAIN . '/pcr/pc/shoplogout.jsp');			//3.5.5.	营业厅店员注销接口

define('AP_INT_MENU_LIST',			AP_INT_DOMAIN . '/pcr/pc/menulist.jsp');			//3.5.9.	根据导航ID获得频道菜单列表接口
define('AP_INT_MENU_CAT_SOFTLIST',	AP_INT_DOMAIN . '/pcr/pc/menucatsoftlist.jsp');		//3.5.10.	根据频道ID获得分类软件混排列表接口（menucatsoftlist）
define('AP_INT_MENU_CAT_SOFTLIST2',	AP_INT_DOMAIN . '/pcr/pc/menucatsoftlist2.jsp');	//3.5.10.	根据频道ID获得分类软件混排列表接口（menucatsoftlist）
define('AP_INT_COLUMN_LIST',		AP_INT_DOMAIN . '/pcr/pc/columnlist.jsp');			//3.5.11.	根据菜单频道ID获得栏目列表接口
define('AP_INT_COLUMN_CATSOFT_LIST',AP_INT_DOMAIN . '/pcr/pc/columncatsoftlist.jsp');	//3.5.12.	根据栏目ID获得分类/软件混排列表接口

define('AP_INT_BOARD_LIST',			AP_INT_DOMAIN . '/pcr/pc/boradlist.jsp'); 			//3.5.13.	根据栏目ID获得榜单列表
define('AP_INT_BOARD_SOFTLIST',		AP_INT_DOMAIN . '/pcr/pc/boradsoftlist.jsp');		//3.5.14.	根据榜单ID获得软件列表

define('AP_INT_CAT_LIST',			AP_INT_DOMAIN . '/pcr/pc/catlist.jsp'); 			//3.5.15.	获得分类列表
define('AP_INT_CAT_SOFTLIST',		AP_INT_DOMAIN . '/pcr/pc/catsoftlist.jsp'); 		//3.5.16.	根据分类ID获得软件列表
define('AP_INT_SHOP_SOFTLIST',		AP_INT_DOMAIN . '/pcr/pc/shopsoftlist.jsp'); 		//3.5.17.	零售店软件推荐接口
define('AP_INT_SOFT_INFO',			AP_INT_DOMAIN . '/pcr/pc/softinfo.jsp'); 			//3.5.18.	软件详情页接口
define('AP_INT_CATALOG_INFO',		AP_INT_DOMAIN . '/pcr/pc/cataloginfo.jsp'); 		//			根据分类ID获得软件分类名称

define('AP_INT_C_MUSICLIST',		AP_INT_DOMAIN . '/pcr/pc/cmusiclist.jsp'); 			//3.5.19.	根据栏目ID音乐歌曲推荐列表
define('AP_INT_C_SINGERLIST',		AP_INT_DOMAIN . '/pcr/pc/csingerlist.jsp'); 		//3.5.20.	根据栏目ID获得歌手列表
define('AP_INT_S_MUSICLIST',		AP_INT_DOMAIN . '/pcr/pc/smusiclist.jsp'); 			//3.5.21.	根据歌手ID获得歌曲列表接口（smusiclist）
define('AP_INT_C_ALBUMLIST',		AP_INT_DOMAIN . '/pcr/v1/calbumlist.ap'); 			//3.5.21.	根据栏目ID获得专辑列表
define('AP_INT_BORAD_MUSICLIST',	AP_INT_DOMAIN . '/pcr/pc/boradmusiclist.jsp'); 		//3.5.23.	根据榜单ID获得音乐列表
define('AP_INT_CODE_SINGERLIST',	AP_INT_DOMAIN . '/pcr/v1/codesingerlist.ap');  		//3.5.23.	根据首字母获得歌手列表
define('AP_INT_ALBUM_LIST',			AP_INT_DOMAIN . '/pcr/pc/albumlist.jsp');			//3.5.24.	获得专辑列表
define('AP_INT_A_MUSICLIST',		AP_INT_DOMAIN . '/pcr/v1/amusiclist.ap');  			//3.5.25.	根据专辑ID获得歌曲列表接口
define('AP_INT_C_VIDEOLIST',		AP_INT_DOMAIN . '/pcr/v1/cvideolist.ap');  			//3.5.26.	根据栏目ID获得视频列表
define('AP_INT_CAT_VIDEOLIST',		AP_INT_DOMAIN . '/pcr/v1/catvideolist.ap');  		//3.5.27.	根据视频分类获得视频列表接口
define('AP_INT_C_BOOKLIST',			AP_INT_DOMAIN . '/pcr/pc/cbooklist.jsp');    		//3.5.28.	根据栏目ID获得电子书列表
define('AP_INT_CAT_BOOKLIST',		AP_INT_DOMAIN . '/pcr/pc/catbooklist.jsp');   		//3.5.31.	根据分类ID获得电子书列表

define('AP_INT_AUTHOR_BOOKLIST',	AP_INT_DOMAIN . '/pcr/pc/authorbooklist.jsp'); 		//3.5.30.	根据作者ID获得电子书列表（authorbooklist）
define('AP_INT_C_THEMELIST',		AP_INT_DOMAIN . '/pcr/pc/cthemelist.jsp');   		//3.5.30.	根据栏目ID获得主题图片列表
define('AP_INT_CAT_THEMELIST',		AP_INT_DOMAIN . '/pcr/pc/catthemelist.ap');  		//3.5.31.	根据分类ID获得主题图片列表
define('AP_INT_CHECK_NAME',			AP_INT_DOMAIN . '/pcr/pc/checkname.jsp');			//3.5.35.	判断用户名是否存在接口（checkname）
define('AP_INT_REGISTER',			AP_INT_DOMAIN . '/pcr/pc/register.jsp');			//3.5.34.	用户标准注册接口（register） 

define('AP_INT_USER_LOGIN',			AP_INT_DOMAIN . '/pcr/pc/userlogin.jsp');			//3.5.36.	用户个人登录接口（userlogin）
define('AP_INT_USER_PROFILE',		AP_INT_DOMAIN . '/pcr/pc/userprofile.jsp'); 		//3.5.37.	用户个人信息接口（userprofile）
define('AP_INT_UPDATE_PASSWD',		AP_INT_DOMAIN . '/pcr/pc/updatepasswd.jsp'); 		//3.5.38.	修改个人密码（updatepasswd）
define('AP_INT_FIND_PASSWD',		AP_INT_DOMAIN . '/pcr/pc/findpasswd.jsp'); 			//3.6.39.	找回登录密码(findpasswd) 
define('AP_INT_CHARGE_BYACARD',		AP_INT_DOMAIN . '/pcr/v1/chargebyacard.ap');		//3.5.38.	通过储值卡充值接口
define('AP_INT_ACCOUNT_LIST',		AP_INT_DOMAIN . '/pcr/v1/accountlist.ap');			//3.5.39.	用户个人账单列表接口
define('AP_INT_POINT_LIST',			AP_INT_DOMAIN . '/pcr/v1/pointlist.ap'); 			//3.5.40.	积分记录明细列表（pointlist）-暂不适用

define('AP_INT_CARD_QUERY',			AP_INT_DOMAIN . '/pcr/v1/cardquery.ap'); 			//3.5.41.	储值卡余额查询接口
define('AP_INT_BUY_CARDLOG',		AP_INT_DOMAIN . '/pcr/v1/buycardlog.ap');			//3.5.42.	购卡日志接口接口
define('AP_INT_BIND_USER',			AP_INT_DOMAIN . '/pcr/v1/binduser.ap'); 			//3.5.43.	会员卡身份绑定接口
define('AP_INT_PAY_BYREMAIN',		AP_INT_DOMAIN . '/pcr/v1/paybyremain.ap'); 			//3.5.44.	爱皮虚拟币支付接口
define('AP_INT_COMPLAIN',			AP_INT_DOMAIN . '/pcr/v1/complain.ap'); 			//3.5.45.	投诉处理接口
define('AP_INT_SOFT_PERMISSION',	AP_INT_DOMAIN . '/pcr/v1/softpermission.ap');		//3.5.46.	软件访问资源权限列表接口
define('AP_INT_CONFIRM_MESSAGE',	AP_INT_DOMAIN . '/pcr/v1/confirmmessage.ap'); 		//3.5.47.	用户确认已经读取某条消息
define('AP_INT_USER_DISCOUNT',		AP_INT_DOMAIN . '/pcr/pc/userdiscount.jsp');		//3.5.47.	会员身份卡折扣验证(userdiscount) 
define('AP_INT_RECOMMENT_LIST',		AP_INT_DOMAIN . '/pcr/v1/recommentlist.ap'); 		//3.5.48.	推荐列表接口

define('AP_INT_PAY_BY_SHOP',		AP_INT_DOMAIN . '/pcr/pc/paybyshop.jsp'); 			//3.5.48.	零售店店员支付接口(paybyshop)
define('AP_INT_PAY_BY_REMAIN',		AP_INT_DOMAIN . '/pcr/pc/paybyremain.jsp'); 		//3.5.49.	用户余额支付接口(paybyremain)
define('AP_INT_PAY_BY_CARD',		AP_INT_DOMAIN . '/pcr/pc/paybyapcard.jsp'); 		//3.5.50.	会员卡支付接口（paybyapcard）

define('AP_INT_SINGER_INFO',		AP_INT_DOMAIN . '/pcr/pc/singerinfo.jsp'); 			//3.5.53.	根据歌手ID获得歌手信息接口（singerinfo）	
define('AP_INT_SONG_INFO',			AP_INT_DOMAIN . '/pcr/pc/songinfo.jsp'); 			//3.5.54.	根据歌曲ID获得歌曲信息接口（songinfo）	
define('AP_INT_BOOK_INFO',			AP_INT_DOMAIN . '/pcr/pc/bookinfo.jsp'); 			//3.5.56.	根据电子书ID获得电子书信息接口（bookinfo）	
define('AP_INT_AUTHOR_INFO',		AP_INT_DOMAIN . '/pcr/pc/authorinfo.jsp'); 			//3.5.59.	根据电子书作者ID获得作者信息接口（authorinfo）

define('AP_INT_COLUMN_CAT_LIST',	AP_INT_DOMAIN . '/pcr/pc/columncatlist.jsp'); 		//新增	根据栏目ID获得分类接口（columncatlist）

define('AP_INT_SEARCH_BOOK',		AP_INT_DOMAIN . '/pcr/pc/searchbook.jsp'); 			//3.5.60.	电子书搜索接口（searchbook）
define('AP_INT_SEARCH_APP_SOFT',	AP_INT_DOMAIN . '/pcr/pc/searchappsoft.jsp'); 		//3.5.61.	应用软件搜索接口（searchappsoft）
define('AP_INT_SEARCH_GAME_SOFT',	AP_INT_DOMAIN . '/pcr/pc/searchgamesoft.jsp'); 		//3.5.62.	游戏软件搜索接口（searchgamesoft）
define('AP_INT_SEARCH_THEME',		AP_INT_DOMAIN . '/pcr/pc/searchtheme.jsp'); 		//3.5.63.	主题图片搜索接口（searctheme）


define('AP_INT_CREATE_ORDER',		AP_INT_DOMAIN . '/pcr/pc/createorder.jsp'); 		//3.5.46.	订单生成接口(createorder)  //shan-----pcr/pay/
define('AP_INT_APPINFO',			AP_INT_DOMAIN . '/pcr/pc/appinfo.jsp'); 			// 根据appid或者uid获取软件详情

define('AP_INT_BACKUP_APP', 		AP_INT_DOMAIN . '/pcr/pc/backupapp.jsp');			// 备份应用				
define('AP_INT_BACKUP_CONTACT', 	AP_INT_DOMAIN . '/pcr/pc/backupcontact.jsp');		// 备份通信录
define('AP_INT_BACKUP_SMS', 		AP_INT_DOMAIN . '/pcr/pc/backupsms.jsp');			// 备份短信
define('AP_INT_RESTORE_APP', 		AP_INT_DOMAIN . '/pcr/pc/restoreapp.jsp');			// 恢复应用		
define('AP_INT_RESTORE_CONTACT',	AP_INT_DOMAIN . '/pcr/pc/recoverallcontact.jsp');	// 恢复联系人
define('AP_INT_RESTORE_SMS', 		AP_INT_DOMAIN . '/pcr/pc/recoversms.jsp');			// 恢复短信
define('AP_INT_DEL_CONTACT_LIST',	AP_INT_DOMAIN . '/pcr/pc/deletecontactlist.jsp');	//批量删除云服务端备份通讯录

define('AP_INT_ACTIVE_CARD', 		AP_INT_DOMAIN . '/pcr/pc/activecard.jsp'); 			//3.5.72.	激活会员卡（activecard）
define('AP_INT_ACTIVE_ACCOUNT', 	AP_INT_DOMAIN . '/pcr/pc/activeaccount.jsp'); 		//3.5.71.	激活码（activeaccount）
define('AP_INT_CAT_MUSIC_LIST',		AP_INT_DOMAIN . '/pcr/pc/catmusiclist.jsp');		//3.5.73.	根据分类ID获得音乐列表(catmusiclist)
define('AP_INT_CHECK_CARD',			AP_INT_DOMAIN . '/pcr/pc/checkcard.jsp'); 			//3.5.74.	校验会员卡（checkcard）
define('AP_INT_SEARCH_MUSIC',		AP_INT_DOMAIN . '/pcr/pc/searchmusic.jsp'); 		//3.5.74.	音乐搜索接口（searchmusic）
define('AP_INT_GET_SALES_INFO', 	AP_INT_DOMAIN . '/pcr/pc/getsalesinfo2.jsp'); 		//			获取登录店员的信息（getsalesinfo2）

define('AP_INT_CLOUD_INFO',						AP_INT_DOMAIN . '/pcr/pc/cloudinfo.jsp'); 						//3.6.63.	获得用户的云备份的账户相关信息(cloudinfo)
define('AP_INT_CLOUD_CHECK_CODE',				AP_INT_DOMAIN . '/pcr/pc/cloudcheckcode.jsp'); 					//3.6.75.	发送云存储手机验证码接口（cloudcheckcode）
define('AP_INT_CHECK_CLOUD_MOBILE',				AP_INT_DOMAIN . '/pcr/pc/checkcloudmobile.jsp');			 	//3.6.76.	校验云存储手机验证码接口（checkcloudmobile）

define('AP_INT_PASSWD_CHECK_CODE',				AP_INT_DOMAIN . '/pcr/pc/passwdcheckcode.jsp');				 	//3.6.77.	发送找回密码手机验证码（passwdcheckcode）
define('AP_INT_REGISTER_CHECK_CODE',			AP_INT_DOMAIN . '/pcr/pc/registercheckcode.jsp'); 				//3.6.78.	发送手机号注册用户验证码（registercheckcode）
define('AP_INT_MOBILE_REGISTER',				AP_INT_DOMAIN . '/pcr/pc/mobileregister.jsp'); 					//3.6.79.	校验用户手机注册验证码并注册（mobileregister）

define('AP_INT_ADD_BUYCAR',						AP_INT_DOMAIN . '/pcr/pc/addbuycar.jsp'); 						//3.6.80.	添加购物车(addbuycar)
define('AP_INT_GETIMSI',						AP_INT_DOMAIN . '/pcr/pc/getimsi.jsp'); 						//3.6.80.	获取手机卡imsi码(getimsi)
define('AP_INT_SEARCH_SOFT',					AP_INT_DOMAIN . '/pcr/pc/searchsoft.jsp'); 						//3.6.84.	软件搜索接口（searchsoft）
define('AP_INT_SEARCH_AUTO_COMPLETE',			AP_INT_DOMAIN . '/pcr/pc/autolist.jsp'); 						//3.6.117.	软件搜索接口（searchsoft）
define('AP_INT_GETACCOUNT_BYTERMCODE',			AP_INT_DOMAIN . '/pcr/pc/getaccountbytermcode.jsp');			//3.6.86.获得会员卡账户（getaccountbytermcode）
define('AP_INT_PAY_BY_CARD_OR_MOBILE',			AP_INT_DOMAIN . '/pcr/pc/paybycard.jsp'); 						//3.6.87.	会员卡支付接口（paybycard）或者手机号
define('AP_INT_RECOVER_NOTICE',					AP_INT_DOMAIN . '/pcr/pc/recovernotice.jsp'); 					//3.6.88.	短信/通讯录还原统计接口
define('AP_INT_DOWNALL_LOG',					AP_INT_DOMAIN . '/pcr/pc/downalllog.jsp'); 						//3.6.132.	精品下载中下载全部链接的统计接口

define('AP_INT_PACKAGE_LIST',					AP_INT_DOMAIN . '/pcr/pc/packagelist.jsp'); 					//3.6.91.	根据菜单频道ID获得套餐列表接口（packagelist）
define('AP_INT_PACKAGE_INFO',					AP_INT_DOMAIN . '/pcr/pc/packageinfo.jsp'); 					//3.6.92.	套餐详情页接口（packageinfo）
define('AP_INT_COLUMNCAT_BOOKLIST',				AP_INT_DOMAIN . '/pcr/pc/columncatebooklist.jsp'); 	    		//3.6.95.	根据栏目ID获得分类/电子书混排列表接口（columncatebooklist）
define('AP_INT_SEND_SOFT_MESSAGE',				AP_INT_DOMAIN . '/pcr/pc/sendsoftmessage.jsp');					//3.6.97.	推送软件信息到手机（sendsoftmessage）
define('AP_INT_GET_CARD_INFO',					AP_INT_DOMAIN . '/pcr/pc/getcardinfo.jsp');						//3.6.98.	获取爱皮下载卡信息（getcardinfo）

define('AP_INT_GET_SALSES_INFO',				AP_INT_DOMAIN . '/pcr/pc/getsalesinfo.jsp');					//	获取店员的积分信息（getsalesinfo）
define('AP_INT_GET_SALSESPOINT_LIST',			AP_INT_DOMAIN . '/pcr/pc/getsalespointlist.jsp');				//3.6.100.	获取店员的积分明细（getsalespointlist）
define('AP_INT_GET_SALSESRANKING',				AP_INT_DOMAIN . '/pcr/pc/getsalsetranking.jsp');				//3.6.101.	店员积分排行榜（getsalsetranking）

define('AP_INT_GET_SHOP_COLLECTION',			AP_INT_DOMAIN . '/pcr/pc/shopcollection.jsp');					//3.6.105.	营业厅店员收藏列表接口(shopcollection)
define('AP_INT_ADD_SHOP_COLLECTION',			AP_INT_DOMAIN . '/pcr/pc/shopaddcollection.jsp');				//3.6.106.	店员添加收藏(shopaddcollection)
define('AP_INT_DEL_SHOP_COLLECTION',			AP_INT_DOMAIN . '/pcr/pc/shopdelcollection.jsp');				//3.6.107.	店员删除收藏(shopdelcollection)

define('AP_INT_TASK_ALL',						AP_INT_DOMAIN . '/pcr/pc/taskall.jsp');							//3.6.121	获取当天任务列表接口（taskall）
define('AP_INT_TASK_AWARD',						AP_INT_DOMAIN . '/pcr/pc/taskaward.jsp');						//3.6.122	去领奖接口（taskaward）
define('AP_INT_TASK_LIST',						AP_INT_DOMAIN . '/pcr/pc/tasklist.jsp');						//3.6.123	获取任务列表接口（tasklist）
define('AP_INT_COINS_TOP',						AP_INT_DOMAIN . '/pcr/pc/coinstop.jsp');						//3.6.124	获取金币排行接口（coinstop）
define('AP_INT_GET_TOTAL_COIN',					AP_INT_DOMAIN . '/pcr/pc/gettotalcoin.jsp');					//3.6.127	获取金币总数接口（gettotalcoin）
define('AP_INT_GET_COIN_SCALE',					'http://channel.appdear.com/apis/api_goldcoinexchange.json');					//获取金币兑换汇率

define('AP_INT_MENU_SINGER_LIST', 		'singer');					//艺人列表菜单
define('AP_INT_MENU_MUSIC_SONG_DEFAULT','music_song');				//音乐歌曲首页---热门单曲默认栏目
define('AP_INT_MENU_MUSIC_REC_DEFAULT', 'music_rec');				//音乐歌曲首页---右侧推荐默认栏目
define('AP_INT_MENU_SONG_TOP_DEFAULT',	'song_top_new_100'); 		//音乐榜单---默认栏目---新歌TOP100
define('AP_INT_MENU_SINGER_DEFAULT',	'singer_list_chinese');		//艺人列表---默认栏目---华语艺人

define('AP_INT_MENU_VIDEO_DEFAULT',		'video_rec'); 				//视频下载排行默认栏目
define('AP_INT_MENU_BOOK_DEFAULT',		'book_rec'); 				//电子书下载排行默认栏目
define('AP_INT_MENU_THEME_DEFAULT',		'theme_rec'); 				//主题图片下载排行默认栏目

define('AP_INT_CATEGORY_TYPE_APP', 			'1');						//分类类型值---应用软件
define('AP_INT_CATEGORY_TYPE_GAME', 		'2');						//分类类型值---游戏
define('AP_INT_CATEGORY_TYPE_MUSIC', 		'3');						//分类类型值---音乐
define('AP_INT_CATEGORY_TYPE_VIDEO', 		'4');						//分类类型值---视频
define('AP_INT_CATEGORY_TYPE_BOOK', 		'5');						//分类类型值---电子书

define('AP_INT_PACKAGE_TYPE_BOOK', 			'2');						//电子书促销包类型值
define('AP_INT_CATEGORY_TYPE_THEME', 		'100035');					//分类类型值---主题
define('AP_INT_CATEGORY_TYPE_THEMESOFT', 	'20000');					//新分类类型值---主题11.12.31

define('AP_INT_CATEGORY_TYPE_MUSIC_DEFAULT_ID',		'100023');		//音乐分类默认ID
define('AP_INT_CATEGORY_TYPE_VIDEO_DEFAULT_ID',		'100023');		//视频分类默认ID
define('AP_INT_CATEGORY_TYPE_THEME_DEFAULT_ID',		'100023');		//主题分类默认ID
define('AP_INT_CATEGORY_TYPE_THEMESOFT_DEFAULT_ID',	'100087');		//主题分类默认ID

define('AP_INT_MENUCODE_TYPE_START',			'201');				//新机管理--模板ID
define('AP_INT_MENUCODE_TYPE_START_FEATHER',			'203');		//装机必备--模板ID
define('AP_INT_MENUCODE_TYPE_START_FEATHER_NECESSARY',	'204');		//装机必备>>必备软件--模板ID

define('AP_INT_MENUCODE_TYPE_SEARCH', 					'801'); 	//搜索--模板ID

define('AP_INT_MENUCODE_APPSTORE', 					'301'); 		//应用商城--模板ID
define('AP_INT_MENUCODE_TYPE_FEA', 					'302'); 		//精品推荐--模板ID
define('AP_INT_MENUCODE_TYPE_FEA_FREE', 			'303'); 		//精品推荐--免费礼包--模板ID
define('AP_INT_MENUCODE_TYPE_FEA_SOFT',				'304'); 		//精品推荐--精品应用软件--模板ID
define('AP_INT_MENUCODE_TYPE_FEA_GAME',				'305'); 		//精品推荐--精品休闲游戏--模板ID


define('AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD',			'306'); 	//下载排行--模板ID
define('AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_APP',		'307'); 	//下载排行--应用软件--模板ID
define('AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_GAME',	'308'); 	//下载排行--休闲游戏--模板ID

define('AP_INT_MENUCODE_TYPE_NEW', 					'315'); 	//新品推荐--模板ID
define('AP_INT_MENUCODE_TYPE_NEW_APP', 				'309'); 	//新品推荐--应用软件--模板ID
define('AP_INT_MENUCODE_TYPE_NEW_GAME', 			'310'); 	//新品推荐--休闲游戏--模板ID

define('AP_INT_MENUCODE_TYPE_APP', 					'318'); 	//应用软件--模板ID
define('AP_INT_MENUCODE_TYPE_APP_CAT',				'312'); 	//应用软件--分类列表--模板ID
define('AP_INT_MENUCODE_TYPE_APP_DOWNLOAD_TOP', 	'314');     //应用软件--软件下载排行--模板ID
define('AP_INT_MENUCODE_TYPE_APP_SHOP_REC', 		'316'); 	//应用软件--本店推荐--模板ID

define('AP_INT_MENUCODE_TYPE_GAME', 				'328'); 	//休闲游戏--模板ID
define('AP_INT_MENUCODE_TYPE_GAME_CAT', 			'322'); 	//休闲游戏--分类列表--模板ID
define('AP_INT_MENUCODE_TYPE_GAME_DOWNLOAD_TOP', 	'324');     //休闲游戏--游戏下载排行--模板ID
define('AP_INT_MENUCODE_TYPE_GAME_SHOP_REC', 		'325'); 	//休闲游戏--本店推荐--模板ID

define('AP_INT_MENUCODE_TYPE_MUSIC', 					'401'); //音乐歌曲--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_INDEX', 				'402'); //音乐歌曲首页--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_CAT', 				'403'); //音乐歌曲分类列表--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_HOT_MUSIC',			'404'); //音乐歌曲首页--热门单曲--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_OLDSONG',			'415'); //音乐歌曲首页--经典老歌--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_INDEX_MUSIC_TOP',	'406'); //音乐歌曲首页--音乐下载排行--模板ID

define('AP_INT_MENUCODE_TYPE_MUSIC_BRAND',				'409'); //音乐歌曲音乐榜单--模板ID
define('AP_INT_MENUCODE_TYPE_MUSIC_BRAND_MUSICLIST',	'410'); //音乐歌曲音乐榜单--歌曲榜单列表-模板ID


define('AP_INT_MENUCODE_TYPE_VIDEO', 					'501'); //视频短片--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK', 					'601'); //电子书籍--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_INDEX', 				'book_index'); //电子书籍--首页（自定义值）--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT', 				'602'); //电子书籍分类列表--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_HOT', 				'603'); //电子书籍热门推荐--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_TOP_DOWNLOAD', 		'604'); //电子书籍电子书榜单--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_SHOP_REC', 			'605'); //电子书籍本店推荐--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_DETAIL', 				'606'); //电子书籍电子书详情--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_AUTHOR_DETAIL', 		'608'); //电子书籍电子书作者详情--模板ID

define('AP_INT_MENUCODE_TYPE_BOOK_PACKAGE', 			'609'); //电子书籍首页-古典书籍促销包--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_1', 		'610'); //电子书籍首页-首页推荐混排--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_2', 		'611'); //电子书籍首页-小说馆混排--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_3', 		'612'); //电子书籍首页-社科馆混排--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_4', 		'613'); //电子书籍首页-生活馆混排--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_5', 		'614'); //电子书籍首页-社科馆混排--模板ID


define('AP_INT_MENUCODE_TYPE_BOOK_CAT_1', 				'615'); //电子书籍分类列表-小说馆--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_2', 				'616'); //电子书籍分类列表-社科馆--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_3', 				'617'); //电子书籍分类列表-生活馆--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_CAT_4', 				'618'); //电子书籍分类列表-社科馆--模板ID

define('AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_1', 		'619'); //电子书籍首页-首页推荐电子书1--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_2', 		'620'); //电子书籍首页-首页推荐电子书2--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_3', 		'621'); //电子书籍首页-首页推荐电子书3--模板ID
define('AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_4', 		'622'); //电子书籍首页-详情页精彩推荐--模板ID

define('AP_INT_MENUCODE_TYPE_TOOLS', 				'200087'); 		//常用工具--模板ID
define('AP_INT_MENUCODE_TYPE_TOOLS2', 				'200088'); 		//常用工具--模板ID2



define('AP_INT_MENUCODE_TYPE_THEME', 					'701'); 		//主题图片--模板ID
define('AP_INT_MENUCODE_TYPE_THEMESOFT', 				'701'); 		//新主题图片--模板ID
define('AP_INT_MENUCODE_TYPE_THEMESOFT_CAT',			'20000');		//新主题图片二级分类
define('AP_INT_MENUCODE_TYPE_THEMESOFT_DOWNLOAD_TOP', 	'20001');   	//新主题图片--软件下载排行--模板ID
define('AP_INT_MENUCODE_TYPE_THEMESOFT_SHOP_REC', 		'20002'); 		//新主题图片--本店推荐--模板ID


define('AP_INT_SEARCH_TYPE_APP', 				'1'); 			//搜索类型--应用软件
define('AP_INT_SEARCH_TYPE_GAME', 				'2'); 			//搜索类型--休闲游戏
define('AP_INT_SEARCH_TYPE_MUSIC', 				'3'); 			//搜索类型--音乐歌曲
define('AP_INT_SEARCH_TYPE_VIDEO', 				'4'); 			//搜索类型--视频短片
define('AP_INT_SEARCH_TYPE_BOOK', 				'5'); 			//搜索类型--电子书籍
define('AP_INT_SEARCH_TYPE_THEME', 				'6'); 			//搜索类型--主题图片
define('AP_INT_SEARCH_TYPE_THEMESOFT', 			'7'); 			//新搜索类型--主题图片

define('AP_INT_SEARCH_TYPE_NAME_APP', 			'软件游戏');		//搜索类型名称--应用软件
define('AP_INT_SEARCH_TYPE_NAME_GAME', 			'休闲游戏');		//搜索类型名称--休闲游戏
define('AP_INT_SEARCH_TYPE_NAME_MUSIC', 		'音乐歌曲');		//搜索类型名称--音乐歌曲
define('AP_INT_SEARCH_TYPE_NAME_VIDEO', 		'视频短片');		//搜索类型名称--视频短片
define('AP_INT_SEARCH_TYPE_NAME_BOOK', 			'电子书籍');		//搜索类型名称--电子书籍
define('AP_INT_SEARCH_TYPE_NAME_THEME', 		'主题图片');		//搜索类型名称--主题图片
define('AP_INT_SEARCH_TYPE_NAME_THEMESOFT', 	'主题图片');		//新搜索类型名称--主题图片


$ap_int = array();

$ap_int['AP_INT_DOMAIN'] = AP_INT_DOMAIN;
$ap_int['AP_INT_DOMAIN_CONTENT'] = AP_INT_DOMAIN_CONTENT;
//$ap_int['AP_INT_MENU_START_ID'] =AP_INT_MENU_START_ID;
//$ap_int['AP_INT_MENU_APPSOTRE_ID'] = AP_INT_MENU_APPSOTRE_ID;
$ap_int['AP_INT_ORDER_DEFAULT'] = AP_INT_ORDER_DEFAULT;

$ap_int['AP_INT_MENU_SINGER_LIST'] = AP_INT_MENU_SINGER_LIST;

$ap_int['AP_INT_MENU_MUSIC_SONG_DEFAULT'] = AP_INT_MENU_MUSIC_SONG_DEFAULT;
$ap_int['AP_INT_MENU_MUSIC_REC_DEFAULT'] = AP_INT_MENU_MUSIC_REC_DEFAULT;

$ap_int['AP_INT_MENU_SONG_TOP_DEFAULT'] = AP_INT_MENU_SONG_TOP_DEFAULT;
$ap_int['AP_INT_MENU_SINGER_DEFAULT'] = AP_INT_MENU_SINGER_DEFAULT;

$ap_int['AP_INT_MENU_VIDEO_DEFAULT'] = AP_INT_MENU_VIDEO_DEFAULT;
$ap_int['AP_INT_MENU_BOOK_DEFAULT'] = AP_INT_MENU_BOOK_DEFAULT;
$ap_int['AP_INT_MENU_THEME_DEFAULT'] = AP_INT_MENU_THEME_DEFAULT;


$ap_int['AP_INT_CATEGORY_TYPE_APP'] = AP_INT_CATEGORY_TYPE_APP;
$ap_int['AP_INT_CATEGORY_TYPE_GAME'] = AP_INT_CATEGORY_TYPE_GAME;
$ap_int['AP_INT_CATEGORY_TYPE_MUSIC'] = AP_INT_CATEGORY_TYPE_MUSIC;
$ap_int['AP_INT_CATEGORY_TYPE_VIDEO'] = AP_INT_CATEGORY_TYPE_VIDEO;
$ap_int['AP_INT_CATEGORY_TYPE_BOOK'] = AP_INT_CATEGORY_TYPE_BOOK;
$ap_int['AP_INT_CATEGORY_TYPE_THEME'] = AP_INT_CATEGORY_TYPE_THEME;

$ap_int['AP_INT_PACKAGE_TYPE_BOOK'] = AP_INT_PACKAGE_TYPE_BOOK;

$ap_int['AP_INT_CATEGORY_TYPE_MUSIC_DEFAULT_ID'] = AP_INT_CATEGORY_TYPE_MUSIC_DEFAULT_ID;
$ap_int['AP_INT_CATEGORY_TYPE_VIDEO_DEFAULT_ID'] = AP_INT_CATEGORY_TYPE_VIDEO_DEFAULT_ID;
$ap_int['AP_INT_CATEGORY_TYPE_THEME_DEFAULT_ID'] = AP_INT_CATEGORY_TYPE_THEME_DEFAULT_ID;
$ap_int['AP_INT_CATEGORY_TYPE_THEMESOFT_DEFAULT_ID'] = AP_INT_CATEGORY_TYPE_THEMESOFT_DEFAULT_ID;

$ap_int['AP_INT_MENUCODE_TYPE_START_FEATHER'] = AP_INT_MENUCODE_TYPE_START_FEATHER;
$ap_int['AP_INT_MENUCODE_TYPE_START_FEATHER_NECESSARY'] = AP_INT_MENUCODE_TYPE_START_FEATHER_NECESSARY;

$ap_int['AP_INT_MENUCODE_TYPE_SEARCH'] = AP_INT_MENUCODE_TYPE_SEARCH;

$ap_int['AP_INT_MENUCODE_TYPE_FEA'] = AP_INT_MENUCODE_TYPE_FEA;
$ap_int['AP_INT_MENUCODE_TYPE_FEA_FREE'] = AP_INT_MENUCODE_TYPE_FEA_FREE;
$ap_int['AP_INT_MENUCODE_TYPE_FEA_SOFT'] = AP_INT_MENUCODE_TYPE_FEA_SOFT;
$ap_int['AP_INT_MENUCODE_TYPE_FEA_GAME'] = AP_INT_MENUCODE_TYPE_FEA_GAME;

$ap_int['AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD'] = AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD;
$ap_int['AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_APP'] = AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_APP;
$ap_int['AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_GAME']= AP_INT_MENUCODE_TYPE_TOP_DOWNLOAD_GAME;


$ap_int['AP_INT_MENUCODE_TYPE_NEW'] = AP_INT_MENUCODE_TYPE_NEW;
$ap_int['AP_INT_MENUCODE_TYPE_NEW_APP'] = AP_INT_MENUCODE_TYPE_NEW_APP;
$ap_int['AP_INT_MENUCODE_TYPE_NEW_GAME'] = AP_INT_MENUCODE_TYPE_NEW_GAME;

$ap_int['AP_INT_MENUCODE_TYPE_APP'] = AP_INT_MENUCODE_TYPE_APP;
$ap_int['AP_INT_MENUCODE_TYPE_APP_CAT'] = AP_INT_MENUCODE_TYPE_APP_CAT;
$ap_int['AP_INT_MENUCODE_TYPE_APP_DOWNLOAD_TOP'] = AP_INT_MENUCODE_TYPE_APP_DOWNLOAD_TOP;
$ap_int['AP_INT_MENUCODE_TYPE_APP_SHOP_REC'] = AP_INT_MENUCODE_TYPE_APP_SHOP_REC;

$ap_int['AP_INT_MENUCODE_TYPE_GAME'] = AP_INT_MENUCODE_TYPE_GAME;
$ap_int['AP_INT_MENUCODE_TYPE_GAME_CAT'] = AP_INT_MENUCODE_TYPE_GAME_CAT;
$ap_int['AP_INT_MENUCODE_TYPE_GAME_DOWNLOAD_TOP'] = AP_INT_MENUCODE_TYPE_GAME_DOWNLOAD_TOP;
$ap_int['AP_INT_MENUCODE_TYPE_GAME_SHOP_REC'] = AP_INT_MENUCODE_TYPE_GAME_SHOP_REC;

$ap_int['AP_INT_MENUCODE_TYPE_MUSIC'] = AP_INT_MENUCODE_TYPE_MUSIC;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_INDEX'] = AP_INT_MENUCODE_TYPE_MUSIC_INDEX;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_CAT'] = AP_INT_MENUCODE_TYPE_MUSIC_CAT;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_HOT_MUSIC'] = AP_INT_MENUCODE_TYPE_MUSIC_HOT_MUSIC;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_OLDSONG'] = AP_INT_MENUCODE_TYPE_MUSIC_OLDSONG;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_HOT_SINGER'] = AP_INT_MENUCODE_TYPE_MUSIC_HOT_SINGER;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_INDEX_MUSIC_TOP'] = AP_INT_MENUCODE_TYPE_MUSIC_INDEX_MUSIC_TOP;

$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_BRAND'] = AP_INT_MENUCODE_TYPE_MUSIC_BRAND;
$ap_int['AP_INT_MENUCODE_TYPE_MUSIC_BRAND_MUSICLIST'] = AP_INT_MENUCODE_TYPE_MUSIC_BRAND_MUSICLIST;

$ap_int['AP_INT_MENUCODE_TYPE_VIDEO'] = AP_INT_MENUCODE_TYPE_VIDEO;

$ap_int['AP_INT_MENUCODE_TYPE_BOOK']				= AP_INT_MENUCODE_TYPE_BOOK;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT']			= AP_INT_MENUCODE_TYPE_BOOK_CAT;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_INDEX']			= AP_INT_MENUCODE_TYPE_BOOK_INDEX;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_HOT']			= AP_INT_MENUCODE_TYPE_BOOK_HOT;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_TOP_DOWNLOAD']	= AP_INT_MENUCODE_TYPE_BOOK_TOP_DOWNLOAD;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_SHOP_REC']		= AP_INT_MENUCODE_TYPE_BOOK_SHOP_REC;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_DETAIL']			= AP_INT_MENUCODE_TYPE_BOOK_DETAIL;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_AUTHOR_DETAIL']	= AP_INT_MENUCODE_TYPE_BOOK_AUTHOR_DETAIL;

$ap_int['AP_INT_MENUCODE_TYPE_BOOK_PACKAGE']				= AP_INT_MENUCODE_TYPE_BOOK_PACKAGE;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_1']			= AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_1;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_2']			= AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_2;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_3']			= AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_3;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_4']			= AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_4;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_5']			= AP_INT_MENUCODE_TYPE_BOOK_CAT_AND_BOOK_5;

$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_1']					= AP_INT_MENUCODE_TYPE_BOOK_CAT_1;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_2']					= AP_INT_MENUCODE_TYPE_BOOK_CAT_2;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_3']					= AP_INT_MENUCODE_TYPE_BOOK_CAT_3;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_CAT_4']					= AP_INT_MENUCODE_TYPE_BOOK_CAT_4;

$ap_int['AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_1']			= AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_1;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_2']			= AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_2;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_3']			= AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_3;
$ap_int['AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_4']			= AP_INT_MENUCODE_TYPE_BOOK_COLUMNLIST_4;

$ap_int['AP_INT_MENUCODE_TYPE_TOOLS']			= AP_INT_MENUCODE_TYPE_TOOLS;
$ap_int['AP_INT_MENUCODE_TYPE_TOOLS2']			= AP_INT_MENUCODE_TYPE_TOOLS2;




$ap_int['AP_INT_MENUCODE_TYPE_THEME'] = AP_INT_MENUCODE_TYPE_THEME;

$ap_int['AP_INT_MENUCODE_TYPE_THEMESOFT'] = AP_INT_MENUCODE_TYPE_THEMESOFT;
$ap_int['AP_INT_MENUCODE_TYPE_THEMESOFT_CAT'] = AP_INT_MENUCODE_TYPE_THEMESOFT_CAT;
$ap_int['AP_INT_MENUCODE_TYPE_THEMESOFT_DOWNLOAD_TOP'] = AP_INT_MENUCODE_TYPE_THEMESOFT_DOWNLOAD_TOP;
$ap_int['AP_INT_MENUCODE_TYPE_THEMESOFT_SHOP_REC'] = AP_INT_MENUCODE_TYPE_THEMESOFT_SHOP_REC;
$ap_int['AP_INT_CATEGORY_TYPE_THEMESOFT'] = AP_INT_CATEGORY_TYPE_THEMESOFT;


$ap_int['AP_INT_SEARCH_TYPE_APP']	= AP_INT_SEARCH_TYPE_APP;
$ap_int['AP_INT_SEARCH_TYPE_GAME']	= AP_INT_SEARCH_TYPE_GAME;
$ap_int['AP_INT_SEARCH_TYPE_MUSIC'] = AP_INT_SEARCH_TYPE_MUSIC;
$ap_int['AP_INT_SEARCH_TYPE_VIDEO'] = AP_INT_SEARCH_TYPE_VIDEO;
$ap_int['AP_INT_SEARCH_TYPE_BOOK']	= AP_INT_SEARCH_TYPE_BOOK;
$ap_int['AP_INT_SEARCH_TYPE_THEME']	= AP_INT_SEARCH_TYPE_THEME;
$ap_int['AP_INT_SEARCH_TYPE_THEMESOFT']	= AP_INT_SEARCH_TYPE_THEMESOFT;

$ap_int['AP_INT_SEARCH_TYPE_NAME_APP']	= AP_INT_SEARCH_TYPE_NAME_APP;
$ap_int['AP_INT_SEARCH_TYPE_NAME_GAME'] = AP_INT_SEARCH_TYPE_NAME_GAME;
$ap_int['AP_INT_SEARCH_TYPE_NAME_MUSIC']= AP_INT_SEARCH_TYPE_NAME_MUSIC;
$ap_int['AP_INT_SEARCH_TYPE_NAME_VIDEO']= AP_INT_SEARCH_TYPE_NAME_VIDEO;
$ap_int['AP_INT_SEARCH_TYPE_NAME_BOOK'] = AP_INT_SEARCH_TYPE_NAME_BOOK;
$ap_int['AP_INT_SEARCH_TYPE_NAME_THEME']= AP_INT_SEARCH_TYPE_NAME_THEME;
$ap_int['AP_INT_SEARCH_TYPE_NAME_THEMESOFT']= AP_INT_SEARCH_TYPE_NAME_THEMESOFT;

$ap_int['AP_INT_APPINFO'] = AP_INT_APPINFO;

include_once("bbclone.php");
?>
