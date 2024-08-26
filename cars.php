<?php
include "db.php";
?>


<!---php ends --->
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="images/logo31.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/logo312.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="slider" style="height:100px;">
    <?php include "header.php";
    session_start();
    
    $catArr = array("lux" => "luxary", "spt" => "sports", "suv" => "suvs", "con" => "convertible", "sed" => "sedan", "reg" => "regulars");
    $cat = $_GET['cat'];
    if ($cat == "all") {
      $sql = "SELECT * FROM `carstbl` ";
    } else {
      $sql = "SELECT * FROM `carstbl` WHERE car_category='$catArr[$cat]' ";
    }
    //echo $catArr[$cat];
    $result = mysqli_query($conn, $sql);
    $carData = mysqli_fetch_all($result, MYSQLI_BOTH);
    $carRows = mysqli_num_rows($result);

    //echo "$carName $carPrice $carCount $carImg";
    ?>
  </div>
  <div class="mm" id="mm">
    <img src="https://duruthemes.com/demo/html/renax/dark/img/slider/3.jpg" alt="" class="w-100 h-100 ">

  </div>
  <div class="info"> Choose <Span style="color:white; font-size:0.8em; " class="border-start border-warning p-2"> Your
      Car</Span></div>
  <div class="body container d-none border bg-warning border-warning rounded-pill">
    <div class="row text-center">
      <div class="col-md ">
        <div class="f-data border-2 border-end border-dark">

          <select name="" id="car-type" class="sct">
            <option disabled selected value="">Choose Car Type</option>
            <option value="suv">Suv</option>
            <option value="sed">Sedan</option>
            <option value="lux">Luxary Cars</option>
            <option value="spt">Sports Cars</option>
            <option value="con">Convertible</option>
            <option value="reg">Regular Cars</option>
          </select>
        </div>

      </div>
      <div class="col-md">
        <div class="f-data">
          <select name="" id="car-typ" class="sct">
            <option value="volvo">Price</option>
            <option value="volvo">High to Low</option>
            <option value="saab">Low to High</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid my-5">
    <div class="row">
      <?php
      for ($i = 0; $i < $carRows; $i++) {
        $carName = $carData[$i]["car_name"];
        $carPrice = $carData[$i]["car_rent"];
        $carCount = $carData[$i]["avail_no"];
        $carImg = $carData[$i]["car_img"];
        $carcat = $carData[$i]["car_category"];
        $carid = $carData[$i]["car_id"];
        if ($carCount<= 0) {

          $avail = "inactiveLink";
          $count = "*Not available";
        }
        else{
          $avail = "";
          $count = "";
        }
        if ($carImg == "") {
          $carImg = "https://assets.choosemycar.com/coming-soon.png";
        }
        echo "
    <div class='col-md-6 p-5 my-5'>
      <div class='carCard $avail'>
        <div class='carImg'>
          <img src='$carImg' alt='' class= 'w-100 h-100 rounded-5'>  
        </div>
        <div class='capt text-light rounded-5 p-3'>
          <div class='row'>
            <div class='col-md-8' ><h2 class='car-name' value='$carName'>$carName</h2>
            <h4 '> <span style='color:#f5b754' class='fw-bold fa-2x '>$$carPrice </span > /day </h4>
            <h5 class='text-danger'>$count</h5> <h2 class='car-cat d-none'>$carcat</h2>
            </div>
            <div class='col-md-4 pt-4'><a style='text-decoration:none' href='car-details.php?carid=$carid' class='$avail button-1 ' >Get now</a></div>

          </div>
          

          
          
        </div>
      </div>
    </div>

    ";
      } ?>
    </div>
  </div>

</body>

</html>
<style>
  .info {
    position: absolute;
    top: 40%;
    color: #f5b754;
    font-weight: bold;
    left: 30%;
    transform: translate(-50%, -50%);
    font-size: 4.5em;

  }

  .mm {
    width: 100%;
    height: 85vh;
    top: 0;
    filter: brightness(50%);

  }

  .inactiveLink {
    pointer-events: none;
    cursor: default;
    text-decoration: none;
  }

  .inactiveLink img {
    filter: grayscale(100%);
  }

  .body {
    margin-top: 1%;
    width: 50%;
  }

  .sct {
    background: transparent;
    border: none;
    font-size: 1.5em;
    padding: 20px;
    color: #1b1b1b;
    font-weight: bold;
    width: 100%;
  }

  .f-data {
    font-size: 14px;
    padding: 10px;
    background: none;
    color: white;
  }

  select option:checked {
    background: #f5b754;
    border: none;
    color: #1b1b1b;

  }

  .sct option {
    border: none;
    font-size: 14px;
    padding: 25px;
    color: white;
    padding: 30px;
    background: #1b1b1b;
    font-weight: bold;
    height: 50px;
  }

  .sct option:after {
    border: none;
  }

  input[type="select"]:checked {
    outline: none;
    background-color: gold;
  }

  select:focus {
    outline: none;
    box-shadow: 0 0 3px 1px #227755;
    border-color: gold;
    -moz-box-shadow: 0 0 0 transparent;
    -webkit-box-shadow: 0 0 0 transparent;
  }

  select option:hover {

    background-color: gold;
    color: black;
  }

  select:after {
    content: " ";
    display: inline-block;
    width: 24px;
    height: 24px;
    background: blue;
  }

  .carCard {
    height: 400px;
    width: 100%;
    overflow: hidden;
  }

  .carImg {
    height: 100%;
    width: 100%;
    transition: 800ms ease-in;
    overflow: hidden;
    border-radius: 25px;

  }

  .capt {
    position: absolute;
    margin: -5%;
    width: 90%;
    left: 10%;
    text-align: center;
    background: #222;
  }

  .carCard:hover img {
    transform: scale(1.1);
    transition: .3s ease-in-out;
    border-radius: 25px;
  }

  .button-1,
  .button-2 {
    -webkit-animation-delay: .8s;
    animation-delay: .8s;
    margin-right: 15px;
    margin-bottom: 15px;
    font-size: 14px;
  }

  .an {
    text-decoration: none;

  }

  .button-1 {
    display: inline-block;
    height: auto;
    width: auto;
    padding: 14px 42px;
    border: 1px solid #f5b754;
    border-radius: 30px;
    background-color: #f5b754;
    color: #1b1b1b;
    font-weight: 300;
    text-align: center;
    font-family: 'Outfit', sans-serif;
    font-size: 14px;
    transition: border-color 300ms ease, transform 300ms ease, background-color 300ms ease, color 300ms ease;
    transform-style: preserve-3d;
  }

  [data-overlay-dark] .button-1 span,
  .button-1 span {
    font-size: 10px;
    margin-left: 5px;
    color: #1b1b1b;
  }

  [data-overlay-dark] .button-1 i,
  .button-1 i {
    font-style: normal;
    font-size: 14px;
    padding-right: 5px;
    color: #1b1b1b;
  }

  .button-1:hover {
    border: 1px solid #fff;
    background-color: #fff;
    color: #1b1b1b;
    transform: translate3d(0px, -6px, 0.01px);
    text-decoration: none;
  }

  .button-1:hover span {
    color: #1b1b1b;
  }
</style>

<!-- <script>
  $('#car-type').on('change', function() {
    var type=this.value;
  window.location="cars.php?+cat="+type;
  
});
//console.log($(".car-name")[0].innerHTML);
// var $j_object = $(".car-name");
// $j_object.each( function(i) { console.log(i) } );
var car_names=$(".car-cat");
car_names.each(function (index) {
  console.log(car_names[index].innerHTML);
  car_names.filter(function(){

  })
})

</script> -->