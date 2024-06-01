<?php
include "db.php";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$temp_num=mysqli_query($conn,"SELECT MAX(booking_id) as num from bookingtbl");
$row = mysqli_fetch_array($temp_num);
$num = $row["num"];
$bookid=sprintf('%04d',$num+1);
// echo $bookid;
$transId=$bookid.time();
// echo $transId;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dateFrom = $_POST['dateFrom'];
$dateTo = $_POST['dateTo'];
$carid = $_POST['carid'];
$dlnNo = $_POST['drivingLicNo'];
$dlnName = $_POST['drivingLic'];
$dl = $_POST['dln'];
$alternum = $_POST['alterphone'];
$idav = $_POST['id_prf'];
$dl=$_POST["dln"];
// echo "$dl $idav";

// echo "$dlnName $dl";
$img = $_FILES["customer-dli"]["name"];
$lictmp=$_FILES["customer-dli"]['tmp_name'];

$idprof = $_FILES['customer-idimg']["name"];
$tmpId=$_FILES['customer-idimg']["tmp_name"];
$bdate=date("d-m-Y");

$identproof="images/booking/id-proof/".$bookid;
$license="images/booking/license/".$bookid;

$sql = "INSERT INTO `bookingtbl` (`booking_id`, `user_name`, `user_email`, `user_phone`, `user_addr`, `date_from`, `date_to`, `transaction_id`, `car_id`,`idprof`, `license`, `status`, `proff`, `lic_no`,`booking_date`) 
VALUES ('$bookid', '$name', '$email', '$phone', '$address', '$dateFrom', '$dateTo', '$transId', '$carid','$identproof','$license','0','$idav','$dl','$bdate');";

// echo "$name $email $phone $idav $alternum $address $dateFrom $dateTo $carid $dlnNo $dlnName $img $idprof";
// echo "$imgname[2]";

if($name!="" and $email!="" and $phone!="" and $idav!=""  and $address!="" and $dateFrom!="" and $dateTo!="" and $carid!="" and $dl!="" and $license!="" and $lictmp!="" and $tmpId!=""){
    if(mysqli_query($conn,$sql) and move_uploaded_file($lictmp, "images/booking/license/".$bookid) and move_uploaded_file($tmpId, "images/booking/id-proof/".$bookid)){
        $finalRes=true;
    }
    else{
        $finalRes=false;
    }   
}
?>