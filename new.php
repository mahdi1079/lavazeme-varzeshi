<?php
include("header.html");

?>

<form action="new2.php" method="POST">
<p>نام:</p>
    <input type="text" name="name">
   
    <p>قیمت:</p>
    <input type="text" name="ghymat">
    <input type="submit" value="اضافه کردن" class="card">
</form>

<?php
include("footer.html");
?>