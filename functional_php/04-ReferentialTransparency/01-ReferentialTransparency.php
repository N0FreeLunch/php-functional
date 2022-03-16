<?php
class Player
{
  public $hp;
  public $x;
  public $y;

  public function __construct(int $x, int $y, int $hp) {
    $this -> x = $x;
    $this -> y = $y;
    $this -> hp = $hp;
  }
}

function isCloseEnough(Player $one, Player $two):bool
{
  return abs($one -> x - $two -> x) < 2 &&
         abs($one -> y - $two -> y) < 2;
};

function loseHitpoint(Player $p):Player
{
  return new Player($p -> x, $p -> y, $p -> hp -1);
};

function hit(Player $p, Player $target): Player
{
  return isCloseEnough($p, $target) ?
         loseHitpoint($target) :
         $target;
};

$jhon = new Player(8,8,10);
$ted = new Player(7,9,10);
$ted = hit($jhon, $ted);
var_dump($ted);

 ?>
