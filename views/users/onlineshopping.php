<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

if (isset($_POST['cartBtn'])) {
         $cardId = $_POST['cardId'];


         $check = mysqli_query($conection , "SELECT * FROM `cart` WHERE `user_id`='$userLogin' AND `card_id`='$cardId' ");

         if(mysqli_num_rows($check)){
                  echo "<script>alert('This item is already add to cart')</script>";
         }else{
                  $insertCart = mysqli_query($conection, "INSERT INTO `cart`(`user_id`, `card_id`) VALUES ('$userLogin','$cardId')");

                  if ($insertCart) {
                           echo "<script>alert('SUCESSFULLY')</script>";
                  } else {
                           echo "<script>alert('NOT-SUCESSFULLY')</script>";
                  }
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
                                                               </span> Online Shopping
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
                                                                                          <div class="row">
                                                                                                   <?php

                                                                                                   $select = mysqli_query($conection, "SELECT * FROM `items`WHERE `count`>0");
                                                                                                   while ($row = mysqli_fetch_assoc($select)) { ?>

                                                                                                            <div class="col">
                                                                                                                     <div class="card" style="width: 18rem;">
                                                                                                                              <img style="height: 250px !important;" src="../../upload/item/<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                                                                                                                              <div class="card-body">
                                                                                                                                       <h5 class="card-title"><?php echo $row['name']  ?></h5>
                                                                                                                                       <p class="card-text"><?php echo $row['des']  ?></p>
                                                                                                                              </div>
                                                                                                                              <ul class="list-group list-group-flush">
                                                                                                                                       <li class="list-group-item">Product Rating:⭐⭐⭐⭐</li>
                                                                                                                                       <li class="list-group-item">Number of Buyer: <?php echo $row['sold'] ?></li>
                                                                                                                                       <li class="list-group-item">Price : $<?php echo $row['amount']  ?></li>
                                                                                                                                       <li class="list-group-item d-flex">Cart : <form method="POST">
                                                                                                                                                         <input type="hidden" name="cardId" value="<?php echo $row['id'] ?>">
                                                                                                                                                         <button style="margin-left: 20px !important;" class="btn btn-sm bg-primary text-white ml-2 cartBtn" id="cartBtn" name="cartBtn" cardId="<?php echo $row['id'] ?>">Add to cart</button>
                                                                                                                                                </form>
                                                                                                                                       </li>
                                                                                                                                       <!-- <div style="display:flex; width:100%; justify-content:between !important; align-items:center; gap:10px">
                                                                                                                                       <div style="width:50%; font-size:20px; text-transform:capitalize">price</div>
                                                                                                                                       <div style="width: 50%; float:left;  display:flex; justify-content:flex-end;" class="mt-2"><button style="border: none;width:fit-content" class="bg-primary btn-lg text-white">$304</button></div>
                                                                                                                              </div> -->
                                                                                                                              </ul>
                                                                                                                              <div class="card-body">
                                                                                                                                       <button style="border: none;width:100%" class="bg-primary btn-lg text-white">Buy: $<?php echo $row['amount']  ?></button>
                                                                                                                              </div>
                                                                                                                     </div>

                                                                                                            </div>

                                                                                                   <?php }

                                                                                                   ?>


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
         <script src="../../assets/js/jquery.js"></script>


         <!-- <script>
                  $(() => {
                           const cartBtn = document.querySelectorAll('.cartBtn');
                           cartBtn.forEach(el => {
                                    console.log(el);
                                    el.addEventListener('click', () => {
                                             const cart_id = el.getAttribute('cardId')
                                             console.log(cart_id);

                                             $.ajax({
                                                      url: "http://localhost/eazibolt/backend/ajaxcall/users/addtocart.php",
                                                      method: "POST",
                                                      data: {
                                                               cart_id: cart_id,
                                                               from: 'addtocart'
                                                      },
                                                      sucess: function(data) {
                                                               console.log(data);
                                                      }
                                             })
                                    })
                           })
                  })
         </script> -->


</body>

</html>