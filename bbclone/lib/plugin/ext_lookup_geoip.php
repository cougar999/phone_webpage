<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * CVS FILE $$Id: ext_lookup_geoip.php 2956 2011-10-07 06:54:42Z zhoufei $$
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
 */

/////////////////////////////////////////
// Plug-in: Extension look-up by GeoIP //
/////////////////////////////////////////

function bbc_extension_plugin($host, $addr) {
global $BBC_GEOIP_PATH, $gi;
    include_once($BBC_GEOIP_PATH ."geoip.inc");
        $gi = geoip_open($BBC_GEOIP_PATH ."GeoIP.dat",GEOIP_STANDARD);
        $addr = geoip_country_code_by_addr($gi, $addr);
        geoip_close($gi);
        return strtolower($addr);
}

?>