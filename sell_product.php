<!DOCTYPE html>
<html>
<head>
	<title>Display product</title>
	<style>
      .displaytable{
          border:3px solid black;
          margin-left:20%;
          margin-top:100px;

      }
      tr, td, th{
      	border:1px solid black;
      }

    </style>
</head>
<body>

<?php
   
   $conn = mysqli_connect("localhost","root","","web_mining");
   $ebay = "select * from products order by rating limit 25";

   $ename = [];
   $eprice = [];
   $erating = []; 

   $erun = mysqli_query($conn, $ebay);
  

   echo "<table class = 'displaytable'>";
   echo "<tr><th>Name</th><th>Rating</th><th>Price</th><th>Number of Rating</th><th>BUY</th></tr>";

   while($erow = mysqli_fetch_array($erun))
   {
   	 $ename = $erow["product_name"];
     $erating = $erow["rating"];
     $eprice = $erow["price"];
     $enum = $erow["no_of_review"];
      $eid = $erow["p_id"];
     echo "<tr><td>".$ename."</td><td>".$erating."</td><td>".$eprice."</td><td>".$enum."</td><td><form method = 'post' action ='buyfinale.php'><input type='hidden' value='1' name='eid'><input type='submit' value='buy'></form></td></tr>";
     
    
   }

   echo "</table>";
?>   


</body>
</html>




   



