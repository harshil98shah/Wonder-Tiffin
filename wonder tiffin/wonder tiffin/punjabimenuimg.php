<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> WONDER TIFFIN </title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

</head>
<body>


<?php
	$itemname=$_GET["item_name"];

	include "db_con.php";

	$sql=mysqli_query($con,"SELECT uid,title,image,price FROM `upload_menu` where status='Active' AND type='chef' AND `category`=".$itemname);
	//$row=mysqli_fetch_array($sql);
	//var_dump($row);
	while ($row=mysqli_fetch_array($sql)) 
		
	{
		$path=$row['image'];
		$uid=$row['uid'];
	echo"<div class='col-md-3 col-sm-3 wow fadeInUp' data-wow-delay='0.3s'>";
	echo"<div class='thumbnail'>";
	echo"<img src='".$path."' style='width:300px; height:200px'>";
	echo"<div class='caption'>";
	echo"<center><h3 style='color:#1f3057'>".$row['title']."</center></h3>";
	echo"<a class='btn btn-primary' href='product_details1.php?id=".$uid."'>VIEW</a>";
	echo"<h4 style='color:#f24816 margin-top:0px; margin-bottom:0px;'class='pull-right'>Price".$row['price']."</h4>";
	echo"</div>";
	echo"</div>";
	echo"</div>";

	}
?>

</body>
</html>