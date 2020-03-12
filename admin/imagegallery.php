<?php 
include('header.php');
include('function/db.php');

$t = "SELECT * from imagegallery ";
$sql = mysqli_query($conn, $t);
$coun = mysqli_num_rows($sql);
$start =0;
$limit=20;
if(isset($_GET['id'])){
$id = $_GET['id'];
$start = ($id-1)*$limit;
}
else{

  $id = 1;
}
$page=ceil($coun/$limit);
$sql1 = "SELECT * from imagegallery LIMIT $start, $limit";
$run = mysqli_query($conn, $sql1);
?>

  
<br><br>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row" style="margin-right: 0px; margin-left: 0px;">
                 <aside class="profile-nav col-lg-12">   
                   <section class="panel" style="margin:0px auto; overflow:auto;">
                    <div class="panel-body">
                      <div class="row">
                      <div class="col-md-10">
                              <div class="input-group"><input id="show" placeholder="Search Here" onkeyup="getStates(this.value)" class="input-sm form-control" type="text"> <span class="input-group-btn">
                              <button type="button" class="btn btn-sm btn-success"> Go!</button> </span></div>
                          </div>
                          <div class="col-md-2">
              
                              <a href="imagegalleryadd.php"><button type="button" class="btn btn-sm btn-success" style="display:block; width:100%">Add</button></a> 
                           </div>
                      </div>
                    </div>

                      <div class="table-responsive" id="demo" style="overflow: hidden; padding:20px 10px 0px 10px;" tabindex="1">
                        <form method="post" role="form" onsubmit="return myFunction(this)">
                        <table class="table table-bordered" id="hide">
                            <thead>
                            <tr style="border-top: 1px solid darkturquoise;"> 
                             <th style="text-align:center;"><input align="center" style="margin-right: 10px;" type="checkbox" name="select_all" id="select_all" value=""/>Select All</th>
                             <th style="text-align:center;">S. No.</th>
                             <th style="text-align:center;">Id</th>
                             <th style="text-align:center;">Category</th>
                           
                             <th style="text-align:center;">Images</th>
                             <th style="text-align:center;">Status</th>
                             <th style="text-align:center;" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                             <?php 
                             $a = 1;    
                             while($row=mysqli_fetch_array($run))
                              {
                              $status = $row['adkey'];
                              $ecat = $row['cat'];
                              $evesql = "SELECT * from eventscat where id = '$ecat'";
                              $everun = mysqli_query($conn, $evesql);
                              $everow=mysqli_fetch_array($everun);
                              $catname = $everow['cat'];



                              ?>
                              <tr>
                              <td align="center"><input type="checkbox" class="checkbox" name="name[]" value="<?php echo $row['id']; ?>"></td>
                              <td class="p-name" style="text-align:center;"><?php echo $a; $a++; ?></td>

                              <td class="p-name" style="text-align:center;"><?php echo $row['id']; ?></td>
                           
                              <td class="p-name" style="text-align:center;"><?php echo $catname; ?></td>
                             
                              <td class="p-name" style="text-align:center;"><img src="img/gallery/<?php echo $row['img1']; ?>" width="70px" height="70px"></td>
                              <td class="p-progress" style="text-align:center;">  
                              <?php
                              if(($status)=='0')
                              {
                              ?>
                              <a href="imagegalleryactive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Activate')"><i class=" fa fa-eye"></i></a>
                              <?php
                              }
                              if(($status)=='1')
                              {
                              ?>
                              <a href="imagegalleryactive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('De-activate')"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              <?php
                              }
                              ?>
                              </td>

                              <td class="p-progress" style="text-align:center;">  
                              <a href="imagegalleryrep.php?rep=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button></a>
                              </td>
                              <td class="p-progress" style="text-align:center;"> 
                              <a href="imagegallerydel.php?del=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure Delete this client')"><i class="fa fa-trash-o "></i></button></a></td>
                              </td>

                              </tr>
                              <?php } ?>
                            </tbody>     
                        </table>
                          <input type="submit" name="status"  class="n btn-sm btn-success" value="Status" onclick="return confirm('Are you Sure change Status')" style="float: right; margin-right: 10px;">
                               <input type="submit" name="submit" onclick="return confirm('Are you sure Delete selected Records')" class="n btn-sm btn-danger" style="float: right; margin-right: 10px;" value="DELETE">
                        </form>
                     </div><br><br>
<div class="col-md-12" style="text-align:right">
<div class="pagination">
<?php if($id>1) { ?>
<a href="imagegallery.php?id=<?php echo ($id-1) ; ?>" class="btn btn-sm btn-success" >Privious</a>
<?php }

for ($i=1; $i<=$page; $i++)
{ ?>
<a href="imagegallery.php?id=<?php echo $i; ?>" class="btn btn-sm btn-success" ><?php echo $i; ?></a>

<?php } ?>
<?php if($id!=$page) { ?>
<a href="imagegallery.php?id=<?php echo ($id+1); ?>" class="btn btn-sm btn-success" >Next</a>
<?php } ?>
</div>
</div>  
      </div><br><br> <br><br> 
                 </section>
                </aside>
              </div>
      </section> 
<link rel="stylesheet" type="text/css" href="css/uplode/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/uplode/css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/uplode/css/component.css" />

<script src="js/uplode/js/custom-file-input.js"></script>
<script src="js/uplode/js/jquery-v1.min.js"></script>
<script src="js/uplode/js/jquery.custom-file-input.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript">
function getStates(value){
  $.post("gallerysearch.php",{partialState:value}, function(data){
    $("#demo").html(data);
  });

}
$(document).ready(function(){
  $('#show').click(function(){
    $('#hide').hide(function(){
      
    });
  });
  /*$('.showIt').click(function(){
    $('img').show('slow', function(){
      alert('image show now slow');
    });
  });*/
  });

</script>                   
<script type="text/javascript">

 
function myFunction(form){
    
  var i,j = 0,
  chks = document.getElementsByName('name[]');
  var act_length = chks.length; 
  for (i = 0; i < chks.length; i++){
    if (chks[i].checked){
      return true;
    }else{
      j++;
    }
  }

  if( j == act_length){
    alert('select a checkbox first.');
    return false;
  }
}
</script>
<script type="text/javascript">

$(document).ready(function(){

    $('#select_all').on('click',function(){

        if(this.checked){

            $('.checkbox').each(function(){

                this.checked = true;

            });

        }else{

             $('.checkbox').each(function(){

                this.checked = false;

            });

        }

    });

  

  $('.checkbox').on('click',function(){

    if($('.checkbox:checked').length == $('.checkbox').length){

      $('#select_all').prop('checked',true);

    }else{

      $('#select_all').prop('checked',false);

    }

  });

});

</script>
<?php include('footer.php'); 
if (isset($_POST['submit'])) {

 if($_POST['name']==''){

echo "<script>alert('Please Select..!!'); window.location='';</script>";
 }
else
{

sliderdel("imagegallery", $_POST['name']);
}  

}

if (isset($_POST['status'])) {
   if($_POST['name']==''){

echo "<script>alert('Please Select..!!'); window.location='';</script>";
 }
else{

slideractive("imagegallery", $_POST['name']);
}
}

?>

