<?php

  session_start();
  ?>

<html>
<head>
<title>THE Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<link href="framework.css" rel="stylesheet" type="text/css" media="all">
<style>

div.gallery {

    margin: 100px;
    border: 1px solid #ccc;
    //position: absolute;
    float: left;
    width: 250px;
}

div.gallery:hover {
    height:auto;
    width:300px;
}

div.gallery img {
    bottom : 100px;
    width: 100%;
    height: auto;

}

div.desc {
    padding: 15px;
    text-align: center;
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

        if($_SESSION["log"]==1 && isset($_SESSION["userName"]))
          {
            echo $_SESSION['userName']."</a></li>";
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
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">

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
              <li><a href="mens.php">MENS clothing</a></li>
              <li><a href="women.php">WOMENS clothing</a></li>
              <li><a href="product.php">Body and Health</a></li>
   
            </ul>
          </li>
    
          <li><a href="mycart.php">Cart\_/</a></li>
          
        </ul>
      </nav>

    </header>
  </div>



<div class="gallery">
  <a target="_blank" href="pro7.php">
    <img id="g" src="7.jpg" width="300" height="200">
  </a>
  <div class="desc">HERE & NOW<br>Colorblocked necked T-shirt</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro8.php">
    <img id="h" src="8.jpg" width="300" height="200">
  </a>
  <div class="desc">Moda Rapido<br>Colorblocked Round necked T-shirt</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro9.php">
    <img id="i" src="9.jpg" width="300" height="200">
  </a>
  <div class="desc">HERE & NOW<br>Colorblocked Round necked T-shirt</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro10.php">
    <img id="j" src="10.jpg" width="300" height="200">
  </a>
  <div class="desc">Moda Rapido<br>Colorblocked T-shirt</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro11.php">
    <img id="k" src="11.jpg" width="300" height="200">
  </a>
  <div class="desc">HERE & NOW<br>Solid round necked T-shirt</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro12.php">
    <img id="l" src="12.jpg" width="300" height="200">
  </a>
  <div class="desc">HERE & NOW<br>Solid round necked T-shirt</div>
</div>




</body>
</html>
