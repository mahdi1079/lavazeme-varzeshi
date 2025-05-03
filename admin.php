<?php
include("header.php");

$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
$C=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$L=mysqli_query($C,"SELECT * FROM `sabad` ");
mysqli_close($C);

if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ 


}else
{
  ?>

  <script>
        location.replace("index.php");
    </script>
    <?php
}
?>

<section class=" container m-1">



<div id="carouselExampleAutoplaying" class="carousel slide shadow m-4" data-bs-ride="carousel">
      <div class="carousel-inner m-0">
        <div class="carousel-item active">
         <a href="index.php"><img src="4/dfgfd.png" class="d-block w-100" alt="..."></a> 
          
        </div>
        <div class="carousel-item">
         <a href="ta.php"> <img src="4/Untitled-2.png" class="d-block w-100" alt="..."></a> 
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class=" px-4 text-center m-1">

</div>
</div>
<div class="card p-3 m-1 shadow" >
    <div class="col-12 row ">

    <?php
$row=mysqli_fetch_array($b);
while($row)
{
?>




<div class="card col-12 col-md-3 m-1 " style="width: 18rem;">
  <img src="<?php echo($row["img"]); ?>" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo($row["name"]);?></h5>
    <p class="card-text"><?php echo($row["ghymat"]);?></p>
    <a href="<?php echo($row["idd"]);?>?id=<?php echo($row["id"]); ?>" class="btn btn-primary">خرید</a>
    <button><a href="edit.php?id=<?php echo($row["id"]); ?>">*</a></button>
    <button><a href="delete.php?id=<?php echo($row["id"]); ?>">-</a></button>
    <!-- <button><a href="new10.php?id=<?php echo($row["id"]); ?>">اضافه کردن فولدر</a></button> -->
  </div>
</div>

<?php
$row=mysqli_fetch_array($b);
}
$row2=mysqli_fetch_array($L);
while($row2)
{
?>
  <h6 id="scrollspyHeading1" style="font-style: Calibri Light;">نام کالا :<?php echo($row2["name"]);?> </h4>
  <h6 id="scrollspyHeading5"></h4>
  <p>قیمت :<?php echo($row2["ghymat"]);?>

 </p>
 <form action="sa.php" method="post">
 <h9 class="col-5">کد کاربر :</h9>
 <h9><?php echo($row2["idk"]);?></h9>
 <h9 class="col-5">تعداد :</h9>

 <input type="text" value="<?php echo($row2["tedad"]);?>" name="tedad" id="tedad">


 <input type="text" value="<?php echo($row2["id"]);?>" name="id" hidden id="id">
 
 <input type="submit" value="اضافه کردن">
 <button><a href="d-s.php?id=<?php echo($row2["id"]); ?>">-</a></button>

 </form>
 <hr style="border: none; height: 2px; background-color: black; width: 50%;">

<?php
$row2=mysqli_fetch_array($L);
}
?>

<!-- <div class="card col-12 col-md-3 m-1 " style="width: 18rem;">
  <img src="4/322.webp" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">میز تنیس 1</h5>
    <p class="card-text">قیمت: 2,000,000 ریال</p>
    <a href="m.php" class="btn btn-primary m-2">خرید</a>
</div>
  </div>

  <div class="card col-12 col-md-3 m-1 " style="width: 18rem;">
  <img src="4/5454.webp" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">توپ بسکتبال</h5>
    <p class="card-text">قیمت: 700,000 ریال</p>
    <a href="tb.php" class="btn btn-primary">خرید</a>
  </div>
</div>

<div class="card col-12 col-md-3 m-1  " style="width: 18rem;">
  <img src="4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">توپ فوتبال</h5>
    <p class="card-text">قیمت: 400,000 ریال</p>
    <a href="tf.php" class="btn btn-primary">خرید</a>
  </div>
</div> -->

</div>
    </div>
  </div>
</div>
</div>
        </section>
<?php
include("footer.html");
?>
  