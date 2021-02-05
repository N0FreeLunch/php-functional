<?php

class ClosureInsideClass
{
  public function testing()
  {
    return function () {
      var_dump($this);
    };
  }
};

$object = new ClosureInsideClass();
$test = $object->testing();

$test();

 ?>
