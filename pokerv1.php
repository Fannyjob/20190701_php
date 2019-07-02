<?php

//首先產生亂數
$poker = [];
for ($i = 0; $i<52; $i++){
    $rand = rand(0,51);

    // 檢查機制
    $isRepeat = false;
    for ($j =0; $j < $i; $j++){
        if ($rand == $poker[$j]){
                $isRepeat = true;
                break;
        }
    }

    
   // 才會知道要不要重做一次
    if ($isRepeat){
        $i--;
        continue;
    }


    $poker [$i] = $rand;
    echo $poker[$i] . '<br>';


}

?>