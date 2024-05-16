<?php 
echo "<h1>hello world</h1>";

define("TEXT", "<h1>hello world</h1>");
echo TEXT;

$x = "Learning PHP";
$y = TEXT;
echo $x = $y;

$a = "hello ";
$b = " world";
echo "<h1>".$a.$b."</h1>";

$hello = array("hello ", " world");
echo "<h1>".$hello[0].$hello[1]."</h1>";
?>