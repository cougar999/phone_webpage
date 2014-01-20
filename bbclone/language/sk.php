<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: sk.php 2957 2011-10-07 06:56:52Z zhoufei $
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
 * Translated by: Zdeno Sekerak <trsek@hotmail.com>
 */

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "Ascension",
"ad" => "Andorra",
"ae" => "Spojen� arabsk� emir�ty",
"aero" => "Aero",
"af" => "Afghanist�n",
"ag" => "Antigua a Barbuda",
"ai" => "Anguilla",
"al" => "Alb�nsko",
"am" => "Arm�nia",
"an" => "Holandsk� Antily",
"ao" => "Angola",
"aq" => "Antarkt�da",
"ar" => "Argent�na",
"arpa" => "Sie�ova infra�trukt�ra",
"as" => "Americk� Samoa",
"at" => "Rak�sko",
"au" => "Austr�lia",
"aw" => "Aruba",
"az" => "Azerbajd��n",
"ba" => "Bosna a Hercegovina",
"bb" => "Barbados",
"bd" => "Banglad�",
"be" => "Belgicko",
"bf" => "Burkina Faso",
"bg" => "Bulharsko",
"bh" => "Bahrajn",
"bi" => "Burundi",
"biz" => "Biznis servery",
"bj" => "Benin",
"bm" => "Bermudy",
"bn" => "Brunej",
"bo" => "Bol�via",
"br" => "Braz�lia",
"bs" => "Bahamy",
"bt" => "Bhut�n",
"bv" => "Bouvet",
"bw" => "Botswana",
"by" => "Bielorusko",
"bz" => "Belizia",
"ca" => "Kanada",
"cc" => "Kokosov� ostrovy",
"cd" => "Kongo, Demokratick� republika",
"cf" => "Stredoafrick� republika",
"cg" => "Kongo",
"ch" => "�vaj�iarsko",
"ci" => "Pobre�ie slonoviny",
"ck" => "Cookov� ostrovy",
"cl" => "Chile",
"cm" => "Kamerun",
"cn" => "��na",
"co" => "Kolumbia",
"com" => "Komer�n� servery",
"coop" => "Coop",
"cr" => "Kostarika",
"cs" => "Serbia and Montenegro",
"cu" => "Kuba",
"cv" => "Kapverdy",
"cx" => "Ve�kono�n� ostrov",
"cy" => "Cyprus",
"cz" => "�esk� republika",
"de" => "Nemecko",
"dj" => "D�ibuti",
"dk" => "D�nsko",
"dm" => "Dominika",
"do" => "Dominik�nska republika",
"dz" => "Al��rsko",
"ec" => "Ekv�dor",
"edu" => "�kolstvo",
"ee" => "Est�nsko",
"eg" => "Egypt",
"eh" => "Western Sahara",
"er" => "Eritrea",
"es" => "�panielsko",
"et" => "Eti�pia",
"eu" => "European Union",
"fi" => "F�nsko",
"fj" => "Fid�i",
"fk" => "Falklandy",
"fm" => "Mikron�zia",
"fo" => "Faersk� ostrovy",
"fr" => "Franc�zsko",
"ga" => "Gabun",
"gb" => "Ve�k� Brit�nia",
"gd" => "Grenada",
"ge" => "Georgie",
"gf" => "Franc�zska Guyana",
"gg" => "Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Gr�nsko",
"gm" => "Gambie",
"gn" => "Guinea",
"gov" => "Vl�dne servery USA",
"gp" => "Guadeloupe",
"gq" => "Rovn�kov� Guinea",
"gr" => "Gr�cko",
"gs" => "Juzn� Georgie a Ju�n� Sandwichov� ostrovy",
"gt" => "Guatemala",
"gu" => "Guam",
"gw" => "Guinea-Bissau",
"gy" => "Guyana",
"hk" => "Hongkong",
"hm" => "Ostrovy Heard a McDonald",
"hn" => "Honduras",
"hr" => "Chorv�tsko",
"ht" => "Haiti",
"hu" => "Ma�arsko",
"id" => "Indon�zia",
"ie" => "Irsko",
"il" => "Izrael",
"im" => "Isle of Man",
"in" => "India",
"info" => "Informa�n� servery",
"int" => "Medzin�rodn� organiz�cie",
"io" => "Britsk� indickooce�nsk� terit�rium",
"iq" => "Irak",
"ir" => "Ir�n",
"is" => "Island",
"it" => "Taliansko",
"je" => "Jersey",
"jm" => "Jamajka",
"jo" => "Jord�nsko",
"jp" => "Japonsko",
"ke" => "Ke�a",
"kg" => "Kyrgizsko",
"kh" => "Kambod�a",
"ki" => "Kiribati",
"km" => "Komory",
"kn" => "Svat� Kitts a Nevis",
"kp" => "North Korea",
"kr" => "K�rea",
"kw" => "Kuvajt",
"ky" => "Kajmansk� ostrovy",
"kz" => "Kazachstan",
"la" => "Laos",
"lb" => "Libanon",
"lc" => "Svat� Lucia",
"li" => "Lichtej�tansko",
"lk" => "Sr� Lanka",
"lr" => "Lib�ria",
"ls" => "Lesotho",
"lt" => "Loty�sko",
"lu" => "Luxembursko",
"lv" => "Litva",
"ly" => "L�bya",
"ma" => "Maroko",
"mc" => "Monako",
"md" => "Moldavsko",
"mg" => "Madagaskar",
"mh" => "Mar��love ostrovy",
"mil" => "Vojensk� servery USA",
"mk" => "Maced�nsko",
"ml" => "Mali",
"mm" => "Barma (Myanmar)",
"mn" => "Mongolsko",
"mo" => "Macao",
"mp" => "Severn� Mariana",
"mq" => "Martinik",
"mr" => "Mauret�nia",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Maur�tius",
"museum" => "Museum",
"mv" => "Maledivy",
"mw" => "Malawi",
"mx" => "Mexiko",
"my" => "Malajzia",
"mz" => "Mozambik",
"na" => "Nam�bia",
"name" => "Osobn� servery",
"nc" => "Nov� Kaledonia",
"ne" => "Niger",
"net" => "Sie�ov� infra�trukt�ra",
"nf" => "Norfolk",
"ng" => "Nig�ria",
"ni" => "Nikaragua",
"nl" => "Holandsko",
"no" => "N�rsko",
"np" => "Nep�l",
"nr" => "Nauru",
"nu" => "Niue",
"numeric" => "��seln�",
"nz" => "Nov� Z�land",
"om" => "Om�n",
"org" => "Nevl�dne organiz�cie",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Franc�zska Polyn�zia",
"pg" => "Papua - Nov� Guinea",
"ph" => "Filip�ny",
"pk" => "Pakist�n",
"pl" => "Po�sko",
"pm" => "Svat� Pierre a Miquelon",
"pn" => "Pitcairn",
"pr" => "Portoriko",
"pro" => "Professional",
"ps" => "Palest�na",
"pt" => "Portugalsko",
"pw" => "Palau",
"py" => "Paraguay",
"qa" => "Katar",
"re" => "R�union",
"ro" => "Rumunsko",
"ru" => "Rusko",
"rw" => "Rwanda",
"sa" => "Saudsk� Ar�bia",
"sb" => "�alam�nov� ostrovy",
"sc" => "Seychely",
"sd" => "Sud�n",
"se" => "�v�dsko",
"sg" => "Singapur",
"sh" => "Svat� Helena",
"si" => "Slovinsko",
"sj" => "Ostrovy Svalbard a Jan Mayen",
"sk" => "Slovensko",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Som�lsko",
"sr" => "Surinam",
"st" => "Svat� Tom� a Princov ostrov",
"su" => "Sovietsky zvaz",
"sv" => "Salvador",
"sy" => "S�ria",
"sz" => "Svazijsko",
"tc" => "Ostrovy Turks a Caicos",
"td" => "�ad",
"tf" => "Franc�zske ju�n� terit�ria",
"tg" => "Togo",
"th" => "Thajsko",
"tj" => "T�d�ikist�n",
"tk" => "Tokelau",
"tl" => "Timor Leste",
"tm" => "Turkmenist�n",
"tn" => "Tunisko",
"to" => "Tonga",
"tp" => "V�chodn� Timor",
"tr" => "Turecko",
"tt" => "Trinidad a Tobago",
"tv" => "Tuvalu",
"tw" => "Tchajwan",
"tz" => "Tanz�nia",
"ua" => "Ukrajina",
"ug" => "Uganda",
"uk" => "Ve�k� Brit�nia",
"um" => "Mal� vzdialen� ostrovy patriace USA",
"unknown" => "Nezn�my",
"us" => "USA",
"uy" => "Uruguay",
"uz" => "Uzbekist�n",
"va" => "Vatik�n",
"vc" => "Svat� Vincenc a Grenadiny",
"ve" => "Venezuela",
"vg" => "Britsk� Panensk� ostrovy",
"vi" => "Americk� Panensk� ostrovy",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Ostrovy Wallis a Futuna",
"ws" => "Samoa",
"ye" => "Jemen",
"yt" => "Mayotte",
"yu" => "Srbsko a �ierna hora",
"za" => "Ju�n� Afrika",
"zm" => "Zambia",
"zr" => "Zair",
"zw" => "Zimbabwe",
);

// The main Translation array
$translation = array(
// Specific charset
"global_charset" => "iso-8859-2",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar"=> "Statistics for %SERVER generated on %DATE",
"global_bbclone_copyright" => "BBClone t�m - ��ren� pod licenciou",
"global_last_reset" => "�tatistika za�ala od",
"global_yes" => "ano",
"global_no" => "nie",

// The error messages
"error_cannot_see_config" =>
"Nem�te opr�vnenie k prehliadaniu konfigura�n�ho s�boru BBClone.",

// Miscellaneous translations
"misc_other" => "In�",
"misc_unknown" => "Nezn�my",
"misc_second_unit" => "s",
"misc_ignored" => "Ignored",

// The Navigation Bar
"navbar_main_site" => "Hlavn� strana",
"navbar_configuration" => "Konfigur�cia",
"navbar_global_stats" => "S�hrn� �tatistika",
"navbar_detailed_stats" => "Podrobn� �tatistika",
"navbar_time_stats" => "�asov� �tatistika",
"navbar_language" => "Language",
"navbar_go" => "Go",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "�as",
"dstat_visits" => "Nav�t�ven�",
"dstat_extension" => "Dom�na",
"dstat_dns" => "Meno stroja",
"dstat_from" => "Odkia�",
"dstat_os" => "OS",
"dstat_browser" => "Prehliada�",
"dstat_visible_rows" => "Zobrazen�ch pr�stupov",
"dstat_green_rows" => "zelen� riadok",
"dstat_blue_rows" => "modr� riadok",
"dstat_red_rows" => "�erven� riadok",
"dstat_search" => "Search",
"dstat_last_page" => "Last Page",
"dstat_last_visit" => "posledn� n�v�teva",
"dstat_robots" => "roboti",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "D�ta nedostupn�",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "IP Addresa",
"dstat_user_agent" => "U��vatelsk� agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Strana",
"dstat_visit_length" => "D�ka prehliadania",
"dstat_reloads" => "Znova na��tan�",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global stats words
"gstat_accesses" => "Pr�stupy",
"gstat_total_visits" => "Celkom nav�t�ven�",
"gstat_total_unique" => "Celkom jedine�n� adresy",
"gstat_operating_systems" => "Top %d opera�n�ch syst�mov",
"gstat_browsers" => "Top %d prehliada�ov",
"gstat_extensions" => "Top %d dom�n",
"gstat_robots" => "Top %d robotov",
"gstat_pages" => "Top %d nav�t�ven�ch str�nok",
"gstat_origins" => "Top %d zdrojov",
"gstat_hosts" => "Top %d Hosts",
"gstat_keys" => "Top %d Slov",
"gstat_total" => "Celkom",
"gstat_not_specified" => "Neur�en�",

// Time stats words
"tstat_su" => "Ne",
"tstat_mo" => "Po",
"tstat_tu" => "Ut",
"tstat_we" => "St",
"tstat_th" => "�t",
"tstat_fr" => "Pi",
"tstat_sa" => "So",

"tstat_full_su" => "Sunday",
"tstat_full_mo" => "Monday",
"tstat_full_tu" => "Tuesday",
"tstat_full_we" => "Wednesday",
"tstat_full_th" => "Thursday",
"tstat_full_fr" => "Friday",
"tstat_full_sa" => "Saturday",

"tstat_jan" => "Jan",
"tstat_feb" => "Feb",
"tstat_mar" => "Mar",
"tstat_apr" => "Apr",
"tstat_may" => "M�j",
"tstat_jun" => "J�n",
"tstat_jul" => "J�l",
"tstat_aug" => "Aug",
"tstat_sep" => "Sep",
"tstat_oct" => "Okt",
"tstat_nov" => "Nov",
"tstat_dec" => "Dec",

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

"tstat_last_day" => "Posledn� de�",
"tstat_last_week" => "Posledn� t��de�",
"tstat_last_month" => "Posledn� mesiac",
"tstat_last_year" => "Posledn� rok",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "page generated in ",
"seconds" => " seconds",

// Configuration page words and sentences

"config_variable_name" => "N�zov premennej",
"config_variable_value" => "Hodnota promennej",
"config_explanations" => "Vysvetlivky",

"config_BBC_MAINSITE" =>
"Ak nastav�te t�to hodnotu bude generovan� �tatistika pr�ve pre t�to linku.
Defaultne je hodnota spr�vne nastaven� na predch�dzaj�ci (parent) adres�r.
V pr�pade �e va�a str�nka je umiestnen� inde, budete musie� prisp�sobi�
t�to hodnotu na spr�vnu.<br />
Pr�klad:<br />
\$BBC_MAINSITE = &quot;http://www.mojserver.sk/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone defaultne zobraz� nastavenia �tatistiky. V pr�pade �e nechcete
v�etk�m ukazovat ako je nastaven� BBClone mo�ete zak�za� pr�stup k
zobrazeniu nastaven�.<br />
Pr�klad:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Tento titulok bude zobrazen� v naviga�nom panely na v�etk�ch str�nkach
BBClone.<br />
K dispoz�ci s� tieto premenn�:<br />
<ul>
<li>%SERVER: meno serveru,</li>
<li>%DATE: aktu�lny d�tum.</li>
</ul>
HTML tagy s� povolen�.<br />
Pr�klad:<br />
\$BBC_TITLEBAR = &quot;�tatistika pre %SERVER generovan� d�a %DATE&quot;;<br
/>
\$BBC_TITLEBAR = &quot;Moja �tatistika zo d�a %DATE vypad� takto:&quot;;<br
/>",

"config_BBC_LANGUAGE" =>
"BBClone defaultn� jazykov� lokaliz�cia, v pr�pade �e nieje �pecifikovan� v
prehliada�i.
Podporovan� s� nasledovn� jazykov� verzie:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, it, ja, ko, lt, mk, nb, nl, pl,
pt-br, ro, ru,
sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"T�to hodnota definuje d�ku jedine�nej n�v�tevy v sekund�ch. Ka�d� �al��
klik od
toho ist�ho n�v�tevn�ka vr�mci tejto d�ky bude povazovan� za jednu
n�v�tevu.
Default je 30 min�t (1800 sek�nd) �o� je de facto web �tandard, ale v
z�vislosti
na va�ich potreb�ch m��ete t�to hodnotu upravi�.<br />
Pr�klad:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Ko�ko n�v�tev chcete zobrazova� v detailnom v�pise? Default hodnota je 100.
Je doporu�en� nemeni� t�to hodnotu na viac ako 500, preto�e na��tanie bude
trvat
ve�mi dlho",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Hodnota \$BBC_DETAILED_STAT_FIELDS ur�uje ak� st�pce sa zobrazia v
detailnom
�tatistickom v�pise. Dostupn� s� tieto st�pce:
<ul>
<li>id&nbsp;=&gt;&nbsp;Poradie n�v�tevn�ka od za�iatku po��tania</li>
<li>time&nbsp;=&gt;&nbsp;�as kedy bola registrovan� posledn� n�v�teva</li>
<li>visits&nbsp;=&gt;&nbsp;Po�et jedine�n�ch n�v�tev</li>
<li>dns&nbsp;=&gt;&nbsp;Provider n�v�tevn�ka</li>
<li>ip&nbsp;=&gt;&nbsp;IP adresa n�v�tevn�ka</li>
<li>os&nbsp;=&gt;&nbsp;Typ opera�n�ho syst�mu (ak je dostupn� a nie je to
robot)</li>
<li>browser&nbsp;=&gt;&nbsp;Typ prehliada�a pou�it�ho na pripojenie</li>
<li>ext&nbsp;=&gt;&nbsp;Krajina odkia� je n�v�tevn�k</li>
<li>referer&nbsp;=&gt;&nbsp;Linka z ktorej pri�iel n�v�tevn�k (ak je
dostupn�)</li>
<li>page&nbsp;=&gt;&nbsp;The last visited page</li>
<li>search&nbsp;=&gt;&nbsp;The search query a visitor used (if available)</li>
</ul>
Tieto premenn� bud� preh�adne ulo�en� v st�pcoch.<br />
Pr�klad:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os,
browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"V pr�pade �e server nem� spr�vne definovan� �as, m��ete ho prisp�sobi�.
Urob�te to tak �e pripo��tate alebo odpo��tate od tohoto �asu min�ty.
Z�porn� hodnota posunie �as do z�poru, kladn� hodnota napred.<br />
Pr�klad:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Toto nastavenie ur�uje �i sa m� IP adresa prev�dza� na host adresu alebo
nie.
Pokia� host poskytuje o sebe ve�a inform�ci�, v�sledkom m��e by� p�d va�ej
str�nky.
Ak je v� DNS server pomal� alebo m� limitovan� kapacitu zapnite t�to vo�bu
a vyrie�ite probl�m.<br />
Pr�klad:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone defaultne zobrazuje v�etky n�v�tevy v �asovej osi, preto�e to
rob� dobr� dojem pri zobrazen�. Ak v�ak preferujete zobrazenie len
jednozna�n�ch
n�v�tev zme�te t�to hodnotu na 1.<br />
Pr�klad:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Tuto je mo�no definovat rozsah IP adries ktor� s� vyraden� z po��tania.
V pr�pade �e chcete definova� viac adries odde�te ich �iarkou.<br />
Pr�klad:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"V pr�pade �e chcete niektor�ch n�v�tevn�kov nezahr�ova� do detailn�ho
v�pisu,
m��ete �pecifikova� k���ov� slov� ktor� ich charakterizuj�.
Ak budete definova� viac odde�te ich �iarkou.<br />
Pr�klad:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Tuto m��ete definova� po��tanie n�v�tev pre robotov ktor� skenuj�
str�nky.<br />
Pr�klad:<br />
\$BBC_IGNORE_BOTS = 2; - robotov zahrn�� do v�etk�ch �tatist�k<br />
\$BBC_IGNORE_BOTS = 1; - robotov zahrn�� len do �tatist�k robotov<br />
\$BBC_IGNORE_BOTS = &quot;&quot;; - po��ta� iba �ud�",

"config_BBC_IGNORE_AGENT" =>
"T�to vo�ba vrav� ako po��ta� n�v�tevn�kov. Defaultne je pou�it� po��tanie
IP adries,
ktor� je dobr� pre mnoho pr�padov. �asto s� v�ak u��vatelia skryt� za proxy
serverom. Deaktiv�ciou tejto vo�by dosiahnete viacej n�v�tev, preto�e sa
bud� po��ta� nov� n�v�tevn�ci ktor� maj� s�ce rovnak� IP ale rozdielne
nastaven�
hodiny.<br />
Pr�klad:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"T�mto m��ete zru�i� doter�iu �tatistiku. Ak nastav�te na 1 a spust�te,
�tatistika sa zma�e. Nezabudnite potom deaktivovat lebo sa budete divi� ak�
m�te slab� n�v�tevnos�. ;).<br />
Pr�klad:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"N�v�tevn�ci a roboti m��u generovat ve�k� mno�stvo d�t, v pr�pade ve�k�ho
po�tu n�v�tevn�kov v ten ist� �as. Zapnut�m tejto vo�by zmen��te ve�kos�
s�borov a access.php z t�chto d�t vyberie len podstatn�. Mno�stvo pr�stupov
a rebr��ky hodnoten� sa ulo�ia ale strat�te detailn� �tatistiku.<br />
Pr�klad:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>