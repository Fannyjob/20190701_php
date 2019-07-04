<?php
//  圖片等比放大縮小


    $dstW = 240; $dstH = 240;
    $src = ImageCreateFromJpeg("Upload/w.jpg");
    $srcW = ImageSX($src); $srcH = ImageSY($src);
    //echo "{$srcW} : {$srcH}<br>";
    if ($srcW > $srcH){
        // w-type
        $dstX = $dstW;
        $dstY = $dstH * $srcH / $srcW;
    }else{
        // h-type
        $dstY = $dstH;
        $dstX = $dstW * $srcW / $srcH;
    }
    //echo "{$dstX} : {$dstY}";

//<<<<< 跟下方寫法一樣 只是不同寫法 >>>>
    $dst = ImageCreate($dstX, $dstY);
    imagecopyresampled ($dst,$src, 
        0 , 0, 
        0,  0, 
        $dstX , $dstY , 
        $srcW , $srcH );

//<<<<< 跟上方寫法一樣 只是不同寫法 >>>>
    // ImageCopyResized ($dst,$src, 
    //     0 , 0, 
    //     0,  0, 
    //     $dstX , $dstY , 
    //     $srcW , $srcH );
    //header("Content-type: image/jpeg");
//<<<<< 跟上方寫法一樣 只是不同寫法  end >>>>


    imageJpeg($dst, "dir1/newW.jpg");     //圖另存新檔 縮檔尺寸
    ImageDestroy($src);
    ImageDestroy($dst);


?>