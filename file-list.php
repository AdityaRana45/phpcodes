<?php
$path='file';//folder ka naam
$items=scandir($path);//scandir se directory ya folder ko scan krna
$items=array_diff($items,array('.','..',));
// print_r($items);

foreach($items as $item){
    echo"<br>"."<a href=./file/$item>$item</a>";

}
