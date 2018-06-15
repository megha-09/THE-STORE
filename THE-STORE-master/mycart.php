<?php

			session_start();

			if($_SESSION["log"]==1 && isset($_SESSION["user"]))
				
				{
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

					 else
					 	{
					 		 if(!empty($_GET))
						 		{
						 			$id = $_GET['prodno']; 
						 			$query = mysqli_query($con,"SELECT * FROM products WHERE id = '$id'");
						 		 	$row = mysqli_fetch_array($query);
						 		 	//echo"PRODUCT".$row["id"]."   "."NAME:".$row["name"].""."imgsrc:".$row["imgsrc"];
						 		 	//echo"<br>";

						 		 	$ID=$row["id"];
						 		 	$N=$row["name"];
						 		 	$img=$row["imgsrc"];
						 		 	$u=$_SESSION['user'];

						 		 	 $query = "INSERT INTO cart (num,name,imgsrc,user) VALUES ('$ID','$N','$img','$u')"; 
									 $data = mysqli_query($con2,$query);
											 
											 if($data)
											 	{
											 		//echo "YOUR CART has been updated...";
											 	}
									}
									//mysqli_close();

						}
					}

?>




<html>
<head>
<title>THE Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<link href="framework.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
	




	.cart>table>tr,td
	{
		background-color:;
		color:black;
		font-family:Lato;
		text-indent: center;
		padding: auto;
	}
	.cart>table
	{
		border: solid 3px white;
		border-radius:3px;
		padding: auto;
		width: auto;
		padding: auto;
	}

	#row:hover
	{
		height: 35px;
	}

	#submit
  {
    
    width:250px;
	height:45px;
	border:none;
	outline:none;

	margin-top:20px;
	color:black;
	font-size:14px;
	background-color:white;
	border-radius:3px;
	border: 1px solid black;
	font-weight:700
  }

  #submit:hover
  {
    color:black;
    background-color:#A3E4D7;
    box-shadow:-2px 2px 2px 0 white;
    padding:10px;
  }

</style>
</head>

<body id="top">



<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <?php
        echo"<li><center><a href='Login.html'>";
        if(isset($_SESSION["userName"]))
          {
            echo "".$_SESSION['userName']."</a></li>";
           }

        else
        {
          echo"<li><a href='LOGIN.html'>Login</a></li>";

        }
		

        if($_SESSION["log"]==1 && isset($_SESSION["userName"]))
        {
          echo'<li><form action="home.php" method="POST"><input type="submit" value="LOGOUT" style="background-color:black;color:#66CCCC;border:none;"></form></li>';
        }

        else
          {
            echo'<li><a href="register.html">Register</a></li>';
          }

?>
      </ul>
    </div>

  </div>
</div>







<!-- Top Background Image Wrapper -->


  <div class="wrapper row1" style="color:black;background-color: white; font-family:Bodoni MT; font-size:20px;">
    <header id="header" class="hoc clear">

      <div id="logo" class="fl_left">
        <h1><a href="home.php">THE Store</a></h1>
        <p>Let us sell some products</p>
      </div>

      <nav id="mainav" class="fl_right">
        <ul class="clear">
            <?php

            echo"<li class='active'><a href=";
            if($_SESSION["log"]==1)
              {
                echo"'loggedin.php'>Home</a></li>";
              }
            else
              echo"'home.php'>Home</a></li>";
            ?>
          <li><a class="drop" href="#">Products</a>
            <ul>
              <li><a href="mens.php">Mens clothing</a></li>
              <li><a href="women.php">Womens clothing</a></li>
              <li><a href="product.php">Body and Health</a></li>
            </ul>
          </li>
          <li><a href="mycart.php">CART\_/</a></li>
        
        </ul>
      </nav>

    </header>
  </div>
 </div>
 <br><br>

 <center><div>
 <form action="clear.php" method="POST">
 <input id="submit" type="submit" name="clear" value="CLEAR CART\_/" "></input>
 </form>
<div>



<?php

	
		if($_SESSION["log"]==1 && isset($_SESSION["user"]))
		{
			$server='localhost'; 
			$user='root'; 
			$password='';


			$con = mysqli_connect($server,$user,$password,"users") or die("Failed to connect to MySQL: " ); 

			if(mysqli_connect_errno($con)) 
				{ 
					echo "Failed to connect to MySQL"; 
				}

			 else {
			 		 //echo "Successfully connected to your database "; 
				 			$u=$_SESSION['user'];
							mysqli_query($con,"DELETE FROM cart WHERE num='0'");
				 			$query = mysqli_query($con,"SELECT * FROM cart WHERE user='$u'");

				 		 	echo"<br><br><br><br><br><br>";
				 		 	echo"<div class='cart'>";
				 		 	echo "<table class='cart' id='test'>"; 
							while($row = mysqli_fetch_array($query))
							{

								echo "<tr id='row'><td>" . $row['num'] . "</td><td><img src=" .$row['imgsrc']." style='width:25%;'></td><td>". $row['name'] . "</td><td><form action='cleareach.php' method='GET'><input type='hidden' name='prodno'value=".$row['num']."</input><input id='submit' type='submit' name='submit' value='X(Remove)'></input></form></td></tr>"; 
							}
								
							echo "</table>";
							echo"</div>";


				}
		
		}

		else
		{
			echo"<div><h1 style='font-family:Verdana;'>SORRY YOU ARE NOT LOGGED IN</h1><div>";
		}
?>

</body>
</html>
