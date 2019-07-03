
<!--    在文字檔案內加入字串    -->

<!--    
$fp = @fopen('./dir1/dir2.txt','r+');
//加文字進去

$fp = @fopen('./dir1/dir2.txt','w');   
//清除原資料，加文字進去

$fp = @fopen('./dir1/dir2.txt','a');   
//不清除原資料,加入更新資料進去    -->


<?php
$fp = @fopen('./dir1/file2.txt', 'a');
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567\n");
fwrite($fp, "Hello, World\n1234567");
fflush($fp);
//fflush 最好在檢查程式時，要加入這條比較好 (要形容的話，就比如...沖水馬桶要沖水下去的那個動作)  
fclose($fp);



?>