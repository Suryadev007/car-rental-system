<?php
include ("db.php");
session_start();
$email = $_SESSION["email"];
$res = mysqli_query($conn, "SELECT * FROM bookingtbl INNER JOIN usertbl ON bookingtbl.user_email=usertbl.user_email 
join carstbl on bookingtbl.car_id=carstbl.car_id WHERE bookingtbl.user_email='$email' ORDER BY `bookingtbl`.`booking_id` DESC");
$row = mysqli_num_rows($res);
$data = mysqli_fetch_all($res, MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo31.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="slider" style="height:100px;">
        <?php include "header.php"; ?>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height:600px;">
            <div class="item active">
                <img src="https://duruthemes.com/demo/html/renax/dark/img/slider/3.jpg " alt="Los Angeles"
                    style="filter: brightness(50%); background-size:cover;" class="h-100">
                <div class="v-middle caption">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12 text-center col-md-12">
                                <div class="v-middle fa-5x  " style="margin-top:-130px">
                                    <p class="text-light">Watch Your <span style="color:#f5b754;"> Order</span></p>
                                    <h1 class="gl">Here</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 p-4" style="" id="data_form">
        <?php //print_r($data); ?>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md">
                    <h2 class="card-title text-center col-g fa-2x pt-3"><i class=" fas fa-ticket"></i> Booking</h2>
                </div>
                <div class="row">
                    <div class="col-md ">
                        <?php for ($i = 0; $i < $row; $i++) {
                            $inner = "gh" . $i + 1;
                            $outer = "db" . $i + 1;
                            $header = "if" . $i + 1;
                            $sno = $i + 1;
                            $carName=$data[$i]["car_name"];
                            $status=$data[$i]["status"];
                            $datafrom=$data[$i]["date_from"];
                            $dateto=$data[$i]["date_to"];
                            $can="none";$con="none";$pen="none";
                            $newDate = date("d-m", strtotime($datafrom));
                            $month=explode("-",$newDate)[1];
                            $day=explode("-",$newDate)[0];
                            $monthName = date('F', mktime(0, 0, 0, $month, 10));
                            $tmpvar=$data[$i]["booking_date"];
                            
                            // $monthName = date("F", strtotime($month));
                            // print_r ($monthName);
                            $resDate=$monthName." ".$day;
                            if($status==-1){
                                $temp="fa fa fa-times-circle";
                                $st="Cancled";
                                $can="block";
                                $con="none";
                                $pen="none";
                                $cl="text-danger";
                            }
                            elseif($status==1){
                                $temp="fa fa-check-circle ";
                                $st="Confirmed";
                                $can="none";
                                $con="block";
                                $pen="none";
                                $cl="text-success";
                            }
                            else{
                                $temp="fa fa fa-spinner fa-spin";
                                $st="Awaitnig";
                                $can="none";
                                $con="none";
                                $pen="block";
                                $cl="text-warning";
                            }
                            // $temp = "fa fa-check-circle  fa fa fa-times-circle fa fa-clock";
                            echo "
                        <div class='contt'>
                            <div class='row  gh mt-3 p-4  det' id='$outer' onclick=fun(this.id,'$inner','$header')>
                                <div class='col-md '>
                                    <h3 class='h3 ' id='$headerr'><span> $sno. </span> $carName </h3>
                                </div>
                                <div class='col-md text-end'>
                                    <h3 class='h3 $cl' id='$headerr'>   $st <i class='$temp'></i> </h3>
                                </div>
                                <div class='col-md-1 text-end'><span class='h3' id='lk'><i
                                            class='fas fa-angle-right'></i></span>
                                </div>
                            </div>
                            <div class='row py-5 da px-4 gd' id='$inner' style='display:none'>

                                <div class='col-md-6 text-center text-light'>From: <span class='col-g h3 w-25'>$datafrom</span></div>
                                <div class='col-md-6 text-center text-light'>To: <span class='h3 col-g w-25'>$dateto</span></div>
                                <div class='row  container  p-5'>
                                    <div class='col-md'>
                                        <div class='data-msg msg-pen' id='' style='display:$pen'>
                                            <div class='row px-5'>
                                                <div class='col-md text-end mr-5'>
                                                    <i class='fa fa-check-circle  '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted #f5b754;'></div>
                                                </div>

                                                <div class='col-md-1 text-center'>
                                                    <i class='fa fa-question-circle   '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted white;'></div>
                                                </div>

                                                <div class='col-md'>
                                                    <i class='fa fa-circle' style='color:#555'></i><br>
                                                </div>
                                            </div>
                                            <div class='row px-5'>
                                                <div class='col-md-3  text-end '>
                                                    <h3 class=''> Ordered <br>
                                                        <span class='px-5'> $tmpvar </span>
                                                    </h3>

                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md-2 text-center '>
                                                    <h3>Waiting for <br> Conformation</h3>
                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md'>
                                                    <h3>Soon</h3>
                                                </div>
                                            </div>

                                        </div>
                                        <div class='data-msg msg-con' id='' style='display:$con'>
                                            <div class='row px-5'>
                                                <div class='col-md text-end mr-5'>
                                                    <i class='fa fa-check-circle  '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted #f5b754;'></div>
                                                </div>

                                                <div class='col-md-1 text-center'>
                                                    <i class='fa fa-check-circle   '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted #f5b754;'></div>
                                                </div>

                                                <div class='col-md'>
                                                    <i class='fa fa-check-circle   '></i><br>
                                                </div>
                                            </div>
                                            <div class='row px-5'>
                                                <div class='col-md-3  text-end '>
                                                    <h3 class=''> Ordered <br>
                                                        <span class='px-5'> $tmpvar </span>
                                                    </h3>

                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md-2 text-center '>
                                                    <h3>Booking <br> Confirmed</h3>
                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md'>
                                                    <h3 class=''> Delivered <br>
                                                        <span class='px-5'>by $resDate </span>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>


                                        <div class='data-msg msg-can' id='' style='display:$can'>
                                            <div class='row px-5'>
                                                <div class='col-md text-end mr-5'>
                                                    <i class='fa fa-check-circle  '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted #f5b754;'></div>
                                                </div>

                                                <div class='col-md-1 text-center'>
                                                    <i class='fa fa fa-question-circle    '></i><br>
                                                </div>
                                                <div class='col-md'>
                                                    <div class=' mt-5' style='border:dotted #f5b754;'></div>
                                                </div>

                                                <div class='col-md'>
                                                    <i class='fa fa fa-times-circle   '></i><br>
                                                </div>
                                            </div>
                                            <div class='row px-5'>
                                                <div class='col-md-3  text-end '>
                                                    <h3 class=''> Ordered  <br>
                                                        <span class='px-5'> $tmpvar </span>
                                                    </h3>

                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md-2 text-center '>
                                                    <!-- <h3>Booking <br> Cancled</h3> -->
                                                </div>
                                                <div class='col-md'>
                                                    <!-- <div class=' mt-5' style='border:dotted #f5b754;'></div> -->
                                                </div>

                                                <div class='col-md'>
                                                    <h3>Booking <br> Cancled</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        } ?>

                        <!-- <div class="contt">
                            <div class="row  gh mt-3 p-4  det" id="db3" onclick="fun(this.id,'gh3','if3')">
                                <div class="col-md-11 ">
                                    <h3 class="h3 " id="if3"><span> 2. </span> Driving License and Age </h3>
                                </div>
                                <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                            class='fas fa-angle-right'></i></span>
                                </div>
                            </div>
                            <div class="row py-5 data px-4 gd" id="gh3">

                                <div class="col-md-6 text-center">From: <span class="col-g h2 w-25">[date]</span></div>
                                <div class="col-md-6 text-center">To: <span class="h2 col-g w-25">[date]</span></div>
                                <div class="row  container  p-5">
                                    <div class="col-md">
                                        <div class="data-msg " id="msg-pen">
                                            <div class="row px-5">
                                                <div class="col-md text-end mr-5">
                                                    <i class="fa fa-check-circle  "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-1 text-center">
                                                    <i class="fa fa-question-circle   "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted white;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <i class="fa fa-circle" style="color:#555"></i><br>
                                                </div>
                                            </div>
                                            <div class="row px-5">
                                                <div class="col-md-3  text-end ">
                                                    <h3 class=""> Ordered <br>
                                                        <span class="px-5"> [date] </span>
                                                    </h3>

                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-2 text-center ">
                                                    <h3>Waiting for <br> Conformation</h3>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <h3>Soon</h3>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="data-msg " id="msg-con">
                                            <div class="row px-5">
                                                <div class="col-md text-end mr-5">
                                                    <i class="fa fa-check-circle  "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-1 text-center">
                                                    <i class="fa fa-check-circle   "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <i class="fa fa-check-circle   "></i><br>
                                                </div>
                                            </div>
                                            <div class="row px-5">
                                                <div class="col-md-3  text-end ">
                                                    <h3 class=""> Ordered <br>
                                                        <span class="px-5"> [date] </span>
                                                    </h3>

                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-2 text-center ">
                                                    <h3>Booking <br> Confirmed</h3>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <h3 class=""> Delivered <br>
                                                        <span class="px-5"> [date] </span>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="data-msg " id="msg-can">
                                            <div class="row px-5">
                                                <div class="col-md text-end mr-5">
                                                    <i class="fa fa-check-circle  "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-1 text-center">
                                                    <i class="fa fa fa-question-circle    "></i><br>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <i class="fa fa fa-times-circle   "></i><br>
                                                </div>
                                            </div>
                                            <div class="row px-5">
                                                <div class="col-md-3  text-end ">
                                                    <h3 class=""> Ordered <br>
                                                        <span class="px-5"> [date] </span>
                                                    </h3>

                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md-2 text-center ">
                                                    <h3>Booking <br> Cancled</h3>
                                                </div>
                                                <div class="col-md">
                                                    <div class=" mt-5" style="border:dotted #f5b754;"></div>
                                                </div>

                                                <div class="col-md">
                                                    <h3>Booking <br> Cancled</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- 
                        <div class="row  gh mt-3 p-4  det" id="db2" onclick="fun(this.id,'gh2','if2')">
                            <div class="col-md-11 ">
                                <h3 class="h3 " id="if2"><span> 2. </span> Driving License and Age </h3>
                            </div>
                            <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                        class='fas fa-angle-right'></i></span>
                            </div>
                        </div>
                        <div class="row py-5 px-4 gd" id="gh2" style="display:none">
                            <div class=" ">
                                <p>The tenant must be 25 years of age and have a 5-year local or valid international
                                    driver's
                                    license for group A, B, C, D vehicles at the time of the rental agreement.</p>
                            </div>
                        </div>


                        <div class="row  gh mt-3 p-4  det" id="db3" onclick="fun(this.id,'gh3','if3')">
                            <div class="col-md-11 ">
                                <h3 class="h3 " id="if3"><span> 3. </span> Prices </h3>
                            </div>
                            <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                        class='fas fa-angle-right'></i></span>
                            </div>
                        </div>
                        <div class="row py-5 px-4 gd" id="gh3" style="display:none">
                            <div class=" ">
                                <p>Prices include maintenance and insurance guarantee against third parties (within
                                    legal policy
                                    limits). 18% VAT (value added tax) is not included. Fuel belongs to the renter.
                                    Chauffeur
                                    driven service and translator guide are available upon request.</p>
                            </div>
                        </div>

                        <div class="row  gh mt-3 p-4  det" id="db4" onclick="fun(this.id,'gh4','if4')">
                            <div class="col-md-11 ">
                                <h3 class="h3 " id="if4"><span> 4. </span> Payments </h3>
                            </div>
                            <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                        class='fas fa-angle-right'></i></span>
                            </div>
                        </div>
                        <div class="row py-5 px-4 gd" id="gh4" style="display:none">
                            <div class=" ">
                                <p>The total rental fee is collected at the time of rental. The shortest rental period
                                    is 72
                                    hours, and in case of delay, 1/3 of the fee is charged for each additional hour.
                                    Delays
                                    exceeding 3 hours in total are calculated as a full day. A deposit is required from
                                    a valid
                                    credit card..</p>
                            </div>
                        </div>

                        <div class="row  gh mt-3 p-4  det" id="db5" onclick="fun(this.id,'gh5','if5')">
                            <div class="col-md-11 ">
                                <h3 class="h3 " id="if5"><span> 5. </span> Traffic Fines </h3>
                            </div>
                            <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                        class='fas fa-angle-right'></i></span>
                            </div>

                        </div>
                        <div class="row py-5 px-4 gd" id="gh5" style="display:none">
                            <div class=" ">
                                <p>Traffic fines toll and illegal toll fees belong to the customer. If the vehicles are
                                    detained
                                    by traffic, this period is included in the rental period. In necessary cases, we may
                                    change
                                    these conditions and information and the vehicle type specified in the reservation
                                    without
                                    prior notice. Our vehicles cannot be taken abroad.</p>
                            </div>
                        </div>

                        <div class="row  gh mt-3 p-4  det" id="db6" onclick="fun(this.id,'gh6','if6')">
                            <div class="col-md-11 ">
                                <h3 class="h3 " id="if6"><span> 5. </span> Delivery </h3>
                            </div>
                            <div class="col-md-1 text-end"><span class="h3" id="lk"><i
                                        class='fas fa-angle-right'></i></span>
                            </div>

                        </div>
                        <div class="row py-5 px-4 gd" id="gh6" style="display:none">
                            <div class=" ">
                                <p>Delivery is free of charge where our Rent a car company is located. Delivery in these
                                    cities
                                    is possible with prior notice; hotel, workplace, station, port etc. It can be done
                                    in
                                    places. For vehicle deliveries and returns in cities where our office is not
                                    located, a
                                    delivery fee of 0.2 Euro/km is applied, starting from the rented location.</p>
                            </div>
                        </div>


                    </div>
                    </ol> -->
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

<style>
    .data-msg i {
        color: #f5b754;
        font-size: 4em;

    }

    .msg-con,
    .msg-can,
    .msg-pen {
        /* display: none; */
        padding: 10px;
    }

    .data {
        font-size: 14px;
        display: none;

        background: #222;
    }

    #lk {
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

    #customer-enter {
        display: none;
    }

    #conpas {
        display: none;
    }

    #eye-close,
    #eye-open {


        margin-top: -3.5%;
        margin-left: 38%;
        font-size: 1.2em;
        /* color:#f5b754; */
    }

    #eye-close {
        display: none;
    }

    .bbt {
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

    .bbt:hover {
        border: 1px solid #fff;
        background-color: #fff;
        color: #1b1b1b;
        transform: translate3d(0px, -6px, 0.01px);
        text-decoration: none;
    }

    .bd {
        border: solid #f5b754;
    }

    .gl {
        color: #f5b754;
    }

    .lbl {
        position: absolute;
        margin-left: 7%;
        margin-top: -75px;
        font-size: 1.2em;
        background-image: linear-gradient(to bottom, #1b1b1b 50%, #222 50%);
        z-index: 1;
        color: #f5b754;

    }

    .bbt {
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

    .bbt:hover {
        border: 1px solid #fff;
        background-color: #fff;
        color: #1b1b1b;
        transform: translate3d(0px, -6px, 0.01px);
        text-decoration: none;
    }

    .iimg {
        position: absolute;
        top: -200px;

    }

    input[type=date]::-webkit-datetime-edit-text,
    input[type=date]::-webkit-datetime-edit-month-field,
    input[type=date]::-webkit-datetime-edit-day-field,
    input[type=date]::-webkit-datetime-edit-year-field {
        background: none;
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        border-color: #f5b754;
        box-shadow: 0 0 3px 1px #227755;
        -moz-box-shadow: 0 0 0 #f5b754;
        -webkit-box-shadow: 0 0 0 #f5b754;

    }

    .con-form {
        max-width: 100%;
        padding: 18.5px 20px;
        background-color: #222;
        -webkit-box-shadow: none;
        box-shadow: none;
        display: block;
        width: 100%;
        line-height: 1.5em;
        font-family: 'Outfit', sans-serif;
        font-size: 14px;
        font-weight: 300;
        background-image: none;
        border: 3px solid transparent;
        border-radius: 30px;
    }

    .con-form ::placeholder {
        color: red;
    }

    input {
        padding: 10px 10px;
        color-scheme: dark;
    }

    input::file-selector-button {
        /* font-weight: bold;
  color: dodgerblue; */

        border: none;
        border-radius: 3px;
        background-color: transparent;
        border-right: 1px solid white;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {
        -webkit-box-shadow: 0 0 0px 1000px transparent inset;
        transition: background-color #f5b754 5000s ease-in-out 0s;
        background-color: transparent;
    }

    #shop-more {
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
