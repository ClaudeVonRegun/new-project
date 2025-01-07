<?php
  // 問１
  $message = "Hello World";
  echo $message;
  echo "\n";

  // 問2
  $name = "Satoshi Kuroda";
  echo "Welcome ". $name; 
  // 「”文字列”. 変数」
  echo "\n";

  // 問3
  $apple_price = 200;
  $apple_quantity = 3;
  $orange_price = 100;
  $orange_quantity = 4;
  $total = $apple_price * $apple_quantity + $orange_price * $orange_quantity;
  echo $total."円";
  echo "\n";

  // 問４
  $colors = ["red", "blue", "green"];
  echo $colors[1];
  echo "\n";
  
  // 問５
  $members =[
    ["name" => "佐藤", "age" => 36, "job" => "営業"],
    ["name" => "田中", "age" => 23, "job" => "事務"],
    ["name" => "吉田", "age" => 54, "job" => "社長"],
  ];
  echo "田中さんは".$members[1]["age"]."歳です。";
  // 田中さんのインデックス番号[1]を取得して、keyである"age"からvalueの23を表示させる。
  // 「田中さんの年齢」のため、array_serchやarray_filterなどを使うべきか迷いました。
?>