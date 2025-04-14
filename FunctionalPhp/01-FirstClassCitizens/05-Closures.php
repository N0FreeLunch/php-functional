<?php declare(strict_types=1);

/**
 * warning to Exception
 */
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
  throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

$outerVariable = '[value: outerVariable]';

try {
  $closureNotCaptured = function() {
    return $outerVariable;
  };
  $result = $closureNotCaptured();
  printf('$outerVariable captured %s'.PHP_EOL, $result);
} catch (Throwable $e) {
  printf('$outerVariable dose not captured %s'.PHP_EOL, $e->getMessage());
}

$closureCaptured = function () use ($outerVariable) {
  return $outerVariable;
};

printf('$outerVariable captured %s'.PHP_EOL, $closureCaptured());

$a = 'orange';
$orangeCaptured = function() use ($a) { return $a; };
printf('orange captured : %s', $orangeCaptured().PHP_EOL);

$a = 'banana';
printf('banana not captured : %s', $orangeCaptured().PHP_EOL);

$b = 'orange';
$orangeCaptured = function() use (&$b) { return $b; };
printf('orange captured : %s', $orangeCaptured().PHP_EOL);

$b = 'banana';
printf('banana captured : %s', $orangeCaptured().PHP_EOL);
