<?php 

include_once 'sql.php';
if($_REQUEST['pname']) header('Location: bmain.php');
$pname = $_REQUEST['pname']; $price = $_REQUESTp['price'];
$sql = "INSERT INTO product (pname,price) VALUES ('{$pname}','{$price}')";
$mysqli->query($sql);

$newid = $mysqli->insert_id;
if(isset($_FILES['pimg'])){
    $pimg = $_FILES['pimg']; $n = 1;
    foreach($pimg['error'] as $i => $errno){
        if($errno == 0){
            copy($pimg['tmp_name'][$1],"pimgs/p_{$newid}_{$n}.jpg");
        }
    }
}
header('location :bmain.php');

?>


<form method='post' action='addproduct.php' enctype='multipart/from-data'>
    PName: <input type="text" name="pname" />
    Price: <input type="number" name="price" />
    PImage1: <input type="file" name="pimg[]" />
    PImage2: <input type="file" name="pimg[]" />
    PImage3: <input type="file" name="pimg[]" />
    PImage4: <input type="file" name="pimg[]" />
    PImage5: <input type="file" name="pimg[]" />
    <input type="submit" value="Add" />

</form>