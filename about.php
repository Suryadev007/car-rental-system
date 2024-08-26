<?php
session_start();
include "db.php";
$ins = "SELECT * FROM `feedbacktbl` ORDER BY `Sno` DESC";
$res = mysqli_query($conn, $ins);
$data = mysqli_fetch_all($res, MYSQLI_BOTH);
// print_r($data[0]);
$row = mysqli_num_rows($res);
// echo $row;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/logo31.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <script src="assets/js/owl.carousel.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include "header.php";
    if ($_SESSION["ses"]) {
        echo "<script>
    document.getElementById('login').style.display='none';
    document.getElementById('profile').style.display='';
    </script>";
    }
    ?>
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner " style="height:700px;">
                <div class="item active">
                    <img src="https://duruthemes.com/demo/html/renax/dark/img/slider/3.jpg " alt="Los Angeles"
                        style="filter: brightness(50%); " class="h-100">
                    <div class="v-middle caption">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-30">
                                    <div class="v-middle">
                                        <h1 class="h1 border-end border-opacity-75  border-warning">About <span
                                                style="color:#f5b754">Us</span>
                                        </h1>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-absolute w-50  owl-carousel2 " style="top:20%;margin-left:40%;">
        <div class="card  overflow-hidden rounded-5 w-100">
            <img src="https://c4.wallpaperflare.com/wallpaper/635/918/575/god-of-war-kratos-video-games-god-of-war-ghost-of-sparta-wallpaper-preview.jpg"
                class="w-100 h-100" alt="" srcset="" style="filter:brightness(0.6) saturate(2)">

            <!-- <div class="blockquote text-center text-light position-absolute m-5 border">
                <p class="">The Mark of a worrior is not how he lives</p>
            </div> -->

            <blockquote class="blockquote text-center position-absolute border-0">
                <h2 class="mb-0">The Mark of a worrior is not</h2>
                <h2> how he lives </h2>
                <h2>but how he dies</h2>
                <br>
                <footer class="blockquote-footer text-light ">Kratos <br><cite title="Source Title">Ghost of
                        Sparta</cite>
                </footer>
            </blockquote>
        </div>
        

        <!--  -->
        
    </div>
    <div class="container " style="margin-top:700px;">

        <h2 style="font-size:2em;" class="mt-5 blockquote-footer text-center">Customer Feedback</h2>
        <div class="row m-5 rating-cars owl-carousel ">
            <?php
            for ($i = 0; $i < $row; $i++) {
                $msg = $data[$i]["message"];
                $feed = $data[$i]["feedback"];
                $rat = $data[$i]["ratings"];
                $name = $data[$i]['name'];
                echo "
        <div class='rating-card  col-md m-3 rounded-5'>
            <h1><i class='qt fa fa-solid fa-comments  '></i></h1>";
                // echo "<div class='star'>";
                // for($j=1;$j<=5;$j++){
                //     echo "<i class='fa fa-star'></i>";
                // }
                // echo "</div>";
                echo "<div class='stars rounded-5'>";
                for ($j = 1; $j <= $rat; $j++) {
                    echo " <i class='star fa fa-heart '></i>";
                }
                echo "</div>";

                echo "<div><p class='text-light'>
                <i class='qt fa fa-quote-left mt-4'></i> $msg <i class='qt fa fa-quote-right'></i>
                </p></div>";

                echo "<div class='blockquote-footer feed-name'>$name</div>";
                echo "</div>";
            }
            ?>
        </div>

    </div>
    <h2 style="font-size:2em;" class="mt-5 blockquote-footer text-center">Car <span class="text-light">Promo
        </span>Video</h2>
    <div class="container h-100 w-100 text-center p-3  mb-5 video">
    
        <video id="video1" class="vid w-75 rounded-5"  width="500" height  preload="metadata" poster="images/poster.jpg" >
                <source src="images/vid.mp4" type="video/mp4">
            </video>
            </video>
            <button class="btnp" id="playbtn" ><i class="fa fa-play-circle"></i></button>
            
           
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
     footer {
        height: 100px;
        width: 60%;
        /*background-color: gold;*/
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
    .f-data:hover i {
        background: #1b1b1b;
        color: gold;
        transition: all 500ms;
    }
    #video1{
        filter:blur(5px);
    }
    .btnp{
        background-color: transparent;
        color: #f5b754;
        border: none;
        position: absolute;
        margin-top: 13%;
        left: 46%;
        
    }

    .btnp i{
        font-size: 7em;
    }
    
    .video img {
        filter: blur(10px);
    }
    
    /* .video:hover img {
        filter: blur(0px);
    }    */
    .rating-card .stars .star {
        padding: 5px;
        margin: 0;
        color: #f5b754;
    }

    .rating-card .feed-name {
        position: absolute;
        bottom: 5%;
        right: 10%;
    }

    .rating-card .stars {
        margin-left: 10%;
        float: right;
        margin-right: -7%;
        padding: 4%;
        background: #1b1b1b;
        margin-top: -6%;
    }

    .rating-card {
        padding: 20px;
        padding-bottom: 30px;
        width: auto;
        background: #222;
        color: #919191;
        height: 35vh;
    }

    .rating-card:hover {
        /* box-shadow: 0px 0px 20px #f5b754; */
        transform: translatey(-20px);
        background: #f5b754;
        color: #1b1b1b;
    }

    .rating-card:hover .qt,
    .rating-card:hover .feed-name {
        color: #1b1b1b;
    }

    .rating-card .qt {
        color: #f5b754;
        font-size: 1.8em;
        margin-top: 5px;
    }

    blockquote {
        margin-top: 15%;
        margin-left: 2%;
        backdrop-filter: blur(1px);

    }

    blockquote h2 {
        color: white;
        filter: brightness(100%);
        font-size: 2.5em;
        font-family: 'Merienda';
    }

    .blockquote-footer {
        color: #f5b754;
        font-weight: bold;
        font-size: 1.2em;
    }

    .card {
        height: auto;
        width: auto;
        background: transparent;
        /* z-index: 9; */

    }

    .card:hover img:hover {
        transform: scale(1.1);
        transition: 0.4s ease-in;
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
        width: 100%;
        background-size: cover;
        background-position: center;
    }

    .v-middle {
        position: absolute;
        width: 100%;
        top: 40%;
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

    .h6 {

        font-size: 12px;
        font-weight: 300;
        color: white;
        text-transform: uppercase;
        letter-spacing: 6px;
        margin-bottom: 0px;
        -webkit-animation-delay: .2s;
        animation-delay: .2s;
    }

    .h1 {
        font-size: 90px;
        font-weight: 700;
        margin-bottom: 0;
        color: white;
        line-height: 1em;
        -webkit-animation-delay: .4s;
        animation-delay: .4s;
        display: inline-grid;
    }

    .h5 {
        font-family: 'Outfit', sans-serif;
        font-size: 17px;
        font-weight: 300;
        color: white;
        margin: 15px 0;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .h5 span {
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
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        })
    });

    
</script>

<script>
    // document.getElementById("playbtn").onclick=function(){
    //     // alert("ds");
    //     var video = document.getElementById("video1");
    //     video.play();
    //     document.getElementById("playbtn").style.display="none"
    //     document.getElementById("pausebtn").style.cssText=`margin-top: 13%; left: 45%;`;
        
    // }
    // document.getElementById("pausebtn").onclick=function(){
    //     // alert("ds");
    //     var video = document.getElementById("video1");
    //     video.pause();
    //     document.getElementById("playbtn").style.cssText=`margin-top: 13%; left: 45%;`;
    //     document.getElementById("pausebtn").style.display="none";
    // }
    
</script>

<script>
    $("#video1").mouseenter(function() {
    $('.btnp').show();
    // $("#video1").css("filter","blur(0px)");
}).mouseleave(function() {
    $('.btnp').hide();
    // $("#video1").css("filter","blur(10px)");
});


// Pause/Play video on hover
$("#video1").bind("click", function () {
  var vid = $(this).get(0);
      if (vid.paused) {
        vid.play();
        $('.btnp').html('<i class="fa fa-pause-circle"></i>');
        $("#video1").css("filter","blur(0px)");
      } else {
        vid.pause();
        $('.btnp').html('<i class="fa fa-play-circle"></i>');
        $("#video1").css("filter","blur(5px)");
      }
  });
</script>
<script>
    document.body.addEventListener("keydown",(ev)=>{
        // alert(ev.key)
        console.log(ev.keyCode)
        if(ev.keyCode==32){
                    var vid = document.getElementById("video1");
                    if (vid.paused) {
                vid.play();
                $('.btnp').html('<i class="fa fa-pause-circle"></i>');
                $("#video1").css("filter","blur(0px)");
            } else {
                vid.pause();
                $('.btnp').html('<i class="fa fa-play-circle"></i>');
                $("#video1").css("filter","blur(5px)");
            }
        }

    });

    


</script>