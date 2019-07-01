<?php
//  ==   兩個等號比對其 值 ，值相同，就會跑出 值的解答
//  ===  三個等號比對其 數據 與 值 ，都相同，才會跑出兩個解答

 $a = 10; $b = 8;



switch($a){
    case 1;
        echo 'A';
        break;
    case 10;
        echo 'B2';
        //break;
    case '10';
        echo 'B1';
        break;
    case 100;
        echo 'C';
        break;
    default:
        echo 'x';
}
echo '<hr>';
?>
<?php
$month = rand(1,12);
$days = 0;

switch($month){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $days = 31;
        break;
    case 4:case 6: case 9: case 11:
        $days = 30;
        break;
    case 2:
        $days = 28;
        break;
    default:
    $days = -1;

}
echo "{$month}月有{$days}天";
?>