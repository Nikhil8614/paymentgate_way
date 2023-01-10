<?php
//session start
session_start();


require("./instamojo-php-0.4/src/Instamojo.php");

require("./credn.php");

//create api object
$api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN, 'https://test.instamojo.com/api/1.1/');
//fetching data from form

$orderid=$_POST["order_id"];
$amount=$_POST["price"]*$_POST["qnty"];
$email=$_POST["emailid"];
$phone=$_POST["phoneno"];
$qnty=$_POST["qnty"];
$price=$_POST["price"];


$custid="sainikhil";
// storing details in session

$_SESSION["order_id"]=$orderid;
$_SESSION["amount"]=$amount;
$_SESSION["email"]=$email;
$_SESSION["phone"]=$phone;
$_SESSION["custid"]=$custid;


//1. payment request creation
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Testing",
        "amount" => $amount,
        "phone" => $phone,
        "send_email" => true,
        "email" => $email,
        "redirect_url" => "http://localhost/Coffee%20Shop%20website/succes.php"
        ));
        $url=$response["longurl"];
      header("location:$url");  
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}




?>