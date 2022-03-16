<?php
// impure
function getCurrentTvProgram(Channel $channel) : string
{
  return $channel -> getProgramAt(time());
}


// pure
function getTvProgram(Channel $channel, int $when) : string
{
  return $channel -> getProgramAt($when);
}
 ?>
