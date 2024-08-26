<?php
$server = "localhost";
$user = "root";
$pwd = "";
$database = "car_rental_sys";
$conn = mysqli_connect($server, $user, $pwd, $database);
if (!$conn) {
    die("Connection Failed:".mysqli_error($conn));
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="icon" href="images/logo31.png" type="image/x-icon">
<link rel="icon" href="../images/logo31.png" type="image/x-icon">
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


</head>
<body>
    
</body>
</html>