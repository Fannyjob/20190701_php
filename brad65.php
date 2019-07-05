<?php

include_once 'sql.php';

$ret->code = '';
if (isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "select * from product where id = {$id}";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        $product = $result->fetch_
    }
}



?>