<?php
 $user=['name'=>'ad','age'=>'12'];
$users=['abc','fgh','sam'];
$us=['xx','yy','zz','zz'];
// echo is_array($users);
echo count($users);// gives no of elements in array

unset($users[1]);
print_r($users);
echo('<hr>');
array_push($users,'ad');
print_r($users);
echo("<hr>");
print_r(array_keys($user));
echo implode($users);//array to string

echo("<hr>");
$u='hello, how are, you';
print_r(explode(',',$u));

echo("<hr>");

$data=array_merge($users,$us);
print_r($data);

echo("<hr>");

$a=array_unique($us);
print_r($a);

 ?>