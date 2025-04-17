<?php declare(strict_types=1);

function callableParamFn(callable $callback) : callable {
  return $callback;
}

printf("call returned callable by passed callable".PHP_EOL, callableParamFn(function () { return "callable"; })());

$callback = 'strtoupper';
printf('call built-in function by string callable: %s'.PHP_EOL, $callback('hello world'));