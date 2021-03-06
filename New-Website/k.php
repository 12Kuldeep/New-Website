<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<html>
<head>
  	<title> KlyassInk </title>
  	
  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
  	<link rel="stylesheet" type="text/css" href="swiper.min.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	
</head>
<body>
	<div class="loader" >
		<img src="Eclipse.gif" alt="Eclipse..."/>
	</div>
	<div id="pageA">
	<header>
		<nav>
		<div class="raw clearfix">
			<img src="logo.png" class="logo">
			    
				<ul class="main-nav animated slideInDown">
				<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
				<li class="nav-item"><a href="#" class="nav-link"> Home Delivery</a></li>
				<li class="nav-item"><a href="#pageB" class="nav-link">Check More</a></li>
				<li class="nav-item"><a href="file:///C:/Users/user/Desktop/Kul%20Website/logn.html" class="nav-link"> Log in</a></li>
				<li class="nav-item"><a href="#pageD" class="nav-link"> About us</a></li>
				</ul>
				
		</div>
		</nav>
		<div class="main-content animated zoomInRight">
			<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
			<h1>Welcome to <span class="color-change">KlyassInk.</span><br>A fresh approach to shopping.</h1>
			<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
			<a href="#" class="btn btn-full">click to order</a>
			<a href="#" class="btn btn-nav">show more</a>
	 	</div>
	</header>
	</div>

    <div class="swip" id="pageB">
    <div class="swiper-container"  id="pageB">
	<div class="swiper-wrapper">



      <div class="swiper-slide">
        <div class="imgbx">
          <img src="1.jpg">
        </div>
        <div class="details">
     	   <h3>
     	   	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
     	   	<br>Black Watch<br><span>Price=1500 rupees</span></h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="2.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="3.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="4.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="5.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="6.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="7.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1,500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="8.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="9.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="10.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="12.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="13.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="14.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>


    </div>
    <div class="swiper-pagination"></div>
    </div>
    </div>

    <div id="pageC">

      <div class="swip" id="pageC">
    <div class="swiper-container"  id="pageC">
  <div class="swiper-wrapper">  

       <div class="swiper-slide">
        <div class="imgbx">
          <img src="2.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
          <button><div class="Addto cart">Addto Cart</button>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="3.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="4.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="5.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="6.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="7.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1,500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="8.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="9.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="10.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="12.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="13.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="imgbx">
          <img src="14.jpg">
        </div>
        <div class="details">
          <h3><br>Black Watch<br>Price=1500 rupees</h3>
        </div>
      </div>
        

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
    
  </div>
   </div>
   </div>
   </div>
   </div>



    <div id="pageD">
    	<h1>Page info</h1>
    </div>

    <script type="text/javascript" src="swiper.min.js"></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    </script>

</body>	
</html>