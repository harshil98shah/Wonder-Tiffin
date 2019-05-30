<?php
session_start();
include "db_con.php";
	

  if(isset($_POST["order"]))
	{
		$cid=$_SESSION['cid'];
		$qry2="SELECT * FROM order_info  ORDER BY order_no DESC";
            $rs2=mysqli_query($con,$qry2);
	        $row2=mysqli_fetch_assoc($rs2);
	        
	        
	      if ($row2['order_no'] == 0) 
	      {
	      	$o=1;
	      }
	      else
	      {
	      	$o=$row2['order_no']+1;
	      }

		
		 $qry="SELECT * FROM cart_info WHERE cid=$cid";

                                $rs=mysqli_query($con,$qry);
                              
                              while ($row=mysqli_fetch_assoc($rs)) 
                              {
                              	 $cart_id=$row['cart_id'];
                              	 $title=$row['title'];
	                              $qty=$row['qty'];
	                             $price=$row['total'];
	                             $fname=$_POST['fname'];
		                         $billing_address=$_POST['billadd'];
		                         $pincode=$_POST['pin'];
		                         $mobno=$_POST['mobno'];
		                         $city=$_POST['city'];
								 $area=$_POST['area'];
		                         $emailid=$_POST['emailid'];
		
		                         $status="ordered";

		                          $qry1="INSERT INTO `order_info`(`order_no`,`cid`,`cart_id`,`title`,`qty`,`price`,`fname`,`billing_address`,`pincode`,`mobno`,`city`,`area`,`emailid`,`status`) VALUES ($o,$cid,$cart_id,'".$title."',$qty,$price,'".$fname."','".$billing_address."',$pincode,'".$mobno."','".$city."','".$area."','".$emailid."','".$status."')";
							
                                 
                                $rs1=mysqli_query($con,$qry1);
                              }
	
                                if ($rs1==1) 
                                {
									
                                	 $qry3="DELETE FROM `cart_info` WHERE cid=$cid";
                                     $rs3=mysqli_query($con,$qry3);
								}
								else
                                {
									echo "<script> alert('Your Order Registered Successfully') </script>";
									//echo "<script>document.location=order.php'</script>";
                                	//header("location:order.php");
                                }
	}


?>