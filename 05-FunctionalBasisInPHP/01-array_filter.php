<?php
function odd(int $a): bool
{
  return $a % 2 === 1;
}

$filtered = array_filter([1,2,3,4,5,6], 'odd');
var_dump($filtered);
echo "<br>";

$filtered = array_filter(["one","two","three",""]);
var_dump($filtered);
echo "<br>";

$filtered = array_filter([0, 1, null, 2, [], 3, 0.0]);
var_dump($filtered);
echo "<br>";

$data = [101,102,103,104,105,106];
function key_only($key) {
  return $key % 2 === 0;
}
$filtered = array_filter($data, 'key_only', ARRAY_FILTER_USE_KEY);
var_dump($filtered);
echo "<br>";

$filtered = array_filter($data, 'key_only', ARRAY_FILTER_USE_BOTH);
var_dump($filtered);
echo "<br>";

 ?>
