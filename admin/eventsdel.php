<?php
include 'function/db.php';
if (isset($_GET['del'])) 
{
$del = $_GET['del'];	
$qry = "DELETE from events where id = '$del' ";
if(mysqli_query($conn, $qry)){
echo '<div class="alert alert-success">Success..!!</div>'. header("location:events.php");
}else{
echo '<div class="alert alert-danger">Failed..!!</div>';
header("location:events.php");
}
}
	
?>