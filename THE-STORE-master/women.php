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
    height: auto;
    width: 300px;
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
         
          <li><a href="mycart.php">CART\_/</a></li>
          
        </ul>
      </nav>

    </header>
  </div>



<div class="gallery">
  <a target="_blank" href="pro1.php">
    <img id="a" src="1.jpg" width="300" height="200">
  </a>
  <div class="desc">Rain & Rainbow<br>Printed Straight Kurta</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro2.php">
    <img id="b" src="2.jpg" width="300" height="200">
  </a>
  <div class="desc">AHALYA<br>Woven Design Anarkali Kurta</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro3.php">
    <img id="c" src="3.jpg" width="300" height="200">
  </a>
  <div class="desc">HERE & NOW<br>Printed Straight Kurta</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro4.php">
    <img id="d" src="4.jpg"  width="300" height="200">
  </a>
  <div class="desc">Libas<br>Anarkali Kurta</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro5.php">
    <img id="e" src="5.jpg"  width="300" height="200">
  </a>
  <div class="desc">W<br>Printed Kurta</div>
</div>

<div class="gallery">
  <a target="_blank" href="pro6.php">
    <img id="f" src="6.jpg" width="300" height="200">
  </a>
  <div class="desc">AHALYA<br>Woven Design Kurta</div>
</div>




</body>
</html>
