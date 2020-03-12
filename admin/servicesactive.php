<?php 
include('function/db.php');
if(isset($_GET['rid'])){
$rid = $_GET['rid'];
$sql = "SELECT * from services_details where service_id = '$rid'";
$run = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($run)){
$status = $row['service_status'];

if($status=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}

$sql1 = "UPDATE services_details SET service_status = '$status_state' where service_id = '$rid'";
if(mysqli_query($conn, $sql1)){
echo "<script>parent.location.href='services.php'</script>";
}


}
}

?>