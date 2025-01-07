<?php
// 問１
for($i = 1; $i <= 100; $i++){
  if($i % 10 === 0){
    echo $i. "\n";
  }
}


// 問２
$sum =0;
for($i = 1; $i <= 100; $i++){
  if($i % 2 == 0){
    $sum += $i;
  }
}
echo $sum. "\n"; 

// 問３
for($i = 1; $i <= 100; $i++){
  if($i % 3 === 0 && $i % 5 ===0){
    echo "FizzBuzz\n";
  }elseif($i % 3 === 0){
    echo "Fizz\n";
  }elseif($i % 5 === 0){
    echo "Buzz\n";
  }else{
    echo $i."\n";
  }
}

// 問4
$A = mt_rand();
$B = mt_rand();
$C = mt_rand();
$D = mt_rand();
$E = mt_rand();
echo $A. "\n". $B. "\n". $C. "\n". $D. "\n". $E. "\n";  
$array = array($A, $B, $C, $D, $E);
$max = 0;
for($i = 0; $i < 5; $i++){
  if($max < $array[$i]){
    $max = $array[$i];
  }
}
echo $max. "\n";

//問５
$text1 = "abcdefghi";
$text2 = "abcdedcba";

if($text1 === strrev($text1)){
  echo "これは回文です。";
}else{
  echo "これは回文ではありません。";
}
echo "\n";
if($text2 === strrev($text2)){
  echo "これは回文です。";
}else{
  echo "これは回文ではありません。";
}
?>