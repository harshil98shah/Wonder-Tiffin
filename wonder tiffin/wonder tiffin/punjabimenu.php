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
	$sql=mysqli_query($con, "SELECT uid,title FROM `upload_menu` where status='Active' AND type='chef' and `category`=".$itemname);
	
	while ($row=mysqli_fetch_array($sql)) 
	{
			$uid=$row['uid'];
			echo"<div style='color: #F7F9EF' class='col-md-6 col-sm-6  wow fadeInUp' data-wow-delay='0.3s'>";
			echo"<h2>".$row['title'];
			echo "&nbsp &nbsp &nbsp";
			 echo "<a class='btn btn-primary' href='product_details1.php?id=".$uid."'>VIEW</a></h2>";
			echo "</div>";	
	}
?>
</body>
</html>