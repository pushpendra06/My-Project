<?php include('header.php'); 

 include('db.php');  
?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
<!--Start services area-->
<section class="service-area">
    <div class="container">
        <div class="row">
       
        <?php
       
       $sql = "SELECT * from services_details  ";
       $run = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($run))
     {
    
    $service_id     = $row['service_id']; 
    $service_name   = $row['service_name']; 
    $service_content= $row['service_content']; 
    $service_img    = $row['service_img'];
    $service_status = $row['service_status'];



        ?>
        <div class="col-md-4 col-sm-6  wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            
            <div class="box1">
                <img src="<?php echo 'admin/'.$service_img; ?>" alt="">
                
                <div class="box-content">
                    <h3 class="title"><?php echo $service_name;?></h3>
                    <p class="description">
                       <?php echo substr($service_content,0,50);?>
                    </p>
                    <a href="single-service.php?sid=<?php echo $service_id; ?>" class="read-more">Read More</a>
                </div>
            </div>
        </div>
 <?php } ?>
        <!-- <div class="col-md-4 col-sm-6  wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="box1">
                <img src="img/resources/e5.jpg" alt="">
                <div class="box-content">
                    <h3 class="title">Wedding Events</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.
                    </p>
            <a href="single-service.php" class="read-more">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6  wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="box1">
                <img src="img/resources/ser3.jpg" alt="">
                <div class="box-content">
                    <h3 class="title">Live Consert</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.
                    </p>
                   <a href="single-service.php" class="read-more">Read More</a>
                </div>
            </div>
        </div> -->
 
      
            <!--Start single service item-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/7.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Audition Events</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
            <!--Start single service item-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/8.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Start A Business Events</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
            <!--Start single service item-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/9.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Social Events</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
            <!--Start single service item-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/10.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Wedding Events</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
            <!--Start single service item-->
           <!--  <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/11.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Festivals Events</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
            <!--Start single service item-->
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="icon-holder">
                        <img src="img/resources/icon/12.png" alt="">
                    </div>
                    <div class="content">
                        <h4>live Concert</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                </div>
            </div> -->
            <!--End single service item-->
        <!-- </div> -->

        <!-- <br>
        <div class="row">
        <div class="col-md-4 col-sm-6  wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="box1">
                <img src="img/resources/ser6.jpg" alt="">
                <div class="box-content">
                    <h3 class="title">Social Events</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.
                    </p>
                    <a href="single-service.php" class="read-more">Read More</a>
                </div>
            </div>
        </div>
 
        <div class="col-md-4 col-sm-6  wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="box1">
                <img src="img/resources/ser7.jpg" alt="">
                <div class="box-content">
                    <h3 class="title">Festivals Events</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.
                    </p>
                     <a href="single-service.php" class="read-more">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6  wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <div class="box1">
                <img src="img/resources/ser8.jpg" alt="">
                <div class="box-content">
                    <h3 class="title">Business Events</h3>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet, libero a venenatis dignissim, enim arcu elementum metus, eget luctus.
                    </p>
                   <a href="single-service.php" class="read-more">Read More</a>
                </div>
            </div>
        </div> -->






        </div>
    </div>
</section>

    <br><br>
<!--Start footer area--> 
<?php include('footer.php'); ?> 
