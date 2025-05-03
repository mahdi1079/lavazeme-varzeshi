<?php
include("header.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"DELETE FROM `sabad` WHERE `id`=$id");
mysqli_close($a);
?>
<?php

if($b===true)
{
    
 ?>
 
    <script>
    location.replace("admin.php");
 </script>   
  
 <?php

}
?>
<?php
include("footer.html");
?>