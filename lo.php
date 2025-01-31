<?php
include("header.html");
?> 
<?php
$email=$_POST["a"];
$password=$_POST["b"];
$c=mysqli_connect("localhost","root","","regster");
$result=mysqli_query($c,"SELECT * FROM `regster` WHERE `pasword`='$password' and `name`='$email'  ");
$row=mysqli_fetch_array($result);
if($row)
{
    
    echo("وارد شدید");
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