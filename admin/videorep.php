<?php 
include('header.php');
include('function/db.php');
if (!isset($_GET['rep'])) {
  header('location:video.php');
}
$rep = $_GET['rep'];
$sql = "SELECT * from video where id = '$rep' ";
$run = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($run))
  {
    

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
                      Events Details Insert
                        
                      <span class="pull-right">
                          
                          <a href=""><button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button></a>
                          
                        <a href="eventsadd.php" class=" btn btn-success btn-xs"> Back</a>
                      </span>
                  </header>
                    <div class="panel-body">
                       <span class="pull-right">
                        <form method="post" action="#" enctype="multipart/form-data">
                         <input type="number" name="number" min="1" max="10" value="1" style="border-radius: 3px; width: 50px;">

                          <input type="Submit" name="multi" value="Multiple Insert" style="background-color: #f1c500; border-color: #f1c500; border-radius: 3px; color: #fff" >
                          </form>
                      </span>
                      </div>
                      
                       <div class="panel-body">


                      <form method="post" enctype="multipart/form-data">       
                     

                     
                     
                       <div class="row" style="margin:10px 0px 0px 0px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;">Category</div>
                        <div class="col-md-8"><input id="editor1" placeholder="Tag Line" name="cat" value="<?php echo $row['cat']; ?>" class="form-control ckeditor" type="text" style="padding:0px 10px;">
                          
                        </div>
                        <div class="col-md-1"></div>
                       </div>

                     
                     <div class="row" style="margin:10px 0px 0px 0px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;">url</div>
                        <div class="col-md-8"><input placeholder="Url" name="url" value="<?php echo $row['url']; ?>" class="form-control ckeditor" type="text" style="padding:0px 10px;">
                          
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/plugins/imageuploader"></script>
 
<?php include('footer.php'); 

 if(isset($_POST['submit']))
{

videorep($_POST['cat'], $_POST['url'], $rep);
}


?>

