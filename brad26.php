<?php
echo count($_SERVER);
echo "<hr>";
foreach($_SERVER as $Key => $value){
    echo "{$Key} => {$value} <br>";
}


?>