<?php
include("header.php");
?> 
<?php
$email=$_POST["a"];
$password=$_POST["b"];
$c=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi");
$result=mysqli_query($c,"SELECT * FROM `regster` WHERE `pasword`='$password' and `name`='$email'  ");
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