<?php 
include"function/db.php";
include"function/function.php";
session_start();

if (!isset($_SESSION['admin_id'])) {
  
  header('location:./index.php');
}
 $adminid = $_SESSION['admin_id'];
 $name = $_SESSION['admin_name'];
 $emailid = $_SESSION['admin_email'];

?>
<!DOCTYPE html>
<html class="sb-init gr__" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Events Management">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Events Management</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>




  <body data-gr-c-s-loaded="true">

  <section id="container" class="sidebar-closed">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="../index.php" class="logo">Events<span></span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
           
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input class="form-control search" placeholder="Search" type="text">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img style="height: 45px; width: 45px" alt="" src="img/callify.jpg">
                          <span class="username"><?php echo $name ;?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="resetpassword.php"><i class="fa fa-cog"></i>Reset Password</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="function/logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
                  <!--<li class="sb-toggle-right">
                      <i class="fa  fa-align-right"></i>
                  </li>-->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar" class="nav-collapse " style="overflow: hidden; margin-left: -210px;" tabindex="0">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="display: block;">
                  <li>
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a href="slider.php">
                          <i class="fa fa-user"></i>
                          <span>Slider Home</span></a>
                  </li>


                  
                  <li class="sub-menu dcjq-parent-li">
                      <a href="cate_details.php">
                          <i class="fa fa-book"></i>
                          <span>Categore Details</span>
                       </a>
                  </li>
                  

                  <li class="sub-menu dcjq-parent-li">
                      <a href="events.php">
                          <i class="fa fa-book"></i>
                          <span>Events</span>
                       </a>
                  </li>
                  
                  <li class="sub-menu dcjq-parent-li">
                      <a href="imagegallery.php">
                          <i class="fa fa-book"></i>
                          <span>Image Gallery</span>
                       </a>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="video.php">
                          <i class="fa fa-book"></i>
                          <span>Video Gallery</span>
                       </a>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="booking.php">
                          <i class="fa fa-book"></i>
                          <span>Booking</span>
                       </a>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a href="services.php">
                          <i class="fa fa-book"></i>
                          <span>Services</span>
                       </a>
                  </li>
               

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <!--sidebar end-->
      <!--main content start-->