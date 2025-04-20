<?php declare(strict_types=1);

/**
 * warning to Exception
 */
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
  throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

$global = "global";

try {
  function cantUseGlobalVariable() {
    return $global;
  }
  $returnedGlobalValue = cantUseGlobalVariable();
  printf("captured global value of the result of cantUseGlobalVariable(): %s".PHP_EOL, $returnedGlobalValue);
} catch (Throwable $e) {
  printf("named function cant not capture global variable. The error of accessing not captured global variable: %s".PHP_EOL, $e->getMessage());
}

function useGlobalVariable() {
  global $global;
  $global .= " changed";
  return $global;
}

printf("captured global value of the result of useGlobalVariable(): %s".PHP_EOL, useGlobalVariable());

printf("changed global variable value by useGlobalVariable(): %s".PHP_EOL, $global);
