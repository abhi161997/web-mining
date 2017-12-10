<!DOCTYPE html>
<html>
<head>
	<title>Sell Status</title>
	<style>
	
       .tclass{
       	width:600px;
       } 
       table, td,tr,th{
       	 border:2px solid black;
       	 text-align: center;
       }
       th{
       	background-color: grey;
       }
    </style>
</head>
<body>

<?php

$conn = mysqli_connect("localhost","root","","web_mining");
if($conn)
{   

	$p_name = "select * from soldproducts";
	$soldquery = "select * from soldproducts order by p_sold desc";
	$p_companyquery = "select count(*) from soldproducts group by p_company";
	$p_area = "select count(*) from soldproducts group by p_area order by p_area";
	$p_sold = "select * from soldproducts order by p_sold desc";
	
	$run = mysqli_query($conn, $p_sold);
	
	if($run)
	{   echo "<h2>Display Product status of all category</h2>";
		echo "<table class='tclass'>";
		echo "<tr><th>Product Name</th><th>Company</th>";
		echo "<th>Place</td></th>";
		echo "<th>Product sold</th></tr>";
		while($row = mysqli_fetch_array($run))
		{
             echo "<tr>";
             echo "<td>".$row["pname"]."</td>";
             echo "<td>".$row["p_company"]."</td>";
             echo "<td>".$row["p_area"]."</td>";
             echo "<td>".$row["p_sold"]."</td>";
             echo "</tr>";
		}
	    echo "</table>";
	}

//company wise product sold
$sqlcompany = "select sum(p_sold),p_company from soldproducts group by p_company";

	$run = mysqli_query($conn, $sqlcompany);
	
	if($run)
	{   echo "<h2>Company wise product sold</h2>";
		echo "<table class='tclass'>";
		echo "<tr><th>Company</th>";
		echo "<th>Product sold</th></tr>";
		while($row = mysqli_fetch_array($run))
		{
             echo "<tr>";
             echo "<td>".$row["p_company"]."</td>";
             echo "<td>".$row["sum(p_sold)"]."</td>";
             echo "</tr>";
		}
	    echo "</table>";
	}

//area wise product sold
$sqlarea = "select sum(p_sold), p_area FROM `soldproducts` group by p_area order by sum(p_sold) desc;
";

$run = mysqli_query($conn, $sqlarea);
	
	if($run)
	{   echo "<h2>Areawise Product sold</h2>";
		echo "<table class='tclass'>";
		echo "<tr>";
		echo "<th>Product sold</th><th>Area</th></tr>";
		while($row = mysqli_fetch_array($run))
		{
             echo "<tr>";
             
             echo "<td>".$row["sum(p_sold)"]."</td>";
             echo "<td>".$row["p_area"]."</td>";
             echo "</tr>";
		}
	    echo "</table>";
	}

//SELECT sum(p_sold),pname, p_area FROM `soldproducts` group by p_area


//total no of a particular product sold
$sqltotal = "select sum(p_sold),pname from soldproducts group by pname order by sum(p_sold) desc";
$run = mysqli_query($conn, $sqltotal);
	

	if($run)
	{   echo "<h2>Total no of a particular product sold</h2>";
		echo "<table class='tclass'>";
		echo "<tr>";
		echo "<th>Product Name</th>";
		echo "<th>Product sold</th></tr>";

		while($row = mysqli_fetch_array($run))
		{
             echo "<tr>";
           
             echo "<td>".$row["pname"]."</td>";
             echo "<td>".$row["sum(p_sold)"]."</td>";
             echo "</tr>";
		}
	    echo "</table>";
	}
//select sum(p_sold),pname from soldproducts group by pname;
}
?>
</body>
</html>
