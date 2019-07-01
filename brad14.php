<?php

//for( $i = 1 ; $i < 10 ; $i++){
//        echo "{$i}<br>";
//}

//下方此段參考上方原始範例
$i = 0;
for( printBrad() ; $i < 10 ; printLine() ){
    echo "{$i}<br>";
    $i++;
}

function printBrad(){
    echo 'Brad<br>';
}
function printLine(){
    echo '<hr>';
}




?>