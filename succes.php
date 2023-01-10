<?php

//session start
session_start();


require("./instamojo-php-0.4/src/Instamojo.php");

require("./credn.php");
require("./connection.php");
//create api object
$api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN, 'https://test.instamojo.com/api/1.1/');




try {
    $payment_re_id=$_GET["payment_request_id"];
    $payment_id=$_GET["payment_id"];

    $response = $api->paymentRequestPaymentStatus($payment_re_id,$payment_id);
   
   // fetching the data from  responce
   
   $status=$response['status'];
   if(strcmp($status,'Failed')==0){
echo('Failed');
   }
   else{
    // sending data to database
    
    $orderid=$_SESSION["order_id"];
    $custid=$_SESSION["custid"];
    $amount=$_SESSION["amount"];
    $paymode=$response["payment"]["instrument_type"];
    $query="INSERT INTO `purchases`(`orderid`, `paymentid`, `custid`, `amount`, `paymentmode`, `txnstatus`) VALUES ('$orderid','$payment_id','$custid','$amount','$paymode','$status')";
    if(mysqli_query($conn,$query)){
        echo '<h1>Order placed successfully</h1>';
        echo '<h2>payment Id:</h2> '.$payment_id;
        echo '<h2>Amount:</h2> '.$amount;
        echo '<h2>Status:</h2> '.$status;
    }
    else{
        echo 'Error '.mysqli_error($conn);
    }
   }


}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>