<?php
//1. canvas(new)    創建
//2. procass        
//3. output => 1.display or 2. export        
//4. free memory      要把memory ,free掉

$rate = $_GET['rate'];  //50%  百分比



$img = ImageCreateTrueColor(400, 20);
$yellow = Imagecolorallocate ($img,255,255,0);
$red = Imagecolorallocate ($img,255,0,0);
imagefilledrectangle( $img,0,0,400,20,$yellow);
imagefilledrectangle( $img,0,0,$rate*400/100,20,$red);

header("content-type: image/jpeg");
imagejpeg($img);

ImageDestroy($img);




?>