<!--密碼加密-->


<?php
$passwd = '123456';
$passwd1 = password_hash($passwd,PASSWORD_DEFAULT);    //加密密碼
echo $passwd1 . '<br>';
echo strlen($passwd1);
echo '<hr>';


//驗證加密密碼

$passwd2 = '123345';
if (password_verify($passwd2,$passwd1)){     //加密過的 擺在後面打!
    echo 'OK';
}else{
    echo 'XX';
}


