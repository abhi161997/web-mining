<?php

$conn = mysqli_connect("localhost","root","","web_mining");
$review = $_POST["review"];
$id = $_POST["id"];

$sql = "insert into product_reviews(review, p_id) values('".$review."','".$id."')";
if(mysqli_query($conn,$sql))
{
	echo "inserted successfully";
	header("location:sell_product.php");
}

