<?php
echo sleep(0);
echo "<br>";
$a = (false && sleep(1));
var_dump($a);
echo "<br>";
$b = (true || sleep(1));
var_dump($b);
echo "<br>";
$c = (false and sleep(1));
var_dump($c);
echo "<br>";
$d = (true or sleep(1));
var_dump($d);
echo "<br>";
 ?>
