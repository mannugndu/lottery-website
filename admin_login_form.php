<?php
session_start();
$con=mysqli_connect("localhost","root","","delhisatta");
$usr=$_POST[login];
$ps=$_POST[pswd];
if($usr=='admin'&&$ps=='admin')
{
	$_SESSION['step1']=1;
	header("location:select_cat.php");
}
else
{
	header("location:index.php?er=1");
}

?>