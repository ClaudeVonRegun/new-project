<?php
// 問１
for($i = 1; $i <= 10; $i++){
  echo $i;
  echo "\n";
}

// 問２
$sum = 0;
for($i = 1; $i <= 50; $i++){
  $sum += $i; 
}
echo "1から50の合計は".$sum."です";
echo "\n";

// 問３
for($i = 10; $i >= 1; $i--){
  echo $i;
  echo "\n";
}
?>