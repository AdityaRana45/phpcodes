<?php
// $name=$_POST['name'];
// echo $name;
// print_r($_POST);
if(isset($_POST['name'])){
    echo "name is ". $_POST['name'];
    echo"<br>";
     echo "email is ". $_POST['email'];
       echo"<br>";
      echo "pass is ". $_POST['password'];
        echo"<br>";
          echo "pass  is ". $_POST['password'];
        echo"<br>";
         echo "city  is ". $_POST['gender'];
        echo"<br>";
         
         echo "Skill is: " . implode(", ", $_POST['skills']);
        echo "address is ". $_POST['address'];
        echo"<br>";



}
// PHP Processing
if (isset($_POST['skills'])) {
    echo "Skill is: " . implode(", ", $_POST['skills']);
}


?>