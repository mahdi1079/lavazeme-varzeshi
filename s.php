<?php
include("header.php");


$id=$_SESSION["id"];
$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"SELECT * FROM `sabad` WHERE `idk`=$id");
$r=$b;
mysqli_close($a);

?>




<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"  data-bs-smooth-scroll="true" class=" shadow  p-1 m-5  " tabindex="0">

<?php

$row=mysqli_fetch_array($b);
while($row)
{
 ?>


  <h6 id="scrollspyHeading1" style="font-style: Calibri Light;">نام کالا :<?php echo($row["name"]);?> </h4>
  <h6 id="scrollspyHeading5"></h4>
  <p>قیمت :<?php echo($row["ghymat"]);?>

 </p>
 <form action="sa.php" method="post">
 <h9 class="col-5">تعداد :</h9>
 <input type="text" value="<?php echo($row["tedad"]);?>" name="tedad" id="tedad">
 <input type="text" value="<?php echo($row["id"]);?>" name="id" hidden id="id">
 <input type="submit" value="اضافه کردن">

 </form>
 <hr style="border: none; height: 2px; background-color: black; width: 50%;">

 <?php
 $row=mysqli_fetch_array($b);

}
?>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <a href="adres.php">
  <button type="button" class="btn btn-primary m-0 " id="l">خرید</button>
  </a>
  <script src="l.php"></script>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
</div> 




<?php

include("footer.html");
?>
  