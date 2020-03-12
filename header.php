<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Events Management</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- master stylesheet -->
   <!--  <link rel="stylesheet" href="css/animations.css" type="text/css"> -->
   <link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anton|Dancing+Script|Germania+One|Lobster|Lobster+Two|Pacifico|Pangolin|Wendy+One" rel="stylesheet">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    
    
</head>
    
    
    
<body>

<!--Start Top area-->  
<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="social-linls pull-left">
                    <a href="https://www.facebook.com/dreammakers21"><i class="fa fa-facebook myfb" aria-hidden="true"></i></a>
                    <!-- <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> -->
                    <a href="https://www.instagram.com/dream_makers_event"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
           <!--  <div class="col-md-9">
                <div class="top-right pull-right">
                    <ul class="login-register clearfix">
                        <li><a href="#">log in</a></li>
                        <li><a href="#">Register</a></li>
                        <li class="lang-list">
                            <select class="dropdown select-menu" tabindex="4">
						          <option class="label" value="">En</option>
						          <option value="1">English</option>
						          <option value="2">French</option>
						          <option value="3">German</option>
					       </select>
                        </li>
                    </ul>
                    <ul class="cart-total clearfix">
                        <li class="item-count"><a href="#"><p>3</p></a></li>
                        <li class="buskat"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="buy-ticket">
                        <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Buy Tickets</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--End Top area-->
    
<!--Start header area-->  
<header class="header">
    <div class="container">
        <div class="clearfix">
            <div class="logo pull-left">
                <a href="index-2.php">
                    <img src="img/resources/logos.png" style="width: 120px;">
                </a>    
            </div>
            <div class="header-right pull-right clearfix">                    
                <div class="header-searchbar pull-right">
                    <div class="nav-toggler-box ">
                        <button type="button" data-toggle="collapse" data-target="#mainNavWrapper" aria-expanded="true" aria-controls="mainNavWrapper">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div class="nav-footer collapse pull-right" id="mainNavWrapper">
                    <ul>
                       <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="about.php">About Us</a></li> -->
                        <li><a href="services.php">Services</a></li>
                        <li class="dropdown">
                            <a href="#">Gallery</a>
                            <ul class="submenu">
                                <li><a href="photogallery.php">Photo Gallery</a></li>
                                <li><a href="videogallery.php">Video Gallery</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="booking.php">Booking</a></li>
                         <li><a href="events.php">Events</a></li>
                        <!--<li class="dropdown">
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="cooming-soon.php">Cooming Soon</a></li>
                            </ul>
                        </li>-->
                        <!--<li class="dropdown">
                            <a href="blog.php">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog.php">Blog One</a></li>
                                <li><a href="blog-left.php">Blog Two</a></li>
                                <li><a href="blog-two-col.php">Blog Three</a></li>
                                <li><a href="blog-three-col.php">Blog Four</a></li>
                                <li><a href="blog-single.php">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</header>