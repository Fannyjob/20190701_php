<!-- 老師不建議使用global，  function 開發的獨立性不高  -->

<?php
function test1(){
        global $v;
        $v += 7;
}
$v = 100;
test1();
test1();
test1();
test1();
echo $v;

?>