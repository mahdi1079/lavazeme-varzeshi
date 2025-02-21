
<?php
include("header.php");
$image=$_FILES["image"]["name"];
$id=$_POST["id"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];

$imageurl="4/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `mahsol` SET `name`='$name',`ghymat`='$ghymat',`img`='$imageurl' WHERE `id`=$id;
");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <script>
    location.replace("index.php");
 </script>   
  
 <?php

}else
echo("خطا");
?>
<?php
include("footer.html");
?>