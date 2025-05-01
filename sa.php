
<?php
include("header.php");

$id=$_POST["id"];
$tedad=$_POST["tedad"];





// $a=mysqli_connect("localhost","root","","mahsol");
// $b=mysqli_query($a,"SELECT * FROM `sabad`WHERE `id`=$id");
// $row=mysqli_fetch_array($b);
// mysqli_close($a);

$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `sabad` SET `tedad`='$tedad'WHERE `id`=$id;
");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
     <script>
    location.replace("s.php");
 </script>    
  
 <?php

}else
echo("خطا");
?>
<?php
include("footer.html");
?>