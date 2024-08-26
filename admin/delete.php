<?php
include("../db.php");
$id = $_POST['name'];
$res=mysqli_query($conn,"DELETE FROM `carstbl` WHERE car_id='$id'");
if($res){
    echo "success";
}
else{
    echo "failed";
}
// echo $name;

?>