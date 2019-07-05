<?php
    include_once 'sql.php';
    
        if(isset($_REQUEST['cloneid'])){
            $cloneid = $_REQUEST['cloneid'];
            $sql = "INSERT INTO  product(pname,price)" . 
                    "SELECT pname,price FROM product WHERE id = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('i',$cloneid);
            $stmt->execute();
            //echo $stmt->error;
        }else if(isset($_REQUEST['cloneid'])){
            $delid = $_REQUEST['delid'];

            $sql = "DELETE pname,price FROM product WHERE id = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('i',$cloneid);
            $stmt->execute();
        }


    //select * from product
    $sql = 'select * from product';
    $result = $mysqli->query($sql);

?>
<a href='addProduct.php'>Add New Product</a>
<hr />
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>Edit / Delete /Clone</th>
    </tr>

</table>
<?php
while($product = $result->fetch_object()){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "Edit | ";
        echo "<a href='?deleteid={$product->id}'>Clone</a>";
    //在字串處理上面 " " 雙引號中 要保留文字字串的原意的話  要在雙引號中 "   \"   結尾處多加一個 \ 斜線
        echo "<a href='?cloneid={$product->id}'>Clone</a>";
        echo "</td>";
        echo '<tr>';
}


?>