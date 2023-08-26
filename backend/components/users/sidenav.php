<ul class="nav">
         <li class="nav-item nav-profile">
                  <a href="#" class="nav-link">
                           <div class="nav-profile-image">
                                    <img style="height: 80px;width:70px" src="../../upload/Profile/<?php echo $img  ?>" alt="profile">
                                    <span class="login-status online"></span>
                                    <!--change to offline or busy as needed-->
                           </div>
                           <div class="nav-profile-text d-flex flex-column">
                                    <span style="text-transform: capitalize; font-size:18px" class="font-weight-bold mb-2 "><?php echo $username ?></span>
                                    <?php
                                    if ($isEmail == 1) { ?>
                                             <span class="text-secondary text-small bg-primary py-2 text-white d-flex justify-content-center rounded ">Verify</span>

                                    <?php  } else { ?>
                                             <span class="text-secondary text-small bg-danger py-2 text-white d-flex justify-content-center rounded ">Not Verify</span>
                                    <?php  }

                                    ?>
                           </div>
                           <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                  </a>
         </li>
         <li class="nav-item">
                  <a class="nav-link" href="./dashboard.php">
                           <span class="menu-title">Dashboard</span>
                           <i class="mdi mdi-home menu-icon"></i>
                  </a>
         </li>
         <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                           <span class="menu-title">Transcations</span>
                           <i class="menu-arrow"></i>
                           <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                           <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="./deposite.php">Depsoite</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./depositStatus.php">Deposit Status</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./withdrawal.php">Withdrawal</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./withdrawalStatus.php">Withdrawal Status</a></li>

                           </ul>
                  </div>
         </li>
         <li class="nav-item">
                  <a class="nav-link" href="./bookride.php">
                           <span class="menu-title">Quik Ride</span>
                           <i class="mdi mdi-contacts menu-icon"></i>
                  </a>
         </li>
         <!-- <li class="nav-item">
                  <a class="nav-link" href="">
                           <span class="menu-title">Book Ride For Other</span>
                           <i class="mdi mdi-chart-bar menu-icon"></i>
                  </a>
         </li> -->

         <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-shopping" aria-expanded="false" aria-controls="ui-basic">
                           <span class="menu-title">Online Shoping</span>
                           <i class="menu-arrow"></i>
                           <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                  </a>
                  <div class="collapse" id="ui-shopping">
                           <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="./onlineshopping.php">Shoppping</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./cartlist.php">Cart list</a></li>
                           </ul>
                  </div>
         </li>
         <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                           <span class="menu-title">Contact</span>
                           <i class="menu-arrow"></i>
                           <i class="mdi mdi-medical-bag menu-icon"></i>
                  </a>
                  <div class="collapse" id="general-pages">
                           <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="./faq.php"> FAQ </a></li>
                                    <li class="nav-item"> <a class="nav-link" href=""> Support </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./Reportdriver.php"> Report Driver </a></li>
                                    <!-- <li class="nav-item"> <a class="nav-link" href=""> Job </a></li> -->
                           </ul>
                  </div>
         </li>
         <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#general-driver" aria-expanded="false" aria-controls="general-pages">
                           <span class="menu-title">Driver</span>
                           <i class="menu-arrow"></i>
                           <i class="mdi mdi-medical-bag menu-icon"></i>
                  </a>
                  <div class="collapse" id="general-driver">
                           <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="./appyDriver.php"> Appy for driver </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./Driver/loginDriver.php"> Login as a Driver </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="./Driver/application.php"> Application Status </a></li>
                           </ul>
                  </div>
         </li>
         <li class="nav-item sidebar-actions">
                  <span class="nav-link">
                           <!-- <div class="border-bottom">
                                    <h6 class="font-weight-normal mb-3">Projects</h6>
                           </div> -->
                           <a href="./Driver/loginDriver.php">
                                    <button style="background:#155bd5;color:white" class="btn btn-block btn-lg   mt-4">Login as a Driver</button>
                           </a>
                  </span>
         </li>
</ul>