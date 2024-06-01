<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$server = "localhost";
$user = "root";
$pwd = "";
$database = "car_rental_sys";
$conn = mysqli_connect($server, $user, $pwd, $database);
if (!$conn) {
    die("Connection Failed:".mysqli_error($conn));
   
} 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$name=$fname." ".$lname;
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$bday=$_POST["dob"];
$username=$_POST["uname"];
$phone=$_POST["phone"];
$img=$_FILES["img"]["tmp_name"];
$id=$_POST["iid"];
$adimgImg="image/admin/".$id;
// echo "$name $username $phone $email $gender $bday $password $img $id";

$sql="UPDATE `admintbl` SET `Name`='$name',`user_name`='$username',`user_pwd`='$password',
`gender`='$gender',`email`='$email',`dob`='$bday',`phone`='$phone',`admin_img`='$adimgImg' WHERE `admin_id`='$id' ";


if(mysqli_query($conn,$sql) and move_uploaded_file($img,$adimgImg)){
    echo "Booking Confirmed";
}
else{
    echo "Error:".mysqli_error($conn);
}
?>