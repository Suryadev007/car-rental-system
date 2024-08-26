<?php
session_start();
include "db.php";
$res = mysqli_query($conn, "SELECT * FROM `carstbl` WHERE avail_no>'0'");
$row = mysqli_num_rows($res);
$data = mysqli_fetch_all($res, MYSQLI_BOTH);
if ($_SESSION["user"] != "") {
    $tmp = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo312.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <script src="assets/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>
    <div class="slider">
        <?php include "header.php";
        if ($_SESSION["ses"]) {
            echo "<script>
          document.getElementById('login').style.display='none';
          document.getElementById('profile').style.display='';
          </script>";

        } ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="display:none">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height:770px;">
                <div class="item active">
                    <img src="images/bentley-bentayga.jpg" alt="Los Angeles" style="filter: brightness(50%)">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="v-middle">
                                        <h6 class="hh6">* Premium</h6>
                                        <h1 class="hh1">Rental Car</h1>
                                        <h5 class="hh5">Bentley Bentayga <span>$600 <i>/ day</i></span></h5> <a
                                            href="car-details.php?carid=Suvs002" class="an button-1 mt-15 mb-15">View
                                            Details <span class=" ti-arrow-top-right"></span></a> <a
                                            href="rent.php?carid=Suvs002" data-scroll-nav="1"
                                            class="an rent button-2 mt-15 mb-15">Rent Now <span
                                                class="ti-arrow-top-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/ford-mustang-gt.jpg" alt="Chicago" style="filter: brightness(50%)">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="v-middle">
                                        <h6 class="hh6">* Premium</h6>
                                        <h1 class="hh1">Rental Car</h1>
                                        <h5 class="hh5">Ford Mustang <span>$550 <i>/ day</i></span></h5> <a
                                            href="car-details.php?carid=Sports002" class="an button-1 mt-15 mb-15">View
                                            Details <span class=" ti-arrow-top-right"></span></a> <a
                                            href="rent.php?id=Sports002" data-scroll-nav="1"
                                            class="an rent button-2 mt-15 mb-15">Rent Now <span
                                                class="ti-arrow-top-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/aston-martin-v8.jpg" alt="New york" style="filter: brightness(50%)">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="v-middle">
                                        <h6 class="hh6">* Premium</h6>
                                        <h1 class="hh1">Rental Car</h1>
                                        <h5 class="hh5">Aston Martin V8 <span>$750 <i>/ day</i></span></h5> <a
                                            href="car-details.php?carid=Luxary001" class="an button-1 mt-15 mb-15">View
                                            Details <span class=" ti-arrow-top-right"></span></a> <a
                                            href="rent.php?id=Luxary001" data-scroll-nav="1"
                                            class="an rent button-2 mt-15 mb-15">Rent Now <span
                                                class="ti-arrow-top-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" style="display:none"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" style="display:none"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    <br>
    <div class="body">
        <div class="container-fluid p-2 text-center mb-4 " style="background:#222;">
            <div class="carLogo">
                <img src="images/car-logo/audi.png" alt="">
                <img src="images/car-logo/mercedes.png" alt="">
                <img src="images/car-logo/nissan.png" alt="">
                <img src="images/car-logo/skoda.png" alt="">
                <img src="images/car-logo/mazda.png" alt="">
                <img src="images/car-logo/bentley.png" alt="">
                <img src="images/car-logo/ferrari.png" alt="">
                <img src="images/car-logo/rolls-royce.png" alt="">
                <img src="images/car-logo/aston-martin.png" alt="">

            </div>
        </div>
    </div>
    <div class="container  mt-5 text-center">
        <h6 class="" style="font-size:2.5em;color:white">Luxary <span style="color:#F5B754;font: size 2.5em;">Car
                Fleet</span></h6>
    </div>
    <div class="carConts mb-5">

        <div class="slider2">
            <div class="owl-carousel">
                <?php
                for ($i = 0; $i < $row; $i++) {
                    $name = $data[$i]["car_name"];
                    $rent = $data[$i]["car_rent"];
                    $carCount = $data[$i]["avail_no"];
                    $carImg = $data[$i]["car_img"];
                    $carcat = $data[$i]["car_category"];
                    $carid = $data[$i]["car_id"];
                    if ($carCount <= 0) {

                        $avail = "inactiveLink";
                        $count = "*Not available";
                    } else {
                        $avail = "";
                        $count = "";
                    }
                    if ($carImg == "") {
                        $carImg = "https://assets.choosemycar.com/coming-soon.png";
                    }
                    echo "<div class='slider-card $avail'>
                    <div class='gh h-100 d-flex justify-content-center align-items-center mb-4 '>
                        <img class='iimg w-100 h-100 ' src='$carImg'
                            alt='' srcset=''>
                    </div>
                    <div class='capt'>
                        <div class='row'>
                            <div class='col-md'>
                                <div class='title'>
                                    <h2 class='text-capitalize '> $name </h2> $ $rent/day <a href='car-details.php?carid=$carid' class='btn dbtn'>Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                }

                ?>
                <!-- <div class='slider-card'>
                    <div class='gh d-flex justify-content-center align-items-center mb-4 '>
                        <img class='iimg w-100' src='https://duruthemes.com/demo/html/renax/dark/img/slider/7.jpg'>
                    </div>
                    <div class='capt'>
                        <div class='row'>
                            <div class='col-md '>
                                <div class='title'>
                                    <h2 >Lamborghini Urus</h2> $750/day <a href='' class='btn dbtn'>Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="slider-card">
                    <div class="gh d-flex justify-content-center align-items-center mb-4 ">
                        <img class="iimg w-100" src="https://duruthemes.com/demo/html/renax/dark/img/slider/7.jpg"
                            alt="" srcset="">
                    </div>
                    <div class="capt">
                        <div class="row">
                            <div class="col-md">
                                <div class="title">
                                    <h2>Lamborghini Urus</h2> $750/day <a href="" class="btn dbtn">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="slider-card">
                    <div class="gh d-flex justify-content-center align-items-center mb-4 ">
                        <img class="iimg w-100" src="https://duruthemes.com/demo/html/renax/dark/img/slider/7.jpg"
                            alt="" srcset="">
                    </div>
                    <div class="capt">
                        <div class="row">
                            <div class="col-md">
                                <div class="title">
                                    <h2>Lamborghini Urus</h2> $750/day <a href="" class="btn dbtn">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="slider-card">
                    <div class=" gh d-flex justify-content-center align-items-center mb-4 ">
                        <img class="iimg w-100" src="https://duruthemes.com/demo/html/renax/dark/img/slider/7.jpg"
                            alt="" srcset="">
                    </div>
                    <div class="capt">
                        <div class="row">
                            <div class="col-md">
                                <div class="title">
                                    <h2>Lamborghini Urus</h2> $750/day <a href="" class="btn dbtn">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="container  text-center" style="margin-top: 50px;">
        <h6 class="" style="font-size:2.5em;color:white">Luxary Car <span
                style="color:#F5B754;font: size 2.5em;">Categories</span></h6>
    </div>
    <div class="container" style="margin-bottom:70px;">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
            <div class="carousel-indicators" style="height:0px;">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="bg-warning mt-1 active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    class="bg-warning mt-1 " aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group">
                        <a href="cars.php?cat=lux" class="vid">
                            <div class="card ">
                                <img src="images/car-logo/luxary-cars.jpg" class="card-img-top rounded-5" alt="...">
                                <h5 class="card-title">Luxary Cars</h5>
                                <div class="curv-butn icon-bg">


                                    <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
                        </a>
                    </div>
                </div>
                <a href="cars.php?cat=spt" class="vid">
                    <div class="card">
                        <img src="images/car-logo/sports-cars.jpg" class="card-img-top rounded-5" alt="...">
                        <h5 class="card-title">Sports Cars</h5>
                        <div class="curv-butn icon-bg">


                            <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
                </a>
            </div>
        </div>
        <a href="cars.php?cat=suv" class="vid">
            <div class="card">
                <img src="images/car-logo/suv.jpg" class="card-img-top rounded-5" alt="...">
                <h5 class="card-title">SUV</h5>
                <div class="curv-butn icon-bg">


                    <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
        </a>
    </div>
    </div>
    </div>

    </div>
    <div class="carousel-item">
        <div class="card-group">
            <a href="cars.php?cat=con" class="vid">
                <div class="card">
                    <img src="images/car-logo/convertible.jpg" class="card-img-top rounded-5" alt="...">
                    <h5 class="card-title">Convertible</h5>
                    <div class="curv-butn icon-bg">


                        <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
            </a>
        </div>
    </div>
    <a href="cars.php?cat=sed" class="vid">
        <div class="card">
            <img src="images/car-logo/sedan.jpg" class="card-img-top rounded-5" alt="...">
            <h5 class="card-title">Sedan</h5>
            <div class="curv-butn icon-bg">
                <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
    </a>
    </div>
    </div>
    <a href="cars.php?cat=reg" class="vid">
        <div class="card">
            <img src="images/car-logo/regular-cars.jpg" class="card-img-top rounded-5" alt="...">
            <h5 class="card-title ">Regular Cars</h5>
            <div class="curv-butn icon-bg">


                <div class="icon"> <i class="fa fa-arrow-circle-up"></i></div>
    </a>
    </div>
    </div>
    </div>

    </div>
    <div class="carousel-item">

    </div>
    </div>

    </div>
    </div>
    </div>
    <footer class="container text-center">
        <div class="row  rounded-5">
            <div class="col-md">
                <div class="f-data border-end">
                    <i class="icn fa fa-whatsapp"></i>
                    <label class="lb text-start" for=""> <span style=" font-size:1.5em;">Call us
                            <br></span>+91-9876543210 </label>
                </div>
            </div>
            <div class="col-md">
                <div class="f-data border-end">
                    <i class="icn fa fa-envelope"></i>
                    <label class="lb text-start" for=""> <span style=" font-size:1.5em;">Write to us
                            <br></span>info@gmail.com </label>
                </div>
            </div>
            <div class="col-md">
                <div class="f-data">
                    <i class="icn fa fa-map-marker"></i>
                    <label class="lb text-start" for=""> <span style="font-size:1.5em;">Address <br></span>XYZ AB-Block
                        LDH </label>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<style>
    .sct {
        background: #1b1b1b;
        border: transparent;
        font-size: 15px;
        padding: 20px;

    }

    .sct:after {
        color: red;
    }

    .sct option:checked {
        background: #f5b754;
        border: none;
        color: #1b1b1b;
        font-size: 14px;

    }

    select option:hover {
        background: red !important;
        color: white;
    }

    select option:checked {
        box-shadow: 0 0 10px 100px red inset !important;
    }

    .sct:focus {
        border: transparent;
    }

    .sct option:hover {
        background-color: #198754;
        color: red;
    }

    .sct option {
        border: none;
        font-size: 14px;
        padding: 25px;
        border: solid red;
        line-height: 1.5em;

    }

    .gh {
        overflow: hidden;
        border-radius: 25px;
    }

    .carousel-indicators button {
        margin-top: 250px;
    }

    .card:hover img {
        transform: scale(0.9);
        box-shadow: 0px 0px 10px 10px #f5b754;
    }

    .card:hover {
        transform: scale(0.9);
    }

    .card-title {
        transition: 0.5s;
    }

    .icon {
        /*background-color: #f5b754;*/
        color: #f5b754;
        font-size: 70px;
        transform: rotate(45deg);
        padding: 10px;
    }

    .curv-butn {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 85px;
        height: 85px;
        line-height: 55px;
        text-align: center;
        border-radius: 50px;
        background: #1b1b1b;

    }

    .card-title {
        position: absolute;
        top: 10%;
        color: white;
        font-size: 21px;
        font-family: 'Merienda';
        left: 15%;
        font-weight: bold;
    }

    .card {
        padding: 10px;
        background: transparent;
        border: none;
        border-radius: 50px;
        transition: 0.5s;
    }

    .card>img {
        filter: brightness(75%);
        border-radius: 50px;
        border: none;
    }

    .f-data:hover i {
        background: #1b1b1b;
        color: gold;
        transition: all 500ms;
    }

    .icn {
        background: gold;
        height: 60px;
        width: 60px;
        font-size: 40px;
        color: #1b1b1b;
        border-radius: 50px;
        margin: 10px;
        padding-top: 10px;
        text-align: center;
    }

    .lb {
        font-size: 14px;
        color: white;
    }

    .slider-card:hover img {
        transform: scale(1.1);
        transition: all 500ms;
        box-shadow: 10px 10px 10px 10px #222;
    }

    .dbtn {
        margin-top: -25px;
        background: #f5b754;
        padding: 14px 21px;
        color: #1b1b1b;
        border-radius: 30px;
        font-family: 'Outfit', sans-serif;
        font-weight: 300;
        font-size: 14px;
        float: right;
    }

    .book->a {
        text-decoration: none;
        color: white;
        font-size: 1.5em;
    }

    .title>a {
        text-decoration: none;
        transition: all 500ms ease;
    }

    .title>a:hover {
        background: white;
        color: #1b1b11;
        ;
    }

    .details {
        padding-left: 15px;
    }

    span {
        color: #999;

    }

    .book {
        display: flex;
    }

    span i {
        color: yellow;
    }

    .slider2 {
        margin-bottom: 200px;
        position: relative;

    }

    .slider-card {
        background-color: transparent;
        margin: 0px 15px 90px 15px;
        padding: 20px;
        /*box-shadow:0 15px 45px -20px ; */


        height: 400px;
    }

    .iimg {
        border-radius: 25px;
        width: 100%;
    }

    .slider2 .owl-item.active.center .slider-card {
        transform: scale(105);
        transition: all 0.5s ease-in-out;
        opacity: 1;
    }

    .carConts {
        height: 60vh;
        display: flex;
        padding: 20px;
        overflow: hidden;
        margin-bottom: 0px;

    }

    .carCont {
        padding: 10px;
        margin-top: -25px;
        background: red;
        ;
    }

    .contImg {
        width: 750px;
    }

    .capt {
        background: #222;
        color: white;
        width: 98%;
        height: 10vh;
        left: 1%;
        border-radius: 15px;
        top: -70px;
        padding: 10px;
        position: relative;
    }

    .carLogo>img {
        aspect-ratio: 3/2;
        object-fit: contain;
        mix-blend-mode: lighten;
        width: 10%;
        color: white;
        overflow-X: scroll;
        transition: 0.5s;
    }

    .carLogo>img:hover {
        transform: scale(1.5);
        transition: 0.5s;

    }

    header {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        background: transparent;
        z-index: 99;
        padding-right: 0;
        padding-left: 0;
        padding-top: 0;
        padding-bottom: 0;
        height: 100px;
        border: none;
    }

    .slider {
        position: absolute;
        top: 0;
        left: 0;
        height: 10px;
        width: 100%;
        background-size: cover;
        background-position: center;

    }

    .v-middle {
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0%;
        -webkit-transform: translate(0%, -50%);
        transform: translate(0%, -50%);
        z-index: 9;
    }

    .caption {
        font-size: 12px;
        font-weight: 300;
        color: black;
        text-transform: uppercase;
        letter-spacing: 6px;
        margin-bottom: 0px;
        -webkit-animation-delay: .2s;
        animation-delay: .2s;
    }

    .hh6 {

        font-size: 12px;
        font-weight: 300;
        color: white;
        text-transform: uppercase;
        letter-spacing: 6px;
        margin-bottom: 0px;
        -webkit-animation-delay: .2s;
        animation-delay: .2s;
    }

    .hh1 {
        font-size: 90px;
        font-weight: 700;
        margin-bottom: 0;
        color: white;
        line-height: 1em;
        -webkit-animation-delay: .4s;
        animation-delay: .4s;
        display: inline-grid;
    }

    .hh5 {
        font-family: 'Outfit', sans-serif;
        font-size: 17px;
        font-weight: 300;
        color: white;
        margin: 15px 0;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .hh5 span {
        display: inline-block;
        font-weight: 700;
        font-size: 21px;
        color: gold;

        margin-left: 20px;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .caption .hh5 span i {
        font-style: normal;
        font-weight: 300;
        font-size: 12px;
        text-transform: uppercase;
        color: white;
        letter-spacing: 0;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
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

    .inactiveLink {
        pointer-events: none;
        cursor: default;
        text-decoration: none;
    }

    .inactiveLink img {
        filter: grayscale(100%);
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

    /* button 2 */
    .button-2 {
        display: inline-block;
        height: auto;
        width: auto;
        padding: 14px 42px;
        border: 1px solid #fff;
        border-radius: 30px;
        background-color: transparent;
        color: #fff;
        font-weight: 300;
        text-align: center;
        font-family: 'Outfit', sans-serif;
        font-size: 14px;
        transition: border-color 300ms ease, transform 300ms ease, background-color 300ms ease, color 300ms ease;
        transform-style: preserve-3d;
    }

    [data-overlay-dark] .button-2 span,
    .button-2 span {
        font-size: 10px;
        margin-left: 5px;
        color: #fff;
    }

    [data-overlay-dark] .button-2 i,
    .button-2 i {
        font-style: normal;
        font-size: 14px;
        padding-right: 5px;
        color: #fff;
    }

    .button-2:hover {
        border: 1px solid #f5b754;
        background-color: #f5b754;
        color: #1b1b1b;
        transform: translate3d(0px, -6px, 0.01px);
        text-decoration: none;
    }

    .button-2:hover i,
    .button-2:hover span {
        color: #1b1b1b;
    }

    .body {
        margin-top: 50%;
    }

    .owl-nav .owl-next,
    .owl-dot {
        display: none;
    }

    .owl-nav .owl-prev {

        display: none;
    }

    footer {
        height: 100px;
        width: 60%;
        /*background-color: gold;*/
    }
</style>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        })
    });
</script>
<script>
    var tmp = "<?php echo $tmp; ?>"
    cls = document.getElementsByClassName("rent");
    if (tmp != 1) {

        for (var i = 0; i < cls.length; i++) {
            cls[i].style.pointerEvents = "none";
        }
    }


</script>