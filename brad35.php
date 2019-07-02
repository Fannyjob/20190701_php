<?php
date_default_timezone_set('Asia/Taipei'); //轉換時區
$mydir = '.'; //一點等於  觀看本目錄  ，兩個點就...往回上一層看資料夾，以此類推 
$fp = @opendir($mydir) or die('Server Busy');
//                             die、exit 可以將錯誤訊息 傳輸，直接在這邊回復

//<此段可以改用 while迴圈>
//$str = readdir ($fp); 
//echo $str . '<br>';
//<此段可以改用 while迴圈>

while( $file =readdir($fp)){
    //<上次修改時間>
    $mtime = filemtime("{$mydir}/{$file}");
    //<上次修改時間>

    //<可將修改時間，轉換為 年、月、日、時、分、秒>
    $ntime = date("Y-m-d H:i:s",$mtime);
    //<可將修改時間，轉換為 年、月、日、時、分、秒>

    //<檔案容量大小>
    $len = filesize("{$mydir}/{$file}");
    //<檔案容量大小>


    echo "{$file} :{$mtime}<br>";
    //echo "{$file} :{可更改為上方的指令碼}<br>";
}


?>