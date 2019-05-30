<?php
				include 'db_con.php';		
			if(isset($_POST['insert']))
			{
					
					$fname1=$_POST['fname'];
					$lname1=$_POST['lname'];
					$gender1=$_POST['gender'];
					$city1=$_POST['city'];
					$address1=$_POST['address'];
					$pincode1=$_POST['pincode'];
					$mobno1=$_POST['mobno'];
					$emailid1=$_POST['emailid'];
					$password1=$_POST['password'];
					
				

					if(!$con)
					{
						echo "<script>alert('Database is not connected with localhost')</script>";
					}
					else
				{

					$sql=mysqli_query($con,"INSERT INTO `member_info`(`fname1`, `lname1`,`gender1`, `city1`, `address1`, `pincode1`, `mobno1`, `emailid1`, `password1`,`type1`,`status`) VALUES ('$fname1','$lname1','$gender1','$city1','$address1',$pincode1,$mobno1,'$emailid1','$password1','cust','Active')");
							
					if(!$sql)
					{
						echo " <script> alert('Data Not Entered') </script>";
					}
					else
					{
						echo "<script> alert('Data Entered Successfully...')</script> ";
						echo "<script>document.location='login1.php'</script>";

					}
				}
				//header("Location:http://localhost/wonder tiffin/login1.php");
			}
			
?>						
