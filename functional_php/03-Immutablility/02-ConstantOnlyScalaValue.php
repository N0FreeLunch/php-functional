<?php
define('FOO', 'somthing');
const BAR=42;

const BAZ = ['one','two','three'];
define('BAZ7', ['one', 'two', 'three']);

define('__FOO__', 'possible clash');

var_dump(FOO);
echo "<br>";

var_dump(BAR);
echo "<br>";

var_dump(BAZ7);
echo "<br>";

var_dump(__FOO__);
echo "<br>";

 ?>
