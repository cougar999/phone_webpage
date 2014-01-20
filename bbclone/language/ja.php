<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: ja.php 2957 2011-10-07 06:56:52Z zhoufei $
 *  
 * Copyright (C) 2001-2011, the BBClone Team (see doc/authors.txt for details)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * See doc/copying.txt for details
 *
 * Modified by mugen 2004.11.12 (mugen@guitar.jp)
 */

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "�����󥷥����",
"ad" => "����ɥ�",
"ae" => "����ּ�Ĺ��Ϣˮ",
"af" => "���ե��˥�����",
"ag" => "����ƥ��������С��֡���",
"ai" => "���󥮥�",
"al" => "����Х˥�",
"am" => "�����˥�",
"an" => "�������Υ���ƥ�����",
"ao" => "���󥴥�",
"aq" => "�����Φ",
"ar" => "���를�����",
"arpa" => "�ƹ�����ʹ�������ײ��",
"as" => "����ꥫ�Υ��⥢",
"at" => "�������ȥꥢ",
"au" => "�������ȥ�ꥢ",
"aw" => "�����",
"az" => "������Х������",
"ba" => "�ܥ��˥����إ�ĥ����ӥ�",
"bb" => "�Х�Хɥ�",
"bd" => "�Х󥰥�ǥ�����",
"be" => "�٥륮��",
"bf" => "�֥륭�ʥե���",
"bg" => "�֥륬�ꥢ",
"bh" => "�С��졼��",
"bi" => "�֥��",
"biz" => "�ӥ��ͥ�",
"bj" => "�٥ʥ�",
"bm" => "�Хߥ塼������",
"bn" => "�֥�ͥ�����",
"bo" => "�ܥ�ӥ�",
"br" => "�֥饸��",
"bs" => "�Хϥ�",
"bt" => "�֡�����",
"bv" => "�֡�������",
"bw" => "�ܥĥ��",
"by" => "�٥�롼��",
"bz" => "�٥꡼��",
"ca" => "���ʥ�",
"cc" => "�������ʥ�����󥰡˽���",
"cd" => "�������붦�¹�",
"cf" => "������եꥫ���¹�",
"cg" => "����",
"ch" => "������",
"ci" => "�����ȥ��ܥ�����",
"ck" => "���å�����",
"cl" => "����",
"cm" => "����롼��",
"cn" => "���",
"co" => "�����ӥ�",
"com" => "���",
"cr" => "�������ꥫ",
"cs" => "����ӥ������ƥͥ���",
"cu" => "���塼��",
"cv" => "�����ܥ٥��",
"cx" => "���ꥹ�ޥ���",
"cy" => "���ץ�",
"cz" => "������",
"de" => "�ɥ���",
"dj" => "���֥����¹�",
"dk" => "�ǥ�ޡ���",
"dm" => "�ɥߥ˥�",
"do" => "�ɥߥ˥����¹�",
"dz" => "���른���ꥢ",
"ec" => "�������ɥ�",
"edu" => "���鵡��",
"ee" => "�����ȥ˥�",
"eg" => "�����ץ�",
"eh" => "�����ϥ�",
"er" => "����ȥꥢ",
"es" => "���ڥ���",
"et" => "�������ԥ�",
"eu" => "����Ϣ��",
"fi" => "�ե������",
"fj" => "�ե�����",
"fk" => "�ե��������ɽ���",
"fm" => "�ߥ���ͥ���Ϣˮ",
"fo" => "�ե�������",
"fr" => "�ե��",
"ga" => "���ܥ�",
"gb" => "�����ꥹ",
"gd" => "����ʥ�",
"ge" => "���른��",
"gf" => "�ե���Υ�������",
"gg" => "�����󥸡���",
"gh" => "������",
"gi" => "���֥�륿��",
"gl" => "���꡼�����",
"gm" => "����ӥ�",
"gn" => "���˥�",
"gov" => "�ƹ�����",
"gp" => "�����ɥ롼����",
"gq" => "��ƻ���˥�",
"gr" => "���ꥷ��",
"gs" => "��硼���������ɥ��å�����",
"gt" => "�����ƥޥ鶦�¹�",
"gu" => "��������",
"gw" => "���˥��ӥ���",
"gy" => "��������",
"hk" => "���",
"hm" => "�ϡ��ɡ��ޥ��ɥʥ�ɽ���",
"hn" => "�ۥ󥸥�饹",
"hr" => "��������",
"ht" => "�ϥ���",
"hu" => "�ϥ󥬥꡼",
"id" => "����ɥͥ���",
"ie" => "���������",
"il" => "�����饨��",
"im" => "�ޥ���",
"in" => "�����",
"info" => "����ե��᡼�����",
"int" => "��ݵ���",
"io" => "�����ꥹ�Υ�������ϰ�",
"iq" => "���饯",
"ir" => "�����",
"is" => "����������",
"it" => "�����ꥢ",
"je" => "���㡼������",
"jm" => "����ޥ���",
"jo" => "������",
"jp" => "����",
"ke" => "���˥�",
"kg" => "���륮������",
"kh" => "����ܥ���",
"ki" => "����Х�",
"km" => "�����",
"kn" => "���󥮥�",
"kp" => "��ī��",
"kr" => "�ڹ�",
"kw" => "����������",
"ky" => "�����ޥ����",
"kz" => "�����ե�����",
"la" => "�饪��",
"lb" => "��ХΥ�",
"lc" => "����ȥ륷��",
"li" => "��ҥƥ󥷥奿�������",
"lk" => "������",
"lr" => "��٥ꥢ",
"ls" => "�쥽��",
"lt" => "��ȥ��˥�",
"lu" => "�륯����֥륯",
"lv" => "��ȥӥ�",
"ly" => "��ӥ�",
"ma" => "���å�",
"mc" => "��ʥ�",
"md" => "���ɥ�",
"mg" => "�ޥ���������",
"mh" => "�ޡ���������",
"mil" => "�Ʒ�",
"mk" => "�ޥ��ɥ˥�",
"ml" => "�ޥ�",
"mm" => "�ߥ��ޡ�",
"mn" => "��󥴥�",
"mo" => "�ޥ���",
"mp" => "�̥ޥꥢ�ʽ���",
"mq" => "�ޥ���ˡ�����",
"mr" => "�⡼�꥿�˥�",
"ms" => "��󥻥�å�",
"mt" => "�ޥ륿",
"mu" => "�⡼�ꥷ�㥹",
"mv" => "���ǥ���",
"mw" => "�ޥ饦��",
"mx" => "�ᥭ����",
"my" => "�ޥ졼����",
"mz" => "�⥶��ӡ���",
"na" => "�ʥߥӥ�",
"name" => "�Ŀ�",
"nc" => "�˥塼����ɥ˥�",
"ne" => "�˥�������",
"net" => "�ͥåȥ��",
"nf" => "�Ρ��ե�������",
"ng" => "�ʥ������ꥢ",
"ni" => "�˥��饰��",
"nl" => "������",
"no" => "�Υ륦����",
"np" => "�ͥѡ���",
"nr" => "�ʥ���",
"nu" => "�˥���",
"numeric" => "���ͤΤ�",
"nz" => "�˥塼��������",
"om" => "���ޡ���",
"org" => "���������",
"pa" => "�ѥʥ�",
"pe" => "�ڥ롼",
"pf" => "�ե���Υݥ�ͥ���",
"pg" => "�ѥץ��˥塼���˥�",
"ph" => "�ե���ԥ�",
"pk" => "�ѥ�������",
"pl" => "�ݡ�����",
"pm" => "����ԥ������硦�ߥ������",
"pn" => "�ԥåȥ������",
"pr" => "�ץ���ȥꥳ",
"ps" => "�ѥ쥹���ʲ���",
"pt" => "�ݥ�ȥ���",
"pw" => "�ѥ饪",
"py" => "�ѥ饰����",
"qa" => "��������",
"re" => "���˥���",
"ro" => "�롼�ޥ˥�",
"ru" => "����",
"rw" => "�����",
"sa" => "����������ӥ�",
"sb" => "���������",
"sc" => "����������",
"sd" => "��������",
"se" => "���������ǥ�",
"sg" => "���󥬥ݡ���",
"sh" => "����ȥإ����",
"si" => "����٥˥�",
"sj" => "��������Х�ɡ����ޥ��������",
"sk" => "����Х���",
"sl" => "������쥪��",
"sm" => "����ޥ��",
"sn" => "���ͥ���",
"so" => "���ޥꥢ",
"sr" => "����ʥ�",
"st" => "����ȥᡦ�ץ�󥷥�",
"su" => "���ӥ���Ϣˮ",
"sv" => "���륵��Хɥ�",
"sy" => "���ꥢ",
"sz" => "���兩����",
"tc" => "�����������硦������������",
"td" => "�����",
"tf" => "�ե������������",
"tg" => "�ȡ���",
"th" => "����",
"tj" => "������������",
"tk" => "�ȥ��饦����",
"tl" => "��ƥ��⡼��",
"tm" => "�ȥ륯��˥�����",
"tn" => "����˥���",
"to" => "�ȥ�",
"tp" => "��ƥ��⡼��",
"tr" => "�ȥ륳",
"tt" => "�ȥ�˥����ɡ��ȥХ�",
"tv" => "�ĥХ�",
"tw" => "����",
"tz" => "���󥶥˥�",
"ua" => "�����饤��",
"ug" => "�������",
"uk" => "�����ꥹ",
"um" => "����ꥫ�ն�����",
"unknown" => "̤��",
"us" => "����ꥫ�罰��",
"uy" => "���륰����",
"uz" => "�����٥�������",
"va" => "�Х�����Թ�",
"vc" => "����ȥӥ󥻥�Ȥ���ӥ���ʥǥ��������",
"ve" => "�٥ͥ�����",
"vg" => "�����ꥹ�ΥС��������",
"vi" => "����ꥫ�ΥС��������",
"vn" => "�٥ȥʥ�",
"vu" => "�Х̥���",
"wf" => "��ꥹ����ӥեĥʽ���",
"ws" => "���⥢",
"ye" => "�������",
"yt" => "�ޥ����",
"yu" => "�桼������ӥ�",
"za" => "��եꥫ",
"zm" => "����ӥ�",
"zr" => "��������",
"zw" => "����Х֥�",
);

// The main Translation array
$translation = array(

// Specific charset
"global_charset" => "euc-jp",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar"=> "Statistics for %SERVER generated on %DATE",
"global_bbclone_copyright" => "The BBClone team - Licensed under the",
"global_last_reset" => "Statistics last reset on",
"global_yes" => "yes",
"global_no" => "no",

// The error messages
"error_cannot_see_config" =>
"���ʤ��Ϥ��Υ����С��� BBClone �򸫤뤳�Ȥ���Ĥ���Ƥ��ޤ���",

// Miscellaneous translations
"misc_other" => "����¾",
"misc_unknown" => "����",
"misc_second_unit" => "��",
"misc_ignored" => "̵��",

// The Navigation Bar
"navbar_main_site" => "�祵����",
"navbar_configuration" => "����",
"navbar_global_stats" => "�����Х�����",
"navbar_detailed_stats" => "�ܺ�����",
"navbar_time_stats" => "����������",
"navbar_language" => "Language",
"navbar_go" => "Go",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "����",
"dstat_visits" => "ˬ��",
"dstat_extension" => "ʬ��",
"dstat_dns" => "�ۥ���̾",
"dstat_from" => "�ɤ������褿��",
"dstat_os" => "�ϣ�",
"dstat_browser" => "�֥饦��",
"dstat_visible_rows" => "����������",
"dstat_green_rows" => "��",
"dstat_blue_rows" => "��",
"dstat_red_rows" => "��",
"dstat_search" => "����",
"dstat_last_page" => "�ǽ��ڡ���",
"dstat_last_visit" => "�ǽ�ˬ��",
"dstat_robots" => "������ܥå�",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "�ǡ����ʤ�",
"dstat_prx" => "�ץ���",
"dstat_ip" => "IP���ɥ쥹",
"dstat_user_agent" => "�桼���������������",
"dstat_nr" => "�ֹ�",
"dstat_pages" => "��",
"dstat_visit_length" => "���߻���",
"dstat_reloads" => "�����",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global stats words

"gstat_accesses" => "��������",
"gstat_total_visits" => "���",
"gstat_total_unique" => "��ͭ���",
"gstat_operating_systems" => "OS�̾�� %d",
"gstat_browsers" => " �֥饦���̾�� %d",
"gstat_extensions" => "�񥳡����̾�� %d",
"gstat_robots" => "������ܥå��̾�� %d",
"gstat_pages" => "ˬ��ѥڡ������ %d",
"gstat_origins" => "��ե����� %d",
"gstat_hosts" => "�ۥ��Ⱦ�� %d",
"gstat_keys" => "������ɾ�� %d",
"gstat_total" => "���",
"gstat_not_specified" => "����",

// Time stats words
"tstat_su" => "��",
"tstat_mo" => "��",
"tstat_tu" => "��",
"tstat_we" => "��",
"tstat_th" => "��",
"tstat_fr" => "��",
"tstat_sa" => "��",

"tstat_full_su" => "Sunday",
"tstat_full_mo" => "Monday",
"tstat_full_tu" => "Tuesday",
"tstat_full_we" => "Wednesday",
"tstat_full_th" => "Thursday",
"tstat_full_fr" => "Friday",
"tstat_full_sa" => "Saturday",

"tstat_jan" => "1��",
"tstat_feb" => "2��",
"tstat_mar" => "3��",
"tstat_apr" => "4��",
"tstat_may" => "5��",
"tstat_jun" => "6��",
"tstat_jul" => "7��",
"tstat_aug" => "8��",
"tstat_sep" => "9��",
"tstat_oct" => "10��",
"tstat_nov" => "11��",
"tstat_dec" => "12��",

"tstat_full_jan" => "January",
"tstat_full_feb" => "February",
"tstat_full_mar" => "March",
"tstat_full_apr" => "April",
"tstat_full_may" => "May",
"tstat_full_jun" => "June",
"tstat_full_jul" => "July",
"tstat_full_aug" => "August",
"tstat_full_sep" => "September",
"tstat_full_oct" => "October",
"tstat_full_nov" => "November",
"tstat_full_dec" => "December",

"tstat_last_day" => "����",
"tstat_last_week" => "�콵��",
"tstat_last_month" => "����",
"tstat_last_year" => "��ǯ��",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "page generated in ",
"seconds" => " seconds",
// Configuration page words and sentences

"config_variable_name" => "�ѿ�̾",
"config_variable_value" => "�ѿ�����",
"config_explanations" => "����",

"config_BBC_MAINSITE" =>
"�����ѿ������åȤ��줿��硢����ΰ��֤إ�󥯤���������ޤ����ǥե���ȤϿƥǥ��쥯�ȥ�Ǥ������ʤ��μ祵���Ȥ�¾�ξ��˰��֤����硢����˹�碌���ͤ��ѹ����Ƥ�������<br />��:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"���פ������ɽ�����뤳�Ȥ�BBClone�Υǥե���ȤǤ���ɽ�����������ʤ����϶���ˤ��Ƥ�������<br />
��:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"���٤Ƥ� BBClone �ڡ����Υʥӥ��������С���ɽ������Ƥ��륿���ȥ�<br />
���Υޥ����Ȥ��ޤ�:<br />
<ul>
<li>%SERVER: �����С�̾</li>
<li>%DATE: ����</li>
</ul>
HTML������Ȥ��ޤ�<br />
��:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone�Υǥե���ȸ������Ǥ����֥饦���ˤ�ä�����Ū�˻��̵꤬����硢���θ���򥵥ݡ��Ȥ��ޤ�:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb, nl, pl, pt, pt-br, ro, ru,
sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"�����ѿ��ϡ�Ʊ�쥢�������ȸ��ʤ�Ĺ�����ä�������ޤ���2��Υ��������δֳ֤����ꤵ�줿�³���Ķ���ʤ��¤ꡢ���λ�����Ǥ�Ʊ�쥢��������1�ĤΥ��������ȸ��ʤ���ޤ����ǥե���Ȥ�30ʬ(1800��)�Ǥ����ۤʤ��ͤ������Ƥ뤳�Ȥ����ޤ�<br />
��:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"�ܺ٤����פ�ɽ�����륨��ȥ꡼�����ǥե���Ȥ�100�Ǥ���
500(��Ω���ʤ�)��ۤ�������Ϥ��ʤ��ǲ�������",

"config_BBC_DETAILED_STAT_FIELDS" =>
"�ѿ� \$BBC_DETAILED_STAT_FIELDS �Ͼܺ����פ�ɽ�����뤿��Υ�������ꤷ�ޤ���
���Ѳ�ǽ�ʥ����̾:
<ul>
<li>id&nbsp;=&gt;&nbsp;������ȳ��Ϥ��鲿���ܤ�ˬ��Ԥ�</li>
<li>time&nbsp;=&gt;&nbsp;�ǽ�ˬ�����</li>
<li>visits&nbsp;=&gt;&nbsp;Ʊ��ˬ��ԤΥ���������</li>
<li>dns&nbsp;=&gt;&nbsp;ˬ��ԤΥۥ���̾</li>
<li>ip&nbsp;=&gt;&nbsp;ˬ��Ԥ�IP���ɥ쥹</li>
<li>os&nbsp;=&gt;&nbsp;OS����(��ǽ�ʤ�и�����ܥåȤʤɤ�)</li>
<li>browser&nbsp;=&gt;&nbsp;��³�����Ѥ��줿���եȥ�����</li>
<li>ext&nbsp;=&gt;&nbsp;ˬ��Ԥι��̥�����</li>
<li>referer&nbsp;=&gt;&nbsp;ˬ��ԤϤɤ������褿�� (��ǽ�ʤ��)</li>
<li>page&nbsp;=&gt;&nbsp;�ǽ�ˬ��ڡ���</li>
<li>search&nbsp;=&gt;&nbsp;ˬ��ԤλȤä�������(��ǽ�ʤ��)</li>
</ul>
�����򥢥�󥸤���̿���ɽ���Τ���ˤ���Ѥ���ޤ���<br />
��:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"�����С��λ��פ����ʤ����ϰ�Υ����ॾ����Ȱ��פ��ʤ���硢���Υ����å��λ��Ѥˤ���ñ�̤ǻ��֤�Ĵ�᤹�뤳�Ȥ��Ǥ��ޤ����ޥ��ʥ����ͤϻ��֤��ᤷ���ץ饹�Ͽʤ�ޤ���<br />
Examples:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"IP���ɥ쥹��ۥ���̾���Ѵ����뤫�ɤ����Υ��ץ���󡣻��Ѥ��Ƥ���DNS�����С����٤���������¤򤷤Ƥ��롢���Ͽ��������㤤��硢̾���β��Ϥ��ʤ������Ѥ��Ƥ��륵���С��ˤ���ô�򤫤��뤫�⤷��ޤ��󡣤����ѿ��Υ��åȤϤ���������褹�뤿��Τ�ΤǤ���<br />
��:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"�ºݤΥ����С����ѤˤȤä�ͭ�פǤ���Ȼפ��뤿�ᡢBBClone�Υǥե���Ȥϻ��������פ���ǥҥåȿ��򼨤��褦�ˤʤäƤ��ޤ��������������ʤ��λ��������Ѥ˥�ˡ�����ˬ�����Ѥ��������ɤ���С������ѿ��Υ��åȤˤ���������ˡ���ѹ����뤳�Ȥ��Ǥ��ޤ���<br />
��:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"���Υ��ץ��������̤�IP���ɥ쥹���뤤�ϥ��ɥ쥹���ϰϤ����פ���������뤿��˻��Ѥ��뤳�Ȥ��Ǥ��ޤ������ѥ졼�����Ȥ��ƥ���ޤ���ѽ���ޤ���<br />
��:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"���ʤ������פ�����Υ����Ȥ����褿���������ʥ�ե���ˤ�������뤳�Ȥ��Ǥ��ޤ���ʣ���Υ�����ɤ���Ѥ�����ϡ����ѥ졼�����Ȥ��ƥ���ޤ���Ѥ��Ƥ���������<br />
��:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"������ܥåȤ�ɤ��������뤫�Υ��ץ���󡣥ǥե���Ȥϡ��֥ȥåפΥۥ��Ƚ����Ǥ�̵�뤷������¾�����פ���ǤϻĤ��פǤ����ɤ�ʸ�����ܥåȤ⸫�����ʤ���С�&quot;2&quot;�Ǥ����ͤ�ˬ���������������Ȥ����Ǥ��礦��<br />
��:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"���Υ��ץ����ϡ�BBClone���ɤ���ä�1�ͤΥӥ���������̤��뤫������򤷤ޤ����ǥե���Ȥ�IP���ɥ쥹�Τ�(����ϤۤȤ�ɤξ�總��Ū)����Ѥ��뤳�ȤǤ����������ʤ��顢���ʤ��Υӥ�������Proxy�����С���Ȥä��ꤷ�Ƥ����硢���Υ��ץ����򥪥դˤ��뤳�Ȥˤ�äƤ�긽��Ū�����פ��󶡤��뤳�Ȥ��Ǥ��ޤ���<br />
��:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"���פ�ꥻ�åȤ��������ϡ����Υ����å��򥪥�ˤ������Υ��������ˤ�äƤ����������뤳�Ȥ��Ǥ��ޤ��������᤹����˺���ȡ����餯�۾���㤤�ȥ�ե��å���и�����Ǥ��礦;)
<br />
��:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"�ۥ��Ȥȥ�ե�������פ�1��Υӥ�������ˬ��ˤ�ä����̤Υǡ������������ޤ������Υ����å��򥪥�ˤ��뤳�Ȥˤ�äơ������Υ���ȥ꡼���������ʤ��μºݤΥۥ��Ȥ���ӥ�ե���Υ�󥭥󥰤˱ƶ������ˡ�access.php�Υ������򾮤������뤳�Ȥ��Ǥ��ޤ������Υҥå��̤�&quot;not_specified&quot;�����ɾ�������ˤ��Ƥ�������ȥ꡼�ˤ˲ä�����Ǥ��礦��<br />
��:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>
