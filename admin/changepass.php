<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Calmifi, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Lock Screen</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    
</head>

<body class="lock-screen" onload="startTime()">

    <div class="lock-wrapper">

        <div id="time"></div>


        <div class="lock-box text-center" style="height: 250px">
            <img height="85px" src="img/admin.jpg" alt="lock avatar"/>
            <h1>admin login</h1>
            <form role="form" method="post" class="form-inline" action="" onsubmit="return checkForm1(this)">
                <div class="form-group col-lg-12">
                 <input type="test" name="otp" placeholder="Enter OTP" id="exampleInputPassword2" class="form-control lock-input" style="margin-bottom: 10px;"><br/>
                 <input type="password" name="pwd" placeholder="Enter New Password" id="exampleInputPassword2" class="form-control lock-input" style="margin-bottom: 10px;"><br/>
                  <input type="password" name="pwd2" placeholder="Enter Confirm Password" id="exampleInputPassword2" class="form-control lock-input">
                    <button class="btn btn-lock" type="submit" style="margin-top: 11px;" name="submit">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                    		<div class="clearfix"></div>
                            

                </div>
            </form>
        </div>
    </div>
    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
   <script type="text/javascript">

  function checkForm1(form)
  {
    

    if(form.otp.value == "") {
      alert("Error: otp cannot be blank!");
      form.otp.focus();
      return false;
    
    }

     if(form.pwd.value != "" && form.pwd.value == form.pwd2.value) {
      if(form.pwd.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd.focus();
        return false;
      }
      if(form.pwd.value == form.otp.value) {
        alert("Error: Password must be different from Username!");
        form.pwd.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd.focus();
        return false;
      }
      /*re = /[a-z]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd.focus();
        return false;
      }*/
      re = /[A-Z]/;
      if(!re.test(form.pwd.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd.focus();
      return false;
    }

    
   

   }


</script>
</body>


</html>
<?php
include('function/db.php');

 if(isset($_POST['submit']))
{
     $pass1 = $_POST['pwd'];
    $otp = $_POST['otp'];
   

  $updateQry = "SELECT * From  admin ";
   $run = mysqli_query($conn, $updateQry);
   if($row = mysqli_fetch_array($run))
    {
        $otpdb = $row['otp'];
   
           if ($otpdb == $otp) 
            {
                 $sql2 = "UPDATE admin SET pwd = '$pass1'";

                    if(mysqli_query($conn, $sql2))
                      {
                       echo "<script>alert('Successfully Set Password..!!'); window.location='index.php';</script>";
                      }
                      else
                      {
                   echo "<script>alert('Failed to Set Password..!!'); window.location='changepass.php';</script>";
                      }
           }
          else
           {
          echo "<script>alert('OTP is not match..!!'); window.location='changepass.php';</script>";
           
           } 
          
     }
else
{
          
 echo "<script>alert('Email id incorect..!!'); window.location='forgotpass.php';</script>";
 }


}

?>
