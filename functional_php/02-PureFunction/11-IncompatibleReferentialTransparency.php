<?php
class test
{
  private $value;
  public function __construct($v) {
    $this -> set($v);
  }

  public function set($v) {
    $this -> value = $v;
  }
}

function compare($a, $b)
{
  echo ($a == $b ? 'identical' : 'different')."\n";
}

$a = new Test(2);
$b = new Test(2);

compare($a, $b);

echo "<br>";

$b->set(10);
compare($a, $b);

echo "<br>";

$c = clone $a;
$c->set(5);
compare($a, $c);

 ?>
