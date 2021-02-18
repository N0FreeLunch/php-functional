<?php
function sum(int $carry, int $i):int
{
  return $carry + $i;
}

$initialValue = 0;
$summed = array_reduce([1,2,3,4], 'sum', $initialValue);
var_dump($summed);

echo "<br>";

$initialValue = 100;
$summed = array_reduce([1,2,3,4], 'sum', $initialValue);
var_dump($summed);
echo "<br>";


function in_array2(string $needle, array $haystack) : bool
{
  $search = function (bool $contains, string $item) use ($needle) : bool
  {
    return $needle == $item ? true : $contains;
  };
  return array_reduce($haystack, $search, false);
}

var_dump(in_array2('two', ['one','two','three']));
?>
