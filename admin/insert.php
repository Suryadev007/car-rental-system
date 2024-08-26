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
$name = $_POST['name'];
$email = $_POST["email"];
$gen=$_POST["gender"];
$dob=$_POST["dob"];
$phn=$_POST["phone"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$img=$_FILES["img"]["name"];
$adminId=$uname;
$adimgImg="image/admin/".$adminId;
$tmp=$_FILES["img"]["tmp_name"];
echo $tmp.$uname;
// echo "$name  $email $gen $dob $phn $uname $pwd $img";
$sql="INSERT INTO `admintbl`(`admin_id`, `Name`, `user_name`, `user_pwd`, `gender`, `email`, `dob`, `phone`, `admin_img`) 
VALUES ('$adminId','$name','$uname','$pwd','$gen','$email','$dob','$phn','$adimgImg')";

if(mysqli_query($conn,$sql) and move_uploaded_file($tmp,$adimgImg)){
    echo "Booking Confirmed";
}
else{
    echo "Error:".mysqli_error($conn);
}
?>