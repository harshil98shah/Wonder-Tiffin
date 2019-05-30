<?php
		include 'db_con.php';
		$id=$_GET['id'];
		$sql="DELETE FROM `upload_menu` WHERE `uid`='$id'";
		mysqli_query($con,$sql);
		$c=mysqli_affected_rows($con);
		if($c==1)
		{
			header("location:http://localhost/wonder tiffin/Customer/umenu_manage.php");
		}

?>
