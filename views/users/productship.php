<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

$error_message = '';

if (!isset($_GET['product'])) {
         header('location:./onlineshopping.php');
}

$product_id = $_GET['product'];

if (isset($_POST['ship'])) {
         $state = $_POST['state'];
         $address = $_POST['address'];
         $state = $_POST['state'];
         $number = $_POST['number'];

         $selectPrice = mysqli_query($conection, "SELECT * FROM `items` WHERE `id`='$product_id'");
         while ($row = mysqli_fetch_assoc($selectPrice)) {
                  $price = $row['amount'];
         }

         $selectBal = mysqli_query($conection, "SELECT * FROM `clients` WHERE `id`='$userLogin'");
         while ($row = mysqli_fetch_assoc($selectBal)) {
                  $bal = $row['balance'];
         }

         if ($price < $bal) {
                  $insertShip = mysqli_query($conection, "INSERT INTO `ship`(`id`, `user_id`, `items_id`, `state`, `address`, `houseNumber`) VALUES ('','$userLogin','$product_id','$state','$address','$number')");

                  $newbal = $bal - $price;


                  $update = mysqli_query($conection, "UPDATE `clients` SET `balance`='$newbal' WHERE `id`='$userLogin'");

                  if ($insertShip && $update) {
                           $error_message = 'Successfully';
                  } else {
                           $error_message = 'Not-successfully';
                  }
         } else {
                  $error_message = 'Price is greater than balance';
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
                                                               <span class="page-title-icon bg-primary text-white me-2">
                                                                        <i class="mdi mdi-home"></i>
                                                               </span> Product Ship
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
                                                      <?php

                                                      $select = mysqli_query($conection, "SELECT * FROM `items` WHERE `id`='$product_id'");
                                                      while ($row = mysqli_fetch_assoc($select)) { ?>
                                                               <div class="card">
                                                                        <div class="card-body bg-primary mt-3 rounded">
                                                                                 <div class="card mb-3" style="max-width: 540px;">
                                                                                          <div class="row g-0">
                                                                                                   <div class="col-md-4">
                                                                                                            <img src="../../upload/item/<?php echo $row['image'] ?>" class="img-fluid rounded-start h-100" alt="...">
                                                                                                   </div>
                                                                                                   <div class="col-md-8">
                                                                                                            <div class="card-body">
                                                                                                                     <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                                                                                                     <p class="card-text">Price: <?php echo $row['des']  ?></p>
                                                                                                                     <p class="card-text">Price: <?php echo $row['amount']  ?></p>
                                                                                                                     <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                                                                                                            </div>
                                                                                                   </div>
                                                                                          </div>
                                                                                 </div>
                                                                        </div>
                                                               </div>



                                                      <?php }
                                                      ?>

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
                                                                        <form  method="POST" class="forms-sample">
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAmount">State</label>
                                                                                          <input type="text" class="form-control" id="exampleInputState" placeholder="State" name="state" required>
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAmount">User Address</label>
                                                                                          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Address" name="address" required>
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                          <label for="exampleInputAmount">Houses Number</label>
                                                                                          <input type="text" class="form-control" id="exampleInputAmount" placeholder="House Number" name="number" required>
                                                                                 </div>
                                                                                 <button name="ship" type="submit" class="btn bg-primary text-white me-2">Submit</button>

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