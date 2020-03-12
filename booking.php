<?php include('header.php'); ?>
<!--End header area-->  

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Booking</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
    
<!--Start pricing area-->
<section class="pricing-area pricing-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="col-md-6">
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
            </div><!--col-md-12-->

        </div>    
    </div>
</section>

    
    
    
	<!-- thm custom script -->
	<script src="js/custom.js"></script>
    <script>
    $(document).ready(function () {
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap'
    });
    });
    </script>
    
    
    <script>
    	$(document).ready(function () {
    $('#datepickerr').datepicker({
      uiLibrary: 'bootstrap'
    });
});
    </script>

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
<?php include('footer.php'); ?>
<?php 
include('function/function.php');
if(isset($_POST['submit'])){
booking($_POST['name'], $_POST['email'], $_POST['mob'], $_POST['address'], $_POST['city'], $_POST['btime'],  $_POST['msg'], $_POST['date1'], $_POST['date2'], $_POST['cat']);

}
?>