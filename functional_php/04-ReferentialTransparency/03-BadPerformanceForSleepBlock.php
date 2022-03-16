<?php
function do_something(bool $a, int $b, int $c): int
{
  if($a) {
    return $b;
  }else {
    return $c;
  }
}

echo do_something(true, sleep(2), sleep(4));

 ?>
