<?php
$array = ['one', 'two', 'three', 'four'];

$filtered = array_filter($array, function ($i) {
    return $i == "two";
});

$beginning = array_slice($array, 0, 2);

$final = array_map(function($i) {
  return "_".$i;
}, $array);

var_dump($array);
echo "<br>";
var_dump($filtered);
echo "<br>";
var_dump($beginning);
echo "<br>";
var_dump($final);
echo "<br>";


 ?>
