<?php declare(strict_types=1);

echo "use strict mode \n";

echo "strict mode check function parameter type and return type strictly \n";

function add(float $a, int $b): float
{
  return $a + $b;
}

printf("result of add(3.5, 1) is %.2f \n", add(3.5, 1));

printf("result of add(3, 1) is %.2f \n", add(3, 1));

try {
  printf("result of add(3.5, 1.2) is %.2f \n", add(3.5, 1.2));
} catch (Error $e) {
  printf("error of add(3.5, 1.2) : %s \n", $e->getMessage());
}

try {
  printf("result of add('3.5', 1) is %.2f \n", add('3.5', 1));
} catch (Error $e) {
  printf("error of add('3.5', 1) : %s \n", $e->getMessage());
}

try {
  printf("result of add('1 weel', 1) is %.2f \n", add('1 weel', 1));
} catch (Error $e) {
  printf("error of add('1 weel', 1) : %s \n", $e->getMessage());
}

try {
  printf("result of add('some string', 1) is %.2f \n", add('some string', 1));
} catch (Error $e) {
  printf("error of add('some string', 1) : %s \n", $e->getMessage());
}

function test_bool(bool $a): string
{
  return $a ? 'true' : 'false';
}

printf("result of test_bool(true) is %s \n", test_bool(true));

printf("result of test_bool(false) is %s \n", test_bool(false));

try {
  printf("result of test_bool('some string') is %s \n", test_bool("some string"));
} catch (Error $e) {
  printf("error of test_bool('some string') : %s \n", $e->getMessage());
}

try {
  printf("result of test_bool('') is %s \n", test_bool(""));
} catch (Error $e) {
  printf("error of test_bool('') : %s \n", $e->getMessage());
}

try {
  printf("result of test_bool(0) is %s \n", test_bool(0));
} catch (Error $e) {
  printf("error of test_bool(0) : %s \n", $e->getMessage());
}

try {
  printf("result of test_bool(1) is %s \n", test_bool(1));
} catch (Error $e) {
  printf("error of test_bool(1) : %s \n", $e->getMessage());
}

try {
  printf("result of test_bool([]) is %s \n", test_bool([]));
} catch (Error $e) {
  printf("error of test_bool([]) : %s \n", $e->getMessage());
}
