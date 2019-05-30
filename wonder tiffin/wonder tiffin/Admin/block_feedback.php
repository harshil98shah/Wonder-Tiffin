<?php
		include 'db_con.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
		$sql="UPDATE `feedback` SET `status`='Deactive' WHERE `feedback_id`='$id'";
		mysqli_query($con,$sql);
		$h=mysqli_affected_rows($con);

		}
		else
		{
			$sql="UPDATE `feedback` SET `status`='Active' WHERE `feedback_id`='$id'";
			mysqli_query($con,$sql);
			$h=mysqli_affected_rows($con);

		}
		if($h==1)
		{
			header("Location:http://localhost/wonder tiffin/Admin/feedback.php");
		}

?>
