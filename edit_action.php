
<?php
include("header.php");

$id=$_POST["id"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `mahsol` SET `name`='$name',`ghymat`='$ghymat' WHERE `id`=$id;
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