<?php declare(strict_types=1);

class ObjectAsFunction
{
  public function __invoke(int $a, int $b): int
  {
    return $this->add($a, $b);
  }

  public function callAdd(int $a, int $b): int
  {
    return $this->add($a, $b);
  }

  private function add(int $a, int $b): int
  {
    return $a + $b;
  }
}

$instance = new ObjectAsFunction();
printf("call instance \$instance(5, 10): %d\n", $instance(5, 10));
printf("call callAdd method of \$instance: %d\n", $instance->callAdd(5, 10));

try {
  printf("call private add method of \$instance: %d\n", $instance->add(5, 10));
} catch (Throwable $e) {
  printf("error to call private add method of \$instance: %s\n", $e->getMessage());
}
