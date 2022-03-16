<?php

class ObjectAsFunction
{
  private function helper(int $a, int $b) : int
  {
    return $a + $b;
  }

  public function __invoke(int $a, int $b): int
  {
    return $this->helper($a, $b);
  }

  // error
  // public function callHelper(int $a, int $b) : int
  // {
  //   return helper($a, $b);
  // }

}

$instance = new ObjectAsFunction();
echo $instance(5, 10);
// echo $instance->callHelper(5, 10);

 ?>
