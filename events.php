<?php include('header.php'); 
$date2 = date('Y-m-d');
$t = "SELECT * from events where adkey = 1 and date1 <='$date2' order by 1 ASC ";
$sql = mysqli_query($conn, $t);
$coun = mysqli_num_rows($sql);
$start =0;
$limit=3;
if(isset($_GET['id'])){
$id = $_GET['id'];
$start = ($id-1)*$limit;
}
else{

  $id = 1;
}
$page=ceil($coun/$limit);
$sql1 = "SELECT * from events where adkey = 1 and date1 <='$date2' order by 1 ASC LIMIT $start, $limit";
$run = mysqli_query($conn, $sql1);
?>
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Events</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
<!--Start event list area-->
<section class="event-list-area">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-10">
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mix comedy entertainment festival outdoor" style="border: 1px solid rgb(210, 210, 210); margin-bottom: 20px;">
                <div class="single-event-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="img-holder">
                                <img src="admin/img/events/<?php echo $row['img1']; ?>" >
                            </div>    
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 event-list-content" style="border: none !important;">
                            <div class="text">
                                <h1><?php echo $row['name']; ?></h1><br>
                                <!--span>starring Jonathan Doe and friends</span-->
                                <?php echo $row['msg']; ?>
                            </div>
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['date1']; ?></li>
                                <li><i class="fa fa-bookmark-o" aria-hidden="true"></i><?php echo $row['cat']; ?></li>
                                <!--li><i aria-hidden="true" class="fa fa-user"></i>guests <span>Jessica Biehl</span></li-->
                            </ul>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="read-more-button">
                               
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php } ?>
            <!--End single upcoming event item-->
            <!--Start single upcoming event item-->

            <!--End single upcoming event item-->
            <!--Start single upcoming event item-->
           
<div class="row">
<div class="col-md-12" style="text-align:center;">
<div class="pagination">
<?php if($id>1) { ?>
<a href="events.php?id=<?php echo ($id-1) ; ?>" class="btn btn-sm btn-success" >Privious</a>
<?php }

for ($i=1; $i<=$page; $i++)
{ ?>
<a href="events.php?id=<?php echo $i; ?>" class="btn btn-sm btn-success" ><?php echo $i; ?></a>

<?php } ?>
<?php if($id!=$page) { ?>
<a href="events.php?id=<?php echo ($id+1); ?>" class="btn btn-sm btn-success" >Next</a>
<?php } ?>
</div>
</div>
        </div>
    </div>
</section>       
<!--End event list area-->   
    
<!--Start footer area-->  
 
<!--End footer bottom area-->
    <script src="js/jquery-1.12.4.min.js"></script>
 
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- fancy box -->
    <script src="js/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
   
    <script src="js/custom.js"></script>    
<!--Start footer area-->  
<?php include('footer.php'); ?>