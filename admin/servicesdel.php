<?php
include 'function/db.php';
if (isset($_GET['del'])) 
{
$del = $_GET['del'];	

$sql = "SELECT * from services_details where service_id = '$del' ";
$run = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($run))
  {
    
    $file1 = $row['service_img'];
    @unlink($file1);
  }


$qry = "DELETE from services_details where service_id = '$del' ";
if(mysqli_query($conn, $qry)){
echo '<div class="alert alert-success">Success..!!</div>'. header("location:services.php");
}else{
echo '<div class="alert alert-danger">Failed..!!</div>';
header("location:services.php");
}
}
	
?>