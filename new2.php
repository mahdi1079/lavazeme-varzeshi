<?php
include("header.php");
$image=$_FILES["image"]["name"];
$image2=$_FILES["image2"]["name"];
$image3=$_FILES["image3"]["name"];
$name=$_POST["name2"];
$ghymat=$_POST["ghymat"];
$tozih=$_POST["tozih"];
$imageurl  = "4/" . $image;
$imageurl2 = "4/" . $image2;
$imageurl3 = "4/" . $image3;

move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
move_uploaded_file($_FILES["image2"]["tmp_name"],$imageurl2);
move_uploaded_file($_FILES["image3"]["tmp_name"],$imageurl3);


$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"INSERT INTO `mahsol`(`name`, `ghymat`, `img`, `img2`, `img3`, `tozihat`) VALUES ('$name','$ghymat','$imageurl','$imageurl2','$imageurl3','$tozih' );");
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