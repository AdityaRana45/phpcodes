<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="text" name="user">
    <br>
    <button name="button" value="set">set</button>
    <br>
    <button name="button" value="display">display</button>
     <br>
     <button name="button" value="delete">delete</button>
    <br>

</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['button'])){

    if($_POST['button']=='set'){
        $var=$_POST['user'];
        $_SESSION['user']=$var;
        echo"session set";
    }
    if($_POST['button']=='display'){
        echo $_SESSION['user'];        
    }

   if($_POST['button']=='delete'){
    session_destroy();

   }
}





?>