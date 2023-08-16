<?php
include('../../connection.php');
include('../session.php');
if (isset($_GET['status'])) {

         if ($_GET['status'] == 'cancelled') {
                  // echo 'YOu cancel the payment';
                  header('location: ../../../../views/users/deposite.php');
         } else if($_GET['status'] == 'successful'){
                  $txid = $_GET['transaction_id'];
                  $curl = curl_init();
                  curl_setopt_array($curl, array(
                           CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                           CURLOPT_RETURNTRANSFER => true,
                           CURLOPT_ENCODING => "",
                           CURLOPT_MAXREDIRS => 10,
                           CURLOPT_TIMEOUT => 0,
                           CURLOPT_FOLLOWLOCATION => true,
                           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                           CURLOPT_CUSTOMREQUEST => "GET",
                           CURLOPT_HTTPHEADER => array(
                                    "Content-Type: application/json",
                                    "Authorization: Bearer FLWSECK_TEST-ca90aabecd402b8b05fde68cb4e8e5b6-X"
                           ),
                  ));

                  $response = curl_exec($curl);
                  curl_close($curl);
                  $res = json_decode($response);

                  if ($res->status) {
                           $amountPaid = $res->data->charged_amount;
                           $amountToPay = $res->data->meta->price;
         
                           if ($amountPaid >= $amountToPay) {
                                    $select = mysqli_query($conection , "SELECT * FROM  `clients` WHERE `id`='$login_id'");
                                    while($row = mysqli_fetch_assoc($select)){
                                             $bal = $row['balance'];
                                    }
                                    $total = $bal + $amountPaid;
                                    

                                    $insert = mysqli_query($conection , "INSERT INTO `deposit`(`id`, `user_id`, `amount`, `status`) VALUES ('','$login_id','$amountPaid','0')");

                                    $update = mysqli_query($conection , "UPDATE `clients` SET `balance`='$total' WHERE `id`='$login_id'");
                                    $Notifications = mysqli_query($conection, "INSERT INTO `notification`(`id`, `user_id`, `message`, `time`) VALUES ('','$login_id','A deposite has been made to you account','$date')");

                                    if($insert && $update){
                                        header('location: ../../../../views/users/deposite.php');   
                                    }else{
                                       echo "<script>alert('Deposit to your account fail')</script>";
                                       header('location: ../../../../views/users/deposite.php'); 
                                    }
                                    //* Continue to give item to the user
                           } else {
                                    echo 'Fraud transactio detected';
                           }
                  } else {
                           echo 'Can not process payment';
                  }
                 
         }
};

?>




