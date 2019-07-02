<!--  驗證身分證 與 bradutis.php 相關聯 -->


<?php
    include_once 'bradutis.php';


    $twid = 'A123456789';
    if (isTWId($twid)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>
<?php
    include_once 'bradutis.php';


    $twid = createTWId(false);
    echo $twid . '<br>';
    if (isTWId($twid)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>