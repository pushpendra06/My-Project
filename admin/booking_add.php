<?php 
error_reporting(-1);
include('header.php');
include('function/db.php');

//include('function/function.php');
?>
  
<br><br>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row" style="margin-right: 0px; margin-left: 0px;">

                    <aside class="profile-nav col-lg-12">   
                        <section class="panel" style="margin:0px auto; overflow:auto;">
                  <header class="panel-heading">
                      Booking Details Insert
                        
                      <span class="pull-right">
                          
                         <!--  <a href=""><button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button></a> -->
                          
                        <a href="booking.php" class=" btn btn-success btn-xs"> Back</a>
                      </span>
                  </header>
                    <!-- <div class="panel-body">
                       <span class="pull-right">
                        <form method="post" action="#" enctype="multipart/form-data">
                         <input type="number" name="number" min="1" max="10" value="1" style="border-radius: 3px; width: 50px;">

                          <input type="Submit" name="multi" value="Multiple Insert" style="background-color: #f1c500; border-color: #f1c500; border-radius: 3px; color: #fff" >
                          </form>
                      </span>
                      </div> -->
                      
                       <div class="panel-body">
                      
               

                    <form method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                      </div>
                   
                </div><!--col-md-6-->
                
                    <div class="col-md-6">
                       <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter your Email">
                         </div>
                    </div><!--col-md-6-->
              
                  <div class="col-md-6">
                      <div class="form-group">
                            <label for="exampleTextarea">Mobile No.</label>
                              <input type="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mob" placeholder="Enter your Mobile">
                        </div>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleTextarea">Address</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" placeholder="Enter your Address">
                        </div>
                    </div><!--col-md-6-->
                     
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleTextarea">City</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" placeholder="Enter your City">
                        </div>
                    </div><!--col-md-6-->
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleTextarea">Time</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="btime" placeholder="Enter Booking time">
                        </div>
                    </div><!--col-md-6-->


                    <div class="col-md-12">
                      <div class="form-group">
                            <label for="exampleTextarea">Message</label>
                            <textarea class="form-control" id="exampleTextarea" rows="2" name="msg" placeholder="Enter your message"></textarea>
                        </div>
                    </div><!--col-md-6-->
                
            
                      <div class="col-md-4">    
                        <label for="exampleDate">From Date Select</label>
                        <div class="clearfix"></div>             
                            <input id="datepicker" class="form-control" name="date1" placeholder="Enter your Date" />  
                        </div><!--col-md-4-->
                        
                        <div class="col-md-4">
                        <label for="exampleDate">To Date Select</label>
                        <div class="clearfix"></div>             
                          <input id="datepickerr" class="form-control" name="date2" placeholder="Enter your Date" />
                        </div><!--col-md-4-->
                        
                        <div class="col-md-4">
                        <label for="exampleSelect1">Catagouries</label>
                        <div class="clearfix"></div>  
                            <div class="form-group">
                                <select class="form-control" name="cat" id="exampleSelect1">
                                  <?php 

                                   $t = "SELECT * from eventscat WHERE adkey=1";
                                   $sql = mysqli_query($conn, $t);
                                   while($row=mysqli_fetch_array($sql))
                              {
                              $cat = $row['cat'];
                              $id = $row['id'];
                                  ?>
                                  <option value="<?php echo  $id;?>"><?php echo  $cat;?></option>
                                 <?php } ?>                
                                </select>
                            </div>
                        </div><!--col-md-4-->
                    <div class="col-md-12 text-center">
                        <div class="clearfix"></div>             
                            <input type="submit" class="form-control" name="submit" value="Submit" style="background-color: #f8b64b; width: 15%;" />
                        </div><!--col-md-4-->
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
 
// echo "<pre>";
// print_r($_POST);

// die;
/*Array
(
    $_POST[name] => aka
    $_POST[email] => aa@dfdf.com
    $_POST[mob] => 213342131231
    $_POST[address] => mata chowck
    $_POST[city] => Khandwa
    $_POST[btime] => 02:20 PM
    $_POST[msg] => test test content
    $_POST[date1] => 12/12/2019
    $_POST[date2] => 15/12/2019
    $_POST[cat] => 1
    [submit] => Submit
)*/
$name    =  $_POST[name]; 
$email   =  $_POST[email];
$mob     =  $_POST[mob];
$address =  $_POST[address];
$city    =  $_POST[city] ;
$btime   =  $_POST[btime]; 
$msg     =  $_POST[msg] ;
$date1   =  $_POST[date1]; 
$date2   =  $_POST[date2] ;
$cat     =  $_POST[cat]; 


$updateQry = "INSERT INTO booking VALUES ('', '$name', '$email', '$mob', '$address', '$city',   '$btime', $msg', '$date1', '$date2', '$cat',   '') ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Insert Successfully..!!');window.location='booking.php';</script>";

}else{
echo "<script>alert('Data Insert failled..!!');window.location='booking.php';</script>";
}


}


?>
                                                
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: Name cannot be blank!");
      form.name.focus();
      return false;
    }

     if(form.email.value == "") {
      alert("Error: email cannot be blank!");
      form.email.focus();
      return false;
    
    }
     if(form.mob.value == "") {
      alert("Error: Mobile cannot be blank!");
      form.mob.focus();
      return false;
    
    }

    if(form.address.value == "") {
      alert("Error: address cannot be blank!");
      form.address.focus();
      return false;
    }

     if(form.city.value == "") {
      alert("Error: city cannot be blank!");
      form.city.focus();
      return false;
    
    }
     if(form.btime.value == "") {
      alert("Error: Booking Time cannot be blank!");
      form.btime.focus();
      return false;
    
    }




     if(form.date1.value == "") {
      alert("Error: date cannot be blank!");
      form.date1.focus();
      return false;
    
    } 
      if(form.date2.value == "") {
      alert("Error: date cannot be blank!");
      form.date12.focus();
      return false;
    
    } 

  }
   


</script>
