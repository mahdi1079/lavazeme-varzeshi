<?php
include("header.php");
?> 
<?php
$email=$_POST["a"];
$password=$_POST["b"];
if(isset($_SESSION["sql"])){
    $a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
    mysqli_set_charset($a, "utf8mb4");

    }else{
    $a=mysqli_connect("localhost","root","","mahsol" );
    }$result=mysqli_query($a,"SELECT * FROM `regster` WHERE `pasword`='$password' and `name`='$email'  ");
$row=mysqli_fetch_array($result);
if($row)
{
    $_SESSION["id"]=$row["id"];
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];

    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}
else
{
    echo("...دقت کنید");
  
}
mysqli_close($c);
?>
<?php
include("footer.html");
?>