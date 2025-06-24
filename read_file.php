<?php
// $file="dummy.txt";
// $myfile=fopen($file,'r')or die("unable to read file");
// echo fread($myfile,filesize($file));
// fclose($myfile);

if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myfile=fopen($file,'r')or die('error');
    echo fread($myfile,filesize($file));
    fclose($myfile);
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br /><br />
<button>readfile</button>




</form>