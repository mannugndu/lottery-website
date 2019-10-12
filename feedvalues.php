<?php
session_start();
if($_SESSION['step1']!=1)
{
	header("location:index.php");
}
$_SESSION['step1']=-1;
?>

<html>

<head>
<style>
table
{
	color:white;
	background:#3f3d3e;
	font-weight:bold;
	font-size:2em;
	text-align:center;
	width:70%;
}

table tr td
{
	border-radius:5px;
	padding:5px;
	background:#3d2719;
	border:3px solid #7C5938;
}
input
{
	background:#fce1c7;
	text-align:center;
	font-weight:bold;
	width:150px;
	height:60px;
	font-size:1em;
	border:2px solid black;
}

input[type=submit]
{
	cursor:pointer;
	border-radius:10px;
	background:grey;
}
</style>
</head>









<body style="background:#7C5938">

<?php
$chk=$_GET[inserted];
if($chk=='ok')
{
?>
<br>
<div align="center" style="font-weight:bold;width:50%;color:black;font-size:3em;padding:10px;background:green;margin:auto;">
Values Updated
</div><br>
<?php
}
if($chk=='notok')
{
?>
<br>
<div align="center" style="font-weight:bold;width:50%;color:red;font-size:3em;padding:10px;background:green;margin:auto;">
 ! Check the values
</div><br>
<?php
}
if($chk=='cleaned')
{
?>
<br>
<div align="center" style="font-weight:bold;width:50%;color:black;font-size:3em;padding:10px;background:green;margin:auto;">
 Values Cleaned
</div><br>
<?php
}
?>


<table align="center">
<tr>
<td>Time
</td>
<td>A
</td>
<td>B
</td>
<td>C
</td>
<td>
</td>
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<form action="feedvalues_entry.php?time=9_00" method="POST">
<input type="hidden" name="e_time" value="9_00">
<tr>
<td>9:00 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>

<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=9_30" method="POST">
<input type="hidden" name="e_time" value="9_30">

<tr>
<td>9:30 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>


<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=10_00" method="POST">
<input type="hidden" name="e_time" value="10_00">

<tr>
<td>10:00 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>


<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=10_30" method="POST">
<input type="hidden" name="e_time" value="10_30">
<tr>
<td>10:30 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>



<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=11_00" method="POST">
<input type="hidden" name="e_time" value="11_00">
<tr>
<td>11:00 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>




<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=11_30" method="POST">
<input type="hidden" name="e_time" value="11_30">
<tr>
<td>11:30 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>






<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=12_00" method="POST">
<input type="hidden" name="e_time" value="12_00">
<tr>
<td>12:00 AM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>




<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=12_30" method="POST">
<input type="hidden" name="e_time" value="12_30">
<tr>
<td>12:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>



<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=1_00" method="POST">
<input type="hidden" name="e_time" value="1_00">
<tr>
<td>1:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>





<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=1_30" method="POST">
<input type="hidden" name="e_time" value="1_30">
<tr>
<td>1:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>











<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=2_00" method="POST">

<input type="hidden" name="e_time" value="2_00">


<tr>
<td>2:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>







<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=2_30" method="POST">

<input type="hidden" name="e_time" value="2_30">

<tr>
<td>2:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>







<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=3_00" method="POST">
<input type="hidden" name="e_time" value="3_00">

<tr>
<td>3:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>






<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=3_30" method="POST">
<input type="hidden" name="e_time" value="3_30">

<tr>
<td>3:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>






<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=4_00" method="POST">
<input type="hidden" name="e_time" value="4_00">

<tr>
<td>4:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>







<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=4_30" method="POST">
<input type="hidden" name="e_time" value="4_30">

<tr>
<td>4:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>




<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=5_00" method="POST">
<input type="hidden" name="e_time" value="5_00">

<tr>
<td>5:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>







<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=5_30" method="POST">
<input type="hidden" name="e_time" value="5_30">

<tr>
<td>5:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>









<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=6_00" method="POST">
<input type="hidden" name="e_time" value="6_00">

<tr>
<td>6:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>








<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=6_30" method="POST">
<input type="hidden" name="e_time" value="6_30">

<tr>
<td>6:30 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>








<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>
<tr style="background:green">
</tr>

<form action="feedvalues_entry.php?time=7_00" method="POST">
<input type="hidden" name="e_time" value="7_00">

<tr>
<td>7:00 PM
</td>
<td><input type="text" name="a">
</td>
<td><input type="text" name="b">
</td>
<td><input type="text" name="c">
</td>
<td><input type="submit" value="GO">
</td>
</tr>
</form>



</table>

<br>
<br>





<div>
<center>
<form action="sd_clear.php" method="POST">
<?php
$chk=$_GET[inserted];
if($chk=="notcleaned")
{
?>
<div style="background:red;color:white;font-weight:bold;font-size:1.2em;width:50%">! Invalid Password</div><br>
<?php
}
?>
<span style="font-size:1.8em">Password:</span><input type="password" name="pswd" style="background:white;width:250px;height:40px;font-size:1.2em;"><br><br>
<input type="button" value="Clear Values" onclick="submit()" style="cursor:pointer;border-radius:20px;">
</form>
</center>

</div>







</body>







</html>