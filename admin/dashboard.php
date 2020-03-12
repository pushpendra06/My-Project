<?php 
include('header.php');
include('header3.php');


?>


                     <div class="panel-body profile-activity">
                              <div class="row state-overview">
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <a href="slider.php">
                          <div class="value">
                              <h1 class="count"><?php 
                             // include('function/function.php');
                             // uservalues() ?></h1>
                              <p>User Detail</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-user-md"></i>
                          </div>
                          <a href="therapistdetail.php">
                          <div class="value">
                              <h1 class=" count2"><?php // thvalues() ?></h1>
                              <p>Therapist Detail</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-globe"></i>
                          </div>
                          <a href="contact.php">
                          <div class="value">
                              <h1 class=" count3"><?php //convalues() ?></h1>
                              <p>Website Contact</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-ticket"></i>
                          </div>
                           <a href="newbooking.php">
                          <div class="value">
                              <h1 class=" count4"><?php //bvalues() ?></h1>
                              <p>Booking</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue" style="background:#01B500;">
                              <i class="fa fa-inr"></i>
                          </div>
                           <a href="">
                          <div class="value">
                              <h1 class=" count4"><?php //allincome() ?></h1>
                              <p>Total Income</p>
                          </div>
                          </a>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue" style="background:#E75A4D;">
                              <i class="fa fa-envelope"></i>
                          </div>
                           <a href="umail.php">
                          <div class="value">
                              <h1 class=" count4"><?php //totalinbox() ?></h1>
                              <p>Inbox</p>
                          </div>
                          </a>
                      </section>
                  </div>
              </div>
      </div>
      <!-- Right Slidebar end -->
      <!--footer start-->
<?php include('footer.php');?>