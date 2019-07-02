
<!--撲克牌 發牌的陣列, EX:發給四個人 每個人牌的排序-->

<?php

//洗牌
$poker = range(0,51);
shuffle($poker);

//發牌
$players = [[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4] [(int)($i/4)] = $card;
}
?>
<!--攤牌-->

<table border = "1" width="100%">
   <?php
   $suits = array("&spades;","<font color = 'red'> &hearts;</font>","<font color = 'red'> &diams;</font>","&clubs;");
   $value = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach($players as $player){
        sort ($player);
        echo '<tr>';
        foreach ($player as $card){
            echo "<td>";
            echo "{$suits[(int)($card/13)]}{$value[$card%13]}";
            echo "</td>";
        }
        echo '</tr>';
    }
   
   ?> 

</table>