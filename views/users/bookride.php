<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>Eazibolt - User Dashbard</title>
         <link rel="stylesheet" href="../../assets/css/main.css">
         <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
         <!-- End layout styles -->
         <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
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
                           <?php require('../../backend/components/users/navbar.php'); ?>
                  </nav>
                  <!-- partial -->
                  <!-- <style>
                           @media(max-width:400px) {
                                    #hh {
                                             display: flex;
                                             flex-direction: column;
                                    }

                                    .sidebar {
                                             top: 145px;
                                    }
                           }
                  </style> -->
                  <div id="hh" class="container-fluid page-body-wrapper">
                           <!-- partial:partials/_sidebar.html -->
                           <nav class="sidebar sidebar-offcanvas d-md-none " id="sidebar">
                                    <?php require('../../backend/components/users/sidenav.php'); ?>
                           </nav>
                           <div class="col-md-3 grid-margin stretch-card">
                                    <div class="card">
                                             <div class="card-body">
                                                      <h4 class="card-title">Book Ride</h4>
                                                      <p class="card-description"> Basic form layout </p>
                                                      <form class="forms-sample">
                                                               <div class="form-group">
                                                                        <label for="exampleInputDesination">Desination</label>
                                                                        <input type="text" class="form-control" id="exampleInputDesination" placeholder="Desination">
                                                               </div>
                                                               <div class="form-group">
                                                                        <label for="exampleInputcurrentLocation">Input Current Location</label>
                                                                        <input type="text" class="form-control" id="exampleInputcurrentLocation" placeholder="current Location">
                                                               </div>
                                                               <div class="form-group">
                                                                        <label for="exampleInputcurrentLocation">Current Location</label>
                                                                        <button type="submit" class="btn bg-sm bg-primary  text-white">click to use autogenerated location</button>
                                                               </div>
                                                               <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                                      </form>
                                             </div>
                                    </div>
                           </div>
                           <!-- partial -->
                           <div class="main-panel">
                                    <div class="content-wrapper">
                                             <div class="page-header">
                                                      <h3 class="page-title">
                                                               <span class="page-title-icon bg-primary text-white me-2">
                                                                        <i class="mdi mdi-home"></i>
                                                               </span> Dashboard
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
                                                      <div class="col-md-4 stretch-card grid-margin">
                                                               <div class="card  bg-primary card-img-holder text-white">
                                                                        <div class="card-body">
                                                                                 <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                                                                 <h4 class="font-weight-normal mb-3">Balance Naria<i class="mdi mdi-naria mdi-24px float-right"></i>
                                                                                 </h4>
                                                                                 <h2 class="mb-5"># <?php echo $balance  ?></h2>
                                                                                 <!-- <h6 class="card-text">Increased by 60%</h6> -->
                                                                        </div>
                                                               </div>
                                                      </div>
                                                      <div class="col-md-4 stretch-card grid-margin">
                                                               <div class="card bg-gradient-info card-img-holder text-white">
                                                                        <div class="card-body">
                                                                                 <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                                                                 <h4 class="font-weight-normal mb-3">Eazibolt Coin <i class="mdi mdi-coin mdi-24px float-right"></i>
                                                                                 </h4>
                                                                                 <h2 class="mb-5"><?php echo $EaziboltCoin ?></h2>
                                                                        </div>
                                                               </div>
                                                      </div>
                                                      <div class="col-md-4 stretch-card grid-margin">
                                                               <div class="card bg-gradient-success card-img-holder text-white">
                                                                        <div class="card-body">
                                                                                 <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                                                                 <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                                                                 </h4>
                                                                                 <h2 class="mb-5">95,5741</h2>
                                                                        </div>
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
         <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
         <!-- endinject -->
         <!-- Plugin js for this page -->
         <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
         <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
         <!-- End plugin js for this page -->
         <!-- inject:js -->
         <script src="../../assets/js/off-canvas.js"></script>
         <script src="../../assets/js/hoverable-collapse.js"></script>
         <script src="../../assets/js/misc.js"></script>
         <!-- endinject -->
         <!-- Custom js for this page -->
         <script src="../../assets/js/dashboard.js"></script>
         <script src="../../assets/js/todolist.js"></script>

</body>

</html>