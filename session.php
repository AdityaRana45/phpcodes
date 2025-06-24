<?php
session_start();
$_SESSION['user']='adi';
$_SESSION['id']=123;

if(isset($_SESSION)){

echo "username is ".$_SESSION['user'];
echo $_SESSION['id'];
}



?>