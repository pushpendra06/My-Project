<?php 
include('header.php');
include('function/db.php');

?>
<?php 
$t = "SELECT * from slider ";
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
$sql1 = "SELECT * from slider LIMIT $start, $limit";
$run = mysqli_query($conn, $sql1);
?>
  
<br><br>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row" style="margin-right: 0px; margin-left: 0px;">
                <aside class="profile-nav col-lg-12">
                         <section class="panel" style="margin:0px auto; overflow:auto;"">
                  <header class="panel-heading">
                      Insert Slider Detail
                          
                      <span class="pull-right">
                          <a href=""><button type="button" id="loading-btn" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Refresh</button></a>
                          
                        <a href="" class=" btn btn-success btn-xs"> Back</a>
                      </span>
                  </header>
                  <div class="panel-body" style="border: 1px solid #eee;">

                      <form method="post" enctype="multipart/form-data">       
                       <div class="row" style="margin:10px 0px 0px 0px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;">Image</div>
                         <div class="col-md-8"> <input name="file_img[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="" type="file" required="">
                       
                         <label for="file-1">
                         <i class="fa fa-upload"></i>
                         <span>Choose a file&hellip;</span></label>
                   
                        </div>
                        
                        <div class="col-md-1"></div>
                      </div>
                      
                    <div class="row">
                      <div class="col-md-1"></div>
                        <div class="col-md-2" style="padding:10px 0px;"></div>
                        <br>
                        <div class="col-md-8">
                            <input type="submit" id="loading-btn" name="insert" value="Submit" class="btn btn-warning"/>
                        
                        </div>
                      <div class="col-md-1"></div>
                   </div>
                  </form>
                </div>
            </section>
       <hr> 
       </aside>
                      


<style type="text/css">



.inputfile {
width: 0.1px;
height: 0.1px;
opacity: 0;
overflow: hidden;
position: absolute;
z-index: -1;
}
.inputfile + label {
cursor: pointer; /* "hand" cursor */
}


</style>
                    <aside class="profile-nav col-lg-12">   
                 
                      
                      <section class="panel" style="margin:0px auto; overflow:auto;">
               
                  
                 <div class="table-responsive" id="demo" style=" padding:20px 10px 0px 10px;" tabindex="1">
                  <form method="post" role="form" onsubmit="return myFunction(this)">
                  <table class="table table-bordered" id="hide">
                      <thead>
                      <tr style="border-top: 1px solid darkturquoise;"> 
                       <th style="text-align:center;" colspan="2"><input align="center" style="margin-right: 10px;" type="checkbox" name="select_all" id="select_all" value=""/>Select All/Id</th>
                    
                       
                       <th style="text-align:center;">Image</th>
                       

                       <th style="text-align:center;">Status</th>
                       <th style="text-align:center;" colspan="2">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                 
                      $a = 1;
                     
                      while($row=mysqli_fetch_array($run)){
                      $status = $row['adkey'];
                      ?>
                      
                      <tr>
                      <td align="center"><input type="checkbox" class="checkbox" name="name[]" value="<?php echo $row['id'];?>"></td>
                      <td class="p-name" style="text-align:center;"><?php echo $row['id']; ?></td>
                       
                      
                       <td class="p-name" style="text-align:center;"><img alt="" height="100" width="100" src="img/slider/<?php echo $row['img1']; ?>"></td>
              
                      <td class="p-progress" style="text-align:center;">  
                        <?php
                        if(($status)=='0')
                        {
                        ?>
                        <a href="slideractive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Activate')"><i class=" fa fa-eye"></i></a>
                        <?php
                        }
                       if(($status)=='1')
                        {
                        ?>
                        <a href="slideractive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('De-activate')"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        <?php
                        }
                        ?>
                      </td>
                         
                     <td class="p-progress" style="text-align:center;">  
                         <a href="sliderrep.php?rep=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button></a>
                     </td>
                     <td class="p-progress" style="text-align:center;"> 
                        <a href="sliderdel.php?del=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure Delete this Record')"><i class="fa fa-trash-o "></i></button></a>
                     </td>
                   
                    </tr>
                    <?php } ?>
                    </tbody>     
                  </table>
                   <input type="submit" name="status"  class="n btn-sm btn-success" value="Status" onclick="return confirm('Are you Sure change Status')" style="float: right; margin-right: 10px;">
                  <input type="submit" name="submit" onclick="return confirm('Are you sure Delete selected Records')" class="n btn-sm btn-danger" style="float: right; margin-right: 10px;" value="DELETE">
                  </form>
      </div>
      </div>
<div class="col-md-12" style="text-align:right">
<div class="pagination">
<?php if($id>1) { ?>
<a href="slider.php?id=<?php echo ($id-1) ; ?>" class="btn btn-sm btn-success" >Privious</a>
<?php }

for ($i=1; $i<=$page; $i++)
{ ?>
<a href="slider.php?id=<?php echo $i; ?>" class="btn btn-sm btn-success" ><?php echo $i; ?></a>

<?php } ?>
<?php if($id!=$page) { ?>
<a href="slider.php?id=<?php echo ($id+1); ?>" class="btn btn-sm btn-success" >Next</a>
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
  $.post("productproduct_status.php",{partialState:value}, function(data){
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

sliderdel("slider", $_POST['name']);
}  

}

if (isset($_POST['status'])) {
   if($_POST['name']==''){

echo "<script>alert('Please Select..!!'); window.location='';</script>";
 }
else{

slideractive("slider", $_POST['name']);
}
}

if (isset($_POST['insert'])) {

insertslider("slider", $_FILES['file_img']);
}

?>

