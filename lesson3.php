<?php
// 問１
$i = 1;
for($i = 1; $i <= 10; $i++){
  echo $i;
  echo "\n";
}

// 問２
$i = 1;
$sum = 0;
while($i <= 50){
  $sum += $i; 
  $i++;
}
echo $sum;
echo "\n";

// 問３
$i = 10;
while($i >= 1){
  echo $i;
  echo "\n";
  $i--;
}
?>