<?php
class A
{
  public const FOO='public const';
  protected const BAR="protected const";
  private const BAZ="private const";
}

echo A::FOO;
echo "<br>";

echo "cant access protected const error!";
echo A::BAR;

echo "cant access private const error!";
echo A::BAZ;

 ?>
