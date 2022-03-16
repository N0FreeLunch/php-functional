<?php
function increment()
{
  static $counter = 0;
  return ++$counter;
}

echo increment();
echo "<br>";
echo increment();
echo "<br>";
echo increment();
echo "<br>";

 ?>
