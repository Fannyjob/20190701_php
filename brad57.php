
<!--  連接mysql 在這邊建立資料  -->

<?php

$mysqli = new mysqli('localhost','root','','cy');
//var_dump ($mysqli);  //先查看有沒有連接成功
// echo $mysqli->connect_errno;  //從程式方面檢查  為0為成功
$mysqli->set_charset('utf8');


//<<<<<<<<          老師教學 在mysql建立資料部分       >>>>>>>

// $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES ("brad","123","1999-01-02")' ;
// $sql .= ',("cy1","123","1999-01-02")';   // .= 點+等於 可以累加檔案
// $sql .= ',("cy2","123","1999-01-02")';

//<<<<<<<<          老師教學 在mysql建立資料部分       >>>>>>>
//<<<<<<<<          出題 增刪修 部分       >>>>>>>

//  update cust set cname = 'Tony' where id = 3
//$sql = 'update cust set cname = "Tony" where id = 3';   //修改資料

//  delete from cust where id = 2
//$sql = 'delete from cust where id = 2';   //刪除資料

//<<<<<<<<          出題 增刪修 部分       >>>>>>>



$cname = 'Kavin';
$tel = '0912-123456';
$birthday = '1990-03-04';

$sql = 'INSERT INTO cust (cname, tel, birthday,) VALUES (?,?,?)' ;







$stmt = $mysqli->prepare($sql); //$stmt is a Object of mysqli_stmt

$stmt ->bind_param('sss',$name,$tel,$birthday);  
// sss 剛好這次示範為 三個字串  所以為 sss ，之後有別的設定，要改為不一樣的
// sss 等於三個字串的部分，所以後面就要有 3個字串，少一個都不行 


$stmt ->execute();
echo $stmt->affected_rows;  //從上方敘述列  檢測  有幾筆資料受到影響  
echo $mysqli->error;  

//  update cust set cname = 'Tony' where id = 3
//  delete from cust where id = 2



?>