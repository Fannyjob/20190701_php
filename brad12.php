<?php
$a = 10; $b = 3;
if( $a++ >10 || $b-- < 3){
    // && , || 判斷特性
    // & 二進位的判斷特性
    echo "OK; a={$a}; b={$b};";
}else{
    echo "xx; a={$a}; b={$b};";
}

echo '<hr>';
$c = 3; $d =2;
$e = $c ^ $d;
echo $e;
