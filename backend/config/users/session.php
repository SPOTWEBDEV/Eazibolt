<?php
session_start();

if(!isset($_SESSION['login_id'])) return header('location: ./login.php');

$login_id = $_SESSION['login_id'];


$userDetail = mysqli_query($conection, "SELECT * FROM `clients` WHERE `id`='$login_id'");
while ($row = mysqli_fetch_assoc($userDetail)) {
         $username = $row['username'];
         $email = $row['email'];
         $img = $row['image'];
         $isEmail = $row['isEmail'];
         $balance = $row['balance'];
         $EaziboltCoin = $row['EaziboltCoin'];
         $password = $row['password'];
}





?>