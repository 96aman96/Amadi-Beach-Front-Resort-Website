
<!DOCTYPE html>
<html><head>
    <title>Contact | Amadi Beach Front Resort</title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="images/favicon-pearl.png">
	
    <!--main file-->
	<link href="css/pearl-hotel.css" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="fonts/pearl-icons.css" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="css/default-color.css" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="css/dropmenu.css" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="css/sticky-header.css" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="css/countdown.css" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="css/settings.css" rel="stylesheet" type="text/css">    
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
    
	<!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
</head>
  <body>
    
	
	
  <div id="wrap">
   
   <!--Start PreLoader-->
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Loading...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	
   	
		<?php include 'include/header.php' ?>
	
    
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>CONTACT  US</h1>
						
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a class="select">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   
   
  
 
 <div class="content">
	
		<div class="contact-page">
		
		<!--Start Get in Touch-->
				<div class="get-in-touch">
					<div class="container">
					<div class="row">
						
						<div class="col-md-6">
							
							<div class="get-touch-detail">
								<h3>Get in Touch</h3>
								<p>Our Resort's warm hospitality, the pleasing and an assortment of delectable dishes at our multi-cuisine restaurant make the experience satiating. Our team of experienced chefs aims at providing your meals as per your taste and choice and are delighted to serve you dishes of your choice in Indian cuisine. 
								<br/><br/>
								 What blend well with our concept is our quick service menus with light and healthy selections for an all-day busy business traveler.   </p>
							</div>
							
							<div class="social-icons">
								<h5>Follow Along</h5>
								<ul>
									<li><a href="#."><i class="icon-facebook-1"></i></a></li>
									<li><a href="#."><i class="icon-twitter-1"></i></a></li>
									<li><a href="#."><i class="icon-google"></i></a></li>
									<li><a href="#."><i class="icon-pinterest-p"></i></a></li>
									<li><a href="#."><i class="icon-instagram"></i></a></li>
								</ul>
							</div>
							
						</div>
						
						<div class="col-md-6">
							<div class="get-touch-form">
                            <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
								<form name="contact_form" id="contact_form" method="post" onSubmit="return false">
                                <input name="name" id="name" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" value="Your Name">
								<input class="last" name="email_address" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='E-mail Address'}" onfocus="if (this.value == 'E-mail Address') {this.value=''}" value="E-mail Address">
								<textarea name="msg" id="msg" cols="1" onKeyPress="remove_contact_errors();" rows="1" onblur="if(this.value == '') { this.value='Message'}" onfocus="if (this.value == 'Message') {this.value=''}" value="Message">Message</textarea>
								<input type="submit" name=" " value="send message" onClick="validateContact();">
                                </form>
							</div>
						</div>
						
					</div>
					</div>
					
					
				</div>
		
		
		
					
		
		</div>
		
	</div>	
  
  
  
   
	
	
<?php include 'include/footer.php' ?>
	
  </div>




<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>

<!-- Paralllax background -->
<script type="text/javascript" src="js/parallax.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/cart-detail.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 

<!-- Switcher -->
<script type="text/javascript" src="js/switcher-hotel.js"></script> 

</body>
</html>