<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');


// REGISTER USER
$error_message = "";
if (isset($_POST['regBtn'])) {
     // grabing the registeration form input
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];

     // hash user password
     $hash_password = md5($password);

     // check if the form input is empty
     if (!empty($username) && !empty($email) && !empty($password) && !empty($cpassword)) {

          // checking if the password match the confirm password
          if ($password === $cpassword) {

               // checking if another user has use the email
               $fetchEmail = mysqli_query($conection, "SELECT `email` FROM `clients` WHERE `email`='$email'");
               if (mysqli_num_rows($fetchEmail)) {
                    // if yes, display an error
                    $error_message = "Email is already taking, Please select another email";
               } else {
                    // continous with the validation of the registeration form

                    $target_dir = "../../upload/Profile/";
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
                                   $insertUserInfo = mysqli_query($conection, "INSERT INTO `clients`(`username`, `email`, `image`, `password`) VALUES ('$username','$email','$image','$hash_password')");

                                   if ($insertUserInfo) {
                                        header('location: ./login.php');
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
               }
          } else {
               $error_message = "Confirm password does not match the input password";
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
     <title><?php echo $sitename ?> - Registeration Page</title>
     <link rel="stylesheet" href="../../assets/css/main.css">
     <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="../../assets/css/style.css">
     <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
     <style>
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
                                             <h4 style="font-size:30px;color:var(--primary)" class="card-title text-xl"><?php echo $sitename ?> User Registeration From</h4>
                                             <?php

                                             if ($error_message != "") { ?>

                                                  <p class="card-description  bg-danger text-white py-3 px-2">
                                                       <?php echo $error_message; ?>
                                                  </p>

                                             <?php }

                                             ?>
                                             <form method="POST" class="forms-sample mt-5" enctype="multipart/form-data">
                                                  <div class="form-group">
                                                       <label for="exampleInputUsername1">Username</label>
                                                       <input type="text" class="form-control" id="exampleInputUsername1" name="username" placeholder="Username">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Email
                                                            address</label>
                                                       <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputImage">Profile Image</label>
                                                       <input type="file" class="form-control" id="exampleInputImage" name="theimage">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputPassword1">Password</label>
                                                       <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputConfirmPassword1">Confirm
                                                            Password</label>
                                                       <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="cpassword" placeholder="Password">
                                                  </div>
                                                  <div>
                                                       Already have an account? <a href="./login.php">Login </a>
                                                  </div>

                                                  <button type="submit" name="regBtn" class="btn text-white mt-3" style="background:var(--primary);">Submit</button>

                                             </form>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>

</body>

</html>