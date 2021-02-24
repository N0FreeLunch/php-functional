<?php
function throw_exception()
{
  throw new Exception('Message');
}

function some_function($x)
{
  try {
    $z = $x + throw_exception();;
  } catch (Exception $e) {
    $z = 42;
  }
  return $z;
}

echo some_function(42);

 ?>
