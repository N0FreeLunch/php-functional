<?php
$array = [1,2,3,4,5,6];
for ($i=0; $i < count($array) ; $i++) {
  echo 'slow because calculate count($array)';
  echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

for ($i=0; $i < count($array) ; $i++) {
  if($i < 6){
    $array[$i+6] =   $array[$i]+6;
  }
  echo 'slow because calculate count($array)';
  echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$length = count($array);
echo 'fast because calculate count($array) once';
echo "<br>";
for ($i=0; $i < $length; $i++) {
  echo '$length has referential transparency';
  echo "<br>";
}
 ?>
