<?php
$fp = @fopen('https://tw.stock.yahoo.com/q/bc?s=2317', 'r');
//$fp = @fopen('./dir1/dir1.txt', 'r');

$i = 1;
while ($line = fgetss($fp)){
    if (preg_match('/href/', $line)){
        // if (preg_match('/2317/', $line)){
            echo "{$i} => {$line}";
            $i++;
        // }
    }
}
fclose($fp);