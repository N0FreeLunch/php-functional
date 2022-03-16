<?php
class A
{
  const FOO='some value';
  public static function bar()
  {
    echo self::FOO;
  }
}

echo A::FOO;
echo "<br>";

echo constant('A::FOO');
echo "<br>";

echo defined('A::FOO','') ? 'true' : 'false';
echo "<br>";

echo defined('A::FOO') ? 'true' : 'false';
echo "<br>";

A::bar();



 ?>
