<?php

 session_start();
		   if(isset($_SESSION['username']))
		   {	
				$unm=$_SESSION['username'];
		   }
		include 'db_con.php';

			if(isset($_POST["submit1"]))
					{	
							$title=$_POST['title'];
							$price=$_POST['price'];
							$category=$_POST['category'];
							//$image=$_POST['image'];
							$desc=$_POST['desc'];
								
							$allowedExt = array("jpeg","jpg","png");
							$img = explode(".",$_FILES['image']['name']);
							
							move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
							$b_img = "images/".$_FILES['image']['name'];
								
							$r=mysqli_query($con,"SELECT `cid` FROM `member_info` WHERE `emailid1`='$unm'");
							while($c=mysqli_fetch_assoc($r))

							$cid=$c['cid'];
							

							mysqli_query($con,"INSERT INTO `upload_menu`(`title`, `price`,`cid`,`category`, `image`, `desc`,`type`,`status`) VALUES ('$title',$price,$cid,'$category','$b_img ','$desc','chef','Active')");								
							$c=mysqli_affected_rows($con);
					
						echo "<script>alert('Menu Uploaded Successfully')</script>";
					echo "<script>document.location='upload_menu1.php'</script>";
			
					//header("Location:http://localhost/wonder tiffin/chef/upload_menu1.php");
								
					}
				
	
?>
