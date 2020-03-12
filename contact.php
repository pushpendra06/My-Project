<?php include('header.php');


if(isset($_POST['contactsubmit']))
{

// echo "<pre>";
// print_r($_POST);


//     [name] => aka
//     [email] => aa@sdsd.com
//     [phone] => 43543545
//     [subject] => want to meet
//     [message] => ffgf gdfg fgfdgfdgd
//     [contactsubmit] => SEND MESSAGE


// die;


    
$to = 'abc@gmail.com';
$subject = "Message sent through website";
$message_content = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Appointment Request</title>
</head>

<body>
<table width="300" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <td width="129">Dear Admin,</td>
    <td width="145">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Some want to meet with you, details given below</td>
  </tr>
  <tr>
    <td>Name</td>
    <td>"'.$_POST['name'].'"</td>
  </tr>
  <tr>
    <td>Email-id</td>
    <td>"'.$_POST['email'].'"</td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td>"'.$_POST['phone'].'"</td>
  </tr>
  <tr>
    <td>Subject</td>
    <td>"'.$_POST['subject'].'"</td>
  </tr>
   <tr>
    <td>Message </td>
    <td>"'.$_POST['message'].'"</td>
  </tr>
  
  
</table>
</body>
</html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: Event Managment' . "\r\n";
 
       $mail = mail($to, $subject, $message_content, $headers);
       if($mail)
            {
      
            echo "<script> alert('Thanks for Request'); window.location='contact.php';</script>";
            
            }
      else
      {
       echo "<script> alert('Please Try Again!'); window.location='contact.php';</script>";  
      }

}





 ?>
<!--End header area-->  
    
<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <h4>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h4>
            </div>
        </div>
    </div>
</section> 
<!--End breadcrumb area-->
    
<!--Start contact info area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-info">
                    <ul>
                        <li class="clearfix">
                            <div class="icon-holder">
                                <img src="img/contact/icon-1.png" alt="">
                            </div>
                            <div class="text">
                                <h6>20/1, Loknayak Nagar, Airport Road, Indore (M.P) </h6>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="icon-holder">
                                <img src="img/contact/icon-2.png" alt="">
                            </div>
                            <div class="text">
                                <h6>+91 99627595251, +91 9039859251</h6>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="icon-holder">
                                <img src="img/contact/icon-3.png" alt="">
                            </div>
                            <div class="text">
                                <h6>E-Mail: Dreammakers16@gmail.com</h6>
                            </div>
                        </li>
                    </ul>    
                </div>        
            </div>    
        </div>    
    </div>
</section>
<!--End contact info area-->
    
<!--Start google map area-->
<section class="google-map-area">
    <div class="container">
        <div class="row">
           
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1811110414756!2d75.82980941550949!3d22.72150878510636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd9513e69be7%3A0xb3e59e6b77d3fd91!2s20%2C+Airport+Rd%2C+Bijasan+colony%2C+Mohta+Bagh%2C+Mahavir+Bag+Colony%2C+Indore%2C+Madhya+Pradesh+452006!5e0!3m2!1sen!2sin!4v1520071959152" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
        </div>
    </div>
</section>   
<!--End google map area-->
    
<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <form class="contact-form" method="post" >
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="field-label">Name<span class="req">*</span></div>
                    <input type="text" name="name" placeholder="enter your name" required>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="field-label">EMAIL ADDRESS<span class="req">*</span></div>
                    <input type="text" name="email" placeholder="enter your email" required >
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="field-label">PHONE NUMBER</div>
                    <input type="text" name="phone" placeholder="enter your phone number" required>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="field-label">SUBJECT<span class="req">*</span></div>
                    <input type="text" name="subject" placeholder="subject" required>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="field-label">MESSAGE<span class="req">*</span></div>
                    <textarea name="message" placeholder="write a message" required></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <input type="submit" name="contactsubmit" class="send-message" value="SEND MESSAGE"><!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

                </div>
                
            </div>
        </form>
    </div>
</section>
        

<?php include('footer.php'); ?>   >
