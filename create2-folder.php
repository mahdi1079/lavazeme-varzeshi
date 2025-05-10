
<?php
include("header.php");

$id=$_POST["id"];
$name=$_POST["name"];
if(isset($_SESSION["sql"])){
   $a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
   mysqli_set_charset($a, "utf8mb4");

   }else{
   $a=mysqli_connect("localhost","root","","mahsol" );
   mysqli_set_charset($a, "utf8mb4");

   }
$b=mysqli_query($a,"UPDATE `mahsol` SET `tozihat`='$name' WHERE `id`=$id;
");
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

}else
echo("خطا");
?>
<?php
include("footer.html");
?>