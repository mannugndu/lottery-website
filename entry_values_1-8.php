<?php
session_start();
if($_SESSION['step1']!=1)
{
	header("location:index.php?er=1");
}
$con=mysqli_connect("localhost","root","","delhisatta");
$value=$_POST[val];
$lottery=$_POST[identifier];
if($lottery=='nangal')
{
	mysqli_query($con,"insert into nangal (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='himachal')
{
	mysqli_query($con,"insert into himachal (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='gali')
{
	mysqli_query($con,"insert into gali (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='desawar')
{
	mysqli_query($con,"insert into desawar (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='faridabad')
{
	mysqli_query($con,"insert into faridabad (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='taj_mehal')
{
	mysqli_query($con,"insert into tajmehal (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='super_star')
{
	mysqli_query($con,"insert into super_star (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
if($lottery=='surya')
{
	mysqli_query($con,"insert into surya (n_no) values ('$value')");
	header("location:feed_values_1-8.php?report=ok");
}
?>
