<?php
	 include('db_con.php');

		$uname=$_GET['uname'];
		$psw=$_GET['psw'];

		$sql=mysqli_query($con,"select emailid1,password1,cid from member_info where emailid1='$uname' AND type1='cust' AND status='Active'");
        $row=mysqli_fetch_array($sql);
        $cid=$row['cid'];
        if( ($uname==$row['emailid1']) && ($psw==$row['password1']) )
        {
        	session_start();
        	$_SESSION['uname']=$uname;
            $_SESSION['cid']=$cid;
        	echo "<script>document.location='index.php'</script>";
        }
		else
		{
        	echo "<script> alert('Wrong username or password') </script>";
			echo "<script>document.location='login1.php'</script>";
        }
  ?>
