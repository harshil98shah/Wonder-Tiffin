<?php
session_start();
		
		 if(isset($_SESSION['uname']))
		   {	
				$unam=$_SESSION['uname'];
		   }
		include 'db_con.php';
			if (isset($_POST["submit"]))
		{
					

				$title=$_POST['title'];
				$quantity=$_POST['quantity'];
				$category=$_POST['category'];
				$desc=$_POST['desc'];
				$cid=$_SESSION['cid'];
									
				$r=mysqli_query($con,"SELECT `cid` FROM `member_info` WHERE `emailid1`='$unam'");
				while($c=mysqli_fetch_assoc($r))

				$cid=$c['cid'];
							
			mysqli_query($con,"INSERT INTO `upload_menu`(`title`,`cid`,`category`,`desc`, `type`, `quantity`, `status`) VALUES ('$title','$cid','$category','$desc','cust','$quantity','Active')");
			$c=mysqli_affected_rows($con);
			if($c==1)
			{
				echo "<script>alert('Menu uploaded Successfully and your order will be ready in 30 Minutes so received from the given address')</script>";
				echo "<script>document.location='upload.php'</script>";
			}
			else
			{
				echo "<script>alert('There  is some Problem During Uploading your Menu so please try Again after Few Minutes')</script>";
				 
			}
		}
				
		

?>
