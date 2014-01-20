<?php
include("gMemcache.php");
$memcache = new MemCache("118.145.22.12","9004");
$v = $memcache->get("xcesar");

if ($v == false) print "no existe en memcache";
else print "<pre>".print_r($v,true)."</pre>";
/* Setting a value */
$memcache->set("xcesar", range(0,140),0,true);
$memcache->disconnect();

?>