<?php 
session_start();
include 'db_con.php';
if (isset($_GET['id'])) 
{

	$uid=$_GET['id'];

}
if (isset($_SESSION['cid'])) 
{

	$cid=$_SESSION['cid'];
	
}
                           $qry="SELECT * FROM upload_menu WHERE uid=$uid";

                                $rs=mysqli_query($con,$qry);
                              $row=mysqli_fetch_assoc($rs);

                              $title=$row['title'];
                              $price=$row['price'];
                              $qty=1;
                              $total=$price;

                     $qry1="INSERT INTO cart_info(uid,cid,title,qty,price,total) VALUES ($uid,$cid,'".$title."',$qty,$price,$total)";

                                $rs1=mysqli_query($con,$qry1);
                                if ($rs1) {
                                	header("location:product_summary1.php");
                                }else
                                {
                                	header("location:product_details1.php?Cart_Query_ERROR");
                                }
?>