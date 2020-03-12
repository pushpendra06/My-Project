<?php 
include('function/db.php');
if(isset($_GET['thid'])){
$thid = $_GET['thid'];
$sql = "SELECT * from th_reg where id = '$thid'";
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
$sql1 = "UPDATE th_reg SET adkey = '$status_state' where id = '$thid'";
if(mysqli_query($conn, $sql1)){
echo "<script>parent.location.href='therapistdetail.php'</script>";
}


}
}

?>