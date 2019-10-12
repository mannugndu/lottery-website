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


<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<link rel="stylesheet" href="lib/bootstrap.min.css">

<style>

.satta_box
{
background:#353c77;height:200px;border:3px solid #280707;border-radius:10px;margin:auto;
width:70%
}
.caption_1-8
{
	color:white;
	font-weight:bold;
	background:#280707;
	padding:3px;
	font-size:1.3em;
}
.result_box
{
	background:#e8ba8f;width:80%;height:80%;margin:auto;border-radius:0px 0px 20px 20px;
}

</style>

</head>







<body style="background:#7c5938">
<br>
<?php
$chk=$_GET[report];
if($chk=='ok')
{
?>
<div align="center" style="font-weight:bold;width:50%;color:black;font-size:2em;padding:5px;background:green;margin:auto;border-radius:5px">
Values Updated
</div><br>
<?php
}
?>




<!-- nangal -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">NANGAL (6:50 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">

<tr>
<td>
<input type="hidden" name="identifier" value="nangal">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>


</table>
</form>
</center>
</div>
</div>




<!-- himachal -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">HIMACHAL (9:00 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">

<tr>
<td>
<input type="hidden" name="identifier" value="himachal">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>


</table>
</form>
</center>
</div>
</div>




<!-- gali -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">GALI (11:15 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="gali">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>








<!-- desawar -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">DESAWAR (5:20 AM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="desawar">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>










<!-- faridabad -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">FARIDABAD (5:30 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="faridabad">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>







<!-- taj mehal -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">TAJ MEHAL (5:00 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="taj_mehal">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>







<!-- super star-->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">SUPER STAR(11:40 AM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="super_star">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>




<!-- surya -->

<div class="satta_box" align="center">
<div align="center" class="caption_1-8">SURYA (3:00 PM)</div>
<div class="result_box" align="center">
<center><br>
<form method="post" action="entry_values_1-8.php">
<table style="width:100%;text-align:center">
<tr>
<td>
<input type="hidden" name="identifier" value="surya">
<input type="text" name="val" style="width:100px;height:50px;font-size:1.4em;font-weight:bold">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<input type="submit" value="Go" style="font-size:1.4em;border-radius:7px;width:50px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</center>
</div>
</div>






</body>







</html>