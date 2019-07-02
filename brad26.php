<?php
echo count($_ENV);
echo "<hr>";
foreach($_ENV as $Key => $value){
    echo "{$Key} => {$value} <br>";
}


?>