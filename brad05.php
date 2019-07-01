<!--<script>
 //   function add(){
 //   let x =documet
//}
</script>
-->



<?php
    $result =$x = $y = '';
    if (isset($_GET['x'])){
        $x = $_GET['x']; $y = $_GET['y'];
        $result = $x + $y;
        //echo "{$x} + {$y} = {$result}";
}
?>
<!--如果要在同一頁進行運算結果，就要加上'if (isset(輸入詢問內容)){}' 去運算詢問，是否有這個變數 -->
<!--這樣結果就不會轉跳到下一頁 -->
<form action = "brad05.php">
<input name="x" value="<?php echo $x; ?>">
<!-- 'Value = " " ' 這個程式語言，是表示可以顯示字串的呈現 -->
+
<input name="y" value="<?php echo $y; ?>">
<input type="submit" value = "=">


<?php
    echo $result;
    //在上方運算後,下方要加上呈現結果的呈現
?>
</form>