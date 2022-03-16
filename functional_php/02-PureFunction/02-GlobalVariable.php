<?php

$global = "global";
var_dump($global);

function cantUseGlobalVariable () {
  return $global;
}

var_dump(cantUseGlobalVariable());
echo "<br>";

function useGlobalVariable() {
  global $global;
  $global .= " changed";
  return $global;
}

var_dump($global);
echo "<br>";

var_dump(useGlobalVariable());
echo "<br>";

var_dump($global);
echo "<br>";

 ?>
