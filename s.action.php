<?php
include("header.php");
 if (!isset($_SESSION["id"])) {
    ?>
    <script>
        location.replace("lo2.php");
    </script>
    <?php
    exit;
 }
$tedad=1;
var_dump($tedad); 

$id=$_GET["id"];
$idd=$_SESSION["id"];
$h=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$c=mysqli_query($h,"SELECT * FROM `mahsol` WHERE `id`=$id");
mysqli_close($h);
$row=mysqli_fetch_array($c);
$name=$row["name"];
$ghymat=$row["ghymat"];
$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"INSERT INTO `sabad`(`name`, `ghymat`,`idk`,`idm`,`tedad`) VALUES ('$name','$ghymat','$idd','$id','$tedad');");
mysqli_close($a);
?>
<?php
if($b)
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