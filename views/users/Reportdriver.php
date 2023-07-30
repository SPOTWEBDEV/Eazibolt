<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

$error_message = '';

if (isset($_POST['Report'])) {
      $message = $_POST['message'];
      $DriveId = $_POST['DriveId'];
      $Ride_Number = $_POST['Ride_Number'];
      $header = $_POST['header'];


      if (!empty($DriveId) && !empty($message) && !empty($Ride_Number) && !empty($header)) {

            $insert = mysqli_query($conection, "INSERT INTO `reportdriver`(`id`, `user_id`, `driver_id`, `Ride_number`,`title`,`message`) VALUES ('','$login_id','$DriveId','$Ride_Number','$header','$message')");
            if ($insert) {
                  $error_message = 'You have succesfully place a report';
            } else {
                  $error_message = 'Please something went wrong, try agian';
            }
      } else {
            $error_message = 'Input is empty';
      }
}

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
            <div class="container-fluid page-body-wrapper">
                  <!-- partial:partials/_sidebar.html -->
                  <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <?php require('../../backend/components/users/sidenav.php'); ?>
                  </nav>
                  <!-- partial -->
                  <div class="main-panel">
                        <div class="content-wrapper">
                              <div class="page-header">
                                    <h3 class="page-title">
                                          <span class="page-title-icon bg-primary text-white me-2">
                                                <i class="mdi mdi-home"></i>
                                          </span> Report Dervier
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
                                    <div class="col-12 grid-margin stretch-card">
                                          <div class="card">
                                                <div class="card-body">
                                                      <?php

                                                      if ($error_message != "") { ?>

                                                            <p class="card-description  bg-danger text-white py-3 px-2">
                                                                  <?php echo $error_message; ?>
                                                            </p>

                                                      <?php }

                                                      ?>
                                                      <form class="forms-sample" method="POST">
                                                            <div class="form-group">
                                                                  <label for="exampleInputDriveId">Drive Id</label>
                                                                  <input name="DriveId" type="text" class="form-control" id="exampleInputDriveId" placeholder="Drive Id">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="exampleInputRideNumber">Ride Number</label>
                                                                  <input name="Ride_Number" type="text" class="form-control" id="exampleInputRideNumber" placeholder="Ride Number">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="exampleInputHeader">Title</label>
                                                                  <input name="header" type="text" class="form-control" id="exampleInputHeader" placeholder="Title">
                                                            </div>
                                                            <div class="form-group">
                                                                  <label for="exampleTextarea1">Message</label>
                                                                  <textarea name="message" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                                            </div>
                                                            <button name="Report" type=" submit" class="btn bg-primary text-white me-2">Report</button>
                                                            <button class="btn btn-light">Cancel</button>
                                                      </form>
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


<h1 class="text-red-500">WELCOME</h1>