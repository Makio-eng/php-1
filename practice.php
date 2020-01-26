<?php
$name = "荒巻貴広";
if ($name == "荒巻貴広") {
  echo "私は".$name."です";
}
else{
  echo $name."ではありません";
}
$total = 0;
for($i = 1; $i <=10000; $i++) {
  echo $total += $i
  ;
}
$fruits = ["ぶどう","いちご","パイナップル","もも","オレンジ"];
foreach ($fruits as $fruits) {
  echo $fruits;
}
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
?>

