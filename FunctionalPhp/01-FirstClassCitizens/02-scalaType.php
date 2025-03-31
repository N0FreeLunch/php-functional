<?php declare(strict_types=0);

echo "without strict mode \n";

function add(float $a, int $b): float
{
  return $a + $b;
}

printf("result of add(3.5, 1) is %.2f \n", add(3.5, 1));

printf("result of add(3, 1) is %.2f \n", add(3, 1));

printf("result of add('3.5', 1) is %.2f \n", add('3.5', 1));

printf("result of add(3.5, 1.2) is %.2f \n", add(3.5, 1.2));
// Deprecated: Implicit conversion from float 1.2 to int loses precision

try {
  printf("add('1 weel', 1) is %.2f \n", add('1 weel', 1));
} catch(\Error $e) {
  printf("error of add('1 weel', 1): %s \n", $e->getMessage());
}

try {
  printf("add('some string', 1) is %.2f \n", add('some string', 1));
} catch(\Error $e) {
  printf("error of add('some string', 1): %s \n", $e->getMessage());
}

function boolTypeJuggling(bool $a): string
{
  return $a ? 'true' : 'false';
}

printf("result of boolTypeJuggling(true) is %s \n", boolTypeJuggling(true));

printf("result of boolTypeJuggling(false) is %s \n", boolTypeJuggling(false));

printf("result of boolTypeJuggling('') is %s \n", boolTypeJuggling(""));

printf("result of boolTypeJuggling('some string') is %s \n", boolTypeJuggling("some string"));

printf("result of boolTypeJuggling(0) is %s \n", boolTypeJuggling(0));

printf("result of boolTypeJuggling(1) is %s \n", boolTypeJuggling(1));

try {
  printf("result of boolTypeJuggling([]) is %s \n", boolTypeJuggling([]));
} catch(\Error $e) {
  printf("error of boolTypeJuggling([]): %s \n", $e->getMessage());
}
