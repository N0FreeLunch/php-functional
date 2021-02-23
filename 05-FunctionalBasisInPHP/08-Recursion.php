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
var_dump([1,2,3,[4,5,6,[7,8,9],10],11]);
echo "<br>";
echo "<br>";

$currentPath = getcwd();
echo $currentPath;
echo "<br>";
$separator = "\\".DIRECTORY_SEPARATOR;
echo $separator;
echo "<br>";

$pattern = "/(.+)$separator/";
echo "<br>";
echo "pattern : ".$pattern;
echo "<br>";
$extractPath = [];
echo preg_match($pattern,$currentPath,$extractPath);
var_dump($extractPath);
echo "<br>";
$parentPath = $extractPath[1];
echo $parentPath;
echo "<br>";
define(PARENTPATH,$parentPath);

function searchDirectory($dir) {
  $accumulator = [];
  foreach (scandir($dir) as $path) {
    if(strpos($path, '.') === 0) {
      continue;
    }

    $fullPath = $dir.DIRECTORY_SEPARATOR.$path;

    if(is_dir($fullPath)) {
      // echo "fullpath : $fullPath <br>";
      // echo "path : $path <br>";
      // echo $dir.DIRECTORY_SEPARATOR.$path
      // echo "<br>";
      // $accumulator = searchDirectory($dir.DIRECTORY_SEPARATOR.$path, $accumulator);
      $accumulator[$fullPath] = searchDirectory($dir.DIRECTORY_SEPARATOR.$path);
    } else {
      $accumulator[] = $fullPath;
    }
  }
  return $accumulator;
}

$result = searchDirectory($parentPath);
var_dump($result);
echo "<br>";
echo "<br>";

$result = searchDirectory('..');
var_dump($result);
echo "<br>";
echo "<br>";

$result = searchDirectory('.');
var_dump($result);
echo "<br>";
echo "<br>";

 ?>
