<?php
/* This file is part of BBClone (The PHP web counter on steroids)
 *
 * CVS File $Id: lt.php 2957 2011-10-07 06:56:52Z zhoufei $
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
 * Translated by: Vilius Simonaitis <maumas98@yahoo.com>
 * Corrected by: Viaèeslav Giedroit <slv@baltas.net>
 */

// The DNS Extensions array
$extensions = array(
"travel" => "Travel",
"asia" => "Asia-Pacific",
"jobs" => "Employment",
"mobi" => "Mobiles",
"cat" => "Catalan",
"tel" => "Contacts",

"ac" => "Prisikëlimo Sala",
"ad" => "Andora",
"ae" => "Jungtiniai arabø emiratai",
"aero" => "Aero",
"af" => "Afghanistanas",
"ag" => "Antigva ir Barbuda",
"ai" => "Angila",
"al" => "Albanija",
"am" => "Armenija",
"an" => "Skandinavø Antilai",
"ao" => "Angola",
"aq" => "Antarktika",
"ar" => "Argentina",
"arpa" => "Klaidos",
"as" => "Amerikos Samoa",
"at" => "Austrija",
"au" => "Australija",
"aw" => "Aruba",
"az" => "Azerbaidþianas",
"ba" => "Bosnija and Hercogovina",
"bb" => "Barbadosas",
"bd" => "Bangladeðas",
"be" => "Belgija",
"bf" => "Burkina Faso",
"bg" => "Bulgarija",
"bh" => "Bachrainas",
"bi" => "Burundi",
"biz" => "Verslas",
"bj" => "Beninas",
"bm" => "Bermudai",
"bn" => "Brunëjus",
"bo" => "Bolivija",
"br" => "Brazilija",
"bs" => "Bahamai",
"bt" => "Bhutanas",
"bv" => "Bouvet Island",
"bw" => "Botsvana",
"by" => "Belarus",
"bz" => "Belizë",
"ca" => "Kanada",
"cc" => "Kokoso Salos",
"cd" => "Kongas",
"cf" => "Centrinës Afrikos Respublika",
"cg" => "Kongas",
"ch" => "Ðveicarija",
"ci" => "Ivory Coast",
"ck" => "Gegutës Salos",
"cl" => "Èilë",
"cm" => "Kamerûnas",
"cn" => "Kinija",
"co" => "Kolombija",
"com" => ".com",
"coop" => "Coop",
"cr" => "Kosta Rika",
"cs" => "Serbia and Montenegro",
"cu" => "Kuba",
"cv" => "Cape Verde",
"cx" => "Kalëdø Salos",
"cy" => "Kipras",
"cz" => "Èekijos respublika",
"de" => "Vokietija",
"dj" => "Djibouti",
"dk" => "Danija",
"dm" => "Dominika",
"do" => "Dominikos Respublika",
"dz" => "Algerija",
"ec" => "Ekvadoras",
"edu" => ".edu",
"ee" => "Estija",
"eg" => "Egiptas",
"eh" => "Western Sahara",
"er" => "Eritrea",
"es" => "Ispanija",
"et" => "Etiopija",
"eu" => "European Union",
"fi" => "Suomija",
"fj" => "Fidþi",
"fk" => "Folklando Salos",
"fm" => "Mikronezija",
"fo" => "Faraonø Salos",
"fr" => "Prancûzija",
"ga" => "Gabonas",
"gb" => "Jungtinës Karalystës",
"gd" => "Grenada",
"ge" => "Georgija",
"gf" => "Prancûzø Gujana",
"gg" => "Guernsey",
"gh" => "Gana",
"gi" => "Gibraltaras",
"gl" => "Greenland'as",
"gm" => "Gambija",
"gn" => "Gvinëja",
"gov" => "Vyriausybë (.gov)",
"gp" => "Gvadelupë",
"gq" => "Ekvatorinë Gvinëja",
"gr" => "Graikija",
"gs" => "Pietø Georgija ir Pietø Buterbrodo Salos",
"gt" => "Gvatemala",
"gu" => "Guama",
"gw" => "Gvinëja-Bissau",
"gy" => "Gujana",
"hk" => "Hong-Kongas",
"hm" => "Heard ir Mc Donald Salos",
"hn" => "Honduras",
"hr" => "Kroatija",
"ht" => "Haitis",
"hu" => "Vangrija",
"id" => "Indonezija",
"ie" => "Airija",
"il" => "Izraelis",
"im" => "Vyro sala",
"in" => "Indija",
"info" => "Informacinës Tarnybos",
"int" => "Tarptautinës Organizacijos",
"io" => "Britø Indijos Vandenyno teritorijos",
"iq" => "Irakas",
"ir" => "Iranas",
"is" => "Islandija",
"it" => "Italija",
"je" => "Dþersis",
"jm" => "Jamaika",
"jo" => "Jordanija",
"jp" => "Japonija",
"ke" => "Kenia",
"kg" => "Kirgistanas",
"kh" => "Cambodþa",
"ki" => "Kiribati",
"km" => "Komorosas",
"kn" => "Saint Kitts and Nevis",
"kp" => "North Korea",
"kr" => "Korëja",
"kw" => "Kuveitas",
"ky" => "Caimanø Salos",
"kz" => "Kazakstanas",
"la" => "Laosas",
"lb" => "Lebanonas",
"lc" => "Ðventoji Liucija",
"li" => "Liechtenðteinas",
"lk" => "Ðri Lanka",
"lr" => "Liberija",
"ls" => "Lesotas",
"lt" => "Lietuva",
"lu" => "Liuksemburgas",
"lv" => "Latvija",
"ly" => "Libija",
"ma" => "Marokas",
"mc" => "Monakas",
"md" => "Moldova",
"mg" => "Madagaskaras",
"mh" => "Marðalo Salos",
"mil" => "Jungtiniø Tautø karinë tarnyba",
"mk" => "Makedonija",
"ml" => "Mali",
"mm" => "Myanmar",
"mn" => "Mongolija",
"mo" => "Makau",
"mp" => "Ðiaurinës Marijanos Salos",
"mq" => "Martinika",
"mr" => "Mauritanija",
"ms" => "Montserrat",
"mt" => "Malta",
"mu" => "Mauricijus",
"museum" => "Museum",
"mv" => "Maldivai",
"mw" => "Malawi",
"mx" => "Meksika",
"my" => "Malaizija",
"mz" => "Mozambikas",
"na" => "Namibija",
"name" => "Personal",
"nc" => "Naujoji Caledonija",
"ne" => "Nigeris",
"net" => ".net",
"nf" => "Norfolk'o Sala",
"ng" => "Nigerija",
"ni" => "Nikaragva",
"nl" => "Netherlands",
"no" => "Norvegija",
"np" => "Nepalas",
"nr" => "Nauru",
"nu" => "Niue",
"numeric" => "Skaitinis",
"nz" => "Naujoji Zelandija",
"om" => "Omanas",
"org" => ".org",
"pa" => "Panama",
"pe" => "Peru",
"pf" => "Prancûzø Polinezija",
"pg" => "Papua Naujoji Gvinëja",
"ph" => "Filipinai",
"pk" => "Pakistanas",
"pl" => "Lenkija",
"pm" => "Ðv. Pierre ir Miquelon",
"pn" => "Pitcairn",
"pr" => "Puerto Rikas",
"pro" => "Professional",
"ps" => "Palestina",
"pt" => "Portugalija",
"pw" => "Palau",
"py" => "Paragvajus",
"qa" => "Qatar",
"re" => "Reunion",
"ro" => "Rumunija",
"ru" => "Rusijos federacija",
"rw" => "Rovanda",
"sa" => "Saudo Arabija",
"sb" => "Saliamono Salos",
"sc" => "Seiðeliai",
"sd" => "Sudanas",
"se" => "Ðvedija",
"sg" => "Singapûras",
"sh" => "Ðv. Helena",
"si" => "Slovënija",
"sj" => "Svalbard and Jan Mayen Islands",
"sk" => "Slovakija",
"sl" => "Siera Leonas",
"sm" => "San Marinas",
"sn" => "Senegalas",
"so" => "Somalia",
"sr" => "Surinamas",
"st" => "Sao Tome and Principe",
"su" => "Savietø Sàjunga",
"sv" => "El Salvadoras",
"sy" => "Sirija",
"sz" => "Swaziland'as",
"tc" => "Turks and Caicos Islands",
"td" => "Èiadas",
"tf" => "Prancûzø Pietø teritorijos",
"tg" => "Togo",
"th" => "Tailandas",
"tj" => "Taikistanas",
"tk" => "Tokelau",
"tl" => "Rytø Timûras",
"tm" => "Turkmenistanas",
"tn" => "Tunisija",
"to" => "Tongas",
"tp" => "Rytø Timûras",
"tr" => "Turkija",
"tt" => "Trinidadas ir Tobagas",
"tv" => "Tuvalu",
"tw" => "Taivan",
"tz" => "Tanzanija",
"ua" => "Ukraina",
"ug" => "Uganda",
"uk" => "Jungtinës Karalystës",
"um" => "US Minor Outlying Islands",
"unknown" => "Neþinoma",
"us" => "JAV",
"uy" => "Urugvajus",
"uz" => "Uzbekistanas",
"va" => "Vatikanas",
"vc" => "Ðv. Vincent ir Grenadines",
"ve" => "Venesuela",
"vg" => "Virginijos Salos (UK)",
"vi" => "Virginijos Salos (US)",
"vn" => "Vietnamas",
"vu" => "Vanuatu",
"wf" => "Uolio irFutunos salos",
"ws" => "Samoa",
"ye" => "Jemenas",
"yt" => "Majotas",
"yu" => "Serbia and Montenegro",
"za" => "Pietø Afrika",
"zm" => "Zambija",
"zr" => "Zairas",
"zw" => "Zimbabvë",
);

// The main Translation array
$translation = array(
// Specific charset
"global_charset" => "windows-1257",

// Date format (used with date())
"global_time_format" => "M jS, H:i:s",
"global_day_format" => "l F jS, Y",
"global_hours_format" => "l F jS, G:00",
"global_month_format" => "F Y",

// Global translation
"global_titlebar"=> "Statistics for %SERVER generated on %DATE",
"global_bbclone_copyright" => "BBClone komanda - Licenzijuota pagal",
"global_last_reset" => "Statistics last reset on",
"global_yes" => "taip",
"global_no" => "ne",

// The error messages
"error_cannot_see_config" =>
"Jums nëra leista matyti BBClone konfigûracijos ðiame serveryje.",

// Miscellaneoux translations
"misc_other" => "Kita",
"misc_unknown" => "Neþinoma",
"misc_second_unit" => "s",
"misc_ignored" => "Ignored",

// The Navigation Bar
"navbar_main_site" => "Titulinis",
"navbar_configuration" => "Konfigûracija",
"navbar_global_stats" => "Globali Statistika",
"navbar_detailed_stats" => "Detali Statistika",
"navbar_time_stats" => "Laikmatis",
"navbar_language" => "Language",
"navbar_go" => "Go",

// Detailed stats words
"dstat_id" => "ID",
"dstat_time" => "Laikas",
"dstat_visits" => "Apsilankymai",
"dstat_extension" => "Iðplëtimas",
"dstat_dns" => "Hostname'as",
"dstat_from" => "Ið kur",
"dstat_os" => "OS",
"dstat_browser" => "Narðyklë",
"dstat_visible_rows" => "Matoma uþklausø",
"dstat_green_rows" => "þalios eilutës",
"dstat_blue_rows" => "mëlynos eilutës",
"dstat_red_rows" => "raudonos eilutës",
"dstat_search" => "Search",
"dstat_last_page" => "Last Page",
"dstat_last_visit" => "paskutinis apsilankymas",
"dstat_robots" => "paieðkos sistemos",
"dstat_my_visit" => "Visits from your IP",
"dstat_no_data" => "Nëra duomenø",
"dstat_prx" => "Proxy Serveris",
"dstat_ip" => "IP Addresas",
"dstat_user_agent" => "User Agent",
"dstat_nr" => "Nr",
"dstat_pages" => "Puslapiai",
"dstat_visit_length" => "Apsilankymo trukmë",
"dstat_reloads" => "Perkrovimai",
"dstat_whois_information" => "Look up information on this IP Adress",

// Global stats words
"gstat_accesses" => "Uþklausos",
"gstat_total_visits" => "Viso apsilankymø",
"gstat_total_unique" => "Viso unikaliø",
"gstat_operating_systems" => "Operacinës sistemos",
"gstat_browsers" => "Narðyklës",
"gstat_extensions" => "%d pirmø plëtiniø",
"gstat_robots" => "Paieðkos sistemos",
"gstat_pages" => "%d pirmø puslapiø",
"gstat_origins" => "%d pirmø nuorodø",
"gstat_hosts" => "%d pirmø Hostø",
"gstat_keys" => "%d pirmø raktaþodþiø",
"gstat_total" => "Viso",
"gstat_not_specified" => "Nenurodyta",

// Time stats words
"tstat_su" => "Sek",
"tstat_mo" => "Pir",
"tstat_tu" => "Ant",
"tstat_we" => "Tre",
"tstat_th" => "Ket",
"tstat_fr" => "Pen",
"tstat_sa" => "Ðeð",

"tstat_full_su" => "Sunday",
"tstat_full_mo" => "Monday",
"tstat_full_tu" => "Tuesday",
"tstat_full_we" => "Wednesday",
"tstat_full_th" => "Thursday",
"tstat_full_fr" => "Friday",
"tstat_full_sa" => "Saturday",

"tstat_jan" => "Sau",
"tstat_feb" => "Vas",
"tstat_mar" => "Kov",
"tstat_apr" => "Bal",
"tstat_may" => "Geg",
"tstat_jun" => "Bir",
"tstat_jul" => "Lie",
"tstat_aug" => "Rugp",
"tstat_sep" => "Rugs",
"tstat_oct" => "Spa",
"tstat_nov" => "Lap",
"tstat_dec" => "Gruo",

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

"tstat_last_day" => "Pastarajà dienà",
"tstat_last_week" => "Pastarajà savaitæ",
"tstat_last_month" => "Pastarajá menësá",
"tstat_last_year" => "Pastaraisiais metais",
"tstat_average" => "Average",

// Loadtime notice
"generated" => "page generated in ",
"seconds" => " seconds",

// Configuration page words and sentences
"config_variable_name" => "Kintamojo vardas",
"config_variable_value" => "Kintamojo reikðmë",
"config_explanations" => "Paaiðkinimas",

"config_BBC_MAINSITE" =>
"Ðis kintamasis nusako nuorodà á svetainæ. Pagal nutylëjimà, svetainës
adresu laikoma aukðtesnë direktorija. Jei Jûsø svetainë yra kur nors kitur,
galite pritakyti ðià nuorodà savo reikmëms.<br />
Pavyzdþiai:<br />
\$BBC_MAINSITE = &quot;http://www.svetaine.lt/&quot;<br />
\$BBC_MAINSITE = &quot;..&quot;<br />
\$BBC_MAINSITE = &quot;&quot;;",

"config_BBC_SHOW_CONFIG" =>
"BBClone statistikos' nustatymø perþiûra. Ðiuo kintamuoju galite
uþdrausti jø perþiûrà.<br />
Pavyzdþiai:<br />
\$BBC_SHOW_CONFIG = 1;<br />
\$BBC_SHOW_CONFIG = &quot;&quot;;",

"config_BBC_TITLEBAR" =>
"Tekstas, atsirandantis antraðtëje, visuose BBClone puslapiuose.<br />
Galima naudoti tokius kintamuosius:<br />
<ul>
<li>%SERVER: serverio adresas,</li>
<li>%DATE: dabartinë data.</li>
</ul>
Taip pat galima naudoti ir HTML.<br />
Pavyzdþiai:<br />
\$BBC_TITLEBAR = &quot;%SERVER statistika sugeneruota %DATE&quot;;<br />
\$BBC_TITLEBAR = &quot;Mano statistika %DATE buvo tokia:&quot;;
<br />",

"config_BBC_LANGUAGE" =>
"BBClone kalba pagal nutylëjimà, nustatoma tam atvejui, jei narðylë nepateikë pagedautinos kalbos.
Galima naudoti ðias kalbas:
<p>ar, bg, bs, ca, cs, da, de, el, en, es, fi, fr, hu, id, it, ja, ko, lt, mk, nb, nl, pl, pt, pt-br, ro, ru,
sk, sl, sv, th, tr, zh-cn ir zh-tw</p>",

"config_BBC_MAXTIME" =>
"Ðis kintamasis nusako unikalaus apsilankymo tarpsná sekundëmis. Kiekvienas
to paties lankytojo paspaudimas per ðá periodà bus laikomas kaip vienas apsilankymas,
kadangi du gretimi paspaudimai nevirðyja ðio laiko limito. Pagal nutylëjimà
yra laikomas defacto web standartas - 30 minuèiø (1800 sekundþiø), nors, esant porekiui,
galite priskirti savo pageidaujamà reikðmæ.<br />
Pavyzdþiai:<br />
\$BBC_MAXTIME = 0;<br />
\$BBC_MAXTIME = 1800;",

"config_BBC_MAXVISIBLE" =>
"Kiek áraðø norite matyti Detaliame apsilankymø sàraðe? Pagal nutylëjimà,
ðio kintamojo reikðmë yra 100. Yra rekomenduotina nenaudoti daugiau nei
500 áraðø. Didesnis áraðø kiekis gali sukelti naðumo problemø.",

"config_BBC_DETAILED_STAT_FIELDS" =>
"Kintamasis \$BBC_DETAILED_STAT_FIELDS nusako stulpelius detaliame apsilankymø sàraðe.
Galimi ðie stulpeliai:
<ul>
<li>id&nbsp;=&gt;&nbsp;n-tasis lankytojas nuo statistikos vedimo pradðios</li>
<li>time&nbsp;=&gt;&nbsp;Paskutinio paspaudimo laikas</li>
<li>visits&nbsp;=&gt;&nbsp;Unikalaus lankytojo paspaudimai</li>
<li>dns&nbsp;=&gt;&nbsp;Lankytojo hostname'as</li>
<li>ip&nbsp;=&gt;&nbsp;Lankytojo IP adresas</li>
<li>os&nbsp;=&gt;&nbsp;Operacinë sistema (arba, jei ámanoma nustatyti, paieðkos robotas)</li>
<li>browser&nbsp;=&gt;&nbsp;Narðyklë</li>
<li>ext&nbsp;=&gt;&nbsp;Lankytojo ðalis arba plëtinys</li>
<li>referer&nbsp;=&gt;&nbsp;Nuoroda, ið kurios lankytojas atëjo á Jûsø svetainæ (jei ámanoma nustatyti)
</li>
<li>page&nbsp;=&gt;&nbsp;The last visited page</li>
<li>search&nbsp;=&gt;&nbsp;The search query a visitor used (if available)</li>
</ul>
Stulpeliai bus iðdëstyti tokia tvarka, kokia Jûs nurodysit.<br />
Pavyzdþiai:<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;id, time, visits, ip, ext, os, browser&quot;;
<br />
\$BBC_DETAILED_STAT_FIELDS = &quot;date, ext, browser, os, ip&quot;;<br />",

"config_BBC_TIME_OFFSET" =>
"Tam atvejui, jei Jûsø virtualaus serverio laikas nesutampa su Jûsø laiko juosta,
ðiuo kintamuoju galite sureguliuoti laikà. Neigiama reikðmë nustatys laikà atgal.<br />
Pavyzdys:<br />
\$BBC_TIME_OFFSET = 300;<br />
\$BBC_TIME_OFFSET = -300;<br />
\$BBC_TIME_OFFSET = 0;",

"config_BBC_NO_DNS" =>
"Ði opcija nusako ar IP adresà reikia bandyti konvertuoti á hostname'à.
Nors hostname'ai pasako daug daugiau apie lankytojà, jø nustatymas gali
smarkiai sulëtinti svetainës darbà, ypaè jei Jûsø serverio ryðys su
DNS serveriu yra lëtas ar nepatikimas. Ðios opcijos iðjungimas gali iðspræsti
susidariusias naðumo problemas.<br />
Pavyzdþiai:<br />
\$BBC_NO_DNS = 1;<br />
\$BBC_NO_DNS = &quot;&quot;;",

"config_BBC_NO_STRING" => "Pagal nutylëjimà, BBClone iðveda komentarus, nusakanèius
statistikos veikimo bûsenà, á svetainës HTML kodà. Ðis iðvedimas gali neigiamai paveikti
kai kuriuos forumus ar turinio valdymo sistemas. Jei jums iðvedamas tuðèias puslapis
ar susiduriate su &quot;headers already sent by&quot; praneðimais, galite atjungti
ðiuos komentarus.<br />
Pavyzdþiai:<br />
\$BBC_NO_STRING = 1;<br />
\$BBC_NO_STRING = &quot;&quot;;",

"config_BBC_NO_HITS" =>
"Pagal nutylëjimà BBClone laikmatyje rodo lankytojø paspaudimus, kadangi tai
gerai atspindi tikràjá svetainës apkrovimà. Jei Jûs, dël tam tikrø prieþasèiø
pageidaujate matyti unikalius apsilankymus, pakeiskite ðio kintamojo reikðmæ.<br />
Pavyzdþiai:<br />
\$BBC_NO_HITS = 1;<br />
\$BBC_NO_HITS = &quot;&quot;;",

"config_BBC_IGNORE_IP" =>
"Ðia opcija galite nustatyti neregistruotinus lankytojø IP adresus.
Norëdami naudoti kelias iðraiðkas, skirtuku naudokite kablelá.<br />
Pavyzdþiai:<br />
\$BBC_IGNORE_IP = &quot;127., 192.168.&quot;;<br />
\$BBC_IGNORE_IP = &quot;&quot;;",

"config_BBC_IGNORE_REFER" =>
"Tuo atveju, jei norite ignoruoti tam tikras nuorodas, vedanèias á Jûsø svetainæ,
galite ávesti vienà ar daugiau raktaþodþiø, blokuosianèiø ðias nuorodas.
Norëdami naudoti kelias iðraiðkas, skirtuku naudokite kablelá.<br />
Pavyzdþiai:<br />
\$BBC_IGNORE_REFER = &quot;spambot.org, .escort.&quot;;<br />
\$BBC_IGNORE_REFER = &quot;&quot;;",

"config_BBC_IGNORE_BOTS" =>
"Èia galite nurodyti elgsenà su paieðkos robotais. Pagal nurylëjimà jie yra
ignoruojami lankomiausiuose host'uose, bet registruojami kiruose rodikliuose.
Jei apskritai nenorite matyti paieðkos robotø, galite nustatyti ðá kintamàjá
á &quot;2&quot;. Tokiu atveju bus registruojami tik tikrieji lankytojai.<br />
Pavyzdþiai:<br />
\$BBC_IGNORE_BOTS = 2;<br />
\$BBC_IGNORE_BOTS = 1;<br />
\$BBC_IGNORE_BOTS = &quot;&quot;;",

"config_BBC_IGNORE_AGENT" =>
"Ði opcija nusako kaip BBClone skiria vienus lankytojus nuo kitø. Paga nutylëjimà
yra naudojamas ti IP adresas, kuris daþniausiai duoda tikriausius lankomumo duomenis.
Taèiau jei lankytojus daþnai dengia proxy serveriai, ðios opcijos deaktyvavimas
gali duoti tikresnius duomenis, kadangi lankytojai bus atpaþystami pagal narðyklës
paraðà (user-agent).<br />
Pavyzdþiai:<br />
\$BBC_IGNORE_AGENT = 1;<br />
\$BBC_IGNORE_AGENT = &quot;&quot;;",

"config_BBC_KILL_STATS" =>
"Jei norite iðvalyti visà svetainës statistikà, aktyvuokite ðià parinktá.
Sekantis apsilankymas iðvalys visus duomenis. Nepamirðkite vëliau deaktyvuoti
ðià parinktá. Prieðingu atveju galite bûti nustebintas itin silpnu svetainës
lankomumu ;).<br />
Pavyzdþiai:<br />
\$BBC_KILL_STATS = 1;<br />
\$BBC_KILL_STATS = &quot;&quot;;",

"config_BBC_PURGE_SINGLE" =>
"Hostø ir Refereriø statistika gali genruoti didelius duomenø kiekius, sukuriamus
vienkartiniø lankytojø. Ðios opcijos ájungimas gali ryðkiai sumaþinti duomenø
apimtis bei access.php failà neprarandant visø matomø hostø ir refereriø sàraðo.
Paspaudimø kiekis bus pridëtas prie &quot;Nenurodyta&quot; þymës ir neátakos
bendro paspaudimø skatliuko.<br />
Pavyzdþiai:<br />
\$BBC_PURGE_SINGLE = 1;<br />
\$BBC_PURGE_SINGLE = &quot;&quot;;"

);
?>
