<?php
include("header.php");
$id=$_GET["id"];
if(isset($_SESSION["sql"])){
  $a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
  mysqli_set_charset($a, "utf8mb4");

  }else{
  $a=mysqli_connect("localhost","root","","mahsol" );
  mysqli_set_charset($a, "utf8mb4");

  }
$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id");
mysqli_close($a);
?>

<section>
<div class="container px-4 text-center row">
<?php
$row=mysqli_fetch_array($b);
while($row)
{
?>

<div id="carouselExampleDark" class="carousel carousel-dark slide card col-12 col-sm-11 col-md-9 col-lg-12 col-xl-6">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo($row["img3"]); ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo($row["img"]); ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo($row["img2"]); ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" style="font-style: Arial;" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 col-12 col-sm-11 col-md-9 col-lg-12 col-xl-5 col-xxl-5 card m-1" tabindex="0">
  <h4 id="scrollspyHeading1" style="font-style: Calibri Light;"><?php echo($row["name"]); ?> </h4>
  
  <h4 id="scrollspyHeading5"></h4>
  <p> <?php echo($row["ghymat"]); ?></p>
  <h4 id="scrollspyHeading5"></h4>
  
  <p class="d-inline-flex gap-1">
<button class="btn btn-primary " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
توضیحات بیشتر  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class=" card-body col-12">
  <ul class="list-group">
  <li class="list-group-item"><?php echo($row["tozihat"]); ?></li>
</ul>
  </div>
</div>

  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <!-- <form action="s.action.php" method="$_POST">
    <input type="text" value="<?php $row["name"]; ?>" hidden name="name" id="name">
    <input type="text" value="<?php $row["ghymat"]; ?>" name="ghymat" hidden id="ghymat"> -->

    <a href="s.action.php?id=<?php echo($row["id"]); ?>"><button type="button" class="btn btn-primary float-end " id="l">خرید</button></a>
<!-- </form> -->
  
  <script src="l.php"></script>
</div>



<?php
$row=mysqli_fetch_array($b);
}
?>
      </div>
    </div>
  </div>
</div>







</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>
<?php include("footer.html"); ?>