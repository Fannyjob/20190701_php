
<!-- 骰子各點出現的次數 -->
<!-- 有用陣列的方式，寫出運算的式子 -->

<?php
//$p[出現點數] = 出現次數

$p = array( 1=>0,0,0,0,0,0); //$p[1] = 0, $p[2] =0, ...$[6] = 0
//var_dump($p);


for($i =0; $i<100000; $i++){
    $point = rand(1,9);
    $p[$point>6?$point-3:$point]++;
}
for($i =1; $i<=6; $i++){
echo "{$i}點出現{$p[$i]}次<br>";
    
}
echo '<hr>';
foreach($p as $key => $value){
 echo "{$key}點出現{$value}次<br>";
}
?>