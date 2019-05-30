<?php 
session_start();
include 'db_con.php';

if (isset($_GET['id'])) 
{

  $cart_id=$_GET['id'];

}
                           

                     $qry1="DELETE FROM `cart_info` WHERE cart_id=$cart_id";

                                $rs1=mysqli_query($con,$qry1);
                                if ($rs1)
                                {
                                	header("location:product_summary1.php");
                                }else
                                {
                                	header("location:product_summary1.php?Cart_DeleteQuery_ERROR");
                                }
?>