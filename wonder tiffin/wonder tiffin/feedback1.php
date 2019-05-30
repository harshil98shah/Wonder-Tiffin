<?php

include 'db_con.php';

session_start();


$cid=$_SESSION['cid'];
$name=$_POST['name'];
$email_id=$_POST['email'];
$msg=$_POST['message'];




$sql=mysqli_query($con,"INSERT INTO `feedback`( `name`, `email_id`, `msg`,`status`,`cid`) VALUES ('$name','$email_id','$msg','Active','$cid')");
if (!$sql) 
{
	echo "<script>alert('Data not Inserted')</script>";
}
else
{
	echo "<script>alert('Data Inserted Successfully')</script>";
	echo "<script>document.location='index.php'</script>";
}
//header("Location:index.php");
?>