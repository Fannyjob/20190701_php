<?php
sayYa();sayYa();
sayHello('Brad');
sayHello('Tony');
sayHelloV2();
//sayHelloV2('brad');
echo '<hr>';
sayHelloV3();
sayHelloV3('mary');
sayHelloV3(array('brad','mary','andy'));
echo '<hr>';
sayHelloV4();
sayHelloV4('hello');
sayHelloV4('hello',1,2,3,4);


function sayYa(){
    echo 'Ya<br>';
}

function sayHello($name){
    echo "Hello,{$name}<br>";
}

function sayHelloV2($n = 1, $name = 'world'){
    for ($i=0;$i<$n;$i++){
    echo "Hello,{$name}<br>";
    }
}
function sayHelloV3($names = 'world'){
    if(is_array($names)){
        foreach($names as $name){
            echo "Hello,{$name}<br>";
        }
    }else{
        echo "hello, {$names}<br>";
    }
    
    
}
function sayHelloV4(){
    $names = func_get_args();
    foreach($names as $name){
        echo "Hello,{$name}<br>";
    }
}

?>