<?php declare(strict_types=1);

class ClosureInsideClass
{
  const FOO = 'foo';

  public function returnThisCapturedStaticClosure(): Closure
  {
    return (static function() {
      var_dump($this);
    });
  }

  public function returnThisCapturedClosure(): Closure
  {
    return (function() {
      var_dump($this);
    });
  }

  public function returnStaticClosureWithStaticMember(): Closure
  {
    return (static function() {
      var_dump(self::FOO);
    });
  }
};

$object = new ClosureInsideClass();

try {
  $closure = $object->returnThisCapturedStaticClosure();
  $closure();
} catch (Throwable $e) {
  printf("returnThisCapturedStaticClosure : %s ".PHP_EOL, $e->getMessage());
}

$closure = $object->returnThisCapturedClosure();
$closure();

$closure = $object->returnStaticClosureWithStaticMember();
$closure();
