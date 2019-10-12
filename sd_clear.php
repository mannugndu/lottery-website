<?php
$con=mysqli_connect("localhost","root","","delhisatta");
$pass=$_POST[pswd];

if($pass=='cleartherecord')
{	
	mysqli_query($con,"delete from raj_shree_lottery");	
	header("location:feedvalues.php?inserted=cleaned");
}
else
{
	header("location:feedvalues.php?inserted=notcleaned");
}
?>