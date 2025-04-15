<?php declare(strict_types=1);

$higherOrderFunction1 = function (): Closure {
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
printf('Higher-order function with return function: %s \n', $higherOrderFunction1()()()());

$higherOrderFunction2 = function (Closure $callback): Closure {
  return function () use ($callback)
  {
    return $callback();
  };
};
printf('Higher-order function with function parameter: %s \n', $higherOrderFunction2(fn() => 'function parameter')());
