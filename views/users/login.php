<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

session_start();

$error_message = "";
// when the registeration is click
if (isset($_POST['loginBtn'])) {
     // grabing the registeration form input
     $email = $_POST['email'];
     $password = $_POST['password'];

     // hash user password
     $hash_password = md5($password);

     // check if the form input is empty
     if (!empty($email) && !empty($password)) {

          $select = mysqli_query($conection, "SELECT `id` FROM `clients` WHERE `email`='$email' AND `password`='$hash_password'");
          if (mysqli_num_rows($select)) {
               while ($row = mysqli_fetch_assoc($select)) {
                    $_SESSION['login_id'] = $row['id'];
                    header('location: ./dashboard.php');
               }
          } else {
               $error_message = "Login details is incorrect";
          }
     } else {
          $error_message = "User input is empty";
     }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Eazibolt - Login page</title>
     <link rel="stylesheet" href="../../assets/css/main.css">
     <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="../../assets/css/style.css">
     <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
     <style>
          body {
               background: var(--primary);
          }

          .content-wrapper {
               background: var(--primary);
          }

          .main-panel {
               width: 100% !important;
          }
     </style>

     <div class="container-scroller">
          <div class="container-fluid page-body-wrapper">
               <div class="main-panel">
                    <div class="content-wrapper">
                         <div class="row justify-content-center">
                              <div class="col-md-6 grid-margin stretch-card">
                                   <div class="card">
                                        <div class="card-body">
                                             <h4 style="font-size:30px; color:var(--primary)" class="card-title text-xl">Eazibolt Login Page</h4>
                                             <?php

                                             if ($error_message != "") { ?>

                                                  <p class="card-description  bg-danger text-white py-3 px-2">
                                                       <?php echo $error_message; ?>
                                                  </p>

                                             <?php }

                                             ?>
                                             <form method="POST" class="forms-sample mt-5">

                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Email
                                                            address</label>
                                                       <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputPassword1">Password</label>
                                                       <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                  </div>
                                                  <div>
                                                       Don't have an account? <a href="./registeration.php">Register </a>
                                                  </div>


                                                  <button name="loginBtn" type="submit" class="btn text-white mt-3" style="background:var(--primary);">Login</button>

                                             </form>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>

</body>

</html>