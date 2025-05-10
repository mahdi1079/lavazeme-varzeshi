<?php
include("header.php");
if(isset($_SESSION["sql"])){
$a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
mysqli_set_charset($a, "utf8mb4");

}else{
$a=mysqli_connect("localhost","root","","mahsol" );
}
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
?>

<section class=" container m-1">


<div id="carouselExampleAutoplaying" class="carousel slide shadow m-1" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="index.php"><img src="4/dfgfd.png" class="d-block w-100 carousel-img" alt="..."></a> 
    </div>
    <div class="carousel-item">
      <a href="ta.php"><img src="4/Untitled-2.png" class="d-block w-100 carousel-img" alt="..."></a> 
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

<div class="row justify-content-center">
<?php
while($row = mysqli_fetch_array($b)) {
?>
  <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3">
    <div class="card h-100 shadow">
      <img src="<?php echo htmlspecialchars($row["img"]); ?>" class="card-img-top" alt="محصول">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($row["name"]); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($row["ghymat"]); ?></p>
        <a href="aaa.php?id=<?php echo intval($row["id"]); ?>" class="btn btn-primary">خرید</a>
      </div>
    </div>
  </div>
<?php
}
?>
</div>



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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>
<?php
include("footer.html");
?>
  