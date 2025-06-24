<form method="post" action="">
    <input type="text" placeholder="entername" name="user"><br>
    <button name="button" value="set">create cookies</button>
     <button name="button" value="display">display cookies</button>
     <button name="button" value="delete">delete cookies</button>
</form>
<?php

if(isset(($_POST)['button'])){
    if($_POST['button']=='set'){
        $var=$_POST['user'];
        setcookie('user',$var);
        echo("cookie cfeated");

    }
if($_POST['button']=='display'){

    if(isset($_COOKIE['user'])){
        echo$_COOKIE['user'];
    }}

if($_POST['button']=='delete'){
    if(isset($_COOKIE['user'])){

        setcookie('user',null);
    }
}    

}



?>