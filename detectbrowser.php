<?php

// important to order by parent ie MSIE then OPERA.

$browser = array (
   "MSIE",            // parent
   "OPERA",
   "MOZILLA",        // parent
   "NETSCAPE",
   "FIREFOX",
   "SAFARI"
);

$info[browser] = "OTHER";

foreach ($browser as $parent) {
   $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
   $f = $s + strlen($parent);
   $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 5);
   $version = preg_replace('/[^0-9,.]/','',$version);
  
   if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent)) {
   $info[browser] = $parent;
   $info[version] = $version;
   }
}

?>