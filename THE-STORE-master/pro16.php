<?php
  session_start();
?>
<html>
<head>
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<link href="framework.css" rel="stylesheet" type="text/css" media="all">

    <style>

        .demo{
            left:400px;
            bottom:200px;
            //border: 2px solid black;
        }
        .img{
            display: block;
            //border:1px solid black;
            //position: absolute;
            padding-left:30%;
            padding-top:10%;


            }
        .dis{
            display: inline;
            margin: auto;
            //border: 2px solid black;
            position: relative;
            padding-right:10%;

            }
        #cart{
            background-color: black;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius:4px;
            }
        #head{
            height: 8px;
            width: 100%;
            background-color:black;
            }

        #radios
        {

        display:inline-block;
        color:white;
        }
        body{
        background-color:white;
        }
        .row1{
            background-color:black;
            }





    </style>
</head>
<body>



  <div class="wrapper row1" style=" font-family:Bodoni MT; font-size:20px;">
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




<div id="forimg" class="demo one_half" >
    <div class="img">
        <img id="p" style="height:70%;" src="16.jpg" ></img>
        <h6 style="font-size:80%; color:grey;">Product code:234567</h6>
    </div>
</div>

    <div id="fordis" class="dis one_half" style="bottom:-100px;">
        <h2 style="color:black;">Nivea Nourishing Lotion Body Milk with Strawberry Shine Lip Balm</h3>

        <p style="color:black;"><del>₹395</del><font color="red"> (15% off)</font><br>₹335 </p>
        <h6 style="font-size:100%; color:black;">Additional charge may apply, charged at checkout.</h6>
        <h5 style="font-size:100%; color:black;">SELECT SIZE</h5>
         <form class="one_half two_quarter" style="color:black;" action="mycart.php" method="GET">
         
            <input type="hidden" name="prodno" value="16">
             <?php 
             if(isset($_SESSION["user"]))
                echo'<input type="hidden" name="user" value='.$_SESSION["user"].'>';
          ?>
            <br>
          <input type="submit" name="submit" id="cart" value="Add to cart" style="background-color:black ; color:powderblue;"></input>
        </form>
        <br>
        <br>


      
        <br>
        <br>
        <hr>

          <h5 style="font-size:90%; color:black;">Product Details:<br><font color="grey">Nivea Nourishing Lotion Body Milk with Strawberry Shine Lip Balm<br>

Nivea Nourishing Lotion Body Milk:<br>
- Enriched with natural minerals and moisturisers, it works deep within the skin repairing dryness layer by layer and stimulating
 moisture production naturally<br>
- The rich and creamy formula with Almond Oil provides effective care for proven smoother skin<br>
- With Hydra IQ 24h+ moisture technology for a soft skin feeling<br>

</font></h5>



        </div>

    </div>
</body>
</html>
