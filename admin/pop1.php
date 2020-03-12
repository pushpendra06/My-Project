<?php 

if (!isset($_SESSION['admin_id'])) {
    
    header('location:../index.php');
}
$userid = $_SESSION['admin_id'];
$sql = "SELECT * from admin where id = $userid";
$run= mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($run)) {
$name = $row['name'];  
}


?>
  <div id="popup1" class="overlay">
   <form action="#" method="post">
    <div class="popup">
        <h2>Compose</h2>
        <a class="close" href="#">×</a>
        <div class="row">
            <div class="col-md-2">
                 <div class="to">Name</div>
            </div>
            <div class="col-md-9">
          
                 <input type="text" class="form-control in" value="<?php echo $row['name'];?>" name="name" placeholder="Enter your name">
                 
            
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                 <div class="to">Subject</div>
            </div>
            <div class="col-md-9">
           <select id="test" name="subject" onchange="showDiv(this)">
            <option value="General Problem" >General Problem</option>
            <option value="Booking Problem"  > Booking Problem</option>
        
              </select>
            </div>
        </div> 
        
          <div class="row" id="hidden_div" style="display: none;">
            <div class="col-md-2">
                 <div class="to">Booking Id</div>
            </div>
            <div class="col-md-9">
            
                 <input type="text" name="bookingid" class="form-control in" placeholder="Enter your Booking Id">
                 
            
            </div>
        </div>
        
          
        
          <div class="row">
            <div class="col-md-2">
                 <div class="to">Message</div>
            </div>
            <div class="col-md-9">
            
            <textarea name="msg" class="form-control in" rows="4"></textarea>
                 
           
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">                 
   
     <button type="submit" name="submit" class="btn btn-shadow btn-primary" style="margin: 21px; width: 100px; height: 40px;">SEND</button>
  </div>
        </div>
       
    </div>
    </form>
</div>
 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>                     
 <script type="text/javascript">

function showDiv(select){
   if(select.value== "Booking Problem"){
    document.getElementById('hidden_div').style.display = "block";
   } else{
    document.getElementById('hidden_div').style.display = "none";
   }
} 
</script>


<?php 
 $uid = $row2['user_id'];
 $u_name = $row2['u_name'];
if (isset($_POST['submit'])) {
  
   $name = $_POST['name'];
   $subject = $_POST['subject'];
    
  $msg = $_POST['msg'];
    if ($_POST['bookingid'] == "") {
      $bookingid = "not boking";
    }else{
     
    $bookingid = $_POST['bookingid'];
      
    }
     date_default_timezone_set("asia/kolkata");
               $date = date("d/m/Y H:i:s",time());
    
  $qr = "INSERT INTO chat Values('', '$userid', '$userid', '', '$bookingid', '$uid', '$name', '$u_name', '', '$subject', '$msg', '$date')";
    $qr1 = "INSERT INTO chat_admin2 Values('', '$userid', '$userid', '', '$bookingid', '$uid', '$name', '$subject', '$msg', '$date')";
    if(mysqli_query($conn, $qr)){

      header("location:dashboard.php"); 

    }
    if(mysqli_query($conn, $qr1)){
        header("location:dashboard.php");
        

    }


}


?>