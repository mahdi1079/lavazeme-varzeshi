<?php
include("header.php");

?>

<form action="new2.php" method="POST" enctype="multipart/form-data">
<input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر">
<input class="col-12 col-md m-2" type="file" name="image2" placeholder="تصویر">
<input class="col-12 col-md m-2" type="file" name="image3" placeholder="تصویر">
<p>نام:</p>
    <input type="text" name="name2">
   
    <p>قیمت:</p>
    <input type="text" name="ghymat">
    <p>توضیحات:</p>
    <input type="text" name="tozih">
    <input type="submit" value="اضافه کردن" class="card">


    
</form>

<?php
include("footer.html");
?>