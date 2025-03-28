<?php
const FOO='foo';
$bar = 'bar';
function test() {
  echo FOO;
  echo "<br>";
  global $bar;
  echo $bar;
}

test();

 ?>
