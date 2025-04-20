<?php declare(strict_types=1);

function add(int $a, int $b):int
{
  return $a + $b;
}

printf("The result of pure function add(5, 6): %s".PHP_EOL, add(5, 6));

function updateScore(Player $player, int $points)
{
  $score = $player->getScore();
  $player->setScore($score + $points);
}

$player = new Player(5);
updateScore($player, 6);

printf("The result of non-pure function \$player->getScore() after \$player = new Player(5); updateScore(\$player, 6): %s".PHP_EOL, $player->getScore());

class Player
{
  private int $score = 0;

  public function __construct(int $initScore = 0)
  {
    $this->score = $initScore;
  }

  public function getScore(): int
  {
    return $this->score;
  }

  public function setScore(int $score): void
  {
    $this->score = $score;
  }
}