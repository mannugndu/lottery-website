<?php
session_start();
if($_SESSION['step1']!=1)
{
	header("location:index.php?er=1");
}
$con=mysqli_connect("localhost","root","","delhisatta");
$entry_time=$_POST['e_time'];
$val_a=$_POST[a];
$val_b=$_POST[b];
$val_c=$_POST[c];
if($val_a!=""&&$val_b!=""&&$val_c!="")
{
mysqli_query($con,"insert into raj_shree_lottery (time_cat,cat_cat,n_no) values ('$entry_time','a','$val_a')");
mysqli_query($con,"insert into raj_shree_lottery (time_cat,cat_cat,n_no) values ('$entry_time','b','$val_b')");
mysqli_query($con,"insert into raj_shree_lottery (time_cat,cat_cat,n_no) values ('$entry_time','c','$val_c')");
header("location:feedvalues.php?inserted=ok");
}
else
{
	header("location:feedvalues.php?inserted=notok");
}





?>