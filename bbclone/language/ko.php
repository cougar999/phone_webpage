<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: ko.php 2957 2011-10-07 06:56:52Z zhoufei $
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
 * Korean added by firejune(http://www.firejune.com) 2005.04.26 (to@firejune.com)
 */

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "�Ƽ��Ǽ�",
"ad" => "�ȵ���",
"ae" => "�ƶ� ���̸�Ʈ ����",
"aero" => "Aero",
"af" => "�������Ͻ�ź",
"ag" => "��Ƽ�� �ٺδ�",
"ai" => "�ȱֶ�",
"al" => "�˹ٴϾ�",
"am" => "�Ƹ��޴Ͼ�",
"an" => "�״������ ��Ƽ��",
"ao" => "�Ӱ��",
"aq" => "���� ���",
"ar" => "�Ƹ���Ƽ��",
"arpa" => "�̱��� ÷�ܻ�� ������",
"as" => "�Ƹ޸�ī�� ����",
"at" => "����Ʈ����",
"au" => "����Ʈ���ϸ���",
"aw" => "�Ƹ���",
"az" => "������������",
"ba" => "�����Ͼ� �츣ü����",
"bb" => "�ٺ��̵���",
"bd" => "��۶󵥽�",
"be" => "���⿡",
"bf" => "�θ�Ű�� �ļ�",
"bg" => "�Ұ�����",
"bh" => "�ٷ���",
"bi" => "�ٷ��",
"biz" => "�����Ͻ�",
"bj" => "����",
"bm" => "���´�",
"bn" => "��糪��",
"bo" => "�������",
"br" => "�����",
"bs" => "���ϸ�",
"bt" => "��ź",
"bv" => "�꺣��",
"bw" => "�����ͳ�",
"by" => "���η��",
"bz" => "������",
"ca" => "ĳ����",
"cc" => "���ڽ� ����",
"cd" => "���",
"cf" => "�߾Ӿ�����ī ��ȭ��",
"cg" => "���",
"ch" => "������",
"ci" => "��Ʈ��ξƸ�",
"ck" => "Cook Islands",
"cl" => "ĥ��",
"cm" => "ī�޷�",
"cn" => "�߱�",
"co" => "�ݷҺ��",
"com" => "���",
"coop" => "Coop",
"cr" => "�ڽ�Ÿ��ī",
"cs" => "������ơ����׳ױ׷�",
"cu" => "����",
"cv" => "ī��������",
"cx" => "ũ����������",
"cy" => "Ű���ν�",
"cz" => "ü�� ��ȭ��",
"de" => "����",
"dj" => "����Ƽ",
"dk" => "����ũ",
"dm" => "���̴�ī",
"do" => "���̴�ī ��ȭ��",
"dz" => "������",
"ec" => "���⵵��",
"edu" => "�������",
"ee" => "������Ͼ�",
"eg" => "����Ʈ",
"eh" => "�����϶�",
"er" => "����Ʈ����",
"es" => "������",
"et" => "��Ƽ���Ǿ�",
"eu" => "���� ����",
"fi" => "�ɶ���",
"fj" => "����",
"fk" => "��Ŭ���� ����",
"fm" => "��ũ�γ׽þ�",
"fo" => "�ķο� ����",
"fr" => "������",
"ga" => "����",
"gb" => "���� �ձ�",
"gd" => "�׷�����",
"ge" => "������",
"gf" => "�������� ��Ƴ�",
"gg" => "����",
"gh" => "����",
"gi" => "�������",
"gl" => "�׸�����",
"gm" => "�����",
"gn" => "���",
"gov" => "�̱� ����",
"gp" => "�׾Ƶ帣����",
"gq" => "���� ���",
"gr" => "�׸���",
"gs" => "�� �����ơ��� ������ġ ����",
"gt" => "���׸���",
"gu" => "��",
"gw" => "Ű�Ϻ���",
"gy" => "���̾Ƴ�",
"hk" => "ȫ��",
"hm" => "�ϵ塤�Ƶ��ε� ����",
"hn" => "�µζ�",
"hr" => "ũ�ξ�Ƽ��",
"ht" => "����Ƽ",
"hu" => "�밡��",
"id" => "�ε��׽þ�",
"ie" => "���Ϸ���",
"il" => "�̽���",
"im" => "�Ǽ�",
"in" => "�ε�",
"info" => "�������̼�",
"int" => "�������",
"io" => "���׸����� �ε��� ����",
"iq" => "�̶�ũ",
"ir" => "�̶�",
"is" => "���̽�����",
"it" => "��Ż����",
"je" => "����",
"jm" => "�ڸ���ī",
"jo" => "�丣��",
"jp" => "�Ϻ�",
"ke" => "�ɳ�",
"kg" => "Ű���⽺��ź",
"kh" => "į�����",
"ki" => "Ű���ٽ�",
"km" => "�ڸ��",
"kn" => "Saint Kitts and Nevis",
"kp" => "����",
"kr" => "�ѱ�",
"kw" => "������Ʈ",
"ky" => "���̸� ����",
"kz" => "ī���彺ź",
"la" => "�����",
"lb" => "���ٳ�",
"lc" => "����Ʈ���þ�",
"li" => "�����ٽ�Ÿ��",
"lk" => "������ī",
"lr" => "���̺�����",
"ls" => "������",
"lt" => "�����ƴϾ�",
"lu" => "����긣ũ",
"lv" => "��Ʈ���",
"ly" => "�����",
"ma" => "�����",
"mc" => "����",
"md" => "������",
"mg" => "���ٰ���ī��",
"mh" => "��������",
"mil" => "�̱�",
"mk" => "���ɵ��Ͼ�",
"ml" => "����",
"mm" => "�̾Ḷ",
"mn" => "����",
"mo" => "��ī��",
"mp" => "�����Ƴ� ����",
"mq" => "����ġ��ť��",
"mr" => "��Ÿ��",
"ms" => "��Ʈ����Ʈ",
"mt" => "��Ÿ",
"museum" => "�ڹ���",
"mu" => "�𸮼Ž�",
"mv" => "�����",
"mw" => "������",
"mx" => "�߽���",
"my" => "�����̽þ�",
"mz" => "�����ũ",
"na" => "���̺��",
"name" => "����",
"nc" => "��Į�����Ͼ�",
"ne" => "������",
"net" => "��Ʈ��ũ",
"nf" => "����",
"ng" => "����������",
"ni" => "��ī���",
"nl" => "�״�����",
"no" => "�븣����",
"np" => "����",
"nr" => "�����",
"nu" => "�Ͽ�",
"numeric" => "numeric",
"nz" => "��������",
"om" => "����",
"org" => "�񿵸� ��ü",
"pa" => "������",
"pe" => "���",
"pf" => "�����׽þ�",
"pg" => "��Ǫ�ƴ����",
"ph" => "�ʸ���",
"pk" => "��Ű��ź",
"pl" => "������",
"pm" => "���ǿ������������м�",
"pn" => "��Ʈ �ɸ���",
"pr" => "�翡���丮��",
"pro" => "������",
"ps" => "�ȷ���Ÿ��",
"pt" => "��������",
"pw" => "�ȶ��",
"py" => "�Ķ����",
"qa" => "īŸ��",
"re" => "�����Ͽ�",
"ro" => "�縶�Ͼ�",
"ru" => "���þ�",
"rw" => "���ϴ�",
"sa" => "����ƶ���",
"sb" => "�ַθ� ����",
"sc" => "���̼�",
"sd" => "����",
"se" => "������",
"sg" => "�̰�����",
"sh" => "?Ʈ�췹����",
"si" => "���κ��Ͼ�",
"sj" => "���ٸ��ٸ��塤�Ḷ�� ����",
"sk" => "���ι�Ű��",
"sl" => "�ÿ��󸮿�",
"sm" => "�긶����",
"sn" => "���װ�",
"so" => "�Ҹ�����",
"sr" => "������",
"st" => "��Ʈ�ޡ���������",
"su" => "�Һ� ����",
"sv" => "����ٵ���",
"sy" => "�ø���",
"sz" => "����������",
"tc" => "Ʈ��-ī���ڽ� ����",
"td" => "����",
"tf" => "�������� ���� ����",
"tg" => "���",
"th" => "�±�",
"tj" => "Ÿ��Ű��ź",
"tk" => "Ʈ�ɶ�� ����",
"tl" => "��Ƽ��",
"tm" => "����ũ�޴Ͻ�ź",
"tn" => "Ƣ����",
"to" => "�밡",
"tp" => "��Ƽ��",
"tr" => "��Ű",
"tt" => "Ʈ���ϴٵ���ٰ�",
"tv" => "���߷�",
"tw" => "Ÿ�̿�",
"tz" => "ź�ڴϾ�",
"ua" => "��ũ���̳�",
"ug" => "�찣��",
"uk" => "����",
"um" => "�Ƹ޸�ī ���� ����",
"unknown" => "����",
"us" => "�̱�",
"uy" => "������",
"uz" => "���Ű��ź",
"va" => "��Ƽĭ��",
"vc" => "?Ʈ ��Ʈ �� �׷����� ����",
"ve" => "���׼�����",
"vg" => "�������Ϸ��� (UK)",
"vi" => "�������Ϸ��� (US)",
"vn" => "��Ʈ��",
"vu" => "�ٴ�����",
"wf" => "�͸��� �� ��Ʈ�� ����",
"ws" => "����",
"ye" => "����",
"yt" => "�����׼�",
"yu" => "������� ���׳ױ׷�",
"za" => "��������ī",
"zm" => "����",
"zr" => "���̸�",
"zw" => "���ٺ��",
);

// The main Translation array
$translation = array(
// Specific charset
"global_charset" => "euc-kr",

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
"BBClone�� ������ �߸��Ǿ����ϴ�.",

// Miscellaneous translations
"misc_other" => "�� ��",
"misc_unknown" => "��",
"misc_second_unit" => "��",
"misc_ignored" => "���õ�",

// The Navigation Bar
"navbar_main_site" => "Ȩ��������",
"navbar_configuration" => "ȯ�漳��",
"navbar_global_stats" => "��ü���",
"navbar_detailed_stats" => "�����",
"navbar_time_stats" => "�ð������",
"navbar_language" => "Language",
"navbar_go" => "Go",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "�ð�",
"dstat_visits" => "�湮",
"dstat_extension" => "Ȯ��",
"dstat_dns" => "ȣ��Ʈ�̸�",
"dstat_from" => "From",
"dstat_os" => "OS",
"dstat_browser" => "������",
"dstat_visible_rows" => "�׼�����",
"dstat_green_rows" => "���",
"dstat_blue_rows" => "�Ķ�",
"dstat_red_rows" => "����",
"dstat_search" => "�˻�",
"dstat_last_page" => "������ ������",
"dstat_last_visit" => "���� �湮",
"dstat_robots" => "�˻��κ�",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "�����Ͱ� �����ϴ�.",
"dstat_prx" => "������ ����",
"dstat_ip" => "IP �ּ�",
"dstat_user_agent" => "User Agent",
"dstat_nr" => "Nr",
"dstat_pages" => "������",
"dstat_visit_length" => "Visit Length",
"dstat_reloads" => "Reloads",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global stats words
"gstat_accesses" => "��ü ���� ī����",
"gstat_total_visits" => "��ü ������ ��",
"gstat_total_unique" => "��ü �湮��",
"gstat_operating_systems" => "�ü�� ���� %d",
"gstat_browsers" => "������ ���� %d",
"gstat_extensions" => "������ ���� %d",
"gstat_robots" => "�˻��κ� ���� %d",
"gstat_pages" => "�湮�� ������ ���� %d",
"gstat_origins" => "���۷� ���� %d ",
"gstat_hosts" => "ȣ��Ʈ ���� %d",
"gstat_keys" => "Ű���� ���� %d",
"gstat_total" => "��ü",
"gstat_not_specified" => "Not specified",

// Time stats words
"tstat_su" => "��",
"tstat_mo" => "��",
"tstat_tu" => "ȭ",
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

"tstat_last_day" => "�ϰ�",
"tstat_last_week" => "�ְ�",
"tstat_last_month" => "����",
"tstat_last_year" => "�Ⱓ",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "page generated in ",
"seconds" => " seconds",

// Configuration page words and sentences
"config_variable_name" => "������",
"config_variable_value" => "������",
"config_explanations" => "����",

"config_BBC_MAINSITE" =>
"�� ������ ��Ʈ �Ǿ��� ���, ������ ��ġ�� ��ũ�� �����˴ϴ�.����Ʈ�� ģ���丮�Դϴ�.����� �ֻ���Ʈ�� �ٸ� ��ҿ� ��ġ�ϴ� ���, �ű⿡ ���߾� ���� ������ �ּ���<br />
��:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"����� ������ ǥ���ϴ� ���� BBClone�� ����Ʈ�Դϴ�.ǥ�ý�Ű�� ���� ���� ���� �������� �� �ּ���<br />
��:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"��� BBClone �������� �׺���̼� �ٿ� ǥ�õǰ� �ִ� Ÿ��Ʋ
������ ��ũ�θ� ����� �� �ֽ��ϴ�:<br />
<ul>
<li>%SERVER: ������,</li>
<li>%DATE: ����.</li>
</ul>
HTML �±׵� ����� �� �ֽ��ϴ�.<br />
��:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone�� ����Ʈ ��� �����Դϴ�.�������� ���� ���������� ������ ���� ���, ������ �� ����Ʈ�մϴ�.
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb, nl, pl, pt, pt-br, ro, ru,
sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"�� ������, ���� �׼������ ���� ���̸� �ʿ� �����մϴ�.2ȸ�� �׼����� ������ ������ �Ѱ踦 ���� �ʴ� �̻� �� �ð��������� ���� �׼����� 1���� �׼������ �������ϴ�.����Ʈ�� 30�� (1800��)�Դϴ�.�ٸ� ���� �Ҵ��� ���� �ֽ��ϴ�.<br />
��:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"���� ���� ǥ���ϴ� ��Ʈ����.����Ʈ�� 100�Դϴ�. 500(������ ���� �ʴ´�)�� ���� ���������� ������.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"���� $BBC_DETAILED_STAT_FIELDS �� �� ��迡 ǥ���ϱ� ���� �÷��� �����մϴ�. �̿� ������ �÷���:
<ul>
<li>id&nbsp;=&gt;&nbsp;ī��Ʈ ���ú��� ���°�� �湮���ΰ�</li>
<li>time&nbsp;=&gt;&nbsp;���� �湮�ð�</li>
<li>visits&nbsp;=&gt;&nbsp;���� �湮���� �׼�����</li>
<li>dns&nbsp;=&gt;&nbsp;�湮���� ȣ��Ʈ��</li>
<li>ip&nbsp;=&gt;&nbsp;�湮���� IP�ּ�</li>
<li>os&nbsp;=&gt;&nbsp;OS����(�����ϸ� �˻� �κ�Ʈ �)</li>
<li>browser&nbsp;=&gt;&nbsp;���ӿ� �̿�� ����Ʈ����</li>
<li>ext&nbsp;=&gt;&nbsp; �湮���� ���� �ڵ�</li>
<li>referer&nbsp;=&gt;&nbsp;�湮�ڴ� ��𿡼� �Դ��� (������ ���)</li>
<li>page&nbsp;=&gt;&nbsp;���� �湮 ������</li>
<li>search&nbsp;=&gt;&nbsp;�湮�ڰ� ����� ����(������ ���)</li>
</ul>
�÷��� ����� �� ������ ǥ�ø� ���ؼ��� ���˴ϴ�.<br />
��:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"������ �ð谡 ����� ������ Ÿ�� ���� ��ġ���� �ʴ� ���, �� ����ġ�� ��뿡 ���� �������� �ð��� ������ ���� �ֽ��ϴ�.���̳ʽ��� ���� �ð��� �ǵ���, �÷����� �����մϴ�.<br />
��:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"IP�ּҸ� ȣ��Ʈ������ ��ȯ�ϴ��� ����� �ɼ�.����ϰ� �ִ� DNS ������ ����, ���� ������ �ϰ� �ִ�, �Ǵ� �ŷڼ��� ���� ���, �̸��� �ذ��� ����� �̿��ϰ� �ִ� �������� �δ��� ������ �𸨴ϴ�.�� ������Ʈ�� �� ������ �ذ��ϱ� ������ ���Դϴ�.<br />
��:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"������ ���� ��뿡 �־� �����ϴٶ�� �����Ǳ� (����)������, BBClone�� ����Ʈ�� �ð��� ��� ��(��)���� ��Ʈ���� ��Ÿ���� �Ǿ� �ֽ��ϴ�.�׷���, ����� �ð� �������� ��Ư�� �湮�� ����ϴ� ���� ���ٸ�, �� ������Ʈ�� ���� ���� ����� ������ ���� �ֽ��ϴ�.<br />
��:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"�� �ɼ��� Ư���� IP�ּ� Ȥ�� �ּ��� ������ ���κ��� �����ϱ� ���ؼ� ����� ���� �ֽ��ϴ�.���۷����ͷμ� �޸��� ��� �� �� �ֽ��ϴ�.<br />
��:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"����� ��迡 Ư���� ����Ʈ�κ��� �� �׼���(���Ķ�)�� ������ ���� �ֽ��ϴ�.������ Ű���带 ����ϴ� ����, ���۷����ͷμ� �޸��� ����� �ּ���.<br />
��:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"�˻� �κ�Ʈ�� ��� ó���ұ��� �ɼ�.����Ʈ��, ��ž�� ȣ��Ʈ �����߿����� ������, �� ���� ��� ��(��)������ ����١��Դϴ�.� �˻� �κ�Ʈ�� ���� ���� ������, &quot;2&quot;�Դϴ�.����� �湮����, ī��Ʈ �ǰ�����.<br />
��:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"�� �ɼ���, BBClone�� ��� 1���� �湮���� �����ұ��� ���Ǹ� �մϴ�.����Ʈ�� IP�ּҸ�(�װ��� ��κ��� ��� ������)�� ����ϴ� ���Դϴ�.�׷�����, ����� �湮���� Proxy ������ ����ϰų� �ϰ� �ִ� ���, �� �ɼ��� ������ �ϴ� �Ϳ� ���� ���� �������� ��踦 ������ ���� �ֽ��ϴ�.<br />
��:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"��踦 ����Ʈ �ϰ� ���� ����, �� ����ġ�� ������ ��, ������ �׼����� ���� �װ͵��� ������ ���� �ֽ��ϴ�.�������� �ǵ����� ���� ������(��), �Ƹ� ���������� ���� Ʈ������ �����ϰ�����;) <br />
��:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"ȣ��Ʈ�� ���Ķ��� ���� 1ȸ�� �湮���� �湮�� ���� �뷮�� �����͸� �����մϴ�.�� ����ġ�� ������ �ϴ� �Ϳ� ����, �̷��� ��Ʈ���� ������, ����� ������ ȣ��Ʈ �� ���Ķ��� ��ŷ�� ������ ���� �ʰ� , access.php�� ����� �۰� �� ���� �ֽ��ϴ�.�� ��Ʈ����&quot;not_specified&quot;(���� ������ �����ϰ� �� �δ� ��Ʈ��)�� ������������.<br />
��:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>