<?php
$item = $_POST["itemid"];
$location = $_POST["location"];
$review = $_POST["Review"];
$quantity = $_POST["Quantity"];
include('connect.php');
global $conn;
$da = date("Y-m-d");
$sql = "update product set quantity = quantity-".$quantity." where p_id =".$item;
$sql1 = "insert into product_reviews(p_id, review) values('".$item."','".$review."')";
if(mysqli_query($conn,$sql))
{   
	if(mysqli_query($conn,$sql1))
	    {
	    	$selprod = "select * from soldproducts where p_id = '$item'";
	        $run = mysqli_query($conn, $selprod);
            $row1 = mysqli_fetch_array($run);
                  {
                    $p_sold = $row["p_sold"];
                    $review_rating = $row["review_rating"];
                   
                    if(mysqli_query($sql))
                    {
                       echo "<script>alert('updated successfully')</script>";
                    } 
                  }
        }       
 	echo "<script>alert('purchased successfully')</script>";
}
?>