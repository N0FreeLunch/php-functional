<?php
function add(int $a, int $b):int
{
  return $a + $b;
}

function updateScore(Player $player, int $points)
{
  $score = $player -> getScore();
  $player->setScore($score + $points);
}

var_dump(add(5, 6));
 ?>
