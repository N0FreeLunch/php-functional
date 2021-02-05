<?php

$add = function(float $a, float $b): float {
  return $a + $b;
};

$result = $add(5, 10);
echo $result;
echo '<br>';

$sum = array_reduce([1, 2, 3, 4, 5], $add, 0);
var_dump($sum);
echo '<br>';

$uppercase = array_map(function(string $s): string {
  return strtoupper($s);
},['hello', 'world']);

var_dump($uppercase);
echo '<br>';

function return_new_function ()
{
  return function($a, $b, $c) {
    return [$a, $b, $c];
  };
}
var_dump(return_new_function()(1,2,3));

 ?>
