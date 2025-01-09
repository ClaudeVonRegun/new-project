<?php

//問１
$A = mt_rand();
$B = mt_rand();
echo "変数Aは".$A."です";
echo "\n";
echo "変数Bは".$B."です";
echo "\n";
if($A > $B){
  echo "Aの方が大きいです。";
}elseif($A < $B){
  echo "Bの方が大きいです。";
}else{
  echo "AとBは等しいです。";
}
echo "\n";

// 問２
$rand = mt_rand();
echo $rand;
// rand()またはmt_rand()でランダムな数を作り出す。
echo "\n";
if($rand % 2 === 0){
  echo $rand. "は偶数です。";
}else{
  echo $rand. "は奇数です。";
}
// $randが２で割り切れる時は偶数で、割り切れないときは奇数。
echo "\n";

// 問３
$score = mt_rand(0, 100);
echo "点数は".$score."点です。";
echo "\n";
if($score === 100){
  echo "AA";
}elseif($score >= 90){
  echo "A";
}elseif($score >= 80){
  echo "B";
}elseif($score >= 70){
  echo "C";
}elseif($score >= 60){
  echo "D";
}elseif($score < 60){
  echo "E";
}
echo "\n";

// 問４
$rand2 = mt_rand(-10000, 10000);
echo $rand2;
// 負の数を含むランダムな数の生成がわからななかったので、一旦mt_randで負の範囲も含むことで生成。
echo "\n";
if ($rand2 > 0){
  echo "正の数です。";
}elseif($rand2 < 0){
  echo "負の数です。";
}elseif($rand2 === 0){
  echo "ゼロです。";
}
echo "\n";

//問５
$age = mt_rand(0, 150);
echo $age;
echo "\n";
if($age >= 0 && $age <= 5 || $age > 70){
  echo "無料です";
}elseif($age >= 6 && $age <= 12){
  echo "200円です。" ;
}elseif($age >= 13 && $age <= 70){
  echo "500円です。";
}
// 一旦mt_rand(0. 150)で年齢を取る。mt_randを外して任意の数字を入力して判定をかけることもできる。
?>