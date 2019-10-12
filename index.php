<?php
$con=mysqli_connect("localhost","root","","delhisatta");
// fetch nangal
$query_today_nan=mysqli_query($con,"select * from nangal where id=(select MAX(id) from nangal)");
$query_yest_nan=mysqli_query($con,"select * from nangal where id=(select MAX(id)-1 from nangal)");
$fetch_t_nan=mysqli_fetch_array($query_today_nan);
$fetch_y_nan=mysqli_fetch_array($query_yest_nan);

//fetch himachal
$query_today_him=mysqli_query($con,"select * from himachal where id=(select MAX(id) from himachal)");
$query_yest_him=mysqli_query($con,"select * from himachal where id=(select MAX(id)-1 from himachal)");
$fetch_t_him=mysqli_fetch_array($query_today_him);
$fetch_y_him=mysqli_fetch_array($query_yest_him);



//fetch gali
$query_today_gal=mysqli_query($con,"select * from gali where id=(select MAX(id) from gali)");
$query_yest_gal=mysqli_query($con,"select * from gali where id=(select MAX(id)-1 from gali)");
$fetch_t_gal=mysqli_fetch_array($query_today_gal);
$fetch_y_gal=mysqli_fetch_array($query_yest_gal);

//fetch desawar
$query_today_des=mysqli_query($con,"select * from desawar where id=(select MAX(id) from desawar)");
$query_yest_des=mysqli_query($con,"select * from desawar where id=(select MAX(id)-1 from desawar)");
$fetch_t_des=mysqli_fetch_array($query_today_des);
$fetch_y_des=mysqli_fetch_array($query_yest_des);


//fetch faridabad
$query_today_far=mysqli_query($con,"select * from faridabad where id=(select MAX(id) from faridabad)");
$query_yest_far=mysqli_query($con,"select * from faridabad where id=(select MAX(id)-1 from faridabad)");
$fetch_t_far=mysqli_fetch_array($query_today_far);
$fetch_y_far=mysqli_fetch_array($query_yest_far);

//fetch tajmehal
$query_today_taj=mysqli_query($con,"select * from tajmehal where id=(select MAX(id) from tajmehal)");
$query_yest_taj=mysqli_query($con,"select * from tajmehal where id=(select MAX(id)-1 from tajmehal)");
$fetch_t_taj=mysqli_fetch_array($query_today_taj);
$fetch_y_taj=mysqli_fetch_array($query_yest_taj);

//fetch super_star
$query_today_sup=mysqli_query($con,"select * from super_star where id=(select MAX(id) from super_star)");
$query_yest_sup=mysqli_query($con,"select * from super_star where id=(select MAX(id)-1 from super_star)");
$fetch_t_sup=mysqli_fetch_array($query_today_sup);
$fetch_y_sup=mysqli_fetch_array($query_yest_sup);


//fetch surya
$query_today_sur=mysqli_query($con,"select * from surya where id=(select MAX(id) from surya)");
$query_yest_sur=mysqli_query($con,"select * from surya where id=(select MAX(id)-1 from surya)");
$fetch_t_sur=mysqli_fetch_array($query_today_sur);
$fetch_y_sur=mysqli_fetch_array($query_yest_sur);



// fetch raj shree lottery
$query_9_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='9_00'");
$query_9_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='9_00'");
$query_9_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='9_00'");
$fetch_9_00_a_rsl=mysqli_fetch_array($query_9_00_a_rsl);
$fetch_9_00_b_rsl=mysqli_fetch_array($query_9_00_b_rsl);
$fetch_9_00_c_rsl=mysqli_fetch_array($query_9_00_c_rsl);

$query_9_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='9_30'");
$query_9_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='9_30'");
$query_9_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='9_30'");
$fetch_9_30_a_rsl=mysqli_fetch_array($query_9_30_a_rsl);
$fetch_9_30_b_rsl=mysqli_fetch_array($query_9_30_b_rsl);
$fetch_9_30_c_rsl=mysqli_fetch_array($query_9_30_c_rsl);

$query_10_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='10_00'");
$query_10_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='10_00'");
$query_10_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='10_00'");
$fetch_10_00_a_rsl=mysqli_fetch_array($query_10_00_a_rsl);
$fetch_10_00_b_rsl=mysqli_fetch_array($query_10_00_b_rsl);
$fetch_10_00_c_rsl=mysqli_fetch_array($query_10_00_c_rsl);

$query_10_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='10_30'");
$query_10_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='10_30'");
$query_10_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='10_30'");
$fetch_10_30_a_rsl=mysqli_fetch_array($query_10_30_a_rsl);
$fetch_10_30_b_rsl=mysqli_fetch_array($query_10_30_b_rsl);
$fetch_10_30_c_rsl=mysqli_fetch_array($query_10_30_c_rsl);

$query_11_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='11_00'");
$query_11_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='11_00'");
$query_11_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='11_00'");
$fetch_11_00_a_rsl=mysqli_fetch_array($query_11_00_a_rsl);
$fetch_11_00_b_rsl=mysqli_fetch_array($query_11_00_b_rsl);
$fetch_11_00_c_rsl=mysqli_fetch_array($query_11_00_c_rsl);

$query_11_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='11_30'");
$query_11_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='11_30'");
$query_11_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='11_30'");
$fetch_11_30_a_rsl=mysqli_fetch_array($query_11_30_a_rsl);
$fetch_11_30_b_rsl=mysqli_fetch_array($query_11_30_b_rsl);
$fetch_11_30_c_rsl=mysqli_fetch_array($query_11_30_c_rsl);

$query_12_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='12_00'");
$query_12_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='12_00'");
$query_12_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='12_00'");
$fetch_12_00_a_rsl=mysqli_fetch_array($query_12_00_a_rsl);
$fetch_12_00_b_rsl=mysqli_fetch_array($query_12_00_b_rsl);
$fetch_12_00_c_rsl=mysqli_fetch_array($query_12_00_c_rsl);


$query_12_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='12_30'");
$query_12_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='12_30'");
$query_12_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='12_30'");
$fetch_12_30_a_rsl=mysqli_fetch_array($query_12_30_a_rsl);
$fetch_12_30_b_rsl=mysqli_fetch_array($query_12_30_b_rsl);
$fetch_12_30_c_rsl=mysqli_fetch_array($query_12_30_c_rsl);


$query_1_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='1_00'");
$query_1_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='1_00'");
$query_1_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='1_00'");
$fetch_1_00_a_rsl=mysqli_fetch_array($query_1_00_a_rsl);
$fetch_1_00_b_rsl=mysqli_fetch_array($query_1_00_b_rsl);
$fetch_1_00_c_rsl=mysqli_fetch_array($query_1_00_c_rsl);

$query_1_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='1_30'");
$query_1_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='1_30'");
$query_1_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='1_30'");
$fetch_1_30_a_rsl=mysqli_fetch_array($query_1_30_a_rsl);
$fetch_1_30_b_rsl=mysqli_fetch_array($query_1_30_b_rsl);
$fetch_1_30_c_rsl=mysqli_fetch_array($query_1_30_c_rsl);

$query_2_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='2_00'");
$query_2_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='2_00'");
$query_2_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='2_00'");
$fetch_2_00_a_rsl=mysqli_fetch_array($query_2_00_a_rsl);
$fetch_2_00_b_rsl=mysqli_fetch_array($query_2_00_b_rsl);
$fetch_2_00_c_rsl=mysqli_fetch_array($query_2_00_c_rsl);

$query_2_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='2_30'");
$query_2_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='2_30'");
$query_2_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='2_30'");
$fetch_2_30_a_rsl=mysqli_fetch_array($query_2_30_a_rsl);
$fetch_2_30_b_rsl=mysqli_fetch_array($query_2_30_b_rsl);
$fetch_2_30_c_rsl=mysqli_fetch_array($query_2_30_c_rsl);


$query_3_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='3_00'");
$query_3_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='3_00'");
$query_3_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='3_00'");
$fetch_3_00_a_rsl=mysqli_fetch_array($query_3_00_a_rsl);
$fetch_3_00_b_rsl=mysqli_fetch_array($query_3_00_b_rsl);
$fetch_3_00_c_rsl=mysqli_fetch_array($query_3_00_c_rsl);


$query_3_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='3_30'");
$query_3_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='3_30'");
$query_3_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='3_30'");
$fetch_3_30_a_rsl=mysqli_fetch_array($query_3_30_a_rsl);
$fetch_3_30_b_rsl=mysqli_fetch_array($query_3_30_b_rsl);
$fetch_3_30_c_rsl=mysqli_fetch_array($query_3_30_c_rsl);



$query_4_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='4_00'");
$query_4_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='4_00'");
$query_4_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='4_00'");
$fetch_4_00_a_rsl=mysqli_fetch_array($query_4_00_a_rsl);
$fetch_4_00_b_rsl=mysqli_fetch_array($query_4_00_b_rsl);
$fetch_4_00_c_rsl=mysqli_fetch_array($query_4_00_c_rsl);



$query_4_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='4_30'");
$query_4_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='4_30'");
$query_4_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='4_30'");
$fetch_4_30_a_rsl=mysqli_fetch_array($query_4_30_a_rsl);
$fetch_4_30_b_rsl=mysqli_fetch_array($query_4_30_b_rsl);
$fetch_4_30_c_rsl=mysqli_fetch_array($query_4_30_c_rsl);



$query_5_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='5_00'");
$query_5_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='5_00'");
$query_5_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='5_00'");
$fetch_5_00_a_rsl=mysqli_fetch_array($query_5_00_a_rsl);
$fetch_5_00_b_rsl=mysqli_fetch_array($query_5_00_b_rsl);
$fetch_5_00_c_rsl=mysqli_fetch_array($query_5_00_c_rsl);


$query_5_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='5_30'");
$query_5_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='5_30'");
$query_5_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='5_30'");
$fetch_5_30_a_rsl=mysqli_fetch_array($query_5_30_a_rsl);
$fetch_5_30_b_rsl=mysqli_fetch_array($query_5_30_b_rsl);
$fetch_5_30_c_rsl=mysqli_fetch_array($query_5_30_c_rsl);




$query_6_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='6_00'");
$query_6_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='6_00'");
$query_6_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='6_00'");
$fetch_6_00_a_rsl=mysqli_fetch_array($query_6_00_a_rsl);
$fetch_6_00_b_rsl=mysqli_fetch_array($query_6_00_b_rsl);
$fetch_6_00_c_rsl=mysqli_fetch_array($query_6_00_c_rsl);


$query_6_30_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='6_30'");
$query_6_30_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='6_30'");
$query_6_30_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='6_30'");
$fetch_6_30_a_rsl=mysqli_fetch_array($query_6_30_a_rsl);
$fetch_6_30_b_rsl=mysqli_fetch_array($query_6_30_b_rsl);
$fetch_6_30_c_rsl=mysqli_fetch_array($query_6_30_c_rsl);


$query_7_00_a_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='a' and time_cat='7_00'");
$query_7_00_b_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='b' and time_cat='7_00'");
$query_7_00_c_rsl=mysqli_query($con,"select * from raj_shree_lottery where cat_cat='c' and time_cat='7_00'");
$fetch_7_00_a_rsl=mysqli_fetch_array($query_7_00_a_rsl);
$fetch_7_00_b_rsl=mysqli_fetch_array($query_7_00_b_rsl);
$fetch_7_00_c_rsl=mysqli_fetch_array($query_7_00_c_rsl);

?>
<!doctype html>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<link rel="stylesheet" href="lib/bootstrap.min.css">

<style>
.big_box
{
background:#353c77;border:3px solid #280707;border-radius:10px;margin:1px;	
}
.big_box_table
{
	background:#080811;
	font-size:1.5em;width:80%;text-align:center;
}
.big_box_table tr td
{
	
	border:2px solid #F9D7B6;
	padding:10px;
	color:white;
	font-weight:bold;
	
}
.satta_box
{
background:#353c77;height:200px;border:3px solid #280707;border-radius:10px;margin:1px;
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
	background:#f9d7b6;width:80%;height:80%;margin:auto;border-radius:0px 0px 20px 20px;
}
.prev_entry
{
	border:3px solid #280707;font-weight:bold;
	color:white;padding:10px;background:#080811;margin:4px;text-align:center;font-size:2em;border-radius:25px;
}
.current_entry
{
	position:relative;
	border:3px solid #280707;font-weight:bold;
	padding:10px;color:white;background:black;margin:4px;text-align:center;font-size:3em;border-radius:25px;
}
.indicator
{
	position:absolute;width:12px;height:12px;right:10%;border-radius:25px;
	animation-name:indi_dec;
	animation-duration:1s;
	animation-iteration-count:infinite;
}
@keyframes indi_dec
{
	0%{background-color:white;}
	
	100%{background-color:red;}
}
.img1
{
position:relative;;
animation-name:flip1;
animation-delay:0.5s;
animation-duration:2s;
animation-iteration-count:infinite;
}
@keyframes flip1
{
100%
{
transform: rotateX(360deg);
}
}

.img2
{
	
position:relative;
animation-name:flip2;
animation-delay:1s;
animation-duration:2s;
animation-iteration-count:infinite;
}
@keyframes flip2
{
100%
{
transform: rotateX(360deg);
}
}

.img3
{
	
position:relative;
animation-name:flip3;
animation-delay:1.5s;
animation-duration:2s;
animation-iteration-count:infinite;
}
@keyframes flip3
{
100%
{
transform: rotateX(360deg);
}
}

</style>

</head>



<!-- starting body -->
<body style="background:#7c5938;">
<img src="images/logo.png" width="100%" height="120" style="background:#f9d7b6;border-radius:0px 0px 20px 20px;">
<br><br>
<div class="container" style="border:2px solid black;background:#c4b8bc;border-radius:5px;">
<br>

<h4 align="center" style="color:white;padding:2px;margin:auto;width:200px;font-weight:bold;background:#800000;border-radius:5px">NOTES</h4>
<div align="center" style="font-weight:bold;font-size:1.1em;text-align:left">
<table align="center" class="note_tb">
<tr>
<td><img class="img1" src="images/arrow.png" width="20" height="30">&nbsp;&nbsp;
</td>
<td>
Reload the page periodically to get latest results.
</td>
</tr>
<tr><td><img class="img2" src="images/arrow.png" width="20" height="30">
</td>
<td>
Results having red and white indicator are the latest results
</td>
</tr>
<tr><td><img class="img3" src="images/arrow.png" width="20" height="30">
</td>
<td>
All results are mentioned with the date in which they are declared.
</td>
</tr>
</table>

</div>
<br>






<div class="row">
<!-- nangal -->
<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">NANGAL (6:50 PM)</div>
<div class="result_box" align="center">
<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php
$date=$fetch_y_nan["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;

?>
</div>
</td>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_nan["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;

?>
</div>

</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_nan[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">

<div class="indicator">
</div>

<?php
echo $fetch_t_nan[n_no];
?>
</div>
</td>

</tr>
</table>
</center>
</div>
</div>
</div>




<!-- himachal -->

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Himachal (9:00 PM)</div>
<div class="result_box" align="center">
<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_him["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_him["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_him[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>
<?php
echo $fetch_t_him[n_no];
?>
</div>
</td>

</tr>
</table>
</center>
</div>
</div>
</div>

</div>
<!-- GALI --><div class="row">

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">GALI (11:15 PM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_gal["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_gal["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_gal[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">

<div class="indicator">
</div>
<?php
echo $fetch_t_gal[n_no];
?>
</div>
</td>

</tr>
</table>
</center>

</div>
</div>
</div>

<!-- Desawar -->

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Desawar (5:20 AM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_des["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_des["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_des[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>

<?php
echo $fetch_t_des[n_no];
?>
</div>
</td>

</tr>
</table>
</center>



</div>
</div>
</div>
</div>


<!-- Faridabad --><div class="row">

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Faridabad (5:30 PM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_far["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_far["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_far[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>

<?php
echo $fetch_t_far[n_no];
?>
</div>
</td>

</tr>
</table>
</center>


</div>
</div>
</div>


<!-- Taj Mehal -->

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Taj Mehal (5:00 PM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_taj["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_taj["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_taj[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>

<?php
echo $fetch_t_taj[n_no];
?>
</div>
</td>

</tr>
</table>
</center>


</div>
</div>
</div>
</div>





<!-- Super -->
<div class="row">

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Super Star (11:40 AM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_sup["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_sup["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_sup[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>

<?php
echo $fetch_t_sup[n_no];
?>
</div>
</td>

</tr>
</table>
</center>


</div>
</div>
</div>




<!-- Surya -->

<div class="col-md-6">
<div class="satta_box">
<div align="center" class="caption_1-8">Surya (3:00 PM)</div>
<div class="result_box" align="center">

<center><br>
<table style="width:100%;text-align:center">
<tr>
<td>
<div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_y_sur["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
<td><div style="clear:both;padding:0px;font-weight:bold">
<?php

$date=$fetch_t_sur["date"];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

echo $day."/".$month."/".$year;


?>
</div>
</td>
</tr>
<tr>
<td>
<div class="prev_entry">
<?php

echo $fetch_y_sur[n_no];

?>
</div>
</td>
<td>
<div class="current_entry">
<div class="indicator">
</div>

<?php
echo $fetch_t_sur[n_no];
?>
</div>
</td>

</tr>
</table>
</center>


</div>
</div>
</div>





</div>

<hr>

<!-- Raj Shree Lottery -->
<div class="row">
<div class="col-md-12">
<div class="big_box">
<div align="center" class="caption_1-8">Raj Shree Lottery<br>(9:00 AM - 7:00 PM)</div>
<div align="center"><br>
<table class="big_box_table">
<tr>
<td>
Time
</td>
<td>
A
</td>
<td>
B
</td>
<td>
C
</td>
</tr>

<tr>
<td>9:00 AM
</td>
<td>



<?php
if(empty($fetch_9_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_9_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_9_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_9_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_9_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_9_00_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>9:30 AM
</td>
<td>



<?php
if(empty($fetch_9_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_9_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_9_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_9_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_9_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_9_30_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>10:00 AM
</td>
<td>



<?php
if(empty($fetch_10_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_10_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_10_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_10_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_10_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_10_00_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>10:30 AM
</td>
<td>



<?php
if(empty($fetch_10_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_10_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_10_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_10_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_10_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_10_30_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>11:00 AM
</td>
<td>



<?php
if(empty($fetch_11_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_11_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_11_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_11_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_11_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_11_00_c_rsl[n_no];
}
?>
</td>
</tr>


<tr>
<td>11:30 AM
</td>
<td>



<?php
if(empty($fetch_11_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_11_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_11_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_11_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_11_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_11_30_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>12:00 PM
</td>
<td>



<?php
if(empty($fetch_12_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_12_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_12_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_12_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_12_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_12_00_c_rsl[n_no];
}
?>
</td>
</tr>



<tr>
<td>12:30 PM
</td>
<td>



<?php
if(empty($fetch_12_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_12_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_12_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_12_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_12_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_12_30_c_rsl[n_no];
}
?>
</td>
</tr>






<tr>
<td>1:00 PM
</td>
<td>



<?php
if(empty($fetch_1_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_1_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_1_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_1_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_1_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_1_00_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>1:30 PM
</td>
<td>



<?php
if(empty($fetch_1_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_1_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_1_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_1_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_1_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_1_30_c_rsl[n_no];
}
?>
</td>
</tr>




<tr>
<td>2:00 PM
</td>
<td>



<?php
if(empty($fetch_2_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_2_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_2_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_2_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_2_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_2_00_c_rsl[n_no];
}
?>
</td>
</tr>





<tr>
<td>3:00 PM
</td>
<td>



<?php
if(empty($fetch_3_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_3_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_3_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_3_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_3_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_3_00_c_rsl[n_no];
}
?>
</td>
</tr>







<tr>
<td>3:30 PM
</td>
<td>



<?php
if(empty($fetch_3_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_3_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_3_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_3_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_3_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_3_30_c_rsl[n_no];
}
?>
</td>
</tr>





<tr>
<td>4:00 PM
</td>
<td>



<?php
if(empty($fetch_4_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_4_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_4_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_4_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_4_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_4_00_c_rsl[n_no];
}
?>
</td>
</tr>







<tr>
<td>4:30 PM
</td>
<td>



<?php
if(empty($fetch_4_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_4_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_4_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_4_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_4_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_4_30_c_rsl[n_no];
}
?>
</td>
</tr>







<tr>
<td>5:00 PM
</td>
<td>



<?php
if(empty($fetch_5_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_5_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_5_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_5_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_5_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_5_00_c_rsl[n_no];
}
?>
</td>
</tr>





<tr>
<td>5:30 PM
</td>
<td>



<?php
if(empty($fetch_5_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_5_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_5_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_5_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_5_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_5_30_c_rsl[n_no];
}
?>
</td>
</tr>






<tr>
<td>6:00 PM
</td>
<td>



<?php
if(empty($fetch_6_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_6_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_6_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_6_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_6_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_6_00_c_rsl[n_no];
}
?>
</td>
</tr>








<tr>
<td>6:30 PM
</td>
<td>



<?php
if(empty($fetch_6_30_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_6_30_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_6_30_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_6_30_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_6_30_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_6_30_c_rsl[n_no];
}
?>
</td>
</tr>






<tr>
<td>7:00 PM
</td>
<td>



<?php
if(empty($fetch_7_00_a_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{

	echo $fetch_7_00_a_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_7_00_b_rsl[n_no]))
{
	?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_7_00_b_rsl[n_no];
}
?>
</td>
<td>
<?php
if(empty($fetch_7_00_c_rsl[n_no]))
{
?>
<img src="images/loader.gif" width="30" height="30">
<?php
}
else
{
	echo $fetch_7_00_c_rsl[n_no];
}
?>
</td>
</tr>






</table>

<br>
</div>
</div>
</div>




</div>

<br>
<br>

<div class="row">
<div class="col-md-12">
<div style="background-color:#0c0f28;height:250px;border:5px solid #590505;">
<div style="background:#590505;margin:auto;border-radius:0px 0px 15px 15px;color:white;font-size:1.5em;font-weight:bold" align="center">Admin Login</div><br>
<?php
$chk=$_GET[er];
if($chk=='1')
{
?>
<div style="background:red;width:50%;margin:auto;border-radius:20px;color:white;" align="center">! Invalid ID or Password</div><br>
<?php
}
?>
<form method="post" action="admin_login.php">
<table align="center" style="width:235px">
<tr>
<td style="font-size:1em;font-weight:bold;color:white">
Login-ID:
</td>
<td>
<input type="text" style="width:100%" name="login">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td style="font-size:1em;font-weight:bold;color:white">
Password:
</td>
<td>
<input type="password" style="width:100%" name="pswd">
</td>
</tr>
<tr>
<td>&nbsp;
</td>
</tr>
<tr>
<td>
</td>
<td align="center">
<input type="submit">
</td>
</tr>
</table>
</form>
</div>



</div>
</div>

<br>




</div>











</body>






</html>