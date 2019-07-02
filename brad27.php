<?php
sayYa();sayYa();
sayHello('Brad');
sayHello('Tony');
sayHelloV2();
//sayHelloV2('brad');

sayHelloV3(array('','',));



function sayYa(){
    echo 'Ya<br>';
}

function sayHello($name){
    echo "Hello,{$name}<br>";
}

function sayHelloV2($n = 1, $name = 'word'){
    for ($i=0;$i<$n;$i++){
    echo "Hello,{$name}<br>";
    }
}
function sayHelloV3($names){
    foreach($names as $name)
    echo 
}

?>