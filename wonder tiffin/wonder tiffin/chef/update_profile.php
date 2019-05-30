<?php

include "db_con.php";
session_start();
$username=$_SESSION['username'];

	if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	//$image=$_POST['image'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$mobno=$_POST['mobno'];
	$password=$_POST['password'];
	
	
	//echo $image;
	/*$allowedExt = array("jpeg","jpg","png");
	$img = explode(".",$_FILES['image']['name']);
							
							
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
	$b_img = "images/".$_FILES['image']['name'];*/

	
		
	mysqli_query($con,"UPDATE `member_info` SET `fname1`='$fname',`lname1`='$lname',`gender1`='$gender',`city1`='$city',`address1`='$address',`pincode1`='$pincode',`mobno1`='$mobno',`password1`='$password' WHERE emailid1='$username'");
	$s=mysqli_affected_rows($con);
		
	if($s==1)
	{
		echo "<script>alert('Profile Updated Successfully')</script>";
		echo "<script>document.location='profile.php'</script>";
		//echo "Data Updated Successfully";
		//header("Location:http://localhost/wonder tiffin/chef/profile.php");
	}
	
}

?>
