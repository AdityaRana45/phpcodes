<?php
// $user=['name'=>'rana','age'=>'25','email'=>'arana@gmail.com'];
// $userJson=json_encode($user);//json_encode()se jason format m convert hoga 
// echo $userJson;

//json format to array or object
$data='{"name":"rana","age":"24"}';
$dataarray=json_decode($data,true);
print_r($dataarray)
?>