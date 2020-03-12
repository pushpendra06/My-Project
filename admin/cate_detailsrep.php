<?php 
include('header.php');
include('function/db.php');
if (!isset($_GET['rep'])) {
  header('location:cate_details.php');
}
$rep = $_GET['rep'];
$sql = "SELECT * from eventscat where id = '$rep' ";
$run = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($run))
  {
    
   // $file1 = $row['img1'];
  }
?>
  
<br><br>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row" style="margin-right: 0px; margin-left: 0px;">

                    <aside class="profile-nav col-lg-12">   
                        <section class="panel" style="margin:0px auto; overflow:auto;">
                  <header class="panel-heading">
                      Category Details Insert
                        
                      <span class="pull-right">
                          
                          <!-- <a href=""><button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button></a> -->
                          
                        <a href="cate_details.php" class=" btn btn-success btn-xs"> Back</a>
                      </span>
                  </header>
                   <!--  <div class="panel-body">
                       <span class="pull-right">
                        <form method="post" action="#" enctype="multipart/form-data">
                         <input type="number" name="number" min="1" max="10" value="1" style="border-radius: 3px; width: 50px;">

                          <input type="Submit" name="multi" value="Multiple Insert" style="background-color: #f1c500; border-color: #f1c500; border-radius: 3px; color: #fff" >
                          </form>
                      </span>
                      </div> -->
                      
                       <div class="panel-body">


                    <form method="post" enctype="multipart/form-data">       
                      
                      <div class="row" style="margin:10px 0px 0px 0px; text-align: center;">
                     
                      </div>

                      <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-2" style="padding:10px 0px;">Category Name</div>
                      <div class="col-md-8">
                      <input placeholder="Enter events Category" name="events_cat" value="<?php echo $row['cat']; ?>" class="form-control" type="text" style="padding:0px 10px;">
                      </div>

                      

                    <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="text-align:center; margin:20px 0px;" >
                      <input type="submit" id="loading-btn" name="submit" value="Submit" class="btn btn-warning"/>

                      </div>
                      </div>
               </form>
              </div>

       </section>

               
              </aside>
                  
                </div>
                  
                  
                  
</section> 

<style type="text/css">

.inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.inputfile + label {
  cursor: pointer; /* "hand" cursor */
}


</style>
             
      <!-- Right Slidebar end -->
      <!--footer start-->

                    
<link rel="stylesheet" type="text/css" href="css/uplode/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/uplode/css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/uplode/css/component.css" />

<script src="js/uplode/js/custom-file-input.js"></script>
<script src="js/uplode/js/jquery-v1.min.js"></script>
<script src="js/uplode/js/jquery.custom-file-input.js"></script>
       

 
<?php include('footer.php'); 

 if(isset($_POST['submit']))
{

$events_cat = $_POST['events_cat'];
$updateQry = "UPDATE eventscat SET cat = '$events_cat' where id = '$rep' ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Update Successfully..!!');window.location='cate_details.php';</script>";

}else{
echo "<script>alert('Data Update failled..!!');window.location='cate_details.php';</script>";
}


//eventsrep("events", $_POST['events_cat'], $_POST['events_name'], $_POST['events_place'], $_POST['events_date'], $_POST['msg'], $_FILES['file_img'], $rep, $file1);
}


?>

