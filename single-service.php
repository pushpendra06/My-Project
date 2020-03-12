<?php include('header.php'); 

include('db.php'); 
?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Single Services</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
<!--Start services area-->
<section class="service-area">
    <div class="container">
        
       <?php
       $sid = $_GET['sid'];
       $sql = "SELECT * from services_details WHERE service_id= '$sid' ";
       $run = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_array($run))
     {
    
    $service_id     = $row['service_id']; 
    $service_name   = $row['service_name']; 
    $service_content= $row['service_content']; 
    $service_img    = $row['service_img'];
    $service_status = $row['service_status'];



        ?>

        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo 'admin/'.$service_img; ?>" alt="">
            </div><!-- col-md-6 -->

            <div class="col-md-6">
                <div class="section-title-2">
                        <h1><span><?php echo $service_name;?></span></h1>
                 </div>

                 <p style="text-align: justify;"><?php echo $service_content;?></p>
            </div><!-- col-md-6 -->
        </div>

<?php } ?>


    </div>
</section>

    <br><br>
<!--Start footer area--> 
<?php include('footer.php'); ?> 
