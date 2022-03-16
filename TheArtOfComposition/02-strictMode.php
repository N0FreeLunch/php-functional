<?php
declare(strict_types=1);

function increment($counter) {
    return ++$counter;
}
echo increment("12").PHP_EOL;