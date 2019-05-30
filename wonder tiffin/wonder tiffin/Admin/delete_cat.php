<?php
	include 'db_con.php';
	$id=$_GET['id'];
	mysqli_query($con,"DELETE FROM `category` WHERE `category_id`='$id'");
	if(mysqli_affected_rows($con)==1)
	{
		header("Location:http://localhost/wonder tiffin/Admin/category.php");
	}
?>