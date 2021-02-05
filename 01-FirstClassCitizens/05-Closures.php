<?php

$some_variable = 'value';

$my_closure = function()
{
  return $some_variable;
};

$result = $my_closure();
var_dump($result);
echo "<br>";


$my_closure = function () use($some_variable)
{
  return $some_variable;
};

var_dump($my_closure());
echo "<br>";


$s = 'orange';
$my_closure = function() use($s) { echo $s; };
$my_closure();
echo "<br>";

$a = 'banana';
$my_closure();
echo "<br>";


 ?>
