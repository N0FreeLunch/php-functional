<?php

declare(strict_types=1);

$n = '<br>';

function add(float $a, int $b): float
{
  return $a + $b;
}

echo "add".$n;

echo add(3.5, 1).$n;

echo add(3, 1).$n;

// error
// echo add("3.5", 1).$n;

// error
// echo add(3.5, 1.2).$n;


// error
// echo add("1 weel", 1).$n;

//error
// echo add("some string", 1).$n;



function test_bool(bool $a): string
{
  return $a ? 'true' : 'false';
}

echo "test_bool".$n;

echo test_bool(true).$n;

echo test_bool(false).$n;

// error
// echo test_bool("").$n;

// error
// echo test_bool("some string").$n;

// error
// echo test_bool(0).$n;

// error
// echo test_bool(1).$n;

// error
// echo test_bool([]).$n;



 ?>
