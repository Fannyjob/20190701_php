<?php
$img = imagecreatefromjpeg ("c:/xampp/htdocs/myphp/20190701_php/Upload/coffee.jpg");
$yellow = ImageColorAllocate($img, 255,255,0);
imagettftext ($img, 36, rand(-30,30), 100, 200, $yellow, 
    "c:/xampp/htdocs/myphp/20190701_php/fonts/Meroche-2.otf", "Hello, World");
header("Content-type: image/jpeg");
ImageJpeg($img);
ImageDestroy($img);
?>