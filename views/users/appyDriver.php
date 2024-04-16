<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

$error_message = '';

if (isset($_POST['appy'])) {
         $firstname = $_POST['firstname'];
         $surname = $_POST['surname'];
         $lastname = $_POST['lastname'];
         $address = $_POST['address'];
         $state = $_POST['state'];

         if (!empty($firstname) && !empty($surname) && !empty($lastname) && !empty($address) && !empty($state)) {

                  $check = mysqli_query($conection, "SELECT * FROM `appydriver` WHERE `user_id`='$userLogin'");
                  $alreadyAppyForJob = mysqli_num_rows($check);
                  if (mysqli_num_rows($check) > 0) {
                           $error_message = 'You have already appy for the driver job';
                  } else {
                           $target_dir = "../../upload/Driver/";
                           $target_file = $target_dir . basename($_FILES["theimage"]["name"]);
                           $realImage = getimagesize($_FILES["theimage"]["tmp_name"]);
                           if ($realImage !== false) {
                                    if (move_uploaded_file($_FILES["theimage"]["tmp_name"], $target_file)) {
                                             $image = basename($_FILES["theimage"]["name"]);
                                             $insert = mysqli_query($conection, "INSERT INTO `appydriver`(`id`, `user_id`, `surname`, `firstname`, `lastname`, `address`, `state`,`image`) VALUES ('','$userLogin','$surname','$firstname','$lastname','$address','$state','$image')");

                                             if ($insert) {
                                                      $error_message = "Successfully";
                                             } else {
                                                      $error_message = "Unable to submit your request";
                                             }
                                    } else {
                                             $error_message = "Sorry, there was an error uploading your file.";
                                    }
                           } else {
                                    $error_message = "Please select a real file.";
                           }
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
         <title><?php echo $sitename ?> - User Dashbard</title>

         <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->
         <link rel="stylesheet" href="../../assets/css/main.css">
         <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
         <!-- End layout styles -->
         <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>



<body>
         <div class="container-scroller">
                  <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
                           <div class="col-md-12 p-0 m-0">
                                    <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                                             <div class="ps-lg-1">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                               <p class="mb-0 font-weight-medium me-3 buy-now-text">Please ensure To verify your email</p>
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
                  </div> -->
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
                                                               <span style="background:#155bd5;color:white" class="page-title-icon  text-white me-2">
                                                                        <i class="mdi mdi-home"></i>
                                                               </span> Appy for Driver
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
                                                               <?php $check =  mysqli_num_rows(mysqli_query($conection, "SELECT * FROM `appydriver` WHERE `user_id`='$userLogin'"));
                                                               if ($check > 0) { ?>

                                                                        <div class="card-body">
                                                                                 <p>You already appied for the job</p>
                                                                        </div>

                                                               <?php

                                                               } else { ?>

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
                                                                                 <form method="POST" class="forms-sample" enctype="multipart/form-data">
                                                                                          <div class="form-group">
                                                                                                   <label for="surname">Surname</label>
                                                                                                   <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label for="firstname">First Name</label>
                                                                                                   <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name">
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label for="lastname">Last Name</label>
                                                                                                   <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label for="address">Address</label>
                                                                                                   <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label for="state">State</label>
                                                                                                   <input type="text" name="state" class="form-control" id="state" placeholder="State">
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                                   <label for="state">Profile Picture</label>
                                                                                                   <input type="file" name="theimage" class="form-control" >
                                                                                          </div>

                                                                                          <button style="background:#155bd5;color:white" name="appy" type="submit" class="btn ">Submit Request</button>
                                                                                          <button class="btn ">Cancel</button>
                                                                                 </form>
                                                                        </div>

                                                               <?php }

                                                               ?>



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