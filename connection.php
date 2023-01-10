<?php
$conn = mysqli_connect('localhost','root','','paymentgateway');
if(!$conn){
    die('connection failes: '.mysqli_connect_error());
}
//echo('connected');
?>