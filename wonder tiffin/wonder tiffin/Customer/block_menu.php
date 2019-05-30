<?php
		include 'db_con.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
			$sql="UPDATE `upload_menu` SET `status`='Deactive' WHERE `uid`='$id'";
			mysqli_query($con,$sql);
			$h=mysqli_affected_rows($con);
		}
		else
		{
			$sql="UPDATE `upload_menu` SET `status`='Active' WHERE `uid`='$id'";
			mysqli_query($con,$sql);
			$h=mysqli_affected_rows($con);
		}
		if($h==1)
		{
			header("Location:http://localhost/wonder tiffin/Customer/umenu_manage.php");
		}

?>
