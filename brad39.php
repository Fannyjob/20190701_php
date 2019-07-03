<?php
$content = file('./dir1/dir2.txt');
var_dump($content);
foreach($content as $k => $line){
    echo $line;    
}



?>