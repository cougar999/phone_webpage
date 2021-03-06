<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: bg.php 2957 2011-10-07 06:56:52Z zhoufei $
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
 * Translated by Martin Halachev < m_halachev@hotmail.com >
 */

// The main array ($_ is for doing short in its call)

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "�-� ����������",
"ad" => "������",
"ae" => "��������� ������� ��������",
"aero" => "Aero",
"af" => "����������",
"ag" => "������� � �������",
"ai" => "������",
"al" => "�������",
"am" => "�������",
"an" => "��������� ������",
"ao" => "������",
"aq" => "����������",
"ar" => "���������",
"arpa" => "ARPA",
"as" => "����������� �����",
"at" => "�������",
"au" => "���������",
"aw" => "�����",
"az" => "�����������",
"ba" => "����� � �����������",
"bb" => "��������",
"bd" => "���������",
"be" => "������",
"bf" => "������� ����",
"bg" => "��������",
"bh" => "�������",
"bi" => "�������",
"biz" => "������",
"bj" => "�����",
"bm" => "�������",
"bn" => "������",
"bo" => "�������",
"br" => "��������",
"bs" => "������",
"bt" => "�����",
"bv" => "����",
"bw" => "��������",
"by" => "�������",
"bz" => "�����",
"ca" => "������",
"cc" => "�������� �-��",
"cd" => "�����",
"cf" => "��������� ���������� ���������",
"cg" => "�����",
"ch" => "���������",
"ci" => "���� �� ��������� ����",
"ck" => "�-�� ���",
"cl" => "�����",
"cm" => "�������",
"cn" => "�����",
"co" => "��������",
"com" => "���������",
"coop" => "������������",
"cr" => "����� ����",
"cs" => "������ � ����� ����",
"cu" => "����",
"cv" => "������� ����� ���",
"cx" => "������� �-��",
"cy" => "�����",
"cz" => "�����",
"de" => "��������",
"dj" => "�������",
"dk" => "�����",
"dm" => "��������",
"do" => "������������ ���������",
"dz" => "�����",
"ec" => "�������",
"edu" => "������������� (���)",
"ee" => "�������",
"eg" => "������",
"eh" => "������� ������",
"er" => "�������",
"es" => "�������",
"et" => "�������",
"eu" => "���������� ����",
"fi" => "���������",
"fj" => "�����",
"fk" => "���������� �-��",
"fm" => "����������",
"fo" => "�������� �-��",
"fr" => "�������",
"ga" => "�����",
"gb" => "��������������",
"gd" => "�������",
"ge" => "������",
"gf" => "������� ������",
"gg" => "�������",
"gh" => "����",
"gi" => "���������",
"gl" => "����������",
"gm" => "������",
"gn" => "������",
"gov" => "������������� (���)",
"gp" => "���������",
"gq" => "������������ ������",
"gr" => "������",
"gs" => "���� �������� � �-�� ���� �������",
"gt" => "���������",
"gu" => "����",
"gw" => "������-�����",
"gy" => "������",
"hk" => "����-����",
"hm" => "������� ���� � ���������",
"hn" => "��������",
"hr" => "���������",
"ht" => "�����",
"hu" => "�������",
"id" => "���������",
"ie" => "��������",
"il" => "������",
"im" => "�-� ���",
"in" => "�����",
"info" => "����",
"int" => "������������ �����������",
"io" => "��������� ��������� � ��������� �����",
"iq" => "����",
"ir" => "����",
"is" => "��������",
"it" => "������",
"je" => "������",
"jm" => "������",
"jo" => "��������",
"jp" => "������",
"ke" => "�����",
"kg" => "����������",
"kh" => "��������",
"ki" => "��������",
"km" => "�������",
"kn" => "����� ����� � �����",
"kp" => "������� �����",
"kr" => "���� �����",
"kw" => "������",
"ky" => "��������� �������",
"kz" => "���������",
"la" => "����",
"lb" => "�����",
"lc" => "����� �����",
"li" => "����������",
"lk" => "��� �����",
"lr" => "�������",
"ls" => "������",
"lt" => "�����",
"lu" => "����������",
"lv" => "������",
"ly" => "�����",
"ma" => "������",
"mc" => "������",
"md" => "�������",
"mg" => "����������",
"mh" => "��������� �-��",
"mil" => "������ (���)",
"mk" => "���������",
"ml" => "����",
"mm" => "�������",
"mn" => "��������",
"mo" => "�����",
"mp" => "�-�� ������� �������",
"mq" => "���������",
"mr" => "����������",
"ms" => "���������",
"mt" => "�����",
"mu" => "��������",
"museum" => "�����",
"mv" => "�������",
"mw" => "������",
"mx" => "�������",
"my" => "��������",
"mz" => "��������",
"na" => "�������",
"name" => "����������",
"nc" => "���� ���������",
"ne" => "�����",
"net" => "�������",
"nf" => "�-� �������",
"ng" => "�������",
"ni" => "���������",
"nl" => "��������",
"no" => "��������",
"np" => "�����",
"nr" => "�����",
"nu" => "����",
"numeric" => "IP �����",
"nz" => "���� ��������",
"om" => "����",
"org" => "�����������",
"pa" => "������",
"pe" => "����",
"pf" => "������� ���������",
"pg" => "����� ���� ������",
"ph" => "��������",
"pk" => "��������",
"pl" => "�����",
"pm" => "����� ���� � �������",
"pn" => "�-� ��������",
"pr" => "����� ����",
"pro" => "Professional",
"ps" => "���������",
"pt" => "����������",
"pw" => "�����",
"py" => "��������",
"qa" => "�����",
"re" => "�������",
"ro" => "�������",
"ru" => "�����",
"rw" => "������",
"sa" => "��������� ������",
"sb" => "���������� �-��",
"sc" => "��������� �-��",
"sd" => "�����",
"se" => "������",
"sg" => "��������",
"sh" => "��. �����",
"si" => "��������",
"sj" => "�-�� �������� � �� �����",
"sk" => "��������",
"sl" => "����� �����",
"sm" => "��� ������",
"sn" => "�������",
"so" => "�������",
"sr" => "�������",
"st" => "��� ��� � �������",
"su" => "�������� ����",
"sv" => "��������",
"sy" => "�����",
"sz" => "���������",
"tc" => "����� � ������ �-��",
"td" => "���",
"tf" => "������� ���� ���������",
"tg" => "����",
"th" => "�������",
"tj" => "�����������",
"tk" => "�������",
"tl" => "������� �����",
"tm" => "������������",
"tn" => "�����",
"to" => "�����",
"tp" => "������� �����",
"tr" => "������",
"tt" => "�������� � ������",
"tv" => "������",
"tw" => "������",
"tz" => "��������",
"ua" => "�������",
"ug" => "������",
"uk" => "��������������",
"um" => "��� ������� �-��",
"unknown" => "��������",
"us" => "���",
"uy" => "�������",
"uz" => "����������",
"va" => "��������",
"vc" => "����� ������� � ���������",
"ve" => "���������",
"vg" => "���������� �-�� (��������������)",
"vi" => "���������� ������� (���)",
"vn" => "�������",
"vu" => "�������",
"wf" => "�-�� ����� � ������",
"ws" => "�����",
"ye" => "�����",
"yt" => "�����",
"yu" => "���������",
"za" => "���",
"zm" => "������",
"zr" => "����",
"zw" => "��������",
);

// The main Translation array
$translation = array(
// Specific charset
"global_charset" => "windows-1251",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar"=> "Statistics for %SERVER generated on %DATE",
"global_bbclone_copyright" => "The BBClone team - ����������� ��������",
"global_last_reset" => "�������� ��������� �� ������������ �� ",
"global_yes" => "��",
"global_no" => "��",

// The error messages
"error_cannot_see_config" =>
"��� ������ ���������� �� ����������� �� �������������� �� BBClone �� ���� ������.",

// Miscellaneous translations
"misc_other" => "����",
"misc_unknown" => "��������",
"misc_second_unit" => "���.",
"misc_ignored" => "���������",

// The Navigation Bar
"navbar_main_site" => "������� ����",
"navbar_configuration" => "������������",
"navbar_global_stats" => "�������� ����������",
"navbar_detailed_stats" => "�������� ����������",
"navbar_time_stats" => "���������� �� �����",
"navbar_language" => "Language",
"navbar_go" => "Go",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "�����",
"dstat_visits" => "���������",
"dstat_extension" => "������",
"dstat_dns" => "��� �� ����",
"dstat_from" => "��������",
"dstat_os" => "����������� �/��",
"dstat_browser" => "�������",
"dstat_visible_rows" => "��������",
"dstat_green_rows" => "������ ������",
"dstat_blue_rows" => "���� ������",
"dstat_red_rows" => "������� ������",
"dstat_search" => "�������",
"dstat_last_page" => "�������� ��������",
"dstat_last_visit" => "�������� ���������",
"dstat_robots" => "������",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "���� ������� �����",
"dstat_prx" => "������ ������",
"dstat_ip" => "IP �����",
"dstat_user_agent" => "������������� �����",
"dstat_nr" => "No",
"dstat_pages" => "��������",
"dstat_visit_length" => "�����",
"dstat_reloads" => "�����������",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global stats words
"gstat_accesses" => "�����������",
"gstat_total_visits" => "��������� ����",
"gstat_total_unique" => "��������� ��������",
"gstat_operating_systems" => "��� %d ����������� �/��",
"gstat_browsers" => "��� %d ��������",
"gstat_extensions" => "��� %d �������",
"gstat_robots" => "��� %d ������",
"gstat_pages" => "��� %d ��������� ��������",
"gstat_origins" => "��� %d ���������",
"gstat_hosts" => "��� %d �������",
"gstat_keys" => "��� %d ������� ����",
"gstat_total" => "����",
"gstat_not_specified" => "��������",

// Time stats words
"tstat_su" => "���",
"tstat_mo" => "���",
"tstat_tu" => "��",
"tstat_we" => "��",
"tstat_th" => "���",
"tstat_fr" => "���",
"tstat_sa" => "���",

"tstat_full_su" => "Sunday",
"tstat_full_mo" => "Monday",
"tstat_full_tu" => "Tuesday",
"tstat_full_we" => "Wednesday",
"tstat_full_th" => "Thursday",
"tstat_full_fr" => "Friday",
"tstat_full_sa" => "Saturday",

"tstat_jan" => "���",
"tstat_feb" => "���",
"tstat_mar" => "���",
"tstat_apr" => "���",
"tstat_may" => "���",
"tstat_jun" => "���",
"tstat_jul" => "���",
"tstat_aug" => "���",
"tstat_sep" => "���",
"tstat_oct" => "���",
"tstat_nov" => "���",
"tstat_dec" => "���",

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

"tstat_last_day" => "�������� ���",
"tstat_last_week" => "�������� �������",
"tstat_last_month" => "�������� �����",
"tstat_last_year" => "�������� ������",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "page generated in ",
"seconds" => " seconds",

// Configuration page words and sentences
"config_variable_name" => "��� �� ����������",
"config_variable_value" => "��������",
"config_explanations" => "��������",

"config_BBC_MAINSITE" =>
"��� � �������� �������� �� ���� ����������, ��� �������������� ����� �� BBClone �� ���� �������� ������ ��� ���������� ��������������. ���������� �� ������������ � �������� ����������. � ������, �� ������ ������� ���� �� ������ �� ����� �����, �������� �� ��������� �� �������� �������� ������ ������ �����.<br />
�������:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"�� ������������ BBClone ������� ������ ���������. � ������, �� �� ������� ����, ������ �� ��������� ������� ���� ������������ ���� �����.<br />
�������:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"���������� �� �������������� ����� �� ������ bbclon� ��������.<br />
���������� ������� �� �����������:<br />
<ul>
<li>%SERVER: ��� �� �������,</li>
<li>%DATE: ������ ����.</li>
</ul>
HTML ������ ���� �� ���������.<br />
Examples:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My Statistics from %DATE look like this:&quot;;<br />",

"config_BBC_LANGUAGE" =>
"������ �� ������������ �� BBClone, � ������, �� �� � ������������ �� �������a.
��������� �� �������� �����:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb, nl, pl, pt, pt-br, ro, ru,
sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"���� ���������� �������� ��������� �� ����� �������� ��������� � �������. ����� ��������� �� ����� ��������� � ������� �� ���� ������ �� ���� ��������� ���� ���� ���������, ������ ��� �������������� ��������� �� �������� �������� �����. �� ������������ � �� ����� ��� ���������� �� 30 ������ (1800 �������), �� � ���������� �� ������ �����, ������ �� �������� ����� ��������.<br />
�������:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"����� ������ ������� �� ����� � ���������� ����������?
�� ������������ � 100, �������������� � �� �� ���������� ������ �� 500 �� �� ��������� �����������.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"������������ \$BBC_DETAILED_STAT_FIELDS  �������� ��������, ��������� � ���������� ����������. ���������� ������ ��:
<ul>
<li>id&nbsp;=&gt;&nbsp; x-��� ����� ��������� ���� ������������ �� ������������</li>
<li>time&nbsp;=&gt;&nbsp;�������, ������ � ������������ ���������� ���������</li>
<li>visits&nbsp;=&gt;&nbsp;����� ���� ��������� �� �������� ���������</li>
<li>dns&nbsp;=&gt;&nbsp;����� �� ����� �� ����������</li>
<li>ip&nbsp;=&gt;&nbsp;IP ������ �� ����������</li>
<li>os&nbsp;=&gt;&nbsp;������������� ������� (��� � �������� �/��� �����)</li>
<li>browser&nbsp;=&gt;&nbsp;��������, ��������� �� ������������� �� ��������
</li>
<li>ext&nbsp;=&gt;&nbsp;��������� ��� ������������ �� ����������</li>
<li>referer&nbsp;=&gt;&nbsp;The link from which a visitor came (if available)</li>
<li>page&nbsp;=&gt;&nbsp;The last visited page</li>
<li>search&nbsp;=&gt;&nbsp;The search query a visitor used (if available)</li>
</ul>
������ ���, � ����� ��� ��������� ��������, �� ���� ��������� �� �����������.<br />
�������:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"� ������, �� ������� �� ������� �� ������� � ������ ������ ����, ��� ������ �� ��������� ������� � ������, ����������� ���� ����������. ������������� ��������� ������� ������� �����,
������������� - ������.<br />
�������:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"���� ����� ��������, ���� IP �������� �� ����� ������������� ����� �� ������� ��� ��. ������� �� ������� ����� �� ����� ������ ���������� �� ����������, �� ������� ������������� ���� ���������� �� ������ ����� ����, ��� ������������ DNS ������� �� �����, � ��������� ��������� ��� �� ���������� ����� �������. ���������� �� ���� ���������� ���� �� ���� ��������.<br />
�������:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"�� ������������ BBClone ������� ������ ��������� ��� ������������ �� �����, ������ ���� ���� ������� ���������� �� ������������� �� �������. ��� ����� ������������ �� ���������� ���� ���������� ���������, ������ �� ��������� ������ �� �������� ���� �������� ���� ����������.<br />
�������:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"���� ����� ���� �� �� �������� �� �� �� ��������� ���������� IP ������ ��� ����� �� ��������. ��� ������� �� �������� ������� ������, ����������� ������� �� ����������.<br />
�������:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"� ������, �� �� ������� ���������� ��������� �� ����� �������� ��� ������ �������� � �������� ����������, ������ �� �������� ���� ��� ������ ������� ���� �� ��������� �� �������� ��� ����������. ��� �������� ������� ������� ����, ����������� ������� �� ����������.<br />
�������:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"���� ���������� �������� ������, �� ����� �� ����� ��������� ��������. �� ������������ �� �� ��������� � ������� �� ��� ���������, ���� �� ������� � ���������� ���� �� ������������. � ������, �� �� ������� �� ������� ������� ������, ������� �� ������������ ��������
&quot;2&quot;, ��� ����� ���� �������� ������ �� ����� ������������.<br />
�������:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"���� ����� �������� ������, �� ����� BBClone ��������� ���� ���������� �� ����. �� ������������ ���� �� ����������� ���� ����������� IP ������, ����� ���� ������ ��������� � �������� ������. ��� �����, ������ ���������� ����� �� ������� ��� ������ �������, �������������� �� ���� ����� ���� �� ���� ��-������ ���������, ���� ���� ����� ��������� ���� ��������� ��� ��������� �� �������������� �����.<br />
�������:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"������ ������� �� ��������� ������������, ������ �� ���������� ���� ���������� � ������������ �� ���� ������� ��� �������� ���������. �� ���������� �� ������������ ������������ ���� ����, � �������� ������ �������� �� ����������� ������������ ����� ������ ;).<br />
�������:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"������������ �� ������� � ��������� ���� �� �������� ������� ���������� �����, ��������
�� ����� � ��������� �� ���������� ���������. ��������� ���� �����, ��� ������ �� ��������� ���� ����� � ���������� �� �������� ���������� �� ����� access.php ��� ���� �� ������� �������� �������� �� ��������� � �����������. ������������ ��������� �� ���� �������� ���
����������� &quot;not_specified&quot;  �� �� �� ������� ������ ���������� �����������.<br />
�������:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>
