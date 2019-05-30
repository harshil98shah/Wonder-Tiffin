<?php
require 'db_con.php';
if (isset($_POST['qty'])) 
{
	
	$qun=$_POST['qun'];
	print_r($qun);
	 foreach ($qun as $key => $value) 
	 {
	 	$q=$value;
	 	$k=$key;
		        $qry="SELECT * FROM cart_info WHERE cart_id=$k";
		        $rs = mysqli_query($con,$qry);
		        $row=mysqli_fetch_assoc($rs);
		          
		           $price=$row['price'];
                echo $price;
                  $t=$price*$q;


	 	$qry1="UPDATE cart_info SET qty=$q,total=$t WHERE cart_id=$k";
      
	 	$rs1 = mysqli_query($con,$qry1);

	 }
	 
	 
     if($rs1)
		{
			header("location:product_summary1.php?QUNTETY_UPDATE");
		}
		
	 else
	 {
	 	header("locaation:product_summary1.php?QUERY_ERROR");
	 }
}
else
{
   header("locaation:index.php?DIRECT_URL_CALLED");
}

?>