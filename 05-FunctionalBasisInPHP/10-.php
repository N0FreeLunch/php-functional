<?php
function while_iterative()
{
  $result = 1;
  while($result < 50) {
    $result = $result * 2;
  }
  return $result;
}

function while_recursive($result = 1. $continue = true)
{
  if($continue === false) {
    return $result;
  }
  return while_recursive($result * 2, $result < 50);
}

function for_iterative()
{
  $result = 5;
  for ($i=0; $i < 10; $i++) {
    $result = $result * $i;
  }
  return $result;
}

function for_recursive($result = 5, $i = 1)
{
  if($i >= 10) {
    return $result;
  }
  return for_recursive($result * $i, $i + 1);
}
 ?>
