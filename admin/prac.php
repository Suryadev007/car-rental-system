<?php
include "../db.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$carName = $_POST["car-name"];
$carCat = $_POST["car-cat"];
$carTrans = $_POST["car-trans"];
$carAc = $_POST["car-ac"];
$carBrand = $_POST["car-brand"];
$carRent = $_POST["car-rent"];
$carCount = $_POST["car-count"];
$carLug = $_POST["car-lug"];
$carDoors = $_POST["car-doors"];
$carPsg = $_POST["car-psg"];
$enter = $_POST["ent"];

$num=mysqli_query($conn,"SELECT MAX(car_id) as num from carstbl where car_category='$carCat'");
 $num=mysqli_fetch_assoc($num);
 $res =$num['num'];
 if($res==""){
    $count=sprintf('%03d',$res+1);
    
 }
 else{
    $a=substr($res,0,-3);
    $b=substr($res,-3);
    $b+=1;
    $count=sprintf('%03d',$b);
    
 }
 $carId=$carCat.$count;
// echo $carId;

$carImg = $_FILES["car-img"]['name'];
$typ=explode(".",$carImg);
$typ=$typ[1];
// echo $typ;
$dir="../images/".$carCat."/".$carName.".".$typ;
$dirI="images/".$carCat."/".$carName.".".$typ;
// echo $dir;

$ins="INSERT INTO `carstbl` (`car_id`, `car_name`, `brand`, `car_category`, `car_rent`, `avail_no`, `car_img`, `doors`, `passenger`, `transmission`, `luggage`, `ac`) 
VALUES ('$carId', '$carName', '$carBrand', '$carCat', '$carRent', '$carCount', '$dirI', '$carDoors', '$carPsg', '$carTrans', '$carLug', '$carAc')";
if(isset($enter)){
    
    if (move_uploaded_file($_FILES["car-img"]["tmp_name"],$dir) and mysqli_query($conn,$ins)) {
      echo ' <script> alert("Car Added Succesfully");
     
     var timer = setTimeout(function() {
       window.location="add-cars.php"
   }, 1000);
      </script>';
     } else {
        echo "Upload failed!";
     }
}

// echo "<br>$carId..
// $carName..
// $carBrand..
// $carCat..
// $carRent..
// $carCount..
// $dir..
// $carDoors..
// $carPsg..
// $carTrans..
// $carLug..
// $carAc..";
?>