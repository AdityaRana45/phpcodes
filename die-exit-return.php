<?php
$a = 10;
$b = 14;

echo test();
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a + $b;
echo '<br>';
exit();
echo $a % $b;
echo '<br>';
die('die here');
echo $a * $b;

function test(){
    return 20;
    echo  "hloo";
}
?>