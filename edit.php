<?php
include("header.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b);
$imageurl=$row["img"];

?>

<form  action="edit_action.php" method="post" enctype="multipart/form-data">

<input type="file" name="image1" placeholder="1تصویر" >
<input type="file" name="image2" placeholder="2تصویر" >
<input type="file" name="image3" placeholder="3تصویر" >


<!-- <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>"> -->
 <p>نام</p>
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
    <p>توضیحات</p>

    <textarea name="tozih" rows="5" cols="40"><?php echo htmlspecialchars($row["tozihat"]); ?></textarea>
    <p>قیمت</p>

     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>

<?php
include("footer.html");
?>
