<?php
$mystr = 'abc';
$findme = 'x';
$pos = strpos($mystr,$findme);
if( $pos !== false){
    echo 'find it';
}else{
    echo 'not found';
}

?>