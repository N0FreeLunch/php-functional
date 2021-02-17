<?php
function integers()
{
  $i = 0;
  while(true) yield $i++;
}

integers();
echo "can not display if integers is running";

 ?>
