<html>
  <head>
  <title>LOGIN</title>
  <style type="text/css">
  	body {
  background:url('react.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
	background-size: 100% 110%;'
	 text-align:center;
  font-size:300%;
  color:black;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;

}
</style>
</head>
<body>


<?php 
$server='localhost'; 
$user='root'; 
$password=''; 

$con = mysqli_connect($server,$user,$password,"users") or die("Failed to connect to MySQL: " ); 
//$db = mysqli_select_db($server,$con) or die("Failed to connect to MySQL: " ); 

if(mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect to MySQL"; 
	}

 else {
 		 //echo "Successfully connected to your database "; 
 		SignUp($con); 
	 	
	 	}

function SignUp($con) 
	 	{ 
	 		if(!empty($_POST['uname'])) //checking the 'user' name which is from LOGIN.html, is it empty or have some text 
	 		{ 
	 		
	 			$userName = $_POST['uname']; 
	 			$pass = $_POST['psw']; 

	 			


	 			$query = mysqli_query($con,"SELECT * FROM websiteusers WHERE userName = '$userName' AND pass = '$pass'");
	 		 	$row = mysqli_fetch_array($query);
	 		
	 		 	if(empty($row)) 
	 		 		{ 
	 		 			
						 $query = "INSERT INTO websiteusers (userName,pass) VALUES ('$userName','$pass')"; 
						 $data = mysqli_query($con,$query);
						 
						 if($data)
						 	{
						 		echo "YOUR REGISTRATION IS COMPLETED... pls continue to";
						 		echo "<a href='LOGIN.html'>Login</a>";
			 		 }		
						 	} 
	 		 		
	 		 		} 

	 		 	else
			 		 {	
			 		 	echo "SORRY...YOU ARE ALREADY REGISTERED USER...pls login :)"; 
			 		 	echo"<br><br>";
			 		 	echo "<a href='LOGIN.html'>Login</a>";
			 		 }		
	 		 	
	 		 } 
	 	
	 	
	 		
	 
?>
</body>
</html>
