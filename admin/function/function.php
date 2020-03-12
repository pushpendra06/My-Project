<?php
function login($email,$password)
{
session_start();
include"db.php";
$sql="SELECT * from admin where email = '$email' and pwd ='$password'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) { 
$row = mysqli_fetch_array($result);
$_SESSION['admin_name'] = $row['name'];
$_SESSION['admin_email'] = $row['email'];
$_SESSION['admin_pwd'] = $row['pwd'];
$_SESSION['admin_id'] = $row['id'];
echo "<script>parent.location.href='dashboard.php';</script>";
} 
else
{
echo "<script> alert('Username and password does not match'); parent.location.href='index.php';</script>";
}
}

//********************************************there





function uservalues(){
include ('db.php');
$sql = "SELECT count(id) AS total from user_reg";

$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$id = $row['total'];
echo $id;	
}

function thvalues(){
include ('db.php');
$sql = "SELECT count(id) AS total from th_reg";

$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$id = $row['total'];
echo $id;	
}
function convalues(){
include ('db.php');
$sql = "SELECT count(id) AS total from contact";

$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$id = $row['total'];
echo $id;	
}

function bvalues(){
include ('db.php');
$sql = "SELECT count(id) AS total from th_booking";

$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$id = $row['total'];
echo $id;	
}

function totalbooking($thid){
	include ('db.php');
	$sql5 = "SELECT count(id) As total from th_booking where th_id = '$thid'";
	  $run5 = mysqli_query($conn, $sql5);
	  $row5 = mysqli_fetch_assoc($run5);
	  $total =$row5['total'];
	  echo $total;

}
function totalincome($thid){
	include ('db.php');
	$sql5 = "SELECT sum(fees) As total from th_booking where th_id = '$thid'";
	  $run5 = mysqli_query($conn, $sql5);
	  $row5 = mysqli_fetch_assoc($run5);
	  $total =$row5['total'];
	  echo $total;

}

function allincome(){
	include ('db.php');
	$sql5 = "SELECT sum(fees) As total from th_booking";
	  $run5 = mysqli_query($conn, $sql5);
	  $row5 = mysqli_fetch_assoc($run5);
	  $total =$row5['total'];
	  echo $total;

}
function totalinbox(){
	include ('db.php');
	$sql5 = "SELECT count(chat_admin_id) As total from chat_admin";
	  $run5 = mysqli_query($conn, $sql5);
	  $row5 = mysqli_fetch_assoc($run5);
	  $total =$row5['total'];
	  echo $total;

}



function insertslider($table, $img)
{
	
include ('db.php');
for ($i=0; $i <count($_FILES["file_img"]["name"]); $i++) { 

$filetmp = $_FILES['file_img']["tmp_name"][$i];
$filename = $_FILES['file_img']["name"][$i];
$filetype = $_FILES['file_img']["type"][$i];
$dir = "img/slider/".$filename;
move_uploaded_file($filetmp,$dir);

$updateQry = "INSERT INTO $table VALUES ('', '$filename', '') ";
if(mysqli_query($conn, $updateQry))
{

 echo "<script>alert('Data Insert Successfully..!!');window.location='slider.php';</script>";

}else
{
 echo "<script>alert('Data Insert failled..!!');window.location='slider.php';</script>";
}
}
}

function sliderdel($table, $name){
include "db.php";
for ($i=0; $i <count($_POST['name']); $i++) {
$name1 = $_POST['name'][$i];

$updateQry = "DELETE from $table where id = '$name1'";
if(mysqli_query($conn, $updateQry)){
echo "<script>alert('Data Delete Successfully..!!');window.location='$table.php';</script>";
}else{
echo "<script>alert('Failed to Delete Data..!!'); window.location='$table.php'</script>";
} 
}
}

function slideractive($table, $name){
include "db.php";
for ($i=0; $i <count($_POST['name']); $i++) {
$name1 = $_POST['name'][$i];

$sql = "SELECT * from $table where id = '$name1'";
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
$sql1 = "UPDATE $table SET adkey = '$status_state' where id = '$name1'";
if(mysqli_query($conn, $sql1)){
echo "<script>parent.location.href='$table.php'</script>";
}

}
}
} 

function serviceadd($table,  $events_name,  $events_msg, $file_img){

include ('db.php');
$filetmp = $_FILES['file_img']["tmp_name"];
$filename = $_FILES['file_img']["name"];
$filetype = $_FILES['file_img']["type"];
$dir = "img/events/".'services'.time().'_'.$filename;
move_uploaded_file($filetmp,$dir);


$updateQry = "INSERT INTO $table VALUES ('', '$events_name',  '$events_msg', '$dir', '') ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Insert Successfully..!!');window.location='services.php';</script>";

}else{
echo "<script>alert('Data Insert failled..!!');window.location='services.php';</script>";
}

}

function servicerep($table, $events_name,  $events_msg, $file_img , $rep, $file1){
    
include ('db.php');

if ($_FILES["file_img"]["name"] == "") 
{
$img1 = $file1;
}else
{
@unlink($file1);

$img1 = "img/events/"."services".time().'_'.$_FILES["file_img"]["name"];
move_uploaded_file($_FILES["file_img"]["tmp_name"], "img/events/"."services".time().'_'.$_FILES["file_img"]["name"]);
} 
 $updateQry = "UPDATE $table SET  service_name = '$events_name',  service_content = '$events_msg', service_img  = '$img1' where service_id = '$rep' ";


if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Update Successfully..!!');window.location='services.php';</script>";

}else{
echo "<script>alert('Data Update failled..!!');window.location='services.php';</script>";
}

}






function eventsadd($table, $events_cat, $events_name, $events_place, $events_date, $events_msg, $file_img){

include ('db.php');
$filetmp = $_FILES['file_img']["tmp_name"];
$filename = $_FILES['file_img']["name"];
$filetype = $_FILES['file_img']["type"];
$dir = "img/events/".$filename;
move_uploaded_file($filetmp,$dir);


echo $updateQry = "INSERT INTO $table VALUES ('', '$events_cat', '$events_name', '$events_place', '$events_date', '$events_msg', '$filename', '') ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Insert Successfully..!!');window.location='events.php';</script>";

}else{
echo "<script>alert('Data Insert failled..!!');window.location='events.php';</script>";
}

}

function eventsaddmulti($tables){
  
include ('db.php');
for ($i=0; $i <$_POST['number']; $i++) { 

$events_cat = $_POST['events_cat'][$i];
$events_name = $_POST['events_name'][$i];
$events_place = $_POST['events_place'][$i];
$events_date = $_POST['events_date'][$i];
$events_msg = $_POST['msg'][$i];


$filetmp = $_FILES['file_img']["tmp_name"][$i];
$filename = $_FILES['file_img']["name"][$i];
$filetype = $_FILES['file_img']["type"][$i];
$dir = "img/events/".$filename;
move_uploaded_file($filetmp,$dir);


$updateQry = "INSERT INTO events VALUES ('', '$events_cat', '$events_name', '$events_place', '$events_date', '$events_msg', '$filename', '') ";
if(mysqli_query($conn, $updateQry))
{

 echo "<script>alert('Data Insert Successfully..!!');window.location='events.php';</script>";

}else
{
 echo "<script>alert('Data Insert failled..!!');window.location='events.php';</script>";
}
}
}


function eventsrep($table, $events_cat, $events_name, $events_place, $events_date, $msg, $file_img, $rep, $file1){
    
include ('db.php');

if ($_FILES["file_img"]["name"] == "") {
$img1 = $file1;
}else{
@unlink($file1);
$img1 = $_FILES["file_img"]["name"];
move_uploaded_file($_FILES["file_img"]["tmp_name"], "./img/events/".$_FILES["file_img"]["name"]);
} 
$updateQry = "UPDATE $table SET cat = '$events_cat', name = '$events_name', place = '$events_place', date1 = '$events_date', msg = '$msg', img1 = '$img1' where id = '$rep' ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Update Successfully..!!');window.location='events.php';</script>";

}else{
echo "<script>alert('Data Update failled..!!');window.location='events.php';</script>";
}

}

function imagegalleryadd($cat, $file_img){

include ('db.php');
$filetmp = $_FILES['file_img']["tmp_name"];
$filename = $_FILES['file_img']["name"];
$filetype = $_FILES['file_img']["type"];
$dir = "img/gallery/".$filename;
move_uploaded_file($filetmp,$dir);


 $updateQry = "INSERT INTO imagegallery VALUES ('', '$cat', '$filename', '') ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Insert Successfully..!!');window.location='imagegallery.php';</script>";

}else{
echo "<script>alert('Data Insert failled..!!');window.location='imagegallery.php';</script>";
}

}

function imagegalleryaddmulti($cat, $file_img){
  
include ('db.php');
for ($i=0; $i <$_POST['number']; $i++) { 

$cat = $_POST['cat'][$i];
$filetmp = $_FILES['file_img']["tmp_name"][$i];
$filename = $_FILES['file_img']["name"][$i];
$filetype = $_FILES['file_img']["type"][$i];
$dir = "img/gallery/".$filename;
move_uploaded_file($filetmp,$dir);


$updateQry = "INSERT INTO imagegallery VALUES ('', '$cat', '$filename', '') ";
if(mysqli_query($conn, $updateQry))
{

 echo "<script>alert('Data Insert Successfully..!!');window.location='imagegallery.php';</script>";

}else
{
 echo "<script>alert('Data Insert failled..!!');window.location='imagegallery.php';</script>";
}
}
}

function imagegalleryrep($cat, $file_img, $rep, $file1){
    
include ('db.php');

if ($_FILES["file_img"]["name"] == "") {
$img1 = $file1;
}else{
@unlink($file1);
$img1 = $_FILES["file_img"]["name"];
move_uploaded_file($_FILES["file_img"]["tmp_name"], "./img/gallery/".$_FILES["file_img"]["name"]);
} 
$updateQry = "UPDATE imagegallery SET cat = '$cat', img1 = '$img1' where id = '$rep' ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Update Successfully..!!');window.location='imagegallery.php';</script>";

}else{
echo "<script>alert('Data Update failled..!!');window.location='imagegallery.php';</script>";
}

}


function videoadd($cat, $url){

include ('db.php');


echo $updateQry = "INSERT INTO video VALUES ('', '$cat', '$url', '') ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Insert Successfully..!!');window.location='video.php';</script>";

}else{
echo "<script>alert('Data Insert failled..!!');window.location='video.php';</script>";
}

}

function videoaddmulti($cat, $url){
  
include ('db.php');
for ($i=0; $i <$_POST['number']; $i++) { 

$cat = $_POST['cat'][$i];
$url = $_POST['url'][$i];



$updateQry = "INSERT INTO video VALUES ('', '$cat', '$url', '') ";
if(mysqli_query($conn, $updateQry))
{

 echo "<script>alert('Data Insert Successfully..!!');window.location='video.php';</script>";

}else
{
 echo "<script>alert('Data Insert failled..!!');window.location='video.php';</script>";
}
}
}

function videorep($cat, $url, $rep){
    
include ('db.php');

$updateQry = "UPDATE video SET cat = '$cat', url = '$url' where id = '$rep' ";
if(mysqli_query($conn, $updateQry))
{

echo "<script>alert('Data Update Successfully..!!');window.location='video.php';</script>";

}else{
echo "<script>alert('Data Update failled..!!');window.location='video.php';</script>";
}

}

?>