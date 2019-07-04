<?php
//腳踏車 編寫速度
//<<<<<<<<<<   註解 分隔線   >>>>>>>>>>>>>>>>>
class Bike {
    public $speed = 0;   //設定速度
    function upSeed(){
        $this ->speed = $this->speed<1 ? 1 : $this->speed*1.2;  //加速

    }
    function downSeed(){
        $this ->speed = $this->speed<1 ? 0 : $this->speed*0.7;  //減速
    }
    
}

$b1 =new Bike;
$b2 =new Bike;

// 編寫兩台腳踏車的速度
// $b1 ->upSeed(); $b1->upSeed(); $b1->upSeed(); upSeed();
// $b1 ->downSeed();
// echo $b1 ->Speed .'<br>';

// $b2 ->upSeed(); $b2 ->upSeed();
// echo $b2 ->speed;

?>




<?php
//老師換另一種寫法

class Bike {
    private $speed = 0;   //設定速度
    function upSeed(){
        $this ->speed = $this->speed<1 ? 1 : $this->speed*1.2;  //加速

    }
    function downSeed(){
        $this ->speed = $this->speed<1 ? 0 : $this->speed*0.7;  //減速
    }
    function getSeed(){
        return $this->speed;  //加裝碼表 得知速度
    }
}

$b1 =new Bike;
$b2 =new Bike;
echo $b1->getSeed();

?>


<?php
//老師  加上小綿羊的寫法

class Bike {
    protected $speed = 0;   //設定速度
    //private 將封裝的父類別 只能給父類別存取
    //protected 將封裝的父類別 只能給子類別覆蓋存取
    function upSeed(){
        $this ->speed = $this->speed<1 ? 1 : $this->speed*1.2;  //加速

    }
    function downSeed(){
        $this ->speed = $this->speed<1 ? 0 : $this->speed*0.7;  //減速
    }
    function getSeed(){
        return $this->speed;  //加裝碼表 得知速度
    }
}
class scooter extends Bike{
    //把父類別 蓋掉 看到子類別的名稱與父類別的名稱一樣 ,與改寫是不一樣的
    function chgear($gear){$this->gear = $gear;}



//  <<<有下方 新一代小綿羊的寫法，就可以省略此段寫法>>>>
    //override
        //function upSeed(){
        //  parent::upSeed();
                 //parent 呼叫 父類別
                 //下方那串的簡化方式
                 //$this ->speed = $this->speed<1 ? 1 : $this->speed*2;
    //}
//  <<<有下方 新一代小綿羊的寫法，就可以省略此段寫法>>>>



    function upSeedV2(){
        //新一代 小綿羊 含 腳踏車功能
        $this ->speed = $this->speed<1 ? 2 : $this->speed*2;
    }
    
}

class persom{
    private $myBike;  //a Bike Object
    private $myScoore;
    private $myName;


    //建構式、建構子、建構方法 => 用來做 物件的初始化程序
    function __construct(){
        echo 'here';
        $this ->myBike = new Bike;
        $this ->myScooter - new Scooter;
        $this ->myScooter - new Scooter;

    }
    function __destruct(){
        
    }
}




$b1 =new Bike;
$b2 =new Bike;
$s1 = new scooter;
var_dump($s1);
$s1 ->upSeed();
echo '<hr>';
echo $b1->getSeed() . '<br>';
$s1 ->chGear(4);
$s1 ->upSeedV2();
echo $s1 ->getSeed() . '<br>';
$s1 ->upSeedV2();
echo $s1->getSeed() . '<br>';
echo '<hr>';


?>
