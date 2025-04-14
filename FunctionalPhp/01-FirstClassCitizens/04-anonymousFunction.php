<?php declare(strict_types=1);

$add = function(float $a, float $b): float {
  return $a + $b;
};

$result = $add(5, 10);
printf('the result of $add(5, 10) is %.2f'.PHP_EOL, $result);

$sum = array_reduce([1, 2, 3, 4, 5], $add, 0);
printf('the result of array_reduce([1, 2, 3, 4, 5], $add, 0) is %.2f \n'.PHP_EOL, $sum);

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

printf("named function type: %s\n", returnNewFunction()::class); // named function: Closure

printf("call returned closure as returnNewFunction()(1,2,3) : %s \n", var_export(returnNewFunction()(1,2,3))); // named function: Closure
