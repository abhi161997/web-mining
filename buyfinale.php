<!DOCTYPE html>
<html>
<head>
	<title>Review page</title>
</head>
<body>

<?php
$id = $_POST["eid"];
echo "Thanks for buying this product Please give a neccessary detils";
?>
   
<form action = "updateprodreview.php" method="POST">
	<input type="text" name ="review" placholder="Your Review...">
    <input type ="hidden" value="<?php echo $id ?>" name ="id"> 
    <input type = "submit" value = "submit">
 </form>    
</body>
</html>
