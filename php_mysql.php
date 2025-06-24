<?php 
$host='localhost';
$username="root";
$password="";
$database="college";

$conn= new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("connection failed");
}
else{
    echo"connection successsful <br />";

     $result=$conn->query("show tables;")->fetch_all();
   print_r ($result);
    }








?>