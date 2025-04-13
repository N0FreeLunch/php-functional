<?php declare(strict_types=1);

$add = function(float $a, float $b): float {
  return $a + $b;
};

$result = $add(5, 10);
var_dump($result);

$sum = array_reduce([1, 2, 3, 4, 5], $add, 0);
var_dump($sum);

$uppercase = array_map(function(string $s): string {
  return strtoupper($s);
},['hello', 'world']);

var_dump($uppercase);

function returnNewFunction()
{
  return function($a, $b, $c) {
    return [$a, $b, $c];
  };
}

printf("named function: %s\n", returnNewFunction()::class); // named function: Closure
var_dump(returnNewFunction()(1,2,3));
