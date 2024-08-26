<?php
include ("db.php");


if (isset($_POST["qrbtn"])) {
    $qrName = $_POST["qrName"];
    $qrNumber = $_POST["qrNumber"];
    $qrEmail = $_POST["qrEmail"];
    $qrSubject = $_POST["qrSubject"];
    $qrquery = $_POST["qrquery"];
    //echo  " $qrName $qrNumberr $qrEmail $qrSubject $qrquery";

    $sql_query = "INSERT INTO `querytbl` (`name`, `email`, `number`, `subject`,  `query`,`status`) 
    VALUES ('$qrName', '$qrEmail', '$qrNumber', '$qrSubject', '$qrquery','0')";

    $result_query = mysqli_query($conn, $sql_query);
}
// feedback
if (isset($_POST["feedback-submit"])) {
    $ratings = $_POST["stars"];
    $fname = $_POST["fname"];
    $fmessage = $_POST["fmessage"];
    $fimage = $_FILES["fimage"]["name"];
    $feed = $_POST["feedback"];
    $dir = "images/gallery/" . $fimage;
    // echo " <script> alert($ratings $fname $fmessage $fimage) </script>";
    // echo "$fname $fimage $feed $fmessage $ratings";
    $sql_feedback = "INSERT INTO `feedbacktbl` (`name`, `image`, `feedback`, `message`, `ratings`)
     VALUES ('$fname', '$dir','$feed' ,'$fmessage', '$ratings')";
    $result_feedback = mysqli_query($conn, $sql_feedback);
    move_uploaded_file($_FILES["fimage"]["tmp_name"], $dir);


}
if ($result_feedback or $result_query) {

    echo ' <script>
   swal({
    title: "Sweet!",
    text: "Here`s a custom image.",
    imageUrl: "https://t3.ftcdn.net/jpg/05/73/97/96/360_F_573979631_pYfjKG0jaPqpHZY5isuIbuw3E3UPFP7c.jpg"
  });
  
  var timer = setTimeout(function() {
    window.location="contact.php"
}, 2000);
   </script>';
} else {
    echo "not";
}
?>
<style>
    body {
        background: #1b1b1b;
    }
</style>