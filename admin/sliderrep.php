<?php 
include('header.php');
include('function/db.php');
if (!isset($_GET['rep'])) {
  header('location:slider.php');
}
$rep = $_GET['rep'];
$sql = "SELECT * from slider where id = '$rep' ";
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
                      Replace Detail
                          
                      <span class="pull-right">
                          <a href="sliderrep.php?rep=<?php echo $_GET['rep']; ?>"><button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button></a>
                          
                        <a href="slider.php" class=" btn btn-success btn-xs"> Back</a>
                      </span>
                  </header>
                  <div class="panel-body">

                      <form method="post" action="" enctype="multipart/form-data">       
                       <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;">Image</div>
                         <div class="col-md-8"><input type="file" id="file-1" class="inputfile inputfile-1" value="Blog Image"  name="img1"/>
                       
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
                     
                   </section></aside>
                      
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

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/plugins/imageuploader"></script>

<script src="js/uplode/js/custom-file-input.js"></script>
                  
                  

<?php include('footer.php'); ?>
 <?php


  if(isset($_POST['submit'])){

     if ($_FILES["img1"]["name"] == "") {
      $img1 = $file1;
    }else{
      @unlink($file1);
      $img1 = $_FILES["img1"]["name"];
      move_uploaded_file($_FILES["img1"]["tmp_name"], "./img/slider/".$_FILES["img1"]["name"]);
    }
    
  

   echo $updateQry = "UPDATE slider SET img1 = '$img1' where id = '$rep' ";
    if(mysqli_query($conn, $updateQry)){
 

 

 echo "<script>alert('Data Update Successfully..!!');window.location='slider.php';</script>";

}else{
 echo "<script>alert('Data Update failled..!!');window.location='slider.php';</script>";
}
}
?>
