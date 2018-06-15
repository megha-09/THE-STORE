<?php
$server='localhost'; 
$user='root'; 
$password=''; 

$con = mysqli_connect($server,$user,$password,"users") or die("Failed to connect to MySQL: " ); 
$con2 =  mysqli_connect($server,$user,$password,"users") or die("Failed to connect to MySQL: " ); 
//$db = mysqli_select_db($server,$con) or die("Failed to connect to MySQL: " ); 

if(mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect to MySQL"; 
	}

 else {
 		 echo "Successfully connected to your database "; 
 		checkdatabase($con,$con2); 
	 	
	 	}


function checkdatabase($con,$con2)
{
	 		
	 			$id = $_GET['prodno']; 
	 			$query = mysqli_query($con,"SELECT * FROM products WHERE id = '$id'");
	 		 	$row = mysqli_fetch_array($query);
	 		 	echo"PRODUCT".$row["id"]."   "."NAME:".$row["name"].""."imgsrc:".$row["imgsrc"];
	 		 	echo"<br>";

	 		 	$ID=$row["id"];
	 		 	$N=$row["name"];
	 		 	$img=$row["imgsrc"];

	 		 	 $query = "INSERT INTO cart (num,name,imgsrc) VALUES ('$ID','$N','$img')"; 
				 $data = mysqli_query($con2,$query);
						 
						 if($data)
						 	{
						 		echo "YOUR CART has been updated...";
						 	} 

	 		 	

}

?>