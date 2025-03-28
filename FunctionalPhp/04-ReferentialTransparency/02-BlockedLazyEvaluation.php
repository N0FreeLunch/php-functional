<?php
function wait(int $value): int
{
    sleep(3);
    return $value;
}

$rand = rand();
echo wait($rand);
 ?>
