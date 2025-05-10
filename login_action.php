<?php
include("header.php");
?> 
<?php
$email=$_POST["email"];
$password=$_POST["password"];
if(isset($_SESSION["sql"])){
    $a=mysqli_connect("localhost","lavaio_z1079","H5bh2tK@T2eD7f7","lavaio_mahdi" );
    mysqli_set_charset($a, "utf8mb4");

    }else{
    $a=mysqli_connect("localhost","root","","mahsol" );
    }$result=mysqli_query($c,"SELECT * FROM `user` WHERE 'email'='$email'and'password'='$password'");
mysqli_close($c);
$row=mysqli_fetch_array($result);
if($row){
    echo("وارد شدید");
}else{
    echo("...دقت کنید");
}
?>
<?php
include("footer.html");
?>