<?php
class B {}
$a = new B();

try {
  $a->invalid_method();
} catch (Error $e) {
  echo "An error occured : ".$e -> getMessage();
}

 ?>
