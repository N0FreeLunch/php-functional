<?php
function hanoi(int $disc, string $source, string $destination, string $via)
{
  if($disc === 1) {
    echo("Move a disc from the $source rod to the $destination rod\n");
    echo "<br>";
  } else {
    hanoi($disc - 1, $source, $via, $destination);
    hanoi(1, $source, $destination, $via);
    hanoi($disc - 1, $via, $destination, $source);
  }
}

hanoi(3, 'left', 'right', 'middle');

 ?>
