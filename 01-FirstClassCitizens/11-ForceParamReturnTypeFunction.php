<?php

function test_callable(callable $callback) : callable {
  $callback();
  return function () {

  };
}
var_dump(test_callable(function () {
  return "callable";
}));

echo "<br>";

var_dump(test_callable(function () {
  return "callable";
})());

echo "<br>";

function return_function(callable $callback) : callable {
  // $callback();
  return $callback;
}

var_dump(return_function(function () {
  return "callable";
})());


// function error_callable(callable $callback) :
// callable {
//   $callback();
//   return "error";
// }
//
// var_dump(error_callable());


$callback = 'strtoupper';
echo "<br>";
echo $callback;
echo "<br>";
echo $callback('Hello World!');

 ?>
