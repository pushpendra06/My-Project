  <form method="post" onsubmit="return myFunction(this)">
                  <table class="table table-bordered" id="hide">
                      <thead>
                      <tr style="border-top: 1px solid darkturquoise;"> 
                             <th style="text-align:center;"><input align="center" style="margin-right: 10px;" type="checkbox" name="select_all" id="select_all" value=""/>Select All</th>
                             <th style="text-align:center;">S. No.</th>
                             <th style="text-align:center;">Id</th>
                             <th style="text-align:center;">Date</th>
                             <th style="text-align:center;">Category</th>
                             <th style="text-align:center;">Name</th>
                             <th style="text-align:center;">Place</th>
                             <th style="text-align:center;">Description</th>
                             <th style="text-align:center;">Images</th>
                             <th style="text-align:center;">Status</th>
                             <th style="text-align:center;" colspan="2">Action</th>
                            </tr>
                      </thead>
                      <tbody>
                      <?php 
                     include ('function/db.php');
                        $res = $_POST['partialState'];
                        $a = 1;
                      $sql = "SELECT * from events where id LIKE '%$res%' or cat LIKE '%$res%' or date1 LIKE '%$res%' or name LIKE '%$res%' or place LIKE '%$res%' ";
                      $run = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_array($run))
                      {
                       $status =$row['adkey']; 
                      ?>
                      
                    <tr>
                              <td align="center"><input type="checkbox" class="checkbox" name="name[]" value="<?php echo $row['id']; ?>"></td>
                              <td class="p-name" style="text-align:center;"><?php echo $a; $a++; ?></td>

                              <td class="p-name" style="text-align:center;"><?php echo $row['id']; ?></td>
                              <td class="p-name" style="text-align:center;"><?php echo $row['date1']; ?></td>
                              <td class="p-name" style="text-align:center;"><?php echo $row['cat']; ?></td>
                              <td class="p-name" style="text-align:center;"><?php echo $row['name']; ?></td>
                              <td class="p-name" style="text-align:center;"><?php echo $row['place']; ?></td>
                              <td class="p-name" style="text-align:center;"><?php echo $row['msg']; ?></td>
                              <td class="p-name" style="text-align:center;"><img src="img/events/<?php echo $row['img1']; ?>" width="70px" height="70px"></td>
                              <td class="p-progress" style="text-align:center;">  
                              <?php
                              if(($status)=='0')
                              {
                              ?>
                              <a href="eventsactive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Activate')"><i class=" fa fa-eye"></i></a>
                              <?php
                              }
                              if(($status)=='1')
                              {
                              ?>
                              <a href="eventsactive.php?rid=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('De-activate')"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              <?php
                              }
                              ?>
                              </td>

                              <td class="p-progress" style="text-align:center;">  
                              <a href="eventsrep.php?rep=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button></a>
                              </td>
                              <td class="p-progress" style="text-align:center;"> 
                              <a href="eventsdel.php?del=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure Delete this client')"><i class="fa fa-trash-o "></i></button></a></td>
                              </td>

                              </tr>
                        <?php } ?>
                        </tbody>     
                  </table>
                  <input type="submit" name="status"  class="n btn-sm btn-success" value="Status" onclick="return confirm('Are you Sure change Status')" style="float: right; margin-right: 10px;">
                  <input type="submit" name="submit1" onclick="return confirm('Are you sure Delete selected Records')" class="n btn-sm btn-danger" style="float: right; margin-right: 10px;" value="DELETE">
                  </form>