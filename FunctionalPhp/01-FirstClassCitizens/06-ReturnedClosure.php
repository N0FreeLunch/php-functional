<?php declare(strict_types=1);

class ClosureInsideClass
{
  public function returnThisCapturedClosure()
  {
    return function () {
      var_dump($this->privateMethod()); // string(13) "privateMethod"
    };
  }

  private function privateMethod()
  {
    return 'privateMethod';
  }
};

$object = new ClosureInsideClass();
$test = $object->returnThisCapturedClosure();

$test();
