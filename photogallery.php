<?php include('header.php'); ?> 
<?php 
include('function/function.php');
include"admin/function/db.php";
 ?> 
<!--End header area-->
    
<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Gallery</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
<!--Start upcoming event area-->
<section class="event-grid-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="event-gallery-filter">
                    <li data-filter="all" class="filter active">
                        <span>All</span>
                    </li>
                    <?php 
                     $sql2 = "SELECT * from eventscat WHERE adkey=1";
                     $run2 = mysqli_query($conn, $sql2); 
                     while($row2 = mysqli_fetch_array($run2))
                        { ?>
                         
                        <li data-filter=".<?php echo trim($row2['id']);?>" class="filter active">
                        <span><?php echo $row2['cat'];?></span>
                    </li>
                     <?php } ?>
                    
                </ul>
            </div>
            
        </div>
        <div class="row event-gallery-content" data-filter-class="filter">
            <!--Start single upcoming event item-->
            <?php
            $sql1 = "SELECT * from imagegallery where adkey = 1 "; //order by 1 DESC ";
            $run = mysqli_query($conn, $sql1); 
            while($rows= mysqli_fetch_array($run)){
            ?>
            <div class="col-md-4 col-sm-4 col-xs-12 mix <?php echo $rows['cat']; ?>">
                <div class="single-upcoming-event-item">
                    <div class="img-holder">
                        <img style="height: 300px" src="admin/img/gallery/<?php echo $rows['img1']; ?>"  alt="Awesome Image">
                    </div> 
                    <div class="content">
                       <!--  <h5>Suscipit lobortis nisl ut aliquip ex ea commodo era modno weta</h5>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>7th Jan, 2016</li>
                            <li><i class="fa fa-bookmark" aria-hidden="true"></i>business event</li>
                        </ul> -->
                    </div>
                    <!-- <div class="readmore">
                        <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>   
                    </div> -->
                </div>
            </div>
            <?php } ?>
            <!--End single upcoming event item-->
            <!--Start single upcoming event item-->
           
            <!--End single upcoming event item-->
        </div>
       
    </div>
</section>       
<!--End upcoming event area-->   
    
<!--Start footer area--> 
    <script src="js/jquery-1.12.4.min.js"></script>
 
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- fancy box -->
    <script src="js/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
   
    <script src="js/custom.js"></script>

<?php include('footer.php'); ?> 



