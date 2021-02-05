<?php

class ClosureInsideClass
{
  public function testing()
  {
    return (static function() {
      // static cause error
      var_dump($this);
    });
  }
};

$object = new ClosureInsideClass();
$test = $object -> testing();

$test();

 ?>
