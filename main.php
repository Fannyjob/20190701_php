<?php
sql_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});
session_start();
if (!isset($_SESSION['member'])) header('Location : login.php');
$member = $_SESSION['member']; $cart = $_SESSION['cart'];
$icon = base64_encode($member->icon);
//$icon = base64_encode(file_get_contents("./upload/op_01.jpg"));

?>
<h1>Cy super Big Company</h1>
<hr/>
Welcome,<?php echo $member->realname; ?>
<img src='date:image/jpge;base64,<?php echo $icon; ?>' />
<a href='logout.php'>Logout</a><br />
<hr/>
2019 Copy copyright,Power By Cy corp.