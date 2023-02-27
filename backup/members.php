<?php
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['password'])){
header('Location:login.php');
}

?>

<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>BookUTravel</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="https://bookutravel.com/content/images/favicon.ico" type="image/x-icon">
<link rel="canonical" href="index.htm">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="content/images/favicon.ico" type="image/x-icon">
<link rel="canonical" href="https://www.bookutravel.com/" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<script src="js/main.js"></script> 
<script src="js/tab.js"></script>
<style>
.whatsapplink {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    font-size: 30px;
    text-align: center;
    border-radius: 75%;
    padding-top: 3px;
    z-index: 10000;
}
.footer-content {
    padding-top: 20px !important;
}
h1 {
    font-size: 32px !important;
    color: #000 !important;
}
</style>
<style>
.grid-container {
    grid-template-areas: 'menu main';
    padding: 10px;
    padding-left: 250px;
    padding-right: 250px;
    padding-top: 250px;
    padding-bottom: 300px;
}
</style>
			<style>

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 9;
	    margin-top: 55px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>

<body>
<header>
  <div class="top">
    <div class="container">
      <div class="top-right">
        <div class="navbar-collapse"> 
          
          <!--/.callusat -->
          
          <ul class="nav navbar-nav hidden-xs">
            <li> <a href="#" target="_blank" id="WhatsApp"> <span style="display:inline-block; margin-right:0px;"> <img src="content/images/whatsapp.png" alt="WhatsApp chat"> </span>Chat Us<span>|</span> </a> </li>
            <li id="li_fb_login"> <a onclick="checkLoginState();" style="margin-top:-3px; cursor:pointer;"><img src="content/images/db-small-but.jpg" alt="fb login"><span>|</span></a> </li>
            <li style="display:none" id="li_fb_logout"> <a onclick="logoutFacebook();" href="#" style="margin-top:-3px; cursor:pointer;"><img src="#" alt="fb logout"><span>|</span></a> </li>
            <li><a href="#" id="Header-Email-Clk"><i class="fa fa-envelope" aria-hidden="true"></i> info@bookutravel.com<span>|</span></a></li>
            <li><a href="tel:+359877888774" id="Header-tollfree-clk"><i class="fa fa-phone-square" aria-hidden="true"></i>0877888774<span>|</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
     
		<div class="dropdown">
  <button id="myBtn" class="navbar-toggle collapsed" ><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.html">Home</a>
    <a href="air-ticket.html">AIR Ticket</a>
    <a href="hotels.html">Hotels</a>
	  <a href="rentacar.html">Rent a Car</a>
    <li style="position:relative; color:#FF0"> <a href="cruise.html" >Cruise</a><span class="module-new">New</span> </li>
     <li ><a href="logout.html"  style="color:yellow">Log Out, <?php  echo $_SESSION['username']; ?></a></li>
            </li>
            
  </div>
</div>
		
     <script>
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
     
     
		<div class="navbar-brand"> <a href="index.html"> <img src="content/images/bookutravel-logo.png" alt="BookUTravel.com" title="BookUTravel.com"> </a> </div>
      <div class="tollfree"><a href="tel:+359877888774"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
      <div></div>
      <div class="top-nav-container">
        <div id="navbar" class="navbar-collapse collapse main-nav">
          <ul class="nav navbar-nav">
            <li><a href="index.html" >Home</a></li>
            <li><a href="air-ticket.html" >Flights</a></li>
            <li><a href="hotels.html" >Hotels</a></li>
            <li><a href="rentacar.html" >Rent a car</a></li>
            <li style="position:relative; color:#FF0"><a href="cruise.html" >Cruise</a><span class="module-new">New</span>
           <li ><a href="logout.html"  style="color:yellow">Log Out, <?php  echo $_SESSION['username']; ?></a></li>
            
          </ul>
        </div>
      </div>
      
      <!--/.navbar-collapse --> 
      
    </div>
    
    <!--/.navbar-header --> 
    
  </nav>
</header>
<section>
	
  <div class="container">
   <h1>User admin area</h1>
	  <p>Welcome <strong><?php  
   echo $_SESSION['username'];
   ?></strong></p>
  <div class="carousel-inner">
    <div class="item active"> 
     
      <!-- logged in user information -->
      
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')"><i _ngcontent-c9="" class="item-icon icon-package"></i>Мойте резервации</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Радар за полети</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Промяна на парола</button>
      </div>
      <div id="London" class="tabcontent">
        <h3 class="res-title">Мойте резервации</h3>
		  <h5 class="res-u-title">Нямаш пътувания</h5>
        <p>Все още нямаш предстоящи пътувания. След като резервираш първото си пътуване, ще го видиш тук.</p>
      </div>
      <div id="Paris" class="tabcontent">
        
       <iframe id="flight-radar" class="flight-radar" src="https://vau.aero/fsmap/?va=vau&amp;lat=42&amp;lng=25&amp;zoom=8" style="height: 300px; width: 800px;"></iframe>
      </div>
      <div id="Tokyo" class="tabcontent">
        <h3>Промени си паролата</h3>
        <p><form action='recover_password.php' method='post'>
        <input type="password" placeholder="New Password" name="password">
        <input type="submit" value="Change Password">
        </form></p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls --> 
	</div>
</section>
<footer id="footer">
  <div class="mob-footer">
    <ul>
      <li><a href="#" id="Footer-whtsp-Mobile-clk"><span style="display:inline-block;margin-right:3px;"><img src="content/images/whatsapp.png" alt="Whatsapp"></span><span style="display:inline-block;margin-top:2px;">WhatsApp</span></a></li>
      <li><a href="mailto:info@bookutravel.com" id="Footer-email-Mobile-clk"><i class="fa fa-envelope" aria-hidden="true"></i> Write Us</a></li>
      <li><a href="tel:+350877888774" id="Footer-tollfree-Mobile-clk"><i class="fa fa-phone" aria-hidden="true"></i> Call Us</a></li>
    </ul>
    <div class="clearfix"></div>
    <div class="mob-footer-link clearfix">
      <div class="col-xs-6"> <a href="#">Privacy Policy</a> <a href="#">Disclaimer</a> <a href="#">Terms &amp; Conditions</a> </div>
      <div class="col-xs-6"> <a href="#">User Agreement</a> <a href="#">Copyright Informations</a> <a href="#">FAQ</a> </div>
    </div>
  </div>
  <div class="container">
    <div class="footer-content">
      <ul>
        <li class="head">About BookUtravel</li>
        <li><a href="#">Customer Feedback</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-content">
      <ul>
        <li class="head">Our Products</li>
        <li><a href="#">airline tickets</a></li>
        <li><a href="#">Hotel reservations</a></li>
        <li><a href="#">Rent a car</a></li>
        <li><a href="#">Cruise</a></li>
        <li><a href="#">Exotic vacations</a></li>
      </ul>
    </div>
    <div class="footer-content">
      <ul>
        <li class="head">Popular Airlines</li>
        <li><a href="#">Bulgaria AIR</a></li>
        <li><a href="#">Lufthansa</a></li>
        <li><a href="#">Eazy Jet</a></li>
        <li><a href="#">Ryanair</a></li>
        <li><a href="#">Wizz AIR</a></li>
      </ul>
    </div>
    <div class="footer-content">
      <ul>
        <li class="head">Popular Air Routes</li>
        <li><a href="#">DTW to DEL</a></li>
        <li><a href="#">DFW to HYD</a></li>
        <li><a href="#">JFK to AMD</a></li>
        <li><a href="#">ATL to BLR</a></li>
        <li><a href="#">LAX to BOM</a></li>
      </ul>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="footer-content">
      <ul>
        <li class="head">Customer Care</li>
        <li><a href="#">Customer Support</a></li>
        <li><a href="#">Corporate Travel</a></li>
        <li><a href="#">Group Booking</a></li>
        <li><a href="#">Submit Feedback</a></li>
      </ul>
    </div>
    <div class="footer-content last">
      <ul>
        <li class="head">Legal Terms</li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Terms &amp; Conditions</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <div class="need-help">
      <ul itemscope="" itemtype="http://schema.org/Organization">
        <li class="mailus"><span class="need-hd">Mail Us</span><a href="mailto:info@bookutravel.com" id="Footer-email-clk"> info@bookutravel.com</a></li>
        <li class="callus"><span class="need-hd">Call Us</span><a href="tel:+359877888774" id="Footer-tollfree-clk"><i class="fa fa-phone" aria-hidden="true"></i> 0877888774</a> <span style="display:inline-block; color:#fff; margin-left:5px;"><span style="display:inline-block; color:#fff; margin-right:2px;"><img src="https://www.bookutravel.com/content/images/whatsapp.png?v=1" alt="Whatsapp"></span>0877888774</span> </li>
        <li class="social"> <span class="need-hd">Connect with us</span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-facebook" aria-hidden="true" id="Social-fb-clk"></i></a></span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-twitter" aria-hidden="true" id="Social-twt-clk"></i></a></span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" id="Social-lnkdn-clk"></i></a></span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true" id="Social-pin-clk"></i></a></span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-instagram" aria-hidden="true" id="Social-insta-clk"></i></a></span> <span><a href="#" rel="me" target="_blank"><i class="fa fa-youtube" aria-hidden="true" id="Social-ytbe-clk"></i></a></span> </li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="client-area-bg">
    <div class="container">
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/clia.png?v=1" alt="Clia"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/card1.png?v=1" alt="Visa"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/card2.png?v=1" alt="Master Card"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/card3.png?v=1" alt="American Express"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/card4.png?v=1" alt="Diners Club"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/card5.png?v=1" alt="Discover"></a> </div>
      <div class="client-item item"><a href="javascript:void(0)"><img src="content/images/bbb.png?v=1" alt="BBB Accredited Charity Logo"></a> </div>
    </div>
  </div>
  <div class="copyright"> Copyright © 2022 BookUTravel. All rights reserved <span class="hide-cop">|</span><span> Powered by Web4You Technology</span></div>
</footer>
</body>
</html>