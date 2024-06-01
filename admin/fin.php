<?php
$server = "localhost";
$user = "root";
$pwd = "";
$database = "car_rental_sys";
$conn = mysqli_connect($server, $user, $pwd, $database);
if (!$conn) {
    die("Connection Failed:".mysqli_error($conn));
   
}
$bid=$_POST["name"];
// echo $bid;
$sql = "UPDATE `bookingtbl` SET `status` = '1' WHERE `bookingtbl`.`booking_id` = $bid;";
if(mysqli_query($conn,$sql)){
    echo "Booking Confirmed";
}
else{
    echo "Error:".mysqli_error($conn);
}
?>