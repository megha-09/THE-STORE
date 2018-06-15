<?php
  session_start();
  $_SESSION["log"]=0;
  unset($_SESSION["userName"]);
  unset($_SESSION["user"]);

?>

<html>
<head>
<title>THE Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<link href="framework.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
  .img:hover
  {
    border-bottom: 5px solid white;
     border-left: : 5px solid white;
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
        <li><i class="fa fa-envelope-o"></i> info@THEStore.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#footer">About</a></li>
        <li><a href="#footer">Contact</a></li>
        <li><a href="LOGIN.html">Login</a></li>
        <li><a href="Register.html">Register</a></li>
      </ul>
    </div>

  </div>
</div>







<!-- Top Background Image Wrapper -->

  <div class="wrapper row1" style="color:black;background-color: white; font-family:Bodoni MT; font-size:20px;">
    <header id="header" class="hoc clear" >

      <div id="logo" class="fl_left">
        <h1><a href="home.php">THE Store</a></h1>
        <p>Let us sell some products</p>
      </div>

      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="home.php">Home</a></li>
          <li><a class="drop" href="#">Products</a>
            <ul>
              <li><a href="mens.php">Mens clothing</a></li>
              <li><a href="women.php">Womens lothing</a></li>
              <li><a href="product.php">Body and Health</a></li>
            </ul>
          </li>
          <li><a href="mycart.php">CART\_/</a></li>
        </ul>
      </nav>

    </header>
  </div>


<div class="bgded overlay" style="background-image:url('slide_main.jpg');">
  <div id="pageintro" class="hoc clear">

    <div style="font-family:Lato;">
      <strong><h1>COMING UP !!!!!! </h1></strong>
      <p class="heading">THE GREAT INDIAN SALE</p>
      <h2 class="heading">GET flat 50% on major clothing brands</h2>
      <h3>1 month with increasing deals and decreasing prices! Dont miss it !!</h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#shop">SHOP NOW</a></li>
          <li><a class="btn inverse" href="LOGIN.html">SIGN IN </a></li>
        </ul>
      </footer>
    </div>

  </div>

</div>
<!-- End Top Background Image Wrapper -->



<div id="shop" class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->

    <article class="one_third first">
      <p class="nospace font-xs">the gateway to easy, comfortable clothing</p>
      <h4 class="font-x2 font-x3">SnB : Sleeves and Bows</h4>
      <p>Our exclusive clothing section with a mixed bag of brands</p>
      <p class="btmspace-30">We bring you a whole bunch of items from casual to chic to formal and lets just say BEYOND</p>
      <footer><a class="btn inverse" href="#">Start Shopping &raquo;&raquo;</a></footer>
    </article>

    <article class="one_third"><a href="mens.php"><img class="btmspace-30 img" src="man.png" alt=""></a>
      <h4 class="heading">MEN</h4>
      <p>The most fashionable outfits for men to go on road or stright into office are right here right now&hellip;</p>

    </article>

    <article class="one_third"><a href="women.php"><img class="btmspace-30 img" src="woman.png" alt=""></a>
      <h4 class="heading">WOMEN</h4>
      <p>Going to be no lack of choices for the ladies. Get digging girls !!&hellip;</p>

    </article>

    <!-- / main body -->
    <div class="clear"></div>
  </main>


</div>



<div class="wrapper row3">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position:absolute;
  top: 50%;
  width:auto;
  padding: 16px;
  margin-top: -33px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 2px 2px 0;
  /*float : left;*/
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>




<div class="slideshow-container">

<div class="mySlides fade">
  <img src="yo.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="yoo.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="yoyo.jpg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


</div>




<div class="wrapper row3">
  <section class="hoc container clear">

    <div class="btmspace-50 center">
      <h2>BnB: Bath and Body Works</h2>
      <h3>HOT DEALS in our latest section updated on growing demands</h3>
    </div>
    <ul class="nospace group">

      <li class="one_third first">
        <article class="excerpt"><a href="#"><img src="#" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Fragrances</h6>
            <p>Shop for the best fragrances to make your special moments stand out!! &hellip;</p>
          </div>
        </article>
      </li>

      <li class="one_third">
        <article class="excerpt"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Bath</h6>
            <p>Unlimited supply of various bath products &hellip;</p>
            <p><a href="#">LET'S GO &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Skin Care</h6>
            <p>Soothing skin care !! We make finding your perfect something a special moment!! &hellip;</p>
            <p><a href="#">SHOP NOW&raquo;</a></p>
          </div>
        </article>
      </li>
    </ul>

  </section>
</div>



<div class="wrapper bgded overlay" style="background-image:url(cat.jpg);" >
  <article class="hoc container center">


</div>



<div class="wrapper row3">
  <section class="hoc container clear">

    <div class="three_quarter first" >
      <h3>Shop from top Brands.Easy returns and refunds..</h3>
      <h6>A-Z guarantee !!BUY now with 100% purchase protection..</h6>
    </div>
    <footer class="one_quarter"><a class="btn" href="#">More Information &raquo;</a></footer>

</div>



<!-- Footer Background Image Wrapper -->

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');">
 <div class="wrapper row4">
    <footer id="footer" class="hoc clear">

      <div class="one_quarter first">
        <h6 class="title">HEADING</h6>
        <p>more blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
        <p>blahblahblahblah</p>
      </div>

      <div class="one_quarter">
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        </hr>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>

      </div>

      <div class="one_quarter">
        <h6 class="title">CONTACT INFO</h6>
        <ul class="nospace linklist">
          <li>Contact us and we'll get back to you within blahblahblah hours.</li>
          <li><span class="glyphicon glyphicon-map-marker"></span> Bangalore,India</li>
          <li><span class="glyphicon glyphicon-phone"></span> +00 1515151515</li>
          <li><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</li>
        </ul>
      </div>

      <div class="one_quarter">

      </div>

    </footer>
  </div>
  </div>
<!-- End Footer Background Image Wrapper -->

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
