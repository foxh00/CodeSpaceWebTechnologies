<?php
$find = array("a","e","i","o", "u", "A", "E", "I", "O", "U");
$replace = array ("x", "x", "x", "x", "x", "x", "x", "x", "x", "x");
echo str_replace($find, $replace, "you are stealing my nuts");
?>