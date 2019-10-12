<?php
session_start();
if($_SESSION['step1']!=1)
{
	header("location:index.php?er=1");
}
?>
<html>
<head>
<style>
a
{
	color:white;
	text-decoration:none;
}
.btn
{
	font-weight:bold;padding:50px;background:#680303;font-size:3em;border-radius:5px;
	border:3px solid red;
}
</style>
</head>

<body style="background:#7c5938;">
<br>
<br>
<br>


<table align="center" style="background:#050514;padding:5px;border-radius:20px">
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
<a href="feedvalues.php"><div class="btn" align="center">
Raj Shree Lottery</div></a>
</td>
</tr>

<tr>
<td>&nbsp;
</td>
</tr>

<tr style="background:white;">
<td>
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>

<tr>
<td>
<a href="feed_values_1-8.php"><div class="btn" align="center">
Lottery 1-8
</div></a>
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>

</table>






</body>

</html>