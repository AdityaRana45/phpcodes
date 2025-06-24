<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" id="btn">Call function</button>


        
    </form> 
</body>
</html>

<?php
if(isset($_POST['button'])){
    btn_click();
}
function btn_click(){
    echo"function calle successsfully";
}?>