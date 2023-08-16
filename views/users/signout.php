<?php
// INCLUDE CONNECTION TO MYSQL DATABASE
require('../../backend/config/connection.php');

// INCLUDE USER SESSION AUTH AND DETAILS
require('../../backend/config/users/session.php');

if(isset($_GET['out_id'])){
  session_destroy();
}else{
  header('loaction: ./dashboard.php') ;  
}

?>