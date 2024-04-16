<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../../backend/config/users/session.php');

$error_message = '';






?>


<!DOCTYPE html>
<html lang="en">

<head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title><?php echo $sitename ?> - User Dashbard</title>
         <link rel="stylesheet" href="../../../assets/css/main.css">
         <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
         <!-- End layout styles -->
         <link rel="shortcut icon" href="../../../assets/images/favicon.ico" />
</head>

<body>
         <div class="container-scroller">
                  <div class="row p-0 m-0 proBanner" id="proBanner">
                           <div class="col-md-12 p-0 m-0">
                                    <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                                             <div class="ps-lg-1">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                               <p class="mb-0 font-weight-medium me-3 buy-now-text">Please Ensure To Verify YouR Email</p>
                                                               <a href="#" target="_blank" class="btn me-2 buy-now-btn border-0">Do It Now</a>
                                                      </div>
                                             </div>
                                             <div class="d-flex align-items-center justify-content-between">
                                                      <a href="#"><i class="mdi mdi-home me-3 text-white"></i></a>
                                                      <button id="bannerClose" class="btn border-0 p-0">
                                                               <i class="mdi mdi-close text-white me-0"></i>
                                                      </button>
                                             </div>
                                    </div>
                           </div>
                  </div>
                  <!-- partial:partials/_navbar.html -->
                  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                           <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                                    <a class="navbar-brand brand-logo" href="index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
                                    <a class="navbar-brand brand-logo-mini ml-10" href="index.html"><img height="60px" src="../../assets/images/logo.svg" alt="logo" /></a>
                           </div>
                           <div class="navbar-menu-wrapper d-flex align-items-stretch">
                                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                                             <span class="mdi mdi-menu"></span>
                                    </button>
                                    <div class="search-field d-none d-md-block">
                                             <form class="d-flex align-items-center h-100" action="#">
                                                      <div class="input-group">
                                                               <div class="input-group-prepend bg-transparent">
                                                                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                                               </div>
                                                               <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                                                      </div>
                                             </form>
                                    </div>
                                    <ul class="navbar-nav navbar-nav-right">
                                             <li class="nav-item nav-profile dropdown">
                                                      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                               <div class="nav-profile-img">
                                                                        <img src="../../../upload/Profile/<?php echo $img  ?>" alt="image">
                                                                        <span class="availability-status online"></span>
                                                               </div>
                                                               <div class="nav-profile-text">
                                                                        <p class="mb-1 text-black"><?php echo $username  ?></p>
                                                               </div>
                                                      </a>
                                                      <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                                               <a class="dropdown-item" href="#">
                                                                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item" href="#">
                                                                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                                                      </div>
                                             </li>
                                             <li class="nav-item d-none d-lg-block full-screen-link">
                                                      <a class="nav-link">
                                                               <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                                                      </a>
                                             </li>
                                             <li class="nav-item dropdown">
                                                      <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                               <i class="mdi mdi-email-outline"></i>
                                                               <span class="count-symbol bg-warning"></span>
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                                               <h6 class="p-3 mb-0">Messages</h6>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                                                                 <p class="text-gray mb-0"> 1 Minutes ago </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                                                                 <p class="text-gray mb-0"> 15 Minutes ago </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                                                                 <p class="text-gray mb-0"> 18 Minutes ago </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                                                      </div>
                                             </li>
                                             <li class="nav-item dropdown">
                                                      <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                                               <i class="mdi mdi-bell-outline"></i>
                                                               <span class="count-symbol bg-danger"></span>
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                                               <h6 class="p-3 mb-0">Notifications</h6>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <div class="preview-icon bg-success">
                                                                                          <i class="mdi mdi-calendar"></i>
                                                                                 </div>
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                                                                 <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <div class="preview-icon bg-warning">
                                                                                          <i class="mdi mdi-settings"></i>
                                                                                 </div>
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                                                                 <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <a class="dropdown-item preview-item">
                                                                        <div class="preview-thumbnail">
                                                                                 <div class="preview-icon bg-info">
                                                                                          <i class="mdi mdi-link-variant"></i>
                                                                                 </div>
                                                                        </div>
                                                                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                                                                 <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                                                                 <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                                                        </div>
                                                               </a>
                                                               <div class="dropdown-divider"></div>
                                                               <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                                                      </div>
                                             </li>
                                             <li class="nav-item nav-logout d-none d-lg-block">
                                                      <a class="nav-link" href="#">
                                                               <i class="mdi mdi-power"></i>
                                                      </a>
                                             </li>
                                             <li class="nav-item nav-settings d-none d-lg-block">
                                                      <a class="nav-link" href="#">
                                                               <i class="mdi mdi-format-line-spacing"></i>
                                                      </a>
                                             </li>
                                    </ul>
                                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                                             <span class="mdi mdi-menu"></span>
                                    </button>
                           </div>

                  </nav>
                  <!-- partial -->
                  <div class="container-fluid page-body-wrapper">
                           <!-- partial:partials/_sidebar.html -->
                           <nav class="sidebar sidebar-offcanvas" id="sidebar">
                                    <ul class="nav">
                                             <li class="nav-item nav-profile">
                                                      <a href="#" class="nav-link">
                                                               <div class="nav-profile-image">
                                                                        <img style="height: 80px;width:70px" src="../../../upload/Profile/<?php echo $img  ?>" alt="profile">
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
                                                      <a class="nav-link" href="../dashboard.php">
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
                                                                        <li class="nav-item"> <a class="nav-link" href="../deposite.php">Depsoite</a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="../withdrawal.php">Withdrawal</a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="../withdrawalStatus.php">Withdrawal Status</a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="../depositStatus.php">Deposit Status</a></li>
                                                               </ul>
                                                      </div>
                                             </li>
                                             <li class="nav-item">
                                                      <a class="nav-link" href="">
                                                               <span class="menu-title">Quik Ride</span>
                                                               <i class="mdi mdi-contacts menu-icon"></i>
                                                      </a>
                                             </li>
                                             <li class="nav-item">
                                                      <a class="nav-link" href="">
                                                               <span class="menu-title">Book Ride For Other</span>
                                                               <i class="mdi mdi-chart-bar menu-icon"></i>
                                                      </a>
                                             </li>

                                             <li class="nav-item">
                                                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-shopping" aria-expanded="false" aria-controls="ui-basic">
                                                               <span class="menu-title">Online Shoping</span>
                                                               <i class="menu-arrow"></i>
                                                               <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                                                      </a>
                                                      <div class="collapse" id="ui-shopping">
                                                               <ul class="nav flex-column sub-menu">
                                                                        <li class="nav-item"> <a class="nav-link" href="../onlineshopping.php">Shoppping</a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="#">Cart list</a></li>
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
                                                                        <li class="nav-item"> <a class="nav-link" href=""> FAQ </a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href=""> Support </a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="./Reportdriver.php"> Report Driver </a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href=""> Job </a></li>
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
                                                                        <li class="nav-item"> <a class="nav-link" href="../appyDriver.php"> Appy for driver </a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="./Driver/loginDriver.php"> Login as a Driver </a></li>
                                                                        <li class="nav-item"> <a class="nav-link" href="./application.php"> Appliction Satus</a></li>
                                                               </ul>
                                                      </div>
                                             </li>
                                             <li class="nav-item sidebar-actions">
                                                      <span class="nav-link">
                                                               <div class="border-bottom">
                                                                        <h6 class="font-weight-normal mb-3">Projects</h6>
                                                               </div>
                                                               <button style="background:#155bd5;color:white" class="btn btn-block btn-lg   mt-4">Login as a Driver</button>
                                                      </span>
                                             </li>
                                    </ul>
                           </nav>
                           <!-- partial -->
                           <div class="main-panel">
                                    <div class="content-wrapper">
                                             <div class="page-header">
                                                      <h3 class="page-title">
                                                               <span class="page-title-icon bg-primary text-white me-2">
                                                                        <i class="mdi mdi-home"></i>
                                                               </span> Login As A Driver
                                                      </h3>
                                                      <nav aria-label="breadcrumb">
                                                               <ul class="breadcrumb">
                                                                        <li class="breadcrumb-item active" aria-current="page">
                                                                                 <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                                                        </li>
                                                               </ul>
                                                      </nav>
                                             </div>
                                             <div class="row">
                                                      <div class="card">
                                                               <div class="card-body">
                                                                        <!-- <h4 class="card-title">Basic form elements</h4>
                                                                        <p class="card-description"> Basic form elements </p> -->
                                                                        <?php

                                                                        if ($error_message != "") { ?>

                                                                                 <p class="card-description  bg-danger text-white py-3 px-2">
                                                                                          <?php echo $error_message; ?>
                                                                                 </p>

                                                                        <?php }

                                                                        ?>
                                                                        <form action="../../backend\config\users\Deposit\proccess.php" method="POST" class="forms-sample">
                                                                                 <div class="form-group">
                                                                                          <label for="DriverID">Driver ID</label>
                                                                                          <input type="text" class="form-control" id="DriverID" placeholder="Driver ID" name="DriverID" required>
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="DriverPassword">Driver Password</label>
                                                                                          <input type="text" class="form-control" id="DriverPassword" placeholder="Driver Password" name="DriverPassword" required>
                                                                                 </div>
                                                                                 <button name="deposit" type="submit" class="btn bg-primary text-white me-2">Submit</button>
                                                                                 <button class="btn btn-light">Cancel</button>
                                                                        </form>
                                                               </div>
                                                      </div>
                                             </div>

                                    </div>

                           </div>
                           <!-- main-panel ends -->
                  </div>
                  <!-- page-body-wrapper ends -->
         </div>

         <!-- container-scroller -->
         <!-- plugins:js -->
         <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
         <!-- endinject -->
         <!-- Plugin js for this page -->
         <script src="../../../assets/vendors/chart.js/Chart.min.js"></script>
         <script src="../../../assets/js/jquery.cookie.js" type="text/javascript"></script>
         <!-- End plugin js for this page -->
         <!-- inject:js -->
         <script src="../../../assets/js/off-canvas.js"></script>
         <script src="../../../assets/js/hoverable-collapse.js"></script>
         <script src="../../../assets/js/misc.js"></script>
         <!-- endinject -->
         <!-- Custom js for this page -->
         <script src="../../../assets/js/dashboard.js"></script>
         <script src="../../../assets/js/todolist.js"></script>
         <a href="
</body>

</html>