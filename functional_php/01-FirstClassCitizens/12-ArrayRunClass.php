<?php

class A {
  static function hello($name) {
    return "Hello $name !\n";
  }
  function __invoke($name) {
    return self::hello($name);
  }
}

$callback = ['A', 'hello'];
var_dump($callback('World'));
echo "<br>";


$callback = 'A::hello';
var_dump($callback('World'));
echo "<br>";

$a = new A();
$callback = [$a, 'hello'];
var_dump($callback('World'));
echo "<br>";

$callback = $a;
$callback('World');

$callback = function(string $s) {
  return "Hello $s !\n";
};
$callback('World');

var_dump(call_user_func_array($callback, ['World']));

 ?>
