<?php
function updatePlayers(Player $winner, Player $loser, int $score)
{
  $winner -> updateScore($score);
  $loser -> updateScore(-$score);
}

 ?>
