<?php

$n = '<br>';

$add = function(float $a, float $b): float {
  return $a + $b;
};

$result = $add(5, 10);
echo $result.$n;

$sum = array_reduce([1, 2, 3, 4, 5], $add, 0);
var_dump($sum);

$uppercase = array_map(function(string $s): string {
  return strtoupper($s);
});

var_dump($sum);

 ?>
