<?php
sql_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});

$obj1 = new Myclass1;
$obj2 = new Myclass2;
$obj1 ->showMe();
$obj2 ->showMe();
$b1 = new Cart;
$c1 ->addProduct('p001',30);  //加入購物車
$c1 ->addProduct('p002',2);  
$myList = $c1->getList();
var_dump($myList);
?>