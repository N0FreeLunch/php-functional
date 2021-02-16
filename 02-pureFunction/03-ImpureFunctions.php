<?php
$_SESSION['a'] = '1';
$_SESSION['b'] = '2';
$_SESSION['c'] = '3';
$_SESSION['d'] = '4';
$_SESSION['message'] = 'MESSAGE';

function nextMessage() : string
{
  return array_pop($_SESSION);
};

var_dump($_SESSION);
echo "<br>";

var_dump(nextMessage());
echo "<br>";

var_dump($_SESSION);
echo "<br>";

class Player {
  private int $score;
  function __construct () {
     $this -> score = 0;
  }
  public function getScore() {
    return $this -> score;
  }
  public function setScore($points) {
    $this -> score = $points;
  }
}

function updateScore(Player $player, int $points)
{
  $score = $player -> getScore();
  $player->setScore($score + $points);
}

$palyer = new Player();
$palyer -> setScore(5);
echo $palyer -> getScore();
echo "<br>";

$palyer2 = new Player();
updateScore($palyer2, 10);
echo $palyer2 -> getScore();

 ?>
