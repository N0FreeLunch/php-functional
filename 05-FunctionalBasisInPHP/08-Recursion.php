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


$currentPath = getcwd();
echo $currentPath;
echo "<br>";
$separator = "\\".DIRECTORY_SEPARATOR;
echo $separator;
echo "<br>";

// $pattern = "/".$separator.".+?$/";
// $pattern = "/\.+".$separator."/";
$pattern = "/.+$separator/";
echo "<br>";
echo "pattern : ".$pattern;
echo "<br>";
$extractPath = [];
echo preg_match($pattern,$currentPath,$extractPath);
var_dump($extractPath);
$parentPath = $extractPath[0];
echo $parentPath;


function searchDirectory($dir, $accumulator = []) {
  foreach (scandir($dir) as $path) {
    if(strpos($path, '.') === 0) {
      continue;
    }

    $fullPath = $dir.DIRECTORY_SEPARATOR.$path;

    if(is_dir($fullPath)) {
      // echo "fullpath : $fullPath <br>";
      // echo "path : ./$path <br>";
      // var_dump(searchDirectory($path, $accumulator));
      $accumulator[] = searchDirectory($path, $accumulator);
    } else {
      $accumulator[] = $fullPath;
    }
  }
  return $accumulator;
}

$result = searchDirectory($parentPath,[]);
var_dump($result);
echo "<br>";
echo "<br>";

$result = searchDirectory('.',[]);
var_dump($result);
echo "<br>";
echo "<br>";

 ?>
