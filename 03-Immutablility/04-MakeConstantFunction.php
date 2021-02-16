<?php
echo constant('UPPERCASE');
echo "<br>";
echo defined('UPPERCASE', '') ? 'true' : 'false';
echo "<br>";
echo defined('UPPERCASE') ? 'true' : 'false';
echo "<br>";
echo constant('I_DONT_EXISTS');
echo "<br>";
echo defined('I_DONT_EXISTS');
echo "<br>";

 ?>
