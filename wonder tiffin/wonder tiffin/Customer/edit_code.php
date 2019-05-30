<?php
	include 'db_con.php';
				$id=$_POST['id'];
				$title=$_POST['title'];
				$quantity=$_POST['quantity'];
				$category=$_POST['category'];
				$desc=$_POST['desc'];

	$sql="UPDATE `upload_menu` SET `title`='$title',`quantity`='$quantity',`category`='$category',`desc`='$desc' WHERE `uid`='$id'";
	mysqli_query($con,$sql);
	$c=mysqli_affected_rows($con);

	if($c==1)
			{
				echo "<script>alert('update done Successfully')</script>";
				echo "<script>document.location='umenu_manage.php'</script>";
			}
			else
			{
				echo "<script>alert('There  is some Problem During Uploading your Menu so please try Again after Few Minutes')</script>";
				 
			}
						


?>
