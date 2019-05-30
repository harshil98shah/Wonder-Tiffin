<?php
		include 'db_con.php';
		$id=$_GET['id'];
		$status=$_GET['status'];
		if($status=='Active')
		{
			$sql="UPDATE `member_info` SET `status`='Deactive' WHERE `cid`='$id'";
			mysqli_query($con,$sql);
			$h=mysqli_affected_rows($con);
		}
		else
		{
			$sql="UPDATE `member_info` SET `status`='Active' WHERE `cid`='$id'";
			mysqli_query($con,$sql);
			$h=mysqli_affected_rows($con);
		}
		if($h==1)
		{
			header("Location:http://localhost/wonder tiffin/Admin/chef_info.php");
		}

?>
