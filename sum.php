<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($num){
 echo $num * 2;
}
double(10);
echo "\n";

//2.$a と $b を仮引数に持ち、$a と $b　を足した結果を返す関数を作成してください。

function sum($a,$b){
  return $a + $b;
}
echo sum(1,2);
echo "\n";

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。*/

function multi($arr){
  $result = 1;
  foreach($arr as $a){
  $result *= $a;
  }
  return $result;
}
$array = [1,3,5,7,9,];
echo multi($array);
echo "\n";

/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array
という関数を実装しようとしています。途中の部分を完成させてください。*/

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
   if($max_number < $a){
     $max_number = $a;
   }
 }
 return $max_number;
 }
$array = [34,23,66,88,57];
echo max_array($array);
echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags

$string = "<h1 class=header-logo>こんにちは<h1>";
$prc1 = strip_tags($string);
echo $prc1;
echo "\n";

//array_push
$country = array("US","JP","CN");
array_push($country,"UK","RS");
print_r($country);
echo "\n";

//array_merge
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";

//time, mktime
echo time();
echo mktime(1,3,34,6,15,2019);

//date
echo date('Y-m-d H:i:s');
?>
