<?php
include 'function/db.php';
if (isset($_GET['del'])) 
{
$del = $_GET['del'];	
$qry = "DELETE from eventscat where id = '$del' ";
if(mysqli_query($conn, $qry)){
echo '<div class="alert alert-success">Success..!!</div>'. header("location:cate_details.php");
}else{
echo '<div class="alert alert-danger">Failed..!!</div>';
header("location:cate_details.php");
}
}
	
?>