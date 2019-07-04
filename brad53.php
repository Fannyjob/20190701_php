<?php
//腳踏車 編寫速度

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