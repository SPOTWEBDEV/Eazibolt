<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

$error_message = '';

if (isset($_POST['withdrawal'])) {
    $accountnumber = $_POST['accountnumber'];
    $amount = $_POST['amount'];
    $pass = $_POST['password'];
    $bankname = $_POST['bankname'];
    $accountname = $_POST['accountname'];

    $hash_password = md5($pass);

    date_default_timezone_set('Africa/Lagos');
    $date = date("Y-m-d G:i:s");

    if (!empty($accountname) && !empty($accountnumber) && !empty($password) && !empty($bankname) && !empty($accountname)) {
        if ($hash_password == $password) {
            if ($amount <= $balance) {
                if ($amount < 0 ||  is_nan($amount)) {
                    $error_message = "Amount is not a number";
                } else {
                    $checkWithdrawalStatus = mysqli_query($conection, "SELECT * FROM `withdrawal` WHERE `user_id`='$login_id'");
                    if (mysqli_num_rows($checkWithdrawalStatus)) {
                        $error_message = 'You already have a pending withdrawal';
                    } else {
                        $insertIntoWidrawalTable = mysqli_query($conection, "INSERT INTO `withdrawal`(`id`, `user_id`, `bankname`, `accountNumber`, `accountName`, `amount`,`date`) VALUES ('','$login_id','$bankname','$accountnumber','$accountname','$amount','$date')");
                        $Notifications = mysqli_query($conection, "INSERT INTO `notification`(`id`, `user_id`, `message`, `time`) VALUES ('','$login_id','You have place a withdrawal','$date')");
                        if ($insertIntoWidrawalTable) {
                            $error_message = 'Successfully';
                        } else {
                            $error_message = 'Enable to place your withdrawal, try again';
                        }
                    }
                }
            } else {
                $error_message = "Amount must be less or equal to user balance";
            }
        } else {
            $error_message = "Password is incorrect";
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
    <title><?php echo $sitename ?> - User Withdrawal Page</title>

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
                            <span style="background:#155bd5;color:white" class="page-title-icon  text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Withdrawal
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
                                <form method="POST" class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputAccountNumber">Account Number</label>
                                        <input type="number" class="form-control" name="accountnumber" id="exampleInputAccountNumber" placeholder="Account Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAccountName">Account Name</label>
                                        <input type="text" name="accountname" class="form-control" id="exampleInputAccountName" placeholder="Account Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBankName">Bank Name</label>
                                        <input type="text" name="bankname" class="form-control" id="exampleInputBankName" placeholder="Account Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAmount">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div>

                                    <button style="background:#155bd5;color:white" name="withdrawal" type="submit" class="btn ">Placed Withdrawal</button>
                                    <button class="btn ">Cancel</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>

</body>

</html>