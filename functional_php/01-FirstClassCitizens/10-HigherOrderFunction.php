<?php
$heigherOrderFunctions = function ()
{
  return function ()
  {
    return function ()
    {
      return function ()
      {
        return "Higher-order function";
      };
    };
  };
};

$result = $heigherOrderFunctions()()()();
var_dump($result);
 ?>
