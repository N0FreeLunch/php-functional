<?php declare(strict_types=1);

$returnClosure = function () {
  return function () {
    return "Closure";
  };
};

printf("anonymous function is %s class \n", get_class($returnClosure));
