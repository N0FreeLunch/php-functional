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

$copyVariable = 'orange';
$orangeCaptured = function() use ($copyVariable) { return $copyVariable; };
printf('orange captured : %s', $orangeCaptured().PHP_EOL);

$copyVariable = 'banana';
printf('banana not captured : %s', $orangeCaptured().PHP_EOL);

$referenceVariable = 'ringo';
$ringoCaptured = function() use (&$referenceVariable) { return $referenceVariable; };
printf('ringo captured : %s', $ringoCaptured().PHP_EOL);

$referenceVariable = 'banana';
printf('banana captured : %s', $ringoCaptured().PHP_EOL);
