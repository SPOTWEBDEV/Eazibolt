<?php

include('../../connection.php');
include('../session.php');

if (isset($_POST['deposit'])) {
         $amount = $_POST['amount'];

       $request = [
                  'tx_ref' => time(),
                  'amount' => $amount,
                  'currency' => 'NGN',
                  'payment_options' => 'card',
                  'redirect_url' => 'http://localhost/UniCap\backend\config\users\Deposit\status.php',
                  'customer' => [
                           'email' => $email,
                           'name' => $username
                  ],
                  'meta' => [
                           'price' => $amount
                  ],
                  'customizations' => [
                           'title' => 'Deposit To My UniCap Account',
                           'description' => 'sample'
                  ]
         ];
         $curl = curl_init();
         curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => json_encode($request),
                  CURLOPT_HTTPHEADER => array(
                           'Authorization: Bearer FLWSECK_TEST-ca90aabecd402b8b05fde68cb4e8e5b6-X',
                           'Content-Type: application/json'
                  ),
         ));
         $response = curl_exec($curl);

         curl_close($curl);
         $res = json_decode($response);
        
         if ($res->status == 'success') {
                  $link = $res->data->link;
                  header('location: ' . $link);
         } else {
                  echo 'We can not process your payment';
         }

}


?>

