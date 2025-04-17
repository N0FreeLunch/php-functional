<?php declare(strict_types=1);

class A
{
  static public function publicStaticMethod(string $returnedName): string
  {
    return $returnedName;
  }

  public function publicNonStaticMethod(string $returnedName): string
  {
    return $returnedName;
  }

  public function __invoke(string $name): string
  {
    return self::publicStaticMethod($name);
  }
}

printf('call A::publicStaticMethod(\'hello world\') as array callable'.PHP_EOL, (['A', 'publicStaticMethod'])('hello world'));

printf('call A::publicStaticMethod(\'hello world\') as string callable'.PHP_EOL, 'A::publicStaticMethod'('hello world'));

printf('call (new A)->publicNonStaticMethod(\'hello world\') %s'.PHP_EOL, ([new A, 'publicNonStaticMethod'])('hello world'));

$callHelloSomething = function(string $s) {
  return "Hello $s !\n";
};

printf('call function by call_user_func_array(callable $fn, array $args)', call_user_func_array($callHelloSomething, ['World']));
