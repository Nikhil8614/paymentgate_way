<?php
$sever = "localhost";
$username = "root";
$password = "";
$dbname = "contact details";
$con = mysqli_connect($sever, $username, $password, $dbname);
if(!$con)
{
   echo "not connect";

}
$name = $_POST['name'];
$phone = $_POST['Phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$password =$_POST['pas'];

$sql = "INSERT INTO `entry_data`(`name`, `phone`, `city`, `email`, `password`) VALUES ('$name','$phone','$city','$email','$password')";

$result = mysqli_query($con, $sql);
if($result)
{
    echo "data submited";
}
else{
    echo "Error...!"; 
}

?>