<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: pl.php 2957 2011-10-07 06:56:52Z zhoufei $
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
 * Translated by: Dariusz Kramin, kramer@irc.pl
 */

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "Wyspa Ascension",
"ad" => "Andora",
"ae" => "Zjednoczone Emiraty Arabskie",
"aero" => "Aero",
"af" => "Afganistan",
"ag" => "Antigua i Barbuda",
"ai" => "Anguila",
"al" => "Albania",
"am" => "Armenia",
"an" => "Antyle Holenderskie",
"ao" => "Angola",
"aq" => "Antarktyka",
"ar" => "Argentyna",
"arpa" => "B��d DNS",
"as" => "Samoa Ameryka�ska",
"at" => "Austria",
"au" => "Australia",
"aw" => "Aruba",
"az" => "Azerbejd�an",
"ba" => "Bo�nia i Hercegowina",
"bb" => "Barbados",
"bd" => "Bangladesz",
"be" => "Belgia",
"bf" => "Burkina Faso",
"bg" => "Bu�garia",
"bh" => "Bahrain",
"bi" => "Burundi",
"biz" => "Business",
"bj" => "Benin",
"bm" => "Bermudy",
"bn" => "Brunea",
"bo" => "Boliwia",
"br" => "Brazylia",
"bs" => "Bahamy",
"bt" => "Bhutan",
"bv" => "Bouvet Island",
"bw" => "Botswana",
"by" => "Bia�oru�",
"bz" => "Belize",
"ca" => "Kanada",
"cc" => "Wyspy Kokosowe",
"cd" => "Kongo",
"cf" => "Republika Afyki",
"cg" => "Kongo",
"ch" => "Szwajcaria",
"ci" => "Wybrze�e Ko�ci S�oniowej",
"ck" => "Wyspy Cooka",
"cl" => "Czile",
"cm" => "Kamerun",
"cn" => "Chiny",
"co" => "Kolumbia",
"com" => "Komercyjne",
"coop" => "Coop",
"cr" => "Kostaryka",
"cs" => "Serbia and Montenegro",
"cu" => "Kuba",
"cv" => "Cape Verde",
"cx" => "Wyspy Boego Narodzenia",
"cy" => "Cypr",
"cz" => "Czechy",
"de" => "Niemcy",
"dj" => "Djibouti",
"dk" => "Dania",
"dm" => "Dominika",
"do" => "Dominikana",
"dz" => "Algeria",
"ec" => "Ekwador",
"edu" => "Edukacja",
"ee" => "Estonia",
"eg" => "Egipt",
"eh" => "Western Sahara",
"er" => "Erytrea",
"es" => "Hiszpania",
"et" => "Etiopia",
"eu" => "European Union",
"fi" => "Finlandia",
"fj" => "Fiji",
"fk" => "Falklandy",
"fm" => "Mikronezja",
"fo" => "Wyspy Faroe",
"fr" => "Francja",
"ga" => "Gabon",
"gb" => "Zjednoczone Kr�lestwo Brytyjskie",
"gd" => "Grenada",
"ge" => "Georgia",
"gf" => "Gujana Francuska",
"gg" => "Wyspa Guernsey",
"gh" => "Ghana",
"gi" => "Gibraltar",
"gl" => "Grenlandia",
"gm" => "Gambia",
"gn" => "Gwinea",
"gov" => "Rz�dy",
"gp" => "Gwadelupa",
"gq" => "Gwinea R�wnikowa",
"gr" => "Grecja",
"gs" => "Po�udniowa Georgia i Wyspy Sandwitch",
"gt" => "Gwatemala",
"gu" => "Guam",
"gw" => "Gwinea-Bissau",
"gy" => "Gujana",
"hk" => "Hong Kong",
"hm" => "Wyspu Mc Donalda",
"hn" => "Honduras",
"hr" => "Chorwacja",
"ht" => "Haiti",
"hu" => "W�gry",
"id" => "Indonezja",
"ie" => "Irlandia",
"il" => "Izrael",
"im" => "Wyspa Man",
"in" => "Indie",
"info" => "Information",
"int" => "Organizacje",
"io" => "Brytyjskie Terytorium Oceanu Indyjskiego",
"iq" => "Irak",
"ir" => "Iran",
"is" => "Islandia",
"it" => "W�ochy",
"je" => "Jersey",
"jm" => "Jamajka",
"jo" => "Jordania",
"jp" => "Japonia",
"ke" => "Kenja",
"kg" => "Kirgistan",
"kh" => "Kamboda",
"ki" => "Kiribati",
"km" => "Komory",
"kn" => "Saint Kitts i Nevis",
"kp" => "North Korea",
"kr" => "Korea",
"kw" => "Kuwejt",
"ky" => "Kajmany",
"kz" => "Kazahstan",
"la" => "Laos",
"lb" => "Lebanon",
"lc" => "�wi�ta ucja",
"li" => "Lichtenstein",
"lk" => "Sri Lanka",
"lr" => "Liberia",
"ls" => "Lesotho",
"lt" => "Litwa",
"lu" => "Luxemburg",
"lv" => "�otwa",
"ly" => "Libia",
"ma" => "Maroko",
"mc" => "Monako",
"md" => "Mo�dawia",
"mg" => "Madagaskar",
"mh" => "Wyspy Marshalla",
"mil" => "Wojsko USA",
"mk" => "Macedonia",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolia",
"mo" => "Macau",
"mp" => "P�nocne Wyspy Mariana",
"mq" => "Martinika",
"mr" => "Mauretania",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauritius",
"museum" => "Museum",
"mv" => "Malediwy",
"mw" => "Malawi",
"mx" => "Meksyk",
"my" => "Malezja",
"mz" => "Mozambik",
"na" => "Namibia",
"name" => "Personal",
"nc" => "Nowa Kaledonia",
"ne" => "Niger",
"net" => "Sieci",
"nf" => "Wyspy Norfolk",
"ng" => "Nigeria",
"ni" => "Nikaragua",
"nl" => "Holandia",
"no" => "Norwegia",
"np" => "Nepal",
"nr" => "Nauru",
"nu" => "Niue",
"numeric" => "Bez revDNS",
"nz" => "Nowa Zelandia",
"om" => "Oman",
"org" => "Organizacje",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Polinezja Fracuska",
"pg" => "Papua Nowa Gwinea",
"ph" => "Filipiny",
"pk" => "Pakistan",
"pl" => "Polska",
"pm" => "St. Pierre i Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rico",
"pro" => "Professional",
"ps" => "Palestina",
"pt" => "Portugalia",
"pw" => "Palau",
"py" => "Paragwaj",
"qa" => "Katar",
"re" => "Reunion",
"ro" => "Rumunia",
"ru" => "Federacja Rosyjska",
"rw" => "Rwanda",
"sa" => "Arabia Saudyjska",
"sb" => "Wyspy Salomona",
"sc" => "Seszele",
"sd" => "Sudan",
"se" => "Szwecja",
"sg" => "Singapur",
"sh" => "Wyspa �wi�tej Heleny",
"si" => "S�owenia",
"sj" => "Svalbard i wyspy Jan Mayen",
"sk" => "S�owacja",
"sl" => "Sierra Leone",
"sm" => "San Marino",
"sn" => "Senegal",
"so" => "Somalia",
"sr" => "Surinam",
"st" => "Sao Tome",
"su" => "Zwi�zek Radziecki",
"sv" => "Salwador",
"sy" => "Syria",
"sz" => "Swaziland",
"tc" => "Wyspy Kaiko",
"td" => "Czad",
"tf" => "Francuskie Terytorium Po�udniowe",
"tg" => "Togo",
"th" => "Tailandia",
"tj" => "Tajikistan",
"tk" => "Tokelau",
"tl" => "Wschodni Timor",
"tm" => "Turkmenistan",
"tn" => "Tunezja",
"to" => "Tonga",
"tp" => "Wschodni Timor",
"tr" => "Turcja",
"tt" => "Trinidad i Tobago",
"tv" => "Tuvalu",
"tw" => "Tajwan",
"tz" => "Tanzania",
"ua" => "Ukraina",
"ug" => "Uganda",
"uk" => "Zjednoczone Kr�lestwo",
"um" => "Pozaterytorialne wyspy USA",
"unknown" => "Nieznany",
"us" => "Stany Zjednoczone",
"uy" => "Urugwaj",
"uz" => "Uzbekistan",
"va" => "Watykan",
"vc" => "St. Vincent i Grenadines",
"ve" => "Wenezuela",
"vg" => "Brytyjskie Wyspy Dziewicze",
"vi" => "Wyspy Dziewicze (U.S.)",
"vn" => "Vietnam",
"vu" => "Vanuatu",
"wf" => "Wallis i wyspy Futuna",
"ws" => "Samoa",
"ye" => "Jemen",
"yt" => "Majott",
"yu" => "Serbia and Montenegro",
"za" => "Po�udniowa Afryka",
"zm" => "Zambia",
"zr" => "Zair",
"zw" => "Zimbabwe",
);

// The main Translation array
$translation = array(
// Specific charset
"global_charset" => "iso-8859-2",

// Date format (used with date())
"global_time_format" => "j M, H:i:s",
"global_day_format" => "l j F Y",
"global_hours_format" => "l j F Y G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar" => "Statystyki dla %SERVER generowane %DATE",
"global_bbclone_copyright" => "Grupa BBClone - Na licencji",
"global_last_reset" => "Statystyki ostatnich wyzerowanie",
"global_yes" => "tak",
"global_no" => "nie",

// The error messages
"error_cannot_see_config" =>
"Nie posiadasz uprawnie� do ogl�dania konfiguracji statystyk.",

// Miscellaneous translations
"misc_other" => "Inne",
"misc_unknown" => "Nieznany",
"misc_second_unit" => "s",
"misc_ignored" => "Ignored",

// The Navigation Bar
"navbar_main_site" => "Strona G��wna",
"navbar_configuration" => "Konfiguracja",
"navbar_global_stats" => "G��wna statystyka",
"navbar_detailed_stats" => "Statystyka szczeg�owa",
"navbar_time_stats" => "Statystyka czasowa",
"navbar_language" => "J�zyk",
"navbar_go" => "przejd�",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "Czas",
"dstat_visits" => "Wizyt",
"dstat_extension" => "Rozszerzenie",
"dstat_dns" => "Hostname",
"dstat_from" => "OD",
"dstat_os" => "System",
"dstat_browser" => "Przegl�darka",
"dstat_visible_rows" => "Widoczne odwiedziny",
"dstat_green_rows" => "zielone rz�dy",
"dstat_blue_rows" => "niebieskie rz�dy",
"dstat_red_rows" => "czerwone rz�dy",
"dstat_search" => "Search",
"dstat_last_page" => "Last Page",
"dstat_last_visit" => "ostatnie wizyty",
"dstat_robots" => "roboty",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "No data available",
"dstat_prx" => "Proxy Server",
"dstat_ip" => "IP Address",
"dstat_user_agent" => "User Agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Pages",
"dstat_visit_length" => "Visit Length",
"dstat_reloads" => "Reloads",
"dstat_whois_information" => "Wyszukiwanie informacji na ten IP Address",

// Global stats words
"gstat_accesses" => "Dost�py",
"gstat_total_visits" => "Wszytkie wizyty",
"gstat_total_unique" => "Unikalne adresy",
"gstat_operating_systems" => "%d pierwszych Systemy operacyjne",
"gstat_browsers" => "%d pierwszych Przegl�darki",
"gstat_extensions" => "%d pierwszych rozszerze�",
"gstat_robots" => "%d pierwszych Roboty",
"gstat_pages" => "%d pierwszych stron",
"gstat_origins" => "%d pierwszych �r�de�",
"gstat_hosts" => "Top %d Hosts",
"gstat_keys" => "Top %d Keywords",
"gstat_total" => "Razem",
"gstat_not_specified" => "Nie wyszczeg�lnione",

// Time stats words
"tstat_su" => "Nie",
"tstat_mo" => "Pon",
"tstat_tu" => "Wto",
"tstat_we" => "�ro",
"tstat_th" => "Czw",
"tstat_fr" => "Pi�",
"tstat_sa" => "Sob",

"tstat_full_su" => "Niedziela",
"tstat_full_mo" => "Poniedzia�ek",
"tstat_full_tu" => "Wtorek",
"tstat_full_we" => "�roda",
"tstat_full_th" => "Thursday",
"tstat_full_fr" => "Pi�tek",
"tstat_full_sa" => "Sobota",

"tstat_jan" => "Sty",
"tstat_feb" => "Lut",
"tstat_mar" => "Mar",
"tstat_apr" => "Kwi",
"tstat_may" => "Maj",
"tstat_jun" => "Cze",
"tstat_jul" => "Lip",
"tstat_aug" => "Sie",
"tstat_sep" => "Wrz",
"tstat_oct" => "Pa�",
"tstat_nov" => "Lis",
"tstat_dec" => "Gru",

"tstat_full_jan" => "January",
"tstat_full_feb" => "Luty",
"tstat_full_mar" => "Marca",
"tstat_full_apr" => "April",
"tstat_full_may" => "Maja",
"tstat_full_jun" => "Czerwiec",
"tstat_full_jul" => "Lipiec",
"tstat_full_aug" => "Sierpie�",
"tstat_full_sep" => "wrze�nia",
"tstat_full_oct" => "October",
"tstat_full_nov" => "Listopad",
"tstat_full_dec" => "Grudzie�",

"tstat_last_day" => "Ostani dzie�",
"tstat_last_week" => "Ostani tydzie�",
"tstat_last_month" => "Ostatni miesi�c",
"tstat_last_year" => "Ostatni rok",
"tstat_average" => "�rednia",

// Loadtime notice
"generated" => "strona zosta�a wygenerowana w ",
"seconds" => " sekund",

// Configuration page words and sentences
"config_variable_name" => "Nazwa zmiennej",
"config_variable_value" => "Warto�� zmiennej",
"config_explanations" => "Wyja�nienie",

"config_BBC_MAINSITE" =>
"If this variable has been set, a link to the specified location will be
generated. The default value is pointing to the parent directory. In case your
main site is located elsewhere, you probably want to adjust the value to suit
your needs.<br />
Examples:<br />
\$BBC_MAINSITE = &quot;http://www.myserver.com/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone defaults to revealing the stats' settings. In case this behavior isn't
desired you can deny access to it by deactivating the option.<br />
Examples:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Ta linijka jest widoczna we wszystkich stonach statystyki.<br />
Znane makrodefinicje to:<br />
<ul>
<li>%SERVER: nazwa serwera,</li>
<li>%DATE: obecja data.</li>
</ul>
Tagi HTML s� dozwolone.<br />
Examples:<br />
\$BBC_TITLEBAR = &quot;Statistics for %SERVER generated the %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;My stats from %DATE look like this:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone's default language, in case it hasn't been specified by the browser.
The following languages are supported:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb, nl, pl, pt, pt-br, ro, ru,
sk, sl, sv, th, tr, ua, zh-cn and zh-tw</p>",

"config_BBC_MAXTIME" =>
"This variable defines the length of an unique visit in seconds. Each hit from
the same visitor within this period will be considered as one visit, as long as
two successive hits don't exceed the specified limit. Default is the de facto
web standard of 30 minutes (1800 seconds), but depending on your needs you may
wish to assign a different value.<br />
Examples:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"How many entries you want to have listed in the detailed stats? The default
value is 100. It's recommended not to set it higher than 500 to avoid too heavy
load.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"The variable \$BBC_DETAILED_STAT_FIELDS determines the columns to be displayed
in the detailed statistics. Possible columns are:
<ul>
<li>id&nbsp;=&gt;&nbsp;The x-th visitor since you've started counting</li>
<li>time&nbsp;=&gt;&nbsp;The time at which the last hit was registerred</li>
<li>visits&nbsp;=&gt;&nbsp;The hits of one unique visitor</li>
<li>dns&nbsp;=&gt;&nbsp;Visitor's hostname</li>
<li>ip&nbsp;=&gt;&nbsp;Visitor's IP address</li>
<li>os&nbsp;=&gt;&nbsp;the operating system (if available and/or no robot)</li>
<li>browser&nbsp;=&gt;&nbsp;The software used for establishing the connection
</li>
<li>ext&nbsp;=&gt;&nbsp;Visitor's country or extension</li>
<li>referer&nbsp;=&gt;&nbsp;The link from which a visitor came (if available)
</li>
<li>page&nbsp;=&gt;&nbsp;The last visited page</li>
<li>search&nbsp;=&gt;&nbsp;The search query a visitor used (if available)</li>
</ul>
The same order you've arranged the columns will be used for display.<br />
Examples:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"In case the server time doesn't match your local timezone, you can adjust the
time in minutes by using this switch. Negative values will set back the time,
positive ones will set it forth.<br />
Examples:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"This options defines, whether IP addresses should be resolved to hostnames or
not. While hostnames tell a lot more about the visitor, resolving them may
considerably slow down your site, if the DNS servers used are slow, limited in
their capacity or otherwise unreliable. Setting this variable may solve the
problem.<br />
Examples:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"BBClone's default is to show hits in the time stats, because it gives a quite
useful Impression from the actual server load. If, however, you prefer to use
unique visits as base for your time stats, you can change the way of counting
by setting this variable.<br />
Examples:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"This option can be used to exclude particular IP addresses or address ranges
from counting. In case you want to add several expressions use a comma as
separator.<br />
Examples:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"In case you don't want to have particular referrers from your visitors listed
in your ranking or detailed stats, you can specify one or more keywords used
for blocking if a referrer matches up against them. If you use more keywords,
please use a comma as separator.<br />
Examples:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"You can use this option to determine the treatment of robots. The default is
to ignore them in the top hosts ranking but leave them in the remaining
stats. If you don't want to see any robots at all you can set this option to
&quot;2&quot;, then only human visits will be taken into account.<br />
Examples:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"This option defines how BBClone tells one visitor from another. Default is to
use the IP address only, which provides realistic figures in most cases. If,
however, your visitors often are hidden behind proxy servers, deactivation of
this option could provide more realistic figures, since a new visitor will be
assumed by the time the user agent has changed.<br />
Examples:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Whenever you wish to reset your stats you can activate this switch and have
them deleted by the next visit. Don't forget to deactivate it afterwards, else
you'll probably experience unusually low traffic ;).<br />
Examples:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Host and referrer stats can generate a huge amount of data, however mostly
caused by one time visitors. By enabling this switch you can purge these
entries and considerably shrink access.php in its size without affecting your
actual visible host and referrer ranking. The amount of hits will be added to
the &quot;not_specified&quot; entries to keep the overall score intact.<br />
Examples:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>