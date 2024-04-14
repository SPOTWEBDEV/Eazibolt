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
         <title>Eazibolt - User Deposite Status Page</title>
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
                                                               </span> Deposit Status
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
                                                               <div class="col-lg-12 grid-margin stretch-card">
                                                                        <div class="card">
                                                                                 <div class="card-body">
                                                                                          <h4 class="card-title">Deposit Status</h4>
                                                                                          <div class="table-responsive">
                                                                                                   <table class="table">
                                                                                                            <thead>
                                                                                                                     <tr>
                                                                                                                              <th> # </th>

                                                                                                                              <th>Amount</th>
                                                                                                                              <th> Status </th>
                                                                                                                              <th> Time </th>

                                                                                                                     </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                     <?php

                                                                                                                     $selectReport = mysqli_query($conection, "SELECT * FROM `deposit` WHERE `user_id`='$login_id'");
                                                                                                                     if (mysqli_num_rows($selectReport)) {
                                                                                                                              $count = 0;
                                                                                                                              while ($row = mysqli_fetch_assoc($selectReport)) {
                                                                                                                                       $count++;
                                                                                                                                       $time = $row['date'];

                                                                                                                     ?>
                                                                                                                                       <tr>
                                                                                                                                                <td><?php echo $count ?></td>
                                                                                                                                                <td>
                                                                                                                                                         <?php echo $row['amount']  ?>
                                                                                                                                                </td>
                                                                                                                                                <td>
                                                                                                                                                         <label class="badge badge-gradient-danger"><?php echo 'Sucessfully' ?></label>
                                                                                                                                                </td>
                                                                                                                                                <th><time style="font-weight:100;text-transform:capitalize" class="timeago" datetime="<?php echo $row['date'] ?>"></time></th>
                                                                                                                                       </tr>


                                                                                                                              <?php

                                                                                                                              }
                                                                                                                     } else { ?>

                                                                                                                              <caption>Empty Table</caption>
                                                                                                                     <?php
                                                                                                                     }

                                                                                                                     ?>


                                                                                                            </tbody>
                                                                                                   </table>
                                                                                          </div>
                                                                                 </div>
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
         <script src="../../assets/js/jquery.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
         <script>
                  jQuery(document).ready(function() {
                           jQuery("time.timeago").timeago();
                  });
         </script>

         <script src="../../assets/vendors/js/vendor.bundle.base.js">
         </script>
         <!-- endinject -->
         <!-- Plugin js for this page -->
         <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
         <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
         <!-- End plugin js for this page -->

         <!-- inject:js -->
         <script src="../../assets/js/off-canvas.js"></script>
         <script src="../../assets/js/hoverable-collapse.js"></script>
         <script src="../../assets/js/misc.js"></script>
         <!-- endinject -->
         <!-- Custom js for this page -->
         <script src="../../assets/js/dashboard.js"></script>
         <script src="../../assets/js/todolist.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

         <script>
                  jQuery(document).ready(function() {
                           jQuery("time.timeago").timeago();
                  });
         </script>

</body>

</html>