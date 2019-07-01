<?php
    $result =$x = $y = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; 
        $y = $_GET['y'];
        $r1 = (int)($x / $y);
        $r2 = $x % $y;  //餘數運算
        $result = "{$r1}......{$r2}";
        //echo "{$x} + {$y} = {$result}";
}
?>
<form action = "brad07.php">
<input name="x" value="<?php echo $x; ?>">
/
<input name="y" value="<?php echo $y; ?>">
<input type="submit" value = "=">


<?php
    echo $result;
?>
</form>