<?php
session_start();
$var1 = $_SESSION['var1'];


//echo $var1;  //rand 呈現結果
echo $var1[2]; //array 陣列呈現結果
?>




<?php
include_once 'bradutis02.php'; //  bradutis02.php 的呈現結果
session_start();
$var1 = $_SESSION['var1'];


//echo $var1;  //rand 呈現結果
//echo $var1[2]; //array 陣列呈現結果

echo "Sum:{$var1->sum()};Avg:{$var1->avg()}<br>";
?>