<?php
//echo sqrt(73);
//加上上面的列數為 運算開更號

//運算質數  "質數" 除與1 不會被1整除的
$n = 24;
$isPrime = true;
for ($i = 2; $i < $n; $i++){
    if($n % $i == 0){
        $isPrime = false;
        break;
    }
}
echo $isPrime?"OK":"XX";