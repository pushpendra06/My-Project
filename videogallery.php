<?php include('header.php'); 
$date2 = date('Y-m-d');
$t = "SELECT * from video where adkey = 1  order by 1 ASC ";
$sql = mysqli_query($conn, $t);
$coun = mysqli_num_rows($sql);
$start =0;
$limit=10;
if(isset($_GET['id'])){
$id = $_GET['id'];
$start = ($id-1)*$limit;
}
else{

  $id = 1;
}
$page=ceil($coun/$limit);
$sql1 = "SELECT * from video where adkey = 1  order by 1 ASC LIMIT $start, $limit";
$run = mysqli_query($conn, $sql1);
?>
<!--End header area-->
    
<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Video Gallery</h1>
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
           <!-- <div class="col-lg-10">
                <ul class="event-gallery-filter">
                    <li data-filter="all" class="filter active">
                        <span>All</span>
                    </li>
                    <li data-filter=".comedy" class="filter">
                        <span>COMEDY</span>
                    </li>
                    <li data-filter=".entertainment" class="filter">
                        <span>ENTERTAINMENT</span>
                    </li>
                    <li data-filter=".sport" class="filter">
                        <span>sports</span>
                    </li>
                    <li data-filter=".outdoor" class="filter">
                        <span>OUTDOOR</span>
                    </li>
                    <li data-filter=".festival" class="filter">
                        <span>FESTIVAL</span>
                    </li> 
                </ul>
            </div>-->
            <!--<div class="col-lg-2">
                <div class="showing-page pull-right">
                    <p>showing page 2 of 14</p>
                </div>
            </div>-->
        </div>
        <div class="row event-gallery-content" data-filter-class="filter">
            <!--Start single upcoming event item-->
             <?php
              while($row=mysqli_fetch_array($run)){
            
              ?>
            <div class="col-md-4 col-sm-4 col-xs-12 mix comedy sport">
                <div class="single-upcoming-event-item">
                    <div class="img-holder">
                        <!--<img src="img/event/related-event/1.jpg" alt="Awesome Image">-->
                        <iframe width="100%" height="200px;" src="<?php echo $row['url']; ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!--<div class="content">
                        <h5>Suscipit lobortis nisl ut aliquip ex ea commodo era modno weta</h5>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>7th Jan, 2016</li>
                            <li><i class="fa fa-bookmark" aria-hidden="true"></i>business event</li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>   
                    </div>-->
                </div>
            </div>
            <?php } ?>
        </div>
<div class="row">
<div class="col-md-12" style="text-align:center;">
<div class="pagination">
<?php if($id>1) { ?>
<a href="upcomingevents.php?id=<?php echo ($id-1) ; ?>" class="btn btn-sm btn-success" >Privious</a>
<?php }

for ($i=1; $i<=$page; $i++)
{ ?>
<a href="upcomingevents.php?id=<?php echo $i; ?>" class="btn btn-sm btn-success" ><?php echo $i; ?></a>

<?php } ?>
<?php if($id!=$page) { ?>
<a href="upcomingevents.php?id=<?php echo ($id+1); ?>" class="btn btn-sm btn-success" >Next</a>
<?php } ?>
</div>
</div>
        </div>
    </div>
</section>       
<!--End upcoming event area-->   
    <script src="js/jquery-1.12.4.min.js"></script>
 
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- fancy box -->
    <script src="js/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
   
    <script src="js/custom.js"></script>    
<!--Start footer area-->  
<?php include('footer.php'); ?>       
<!--End footer bottom area-->

