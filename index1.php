<?php include('header.php'); ?>
<!--End header area-->  
<?php include('db.php'); ?> 
<!--Start Slider area-->  
<style type="text/css">
 .btn-readmore{ margin-top: 60px; text-align: center; } 

 .btn-com-read{ background: #d03636;
                padding: 10px 20px 10px 20px;
                font-size: 15px;
                color: #fff;
                border-radius: 4px; } 

 .btn-com-read:hover{ background: #822828;
                      padding: 10px 20px 10px 20px;
                      font-size: 15px;
                      color: #fff;
                      border-radius: 4px;  }  


</style>
<section>
   <div id="banner">
            <div class="" style=" width: 1057px; height: 400px;" id="slider2_container">
                
                                <!-- Loading Screen -->
                                <div u="loading" style="top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=10); opacity:0.7; 
                                         background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                                    </div>
                                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                         top: 0px; left: 0px;width: 100%;height:100%;">
                                    </div>
                                </div>

                                <!-- Slides Container -->



                                <div u="slides" style="cursor: move; left: 0px; top: 0px; width: 1352px; height: 400px;
                                     overflow: hidden;">
                                  
                                    <?php
                                    $sql1 = "SELECT * from slider where adkey = 1 order by 1 DESC ";
                                    $run = mysqli_query($conn, $sql1); 
                                    while($rows= mysqli_fetch_array($run)){
                                    ?>
                                    <div>
                                        <a u=image href="#"><img src="admin/img/slider/<?php echo $rows['img1']; ?>" /></a>
                                    </div>
                                   <?php } ?>



                                </div>

                                <!-- bullet navigator container -->
                                <div u="navigator" class="jssorb01" style="bottom: 16px; left: 20px;">
                                    <!-- bullet navigator item prototype -->
                                    <div u="prototype"></div>
                                </div>
                                <!--#endregion Bullet Navigator Skin End -->
                                <!-- Arrow Left -->
                                <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
                                </span>
                                <!-- Arrow Right -->
                                <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
                                </span>
                                <a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
                           
                       
                    
               
            </div><!--.container-->
    
    </div>
  </section>
<!--End Slider area-->
    
<!--Start Planning event area-->
<section class="planning-event-area">
    <div class="container">
    <div class="section-title text-center">
            <h1>About Us</h1>
            <div class="icon-holder">
                <img src="img/resources/section-title-icon.png">
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
       
                <div class="img-holder">  
                 	
                    <img src="img/resources/a1.jpg" class="img-1">
               
         
            </div>
            </div>
        	<div class="col-md-6 col-sm-12 col-xs-12">
                <div class="text">
                    <div class="section-title-2">
                        <h1><span>Our History and Philosphy</span></h1>
                    </div>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <a href="#">check our services</a>
                </div>
            </div>
            
           
        </div>
    </div>
</section>
<!--End Planning event area-->
    
<!--Start upcoming event area-->
 
<!--End upcoming event area-->
 <section class="planning-event-area">
    <div class="container">
        <div class="section-title text-center">
            <h1>Recents Events</h1>
            <div class="icon-holder">
                <img src="img/resources/section-title-icon.png" alt="Awesome Image">
            </div>
        </div>
        <div class="row">
            <!--Start single upcoming event item-->
             <?php
                $date2 = date('Y-m-d');
                $sql3 = "SELECT * from events where adkey = 1 and date1 <='$date2' order by 1 ASC limit 3 ";
                $run3 = mysqli_query($conn, $sql3);
                while($row3= mysqli_fetch_array($run3)){
             ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-upcoming-event-item">
                    <div class="img-holder">
                        <img src="admin/img/events/<?php echo $row3['img1']; ?>" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content-box">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <a href="single-event.php"><h5><?php echo $row3['name']; ?></h5></a>
                       <?php echo $row3['msg']; ?>
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row3['date1']; ?></li>
                            <li><i class="fa fa-bookmark" aria-hidden="true"></i><?php echo $row3['cat']; ?></li>
                        </ul>
                    </div>
                    
                </div>

            </div>

            <?php } ?>
         
            <!--End single upcoming event item-->
            <!--Start single upcoming event item-->
 
            <!--End single upcoming event item-->
            <!--Start single upcoming event item-->

        </div>

     <div class="row">
        <div class="btn-readmore">
            <?php
                if(mysqli_num_rows($run3)>0){
            ?>
                <a href="events.php" class="btn-com-read">Show more</a>
            <?php } ?>
       </div>
     </div>
             
    </div>

    
</section>    
<!--Start weekly event schedule area-->
<section class="planning-event-area" style="background-color: #fff">
    <div class="container">
    <div class="section-title text-center">
            <h1>Services</h1>
            <div class="icon-holder">
                <img src="img/resources/section-title-icon.png" alt="Awesome Image">
            </div>
        </div>
        <div class="row">
         <div class="col-md-12">
                <div class="planning-event-tab">
                    <div class="tab-content clearfix">
                        <!--Start single tab pane-->
                        <div class="tab-pane fade in active" id="1a">
                            <div class="img-holder">
                                <img src="img/resources/planning-event/7.jpg" alt="Awesome Image">
                            </div>
                            <div class="content">
                                <h1>We are planning events</h1>
                                <ul>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">sports</a></li>
                                    <li><a href="#">outdoor</a></li>
                                    <li><a href="#">musicals</a></li>
                                    <li><a href="#">indoor</a></li>
                                    <li><a href="#">parties</a></li>
                                </ul>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="button">
                                    <a href="services.php">CHECK OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane fade" id="2a">
                            <div class="img-holder">
                                <img src="img/resources/planning-event/8.jpg" alt="Awesome Image">
                            </div>
                            <div class="content">
                                <h1>We are planning Management</h1>
                                <ul>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">sports</a></li>
                                    <li><a href="#">outdoor</a></li>
                                    <li><a href="#">musicals</a></li>
                                    <li><a href="#">indoor</a></li>
                                    <li><a href="#">parties</a></li>
                                </ul>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="button">
                                    <a href="services.php">CHECK OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane fade" id="3a">
                            <div class="img-holder">
                                <img src="img/resources/planning-event/9.jpg" alt="Awesome Image">
                            </div>
                            <div class="content">
                                <h1>We are planning Management</h1>
                                <ul>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">sports</a></li>
                                    <li><a href="#">outdoor</a></li>
                                    <li><a href="#">musicals</a></li>
                                    <li><a href="#">indoor</a></li>
                                    <li><a href="#">parties</a></li>
                                </ul>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="button">
                                    <a href="services.php">CHECK OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                       <div class="tab-pane fade" id="4a">
                            <div class="img-holder">
                                <img src="img/resources/planning-event/10.jpg" alt="Awesome Image">
                            </div>
                            <div class="content">
                                <h1>We are planning Management</h1>
                                <ul>
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">sports</a></li>
                                    <li><a href="#">outdoor</a></li>
                                    <li><a href="#">musicals</a></li>
                                    <li><a href="#">indoor</a></li>
                                    <li><a href="#">parties</a></li>
                                </ul>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <div class="button">
                                    <a href="services.php">CHECK OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab pane-->
                    </div>
                    <ul class="planning-event-tab-menu">
                        <li class="active"><a  href="#1a" data-toggle="tab">Event Planning</a></li>  
                        <li><a href="#2a" data-toggle="tab">Event Management</a></li>
                        <li><a href="#3a" data-toggle="tab">Scheduling Manager</a></li>
                        <li><a href="#4a" data-toggle="tab">Organisation Talents</a></li>
                    </ul> 
                </div>
            </div>
          
        </div>
    </div>
</section>
<!--End weekly event schedule area-->
 
<!--Start our speaker area-->
<section class="our-speaker-area" style="background-color: #f5f4f4">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h1>Our Gallery</h1>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
            <div class="icon-holder">
                <img src="img/resources/section-title-icon.png" alt="Awesome Image">
            </div>
        </div>
        <div class="speaker-carousel owl-carousel owl-theme">
            <?php
               
                $sql4 = "SELECT * from imagegallery where adkey = 1 order by 1 DESC limit 15 ";
                $run4 = mysqli_query($conn, $sql4);
                while($row4= mysqli_fetch_array($run4)){
             ?>  
          <div class="item">
            <div class="single-speaker-carousel">
                <img style="height: 300px" src="admin/img/gallery/<?php echo $row4['img1']; ?>" alt="Awesome Image" />
                    <!--div class="overlay">
                        <div class="box">
                            <div class="content">
                                <div class="speaker-infos clearfix">
                                    <div class="left-info pull-left">
                                        <span>Head Speaker</span>
                                        <h4>Patrick Clark</h4>
                                    </div>
                                    <div class="right-button pull-right">
                                        <a href="#">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
            <?php } ?>
        </div>       
    </div>
</section>
<!--End our speaker area-->
    

    
<!--Start footer area-->  
<?php include('footer.php'); ?>