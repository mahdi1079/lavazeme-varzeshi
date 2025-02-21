<?php
include("header.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"DELETE FROM `mahsol` WHERE `id`=$id");
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

}
?>
<?php
include("footer.html");
?>