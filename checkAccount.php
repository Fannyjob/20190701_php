<?php
    include_once 'sql.php';
    session_start();

    if (!isset($_REQUEST['account'])) header('Location: login.php');
    $account = $_REQUEST['account']; $passwd = $_REQUEST['passwd'];

    $sql = 'select * from member where account = ?';
    //select * from member where account = ?
    $stmt = $mysqli->prepare($sql);
    $stmt =bind_param('s',$account);
    $stmt = execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0){
        //check password,now
    //$member = $result->fetch_object('Member'); //'Member'在這裡已經是物件屬性了  所以依照下面的寫法就可以了
    $member = $result->fetch_object('');
    //var_dump($member);


        if(password_verify($passwd, $member->passwd)){  //驗證帳密
            //OK
            $_SESSION['member'] = $member;
            $_SESSION['cart'] = new $cart;


            header('Location: main.php');  //登入成功 帶入主畫面
        }else{
            //XX
            header('Location: login.php');  //登入失敗
        }



    }else{
        //no account
    }
?>