<?php 
include('header.php');
include('function/db.php');
if (!isset($_GET['rep'])) {
  header('location:events.php');
}
$rep = $_GET['rep'];
$sql = "SELECT * from events where id = '$rep' ";
$run = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($run))
  {
    
    $file1 = $row['img1'];
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
                      
                      <div class="row" style="margin:10px 0px 0px 0px; text-align: center;">
                     
                      </div>

                      <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-2" style="padding:10px 0px;">Events Category</div>
                      <div class="col-md-8">
                      <input placeholder="Enter events Category" name="events_cat" value="<?php echo $row['cat']; ?>" class="form-control" type="text" style="padding:0px 10px;">
                      </div>
                      <div class="col-md-1"></div>
                      </div>

                      <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-2" style="padding:10px 0px;">Events Name</div>
                      <div class="col-md-8">
                      <input placeholder="Enter events Name" name="events_name" value="<?php echo $row['name']; ?>" class="form-control" type="text" style="padding:0px 10px;">
                      </div>
                      <div class="col-md-1"></div>
                      </div>

                      <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-2" style="padding:10px 0px;">Events Place</div>
                      <div class="col-md-8">
                      <input placeholder="Enter events Place" name="events_place" value="<?php echo $row['place']; ?>" class="form-control" type="text" style="padding:0px 10px;">
                      </div>
                      <div class="col-md-1"></div>
                      </div>

                      <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-2" style="padding:10px 0px;">Events Date</div>
                      <div class="col-md-8">
                      <input placeholder="Enter events date" name="events_date" value="<?php echo $row['date1']; ?>" class="form-control" type="date" style="padding:0px 10px;">
                      </div>
                      <div class="col-md-1"></div>
                      </div>

                       <div class="row" style="margin:10px 0px 0px 0px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;">Description</div>
                        <div class="col-md-8"><textarea id="editor1" placeholder="Tag Line" name="msg" class="form-control ckeditor" type="text" style="padding:0px 10px;">
                         <?php echo $row['msg']; ?> 
                        </textarea></div>
                        <div class="col-md-1"></div>
                       </div>

                     
                    <div class="row" style="margin:10px 0px 0px 0px;">
                    <div class="col-md-1"></div>
                    <div class="col-md-2" style="padding:10px 0px;">Image</div>
                    <div class="col-md-8"> <input name="file_img" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="" type="file">

                    <label for="file-1">
                    <i class="fa fa-upload"></i>
                    <span>Choose a file&hellip;</span></label>

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


<ckeditor:replace replace="editor1" basePath="/ckeditor/">
</ckeditor:replace>
<script>
CKEDITOR.replace( 'editor1', {
extraPlugins: 'imageuploader'
});
</script>
<script type="text/javascript">
CKEDITOR.replace('editor1', {
height:400,
filebrowserUploadUrl:"fileupload.php",
});
</script>                  

 
<?php include('footer.php'); 

 if(isset($_POST['submit']))
{

eventsrep("events", $_POST['events_cat'], $_POST['events_name'], $_POST['events_place'], $_POST['events_date'], $_POST['msg'], $_FILES['file_img'], $rep, $file1);
}


?>

