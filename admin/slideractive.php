<?php 
include('function/db.php');
if(isset($_GET['rid'])){
$rid = $_GET['rid'];
$sql = "SELECT * from slider where id = '$rid'";
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
$sql1 = "UPDATE slider SET adkey = '$status_state' where id = '$rid'";
if(mysqli_query($conn, $sql1)){
echo "<script>parent.location.href='slider.php'</script>";
}


}
}

?>