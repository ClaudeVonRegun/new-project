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

// 問５

$test1 = "level";
$test2 = "cool";
$test3 = "Madam";

function isPalindrome($str){
  $chars = str_split($str);
  $length =count($chars);
  $i = 0;
  $j = $length - 1;
  for($i=0; $i<$j; $i++, $j--){
    if($chars[$i] !== $chars[$j]){
      return false;
    }
  }return true;  
}

if(isPalindrome($test1)){
  echo $test1."は回文です";
}else{
  echo $test1."は回文ではありません";
};

echo "\n";

if(isPalindrome($test2)){
  echo $test2."は回文です";
}else{
  echo $test2."は回文ではありません";
};

echo "\n";

if(isPalindrome($test3)){
  echo $test3."は回文です";
}else{
  echo $test3."は回文ではありません";
};

echo "\n";

// パターン２

// function isPalindrome2($str){
//   $i = 0;
//   $j = strlen($str) - 1;
//   for($i=0; $i<$j; $i++, $j--){
//     if($str[$i] !== $str[$j]){
//       return false;
//     }
//   }return true;   
// }

// if(isPalindrome2($test1)){
//   echo $test1."は回文です";
// }else{
//   echo $test1."は回文ではありません";
// };

// echo "\n";

// if(isPalindrome2($test2)){
//   echo $test2."は回文です";
// }else{
//   echo $test2."は回文ではありません";
// };

// echo "\n";

// if(isPalindrome2($test3)){
//   echo $test3."は回文です";
// }else{
//   echo $test3."は回文ではありません";
// };

// echo "\n";

// パターン３

// if($text1 === strrev($text1)){
//   echo "これは回文です。";
// }else{
//   echo "これは回文ではありません。";
// }
// echo "\n";
// if($text2 === strrev($text2)){
//   echo "これは回文です。";
// }else{
//   echo "これは回文ではありません。";
// }

?>