
<?php
if(isset($_POST['filename'])){
    $filename=$_POST['filename'];
    $content=$_POST['content'];
    $file=fopen($filename,'w')or die('unable to create file');

    fwrite($file,$content);
    fclose($file);
    echo"file created";

}

// $filename="dummy.txt";//file ka naam
// $content="this is dummy file";//file m content
// $file= fopen($filename,'w')or die('unable to create file');// file ko open karo or write karo

// fwrite($file,$content); // file m content add karege
// fclose($file);
// echo"file created";
?>



<form action="" method="post">
<input type="text" name="filename"><br/>

<textarea name="content"></textarea>
<br/><button type="submit">create file</button>
</form>
