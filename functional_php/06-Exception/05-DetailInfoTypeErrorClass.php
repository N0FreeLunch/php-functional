<?php

function add(int $a, int $b) : int
{
  return $a + $b;
}

try {
  add(10, 'foo');
} catch (TypeError $e) {
  echo "An error occured : ".$e->getMessage();
}


 ?>
