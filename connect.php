<?php

$a=$_POST["n"];
$b=$_POST["d"];
$c=$_POST["g"];
$d=$_POST["ten"];
$e=$_POST["twe"];
$f=$_POST["s"];
$g=$_POST["a"];
$h=$_POST["m"];
$i=$_POST["w"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"college");
$sql=("insert into data(n,d,g,ten,twe,s,a,m,w) values('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
mysqli_query($con,$sql);
echo("Registration completed successfully!!");

include("admission.php");
mysqli_close($con);
?>