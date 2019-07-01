<?php
$var1 ='Brad';
$var2 = 80;
echo "{$var1} => {$var2}kg";
echo $var1 . ' => ' . $var2 . 'kg<br>'; //原始字串相加的方式
$var3 = '10'; $var = '3';
//true 為 1, false為0
//$var5 = $var3 . $var4;    
//點的話,表示是字串相加
$var5 = $var3 + $var4;
//點改成 +  為數學運算
echo $var5;