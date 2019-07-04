<?php
    session_start();
   // echo $var1;

   // $var1 = rand(1,100);
    $var1 = array(1,2,3,4,5);
    $_SESSION['var1'] = $var1;
    

    $var1 = 200;

?>
<a href='brad55.php'>Next page</a>

<!--   上方是與 brad55.php 、 brad56.php的相呼應   -->


<!--   下方是與 bradutis02.php、brad55.php的相呼應   -->

<?php

    include_once 'bradutis02.php';
    session_start();
   // echo $var1;

   // $var1 = rand(1,100);
    $var1 = new Student(90,87,50);
    echo "Sum:{$var1->sum()};Avg:{$var1->avg()}<br>";
    $_SESSION['var1'] = $var1;

    $var1 ->setch(9);

?>
<a href='brad55.php'>Next page</a>