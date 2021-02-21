<?php

var_dump(scandir('./'));
echo "<br>";
var_dump(strpos('test/test.ts', '.'));
echo "<br>";
var_dump(strpos('../test/test.ts', '.'));
echo "<br>";
echo "<br>";
var_dump(is_dir('.'));
echo "<br>";
echo "<br>";
var_dump(is_dir('./08-Recursion.php'));
echo "<br>";
echo "<br>";


function searchDirectory($dir, $accumulator = []) {
  foreach (scandir($dir) as $path) {
    if(strpos($path, '.') === 0) {
      continue;
    }

    $fullPath = $dir.DIRECTORY_SEPARATOR.$path;

    if(is_dir($fullPath)) {
      $accumulator = searchDirectory($path, $accumulator);
    } else {
      $accmulator[] = $fullPath;
    }
  }
  return $accmulator;
}

$result = searchDirectory('..',[]);
var_dump($result);
echo "<br>";
echo "<br>";

$result = searchDirectory('.',[]);
var_dump($result);


 ?>
