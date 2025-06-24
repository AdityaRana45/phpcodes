<?php
$host="localhost";
$username="root";
$password=null;

try{
    $conn= new PDO("mysql:host=$host;dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"connection succcessfully";

}
catch(PDOException $err){
    echo"cannot connect";
    $err->getmessage();
}
$result= $conn->query('show tables');
while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}

?>