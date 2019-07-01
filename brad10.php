<?php
    $result =$x = $y = $op = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y']; $op =$_GET['op'];

        if($op == '+'){
            $result = $x + $y;
        }else if($op == '-'){
            $result = $x - $y;
        }else if($op == 'x'){
            $result = $x * $y;
        }else if($op == '/'){
            $r1 = (int)($x / $y);
            $r2 = $x % $y;  //餘數運算
            $result = "{$r1}......{$r2}";
            //echo "{$x} + {$y} = {$result}";
        }else {
            $result = 'bug';
        }  
}

?>
<form action = "brad10.php">
<input name="x" value="<?php echo $x; ?>">
<select name="op">
    <option value = "+" <?php if ($op == '+') echo 'selected';?>>+</option>
    <option value = "-" <?php if ($op == '-') echo 'selected';?>>-</option>
    <option value = "x" <?php if ($op == 'x') echo 'selected';?> >x</option>
    <!-- <option value = "x" selected >x</option> -->
    <!-- selected 表示 可以將選項預設值，選擇為它 -->
    <!-- selected 的值，要用php的寫法呈現的話，看上方範例 -->
    <option value = "/" <?php if ($op == '/') echo 'selected';?>>/</option>
</select>
<input name="y" value="<?php echo $y; ?>">
<input type="submit" value = "=">


<?php
    echo $result;
?>
</form>