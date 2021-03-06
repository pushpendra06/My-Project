
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="">
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
            <form role="form" method="post" class="form-inline" action="">
                <div class="form-group col-lg-12">
                 <input type="email" name="name" placeholder="Email" id="exampleInputPassword2" class="form-control lock-input" style="margin-bottom: 10px;"><br/>
                  <input type="password" name="pwd" placeholder="Password" id="exampleInputPassword2" class="form-control lock-input">
                    <button class="btn btn-lock" type="submit" name="loginsubmit">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                    		<div class="clearfix"></div>
                           
                            <div style="margin:10px 86px 0px 0px;"><a href="sendotp.php"> Forget your Password ?</a></div>

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
</body>
</html>
<?php
include('function/function.php');
if(isset($_POST['loginsubmit']))
{
login($_POST['name'], $_POST['pwd']);
}
?>

