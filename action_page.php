<?php
//get the q parameter from URL


session_start();

$q = $_REQUEST["q"];

$hint = "";
$hex = urldecode($q);
list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

echo "$hex -> $r $g $b";





$output1 = exec('python3 rgb.py ' . $r . ' ' . $g . ' ' . $b . ' 2>&1');
echo $output1 . '<br />'; 





?>