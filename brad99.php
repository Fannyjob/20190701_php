<?php


?>
<table border='1' width = '100%'>
    <?php
    define("ROWS", 3);
    define("FROM", 2); //列
    define("TO", 5);  //欄

    for ($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for($j = FROM; $j<=TO; $j++){
            echo '<td bgcolor="#333">';
            $newj = $j + (TO-FROM+1) * $k;
                 for ($i = 1; $i<=9; $i++){
                     $r = $newj * $i; 
                     echo "{$newj} x {$i} = {$r}<br>";
                    }
            echo '</td>';
            }
        echo '</tr>';
    }     
?>
</table>