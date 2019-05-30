<?php
			if(isset($_POST['submit']))
			{

						include 'db_con.php';
						$category=$_POST['category'];
						mysqli_query($con,"INSERT INTO `category`(`category_name`) VALUES ('$category')");
						$c=mysqli_affected_rows($con);
						if($c==1)
						{
							header("Location:http://localhost/wonder tiffin/Admin/category.php");
						}


			}
?>
