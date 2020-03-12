<?php
session_start(); 
if (!isset($_SESSION['admin_id'])) {
echo "<script>alert('Login first..!!');window.location='../index.php';</script>";
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
            <div class="col-md-3">
                 <div class="to" style="font-size:13px;">Name Your</div>
            </div>
            <div class="col-md-8">
          
                 <input type="text" class="form-control in" value="<?php echo $row['name'];?>" name="name" placeholder="Enter your name">
                 
            
            </div>
<div class="col-md-1"></div>
</div>
  
          <div class="row" id="hidden_div">
            <div class="col-md-3">
                 <div class="to" style="font-size:13px;">Your Suject</div>
            </div>
            <div class="col-md-8">
            
                 <input type="text" name="subject" class="form-control in" placeholder="Enter your Subject">
                 
            
            </div>
<div class="col-md-1"></div>
        </div>
        
          
        
          <div class="row">
            <div class="col-md-3">
                 <div class="to" style="font-size:13px;">Message</div>
            </div>
            <div class="col-md-8">
            
            <textarea name="msg" class="form-control in" rows="4"></textarea>
                 
           
            </div>
<div class="col-md-1"></div>
        </div>
        
        <div class="row">
            <div class="col-md-6">                 
   
     <button type="submit" name="submit" class="btn btn-shadow btn-primary" style="margin: 21px; width: 100px; height: 40px;">SEND</button>
  </div>
        </div>
       
    </div>
    </form>
</div>
 
<?php 
if (isset($_POST['submit'])) {
        date_default_timezone_set("asia/kolkata");
        $date = date("d/m/Y H:i:s",time());
        $email = $row2['email'];
        $contid = $row2['cont_id'];
        $name = $row2['name'];
       $headers = "From: web@startupgenie.in";
       $to = $email;
       $subject = $_POST['subject'];
       $txt = "Hello sir \r\n contact received on our Website \r\n Name My:".$_POST["name"]."\r\n Admin Message \r\n".$_POST['msg'];      

       $mail = mail($to,$_POST['subject'],$txt,$headers);
      if($mail)
       { 
          $sql1 = "INSERT INTO sentcontact (cont_id, name, subject, msg, email, date) VALUES               
          ('$contid', '$name', '$_POST[subject]', '$_POST[msg]', '$email', '$date')";
     
 
           if(mysqli_query($conn, $sql1))
           { 
             echo "<script> alert('Reply successfully'); window.location='sentcontact.php';</script>";
            }else { echo mysqli_error($conn); }
       }
}
?>