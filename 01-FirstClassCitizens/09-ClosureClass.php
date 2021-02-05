<?php
$returnClosure = function () {
  return function () {
    return "Closure";
  };
};

$className = get_class($returnClosure);
var_dump($className);
 ?>
