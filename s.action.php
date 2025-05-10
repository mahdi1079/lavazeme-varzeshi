<?php
include("header.php");
 if (isset($_SESSION["login"]) && $_SESSION["login"]==true) 
 {
    $tedad=1;
    var_dump($tedad); 
    
    $id=$_GET["id"];
    $idd=$_SESSION["id"];
    if(isset($_SESSION["sql"])){
        $h=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
        mysqli_set_charset($h, "utf8mb4");
    
        }else{
        $h=mysqli_connect("localhost","root","","mahsol" );
        }
        $c=mysqli_query($h,"SELECT * FROM `mahsol` WHERE `id`=$id");
    mysqli_close($h);
    $row=mysqli_fetch_array($c);
    $name=$row["name"];
    $ghymat=$row["ghymat"];
    if(isset($_SESSION["sql"])){
        $a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
        mysqli_set_charset($a, "utf8mb4");
    
        }else{
        $a=mysqli_connect("localhost","root","","mahsol" );
        }
    $b=mysqli_query($a,"INSERT INTO `sabad`(`name`, `ghymat`,`idk`,`idm`,`tedad`) VALUES ('$name','$ghymat','$idd','$id','$tedad');");
    mysqli_close($a);
    ?>
    <?php
    if($b)
    {
     ?>
    <script>
        location.replace("s.php");
     </script>   
     <?php
    }else
    echo("خطا");
    
 }else{
    ?>
    <script>
        location.replace("lo2.php");
    </script>
    <?php
    exit;
 }
?>
<?php
include("footer.html");
?>