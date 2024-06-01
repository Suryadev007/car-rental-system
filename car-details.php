<?php
include "db.php";
$carid = $_GET["carid"];
// echo "$carid";
$sql = "SELECT * FROM `carstbl` WHERE car_id='$carid'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
// print_r($data["car_img"]);
session_start();
$sesStauts = $_SESSION["ses"];
if ($sesStauts) {
    $dis = "";
    echo"<script>document.getElementById('ned').style.display='none';</script>";
} else {
    $dis = "disabled";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo31.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <script src="assets/js/owl.carousel.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include "header.php" ?>
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index:-1">
            <div class="carousel-inner" style="height:600px; background-size:cover">
                <div class="item active">
                    <img src="<?php echo $data['car_img']; ?> " alt="Los Angeles" style="filter: brightness(50%); "
                        class="iimg w-100">
                    <div class="v-middle caption">
                        <div class="">
                            <div class="row borde">
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="v-middle pb-5">
                                        <h4 class="" style="color:gold;"><?php echo $data['car_category']; ?></h4>
                                        <h1 class="fw-bold"><?php echo $data['car_name']; ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container " style="margin-top: 500px; z-index:1;">
        <div class="row ">

            <div class="col-md-8 p-5">
                <h2 class="h2 text-light text" style="margin-top :100px;;">General Information</h2>
                <p>Lorem pretium fermentum quam, sit amet cursus ante sollicitudin velen morbi consesua the miss sustion
                    consation porttitor orci sit amet iaculis nisan. Lorem pretium fermentum quam sit amet cursus ante
                    sollicitudin velen fermen morbinetion consesua the risus consequation the porttiton.</p>
                <h2 class="note"> <span><i class="fa fa-check" aria-gallery.phphidden="true"></i></span> 24/7 Roadside
                    Assistance
                </h2>
                <h2 class="note"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Free Cancellation & Return
                </h2>
                <h2 class="note"> <span><i class="fa fa-check" aria-hidden="true"></i></span> Rent Now Pay When You
                    Arrive </h2>
            </div>
            <div class="col-md-4 ">
                <div class="container ">
                    <div class="car-price p-5" style="height:100px">
                        <h2 style="font-size: 2.5em; ">$<?php echo $data['car_rent']; ?> <span> / rent per day</span>
                        </h2>
                    </div>
                    <div class="car-details p-5">
                        <div class="row text-center border border-0">
                            <div class="col-md p-3  ">
                                <div class="row ">
                                    <div class="col-md p-2 cc  text-end"><img src="images/car-logo/car-door.png"
                                            class="icn h-100" alt=""></div>
                                    <div class="col-md p-2 cc  text-start">
                                        <h2 class=" text-light pt-3">Doors</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pt-4  ">
                                <div class="container px-5 text-center">
                                    <h2 class="col-g pt-3"><?php echo $data['doors']; ?></h2><!--Numner of doors--->
                                </div>
                                </span>
                            </div>

                        </div>

                        <div class="row text-center border border-0">
                            <div class="col-md p-3  ">
                                <div class="row">
                                    <div class="col-md p-2 cc  text-end"><img src="images/car-logo/passenger.png"
                                            class="icn h-100" alt=""></div>
                                    <div class="col-md p-2 cc  text-start">
                                        <h2 class=" text-light pt-3">Passenger</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pt-4  ">
                                <div class="container px-5 text-center">
                                    <h2 class="col-g  pt-3">
                                        <?php echo $data['passenger']; ?>
                                    </h2><!--Numner of passenger--->
                                </div>
                                </span>
                            </div>

                        </div>

                        <div class="row text-center border border-0">
                            <div class="col-md p-3  ">
                                <div class="row">
                                    <div class="col-md p-2 cc  text-end"><img src="images/car-logo/gear-shift.png"
                                            class="icn h-100" alt=""></div>
                                    <div class="col-md p-2 cc  text-start">
                                        <h2 class=" text-light pt-3">Transmission</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pt-4  ">
                                <h2 class="col-g  pt-3">
                                    <div class="container px-5 text-center">
                                        <?php echo $data['transmission']; ?>
                                </h2><!--Transmission--->

                            </div>

                        </div>

                        <div class="row text-center border border-0">
                            <div class="col-md p-3  ">
                                <div class="row">
                                    <div class="col-md p-2 cc  text-end"><img src="images/car-logo/luggage.png"
                                            class="icn h-100" alt=""></div>
                                    <div class="col-md p-2 cc  text-start">
                                        <h2 class=" text-light pt-3">Luggage</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pt-4  ">
                                <div class="container px-5 text-center">
                                    <h2 class="col-g  pt-3">
                                        <?php echo $data['luggage']; ?> bags
                                    </h2><!--Luggage--->
                                </div>
                                </span>
                            </div>

                        </div>

                        <div class="row text-center border border-0">
                            <div class="col-md p-3  ">
                                <div class="row">
                                    <div class="col-md p-2 cc  text-end"><img src="images/car-logo/air-conditioner.png"
                                            class="icn h-100" alt=""></div>
                                    <div class="col-md p-2 cc  text-start">
                                        <h2 class=" text-light pt-3">AC</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pt-4  ">
                                <div class="container px-5 text-center">
                                    <h2 class="col-g  pt-3">
                                        <?php echo $data['ac']; ?>
                                    </h2><!--Air Condition--->
                                </div>
                                </span>
                            </div>

                        </div>

                        <div class="row text-center border border-0">
                            <!-- <a href="rent.php?id=<?php echo $carid;?>">  -->
                                <button id="<?php echo $carid;?>" class="btn bbt rn <?php echo $dis; ?>"> Rent Now </button>
                            <small id="ned" class="mt-3" style="color:#f5b754">*** NEED TO LOG-IN FIRST ***</small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<div class="container ">
    <div class="row">
        <h2 class="h2 text-light text fw-bold mb-4">Image Gallery</h2>
        <div class="col-md owl-carousel">
            <div class="row mb-5 ">
                <div class="col-md-4 overflow-hidden  rounded-5 img-gal "><img class="im w-100 rounded-5"
                        src="https://duruthemes.com/demo/html/renax/dark/img/slider/11b.jpg" alt=""></div>
                <div class="col-md-4 overflow-hidden rounded-5 img-gal "><img class="im w-100 "
                        src="https://duruthemes.com/demo/html/renax/dark/img/slider/11a.jpg" alt=""></div>

            </div>
        </div>

    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md">
            <h2 class="h2 text-light text fw-bold mt-5 mb-3">Rental Conditions</h2>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <div class="row  gh mt-3 p-4  det" id="db1" onclick="fun(this.id,'gh1','if1')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if1"><span> 1. </span> Contract and Annexes </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>
                </div>
                <div class="row py-5 px-4 gd" id="gh1" style="display:none">
                    <div class=" ">
                        <p>In addition to the car rental contract to be signed at the time of delivery, a credit card is
                            required from our individual customers. We request our commercial customers to submit their
                            company documents (tax plate, signature slip, ID photocopy). </p>
                    </div>
                </div>


                <div class="row  gh mt-3 p-4  det" id="db2" onclick="fun(this.id,'gh2','if2')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if2"><span> 2. </span> Driving License and Age </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>
                </div>
                <div class="row py-5 px-4 gd" id="gh2" style="display:none">
                    <div class=" ">
                        <p>The tenant must be 25 years of age and have a 5-year local or valid international driver's
                            license for group A, B, C, D vehicles at the time of the rental agreement.</p>
                    </div>
                </div>


                <div class="row  gh mt-3 p-4  det" id="db3" onclick="fun(this.id,'gh3','if3')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if3"><span> 3. </span> Prices </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>
                </div>
                <div class="row py-5 px-4 gd" id="gh3" style="display:none">
                    <div class=" ">
                        <p>Prices include maintenance and insurance guarantee against third parties (within legal policy
                            limits). 18% VAT (value added tax) is not included. Fuel belongs to the renter. Chauffeur
                            driven service and translator guide are available upon request.</p>
                    </div>
                </div>

                <div class="row  gh mt-3 p-4  det" id="db4" onclick="fun(this.id,'gh4','if4')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if4"><span> 4. </span> Payments </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>
                </div>
                <div class="row py-5 px-4 gd" id="gh4" style="display:none">
                    <div class=" ">
                        <p>The total rental fee is collected at the time of rental. The shortest rental period is 72
                            hours, and in case of delay, 1/3 of the fee is charged for each additional hour. Delays
                            exceeding 3 hours in total are calculated as a full day. A deposit is required from a valid
                            credit card..</p>
                    </div>
                </div>

                <div class="row  gh mt-3 p-4  det" id="db5" onclick="fun(this.id,'gh5','if5')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if5"><span> 5. </span> Traffic Fines </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>

                </div>
                <div class="row py-5 px-4 gd" id="gh5" style="display:none">
                    <div class=" ">
                        <p>Traffic fines toll and illegal toll fees belong to the customer. If the vehicles are detained
                            by traffic, this period is included in the rental period. In necessary cases, we may change
                            these conditions and information and the vehicle type specified in the reservation without
                            prior notice. Our vehicles cannot be taken abroad.</p>
                    </div>
                </div>

                <div class="row  gh mt-3 p-4  det" id="db6" onclick="fun(this.id,'gh6','if6')">
                    <div class="col-md-11 ">
                        <h3 class="h3 " id="if6"><span> 6. </span> Delivery </h3>
                    </div>
                    <div class="col-md-1 text-end"><span class="h3" id="lk"><i class='fas fa-angle-right'></i></span>
                    </div>

                </div>
                <div class="row py-5 px-4 gd" id="gh6" style="display:none">
                    <div class=" ">
                        <p>Delivery is free of charge where our Rent a car company is located. Delivery in these cities
                            is possible with prior notice; hotel, workplace, station, port etc. It can be done in
                            places. For vehicle deliveries and returns in cities where our office is not located, a
                            delivery fee of 0.2 Euro/km is applied, starting from the rented location.</p>
                    </div>
                </div>


            </div>
            </ol>
        </div>
    </div>
</div>

</html>
<style>
    #lk{
        font-size: 1.5em;
    }
    .col-g {
        color: #f5b754;
        font-weight: bold;
    }

    .gd {
        background: #222;
        transition: translateY(10px);
    }

    .gg {
        display: none;
    }



    .gh {
        border-radius: 25px;

    }

    .det {
        background: #222;
        color: white;
    }

    .det span {
        color: #f5b754;
        font-weight: bold;
    }

    .img-gal img {
        border-radius: 35px;

    }

    .img-gal:hover img {
        transform: scale(1.5);
        transition: 0.8s ease-in;

    }

    .bbt {
        display: inline-block;
        height: auto;
        width: 100%;
        margin-top: 20px;
        padding: 15px 42px;
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

    .bbt:hover {
        border: 1px solid #fff;
        background-color: #fff;
        color: #1b1b1b;
        transform: translate3d(0px, -6px, 0.01px);
        text-decoration: none;
    }

    .note span {
        background: #333;

        font-size: 1em;
        padding: 10px;
        border-radius: 50em;
        color: #f5b754;
        margin-right: 10px;
    }

    .note span:hover {
        background: #f5b754;
        color: #333;
    }

    .note {
        padding: 15px;
        width: 40%;
    }

    .note:hover span {
        background: #f5b754;
        color: #333;
    }

    h4 {
        font-size: 1.5em;
        color: #f5b754;
    }

    h2 {
        font-size: 1em;
    }

    .cc {
        height: 30px;
        width: 30px;
    }

    .icn {
        color: red;
        filter: invert(80%) sepia(88%) saturate(1302%) hue-rotate(316deg) brightness(98%) contrast(95%);
        border-radius: 20%;
    }

    .car-price {
        background-color: #f5b754;
        color: #222;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .car-details {

        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        background: #222;
    }

    .car-price h2 {
        font-weight: bold;
        padding-left: 17%;
    }

    .car-price h2 span {
        font-size: 0.5em;
        position: absolute;
        margin: 12px 5px;
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

    .iimg {
        position: absolute;
        top: -100px;
    }

    .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-size: cover;
        background-position: center;
    }

    .v-middle {
        position: absolute;
        width: 100%;
        margin-top: 200px;
        left: 5%;
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

    h6 {

        font-size: 12px;
        font-weight: 300;
        color: white;
        text-transform: uppercase;
        letter-spacing: 6px;
        margin-bottom: 0px;
        -webkit-animation-delay: .2s;
        animation-delay: .2s;
    }

    h1 {

        font-weight: 700;
        margin-bottom: 0;
        color: white;
        line-height: 1em;
        -webkit-animation-delay: .4s;
        animation-delay: .4s;
        display: inline-grid;
    }

    h5 {
        font-family: 'Outfit', sans-serif;
        font-size: 17px;
        font-weight: 300;
        color: white;
        margin: 15px 0;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    h5 span {
        display: inline-block;
        font-weight: 700;
        font-size: 21px;
        color: gold;

        margin-left: 20px;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .caption h5 span i {
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
</style>
<script>
    function fun(outer, inner, header) {
        //gh=outer  gh=inner
        if (document.getElementById(inner).style.display == "block") {
            document.getElementById(inner).style.display = "none";
            $("#" + outer).css({ "background-color": "#222", "color": "white", "border-radius": "25px" })
            $(".det span i").css({
                "color": "#f5b754",
                "transition": "0.2s ease-in",
                "transform": "rotate(0deg)"
            });
            $(".gd").css({ "transition": "0.5s ease-in", "opacity": "1" })
            $("#" + header).css("text-align", "left")
            return 0;
        }
        if (document.getElementById(inner).style.display != "block") {
            document.getElementById(inner).style.display = "block";
            $("#" + outer).css({
                "color": "#222", "background-color": "#f5b754",
                "border-top-left-radius": "25px",
                "border-top-right-radius": "25px",
                "border-bottom-right-radius": "0px",
                "border-bottom-left-radius": "0px",
                "transition": "0.2s ease-in"
            });
            $(".gd").css({
                "transition": "0.2s ease-in", "animation": "fadeDown 5s",
                "border-bottom-right-radius": "25px",
                "border-bottom-left-radius": "25px",
            })


            $(".det span i").css({
                "color": "#222",
                "transition": "0.2s ease-in",
                "transform": "rotate(90deg)"
            });
            $("#" + header).css({ "text-align": "center", "font-weight": "bold" })
            return 0;
        }
    }
</script>
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
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        })
    });
</script>
<?php


if ($sesStauts) {
    $dis = "";
    echo"<script>document.getElementById('ned').style.display='none';</script>";
} else {
    $dis = "disabled";
}
?>
<script>
    $(".rn").click(function(){
        // alert(this.id)
        window.location.href="rent.php?id="+"<?php echo $carid;?>"
    })
</script>