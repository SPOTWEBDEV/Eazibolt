<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

$error_message = '';

if (isset($_POST['items'])) {
         $name = $_POST['name'];
         $amount = $_POST['amount'];
         $dec = $_POST['dec'];
         $count = $_POST['count'];

         if (!empty($name) && !empty($dec) && !empty($amount) && !empty($count)) {
                  $target_dir = "../../upload/item/";
                  $target_file = $target_dir . basename($_FILES["theimage"]["name"]);
                  $realImage = getimagesize($_FILES["theimage"]["tmp_name"]);

                  if ($realImage !== false) {
                           $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                           if (
                                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                    && $imageFileType != "gif"
                           ) {
                                    $error_message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                           } else {
                                    if (move_uploaded_file($_FILES["theimage"]["tmp_name"], $target_file)) {
                                             $image = basename($_FILES["theimage"]["name"]);
                                             $insertUserInfo = mysqli_query($conection, "INSERT INTO `items`(`id`, `name`, `des`, `image`, `count`,`amount`) VALUES ('','$name','$dec','$image','$count','$amount')");

                                             if ($insertUserInfo) {
                                                      $error_message = "Successfully";
                                             } else {
                                                      $error_message = "Unable to submit your request";
                                             }
                                    } else {
                                             $error_message = "Sorry, there was an error uploading your file.";
                                    }
                           }
                  } else {
                           $error_message = "Please select a real image.";
                  }
         } else {
                  $error_message = "Input is empty";
         }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title><?php echo $sitename ?> - Admin Insert Shopping Items</title>

         <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->
         <link rel="stylesheet" href="../../assets/css/main.css">
         <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
         <!-- End layout styles -->
         <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>



<body>
         <div class="container-scroller">

                  <!-- partial:partials/_navbar.html -->
                  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                           <?php require('../../backend/components/admin/navbar.php'); ?>
                  </nav>
                  <!-- partial -->
                  <div class="container-fluid page-body-wrapper">
                           <!-- partial:partials/_sidebar.html -->
                           <nav class="sidebar sidebar-offcanvas" id="sidebar">
                                    <?php require('../../backend/components/admin/sidenav.php'); ?>
                           </nav>
                           <!-- partial -->
                           <div class="main-panel">
                                    <div class="content-wrapper">
                                             <div class="page-header">
                                                      <h3 class="page-title">
                                                               <span style="background:#155bd5;color:white" class="page-title-icon  text-white me-2">
                                                                        <i class="mdi mdi-home"></i>
                                                               </span> Insert Items
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
                                                                        <form method="POST" class="forms-sample" enctype="multipart/form-data">
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAccountNumber">Image Of Item</label>
                                                                                          <input type="file" class="form-control" name="theimage" id="exampleInputAccountNumber">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAccountName">Name Of item</label>
                                                                                          <input type="text" name="name" class="form-control" id="exampleInputAccountName" placeholder="Name Of item">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputBankName">Descrition</label>
                                                                                          <input type="text" name="dec" class="form-control" id="exampleInputBankName" placeholder="Account Name">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAmount">Amount</label>
                                                                                          <input type="number" name="amount" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAmount">Number Of Item</label>
                                                                                          <input type="number" name="count" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                                                 </div>


                                                                                 <button style="background:#155bd5;color:white" name="items" type="submit" class="btn ">Insert</button>
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