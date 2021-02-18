<?php
echo "big cost";
$a = $foo * $bar + $u;
$b = $foo * $bar * $v;

echo "small cost";
$tmp = $foo * $bar;
$a = $tmp + $v;
$b = $tmp * $v;
 ?>
