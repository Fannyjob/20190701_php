<?php
if (!isset($_GET['account'])) die();
include_once 'sql.php';

$account = $_GET['account'];
$sql = "select * from member where account = '{$account}'";  //'{$account}' 盈碼攻擊會所在的地方
$result = $mysqli->query($sql);
echo $result->num_rows;
//echo 1;

?>
