<?php

$array[] = 100;
$array[] = 200;
$array[] = 300;
$array[] = 400;
var_dump($array);
echo "<br>";

function map(array $data, callable $cb) : array
{
  return array_reduce($data, function (array $acc, $i) use($cb) {
    $acc[] = $cb($i);
    return $acc;
  },[]);
}

function filter(array $data, callable $predicate) : array
{
  return array_reduce($data, function (array $acc, $i) use($predicate){
    if($predicate($i)) {
      $acc[] = $i;
    }
    return $acc;
  },[]);
}

var_dump(
  map([1,2,3,4,5,6,7], function ($e) {
    return $e + 10;
  })
);
echo "<br>";


var_dump(
  filter([1,2,3,4,5,6,7], function ($e) {
    return ($e % 2) === 0;
  })
);
echo "<br>";

 ?>
