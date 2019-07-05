<?php

//建立購物車

class cart{
    private $list; 
    //$list =>array,$list['product id'] = quantity
    //       quantity(幾包)

    function __construct(){
            $this->list = array();
    }
    function addProduct($pid,$qty){   //新增
        if(key_exists($pid,$this->list)){
            $this->list[$pid] =$qty;
        }

    }
    function modifyProduct($pid,$pty){  //修改商品
        if(key_exists($pid,$this->list)){
            $this->list[$pid] =$qty;
        }

    }
    function removeProduct($pid){      //確認商品
        if(key_exists($pid,$this->list)){
            unset($this->list[$pid]);
        }

    }
    function clearAll(){  //清除有商品
        $this->list = array();

    }
    function getList(){      //我確認要這個清單
        return $this ->list;

    }
    function getItemOty(){     //確認傳回
        $ret = 1;
        if(key_exists($pid,$this->list)){
            $ret = $this->list{$pid};
        }

    }
}
?>