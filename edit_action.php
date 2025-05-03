
<?php
include("header.php");
$image=0;
$image2=0;
$image3=0;

$image=$_FILES["image1"]["name"];
$id=$_POST["id"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$tozih=$_POST["tozih"];
$image2=$_FILES["image2"]["name"];
$image3=$_FILES["image3"]["name"];


$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
$row=mysqli_fetch_array($b);
mysqli_close($a);

if($image==0&&$image2==0&&$image3==0)
{
   $imageurl=$row["img"];
   $imageurl2=$row["img2"];
   $imageurl3=$row["img3"];

}else
{
   $imageurl="4/".$image;
   $imageurl2 = "4/" . $image2;
   $imageurl3 = "4/" . $image3;
}


move_uploaded_file($_FILES["image1"]["tmp_name"],$imageurl);
move_uploaded_file($_FILES["image2"]["tmp_name"],$imageurl2);
move_uploaded_file($_FILES["image3"]["tmp_name"],$imageurl3);
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `mahsol` SET `name`='$name',`ghymat`='$ghymat',`img`='$imageurl',`tozihat`='$tozih',`img2`='$imageurl2',`img3`='$imageurl3' WHERE `id`=$id;
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