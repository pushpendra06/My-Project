<?php include('function/db.php'); 
 if(isset($_POST['submit'])) 
 {
 $email = $conn->real_escape_string($_POST['email']);
 $run = "SELECT * from admin where email = '$email'";
 $data = mysqli_query($conn, $run);
 if($data->num_rows > 0)
 {
 $str = "0123456789QWERTYUIOPHGFDSAJKLBNMVCXZ";
 $str = str_shuffle($str);
 $str = substr($str, 0, 6);
 $str;
//mail($email,"Your OTP",$str);
 $sql1= "UPDATE admin SET otp = '$str' WHERE email = '$email' ";
 if(mysqli_query($conn, $sql1))
 { 
  echo "<script>alert('Send OTP your email Id..!!');window.location='changepass.php';</script>";
 }
 }
 else
 {
  echo"Please check your inputs!";
 }
 }
?>
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
        <div class="lock-box text-center" style="height: 170px">
            <img height="85px" src="img/admin.jpg" alt="lock avatar"/>
            <h1>admin login</h1>
            <form role="form" method="post" class="form-inline" action="" onsubmit="return checkForm1(this)">
                <div class="form-group col-lg-12">
                 <input type="email" name="email" placeholder="Email" id="exampleInputPassword2" class="form-control lock-input"><br/>
                  
                    <button class="btn btn-lock" type="submit" style="margin-top: -23px" name="submit">
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
    

    if(form.email.value == "") {
      alert("Error: email cannot be blank!");
      form.email.focus();
      return false;
    
    }


   }


</script>

</body>


</html>


