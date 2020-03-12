<?php 
include('function/db.php');
if(isset($_GET['rid'])){
$rid = $_GET['rid'];
$sql = "SELECT * from imagegallery where id = '$rid'";
$run = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($run)){
$status = $row['adkey'];
if($status=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$sql1 = "UPDATE imagegallery SET adkey = '$status_state' where id = '$rid'";
if(mysqli_query($conn, $sql1)){
echo "<script>parent.location.href='imagegallery.php'</script>";
}


}
}

?>