<?php
session_start();
include "db.php";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
if (isset($_POST["logOut-btn"])) {
    header("LOCATION: $url");
    session_destroy();
}
if (isset($_POST["logBut"])) {
    $logUser = $_POST["logUser"];
    $logPwd = $_POST["logPwd"];
    $res = mysqli_query($conn, "SELECT * FROM `usertbl` WHERE ( user_email='$logUser' or user_phone='$logUser' )  and user_pwd='$logPwd'");
    $data = mysqli_fetch_assoc($res);
    $logRow = mysqli_num_rows($res);
    if ($logRow != 0) {
        //echo "<script>alert('yes')</script>";
        session_start();
        header("LOCATION: $url");
        $_SESSION["user"] = $data["user_name"];
        $_SESSION["userid"] = $data["Sid"];
        $_SESSION["ses"] = true;
        $_SESSION["phone"] = $data["user_phone"];
        $_SESSION["email"] = $data["user_email"];
        $_SESSION["alterphn"] = $data["alter_phn"];
        $_SESSION["addrs"] = $data["address"];
        $_SESSION["dlsno"] = $data["dls_number"];
        $_SESSION["dlsimg"] = $data["dls_img"];
        $_SESSION["add-id"] = $data["add/id_proof"];
        $_SESSION["proofimg"] = $data["proof_img"];
        $_SESSION["verify-status"] = $data["verify_status"];
        $_SESSION["userpwd"] = $data["user_pwd"];
        $_SESSION["orders"] = $data["orders"];
        echo '
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Signed in successfully"
      });
    
    </script>
    ';
        echo "<script>
        document.getElementById('login').style.display='none';
        </script>";
    } else {
        echo '<script>Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Invalid Credentials!!",
            
          })</script>';

    }
}


$regName = $_POST["regName"];
$regPhn = $_POST["regPhn"];
$regEmail = $_POST["regEmail"];
$regPwd = $_POST["regPwd"];
$regBut = $_POST["regBut"];
$ins = "INSERT INTO `usertbl`(`user_name`, `user_phone`, `user_email`, `user_pwd`) 
    VALUES ('$regName','$regPhn','$regEmail','$regPwd')";
if (isset($regBut)) {
    //echo "<script>alert('Registration Failed')</script>";

    $insert = mysqli_query($conn, $ins);
    if ($insert) {


        echo "<script>alert('Registration Successfull')</script>";


    } else {

        echo "<script>alert('Registration Failed')</script>";

    }

}

?>

<!---- php end ---->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/logo31.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<title>Car Rental</title>
</head>

<body id="body">
    <div id="preloader">
        <div class="container prl text-center " style="margin-top: 10%;">
            <img src="images/car-logo/loader2.gif" width="500">
        </div>
    </div>
    <header id="header" class="h-100 pt-4">
        <div class="hlog" style="padding-left: 10px;">
            <label class="lgo">C</label>
            <div class="logo"> <img src="images/logo312.png" alt="logo"></div>
            <label class="lgo">R</label>
            <label class="lgo">s</label>

        </div>
        <ul id="header_menu">
            <li class="menu_bar"><a class="menu_items" href="index.php">Home</a></li>
            <li class="menu_bar"><a class="menu_items" href="cars.php?cat=all">Cars</a></li>
            <li class="menu_bar"><a class="menu_items" href="gallery.php">Gallery</a></li>
            <li class="menu_bar"><a class="menu_items" href="about.php">About Us</a></li>
            <li class="menu_bar"><a class="menu_items" href="contact.php">Contact</a></li>
            <li class="menu_bar"><a class="menu_items" id="login">Login</a></li>
            <!-- <li class="menu_bar"><a class="menu_items" id="profile" style="display:none;">Profile</a></li> -->
            <div class="dropdown " id="profile" style="display:none;">
                <button class=" dropdown-toggle drpbtn rounded-2 px-3" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-user"></i> <?php echo $_SESSION["user"]; ?>


                </button>
                <ul class="dropdown-menu ">
                    <li><a class="dropdown-item " href="account.php">Account</a></li>
                    <li><a class="dropdown-item" href="order.php">Bookings</a></li>
                    <li>
                        <form action="" method="post">
                            <button name="logOut-btn" class="dropdown-item" href="#">logout</button>
                        </form>
                    </li>
                </ul>
            </div>

        </ul>
    </header>
    <form method="post">
        <div class="container-fluid " id="log-form">
            <div class="container rounded-5 overflow-hidden"
                style="margin-top: 5%; width:30%;  border:5px solid #f5b754;">

                <div class=" text-center row" style="background: #f5b754;color:#1b1b1b;">
                    <div class="cancel mt-3 position-fixed fa-2x " id="cancel" onclick="cancel('log-form')"
                        style="color:#222 ;width: auto; border-radius: 20%; "> <i class="fa fa-close"></i> </div>
                    <h2 class="h2 p-3 px-4 fw-bold"> Login </h2>
                </div>
                <div class="row bg" style="background-color: #1b1b1b;">
                    <div class="social-container text-center">
                        <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fa fa-google"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                        <h5 class="text-light mt-3">or use your account</h5>
                    </div>
                </div>
                <div class="row p-3" style="background:#1b1b1b">
                    <div class="col-md">
                        <input name="logUser" type="text" class="con-form" placeholder="Enter Email or Number"
                            autocomplete="off">
                        <input name="logPwd" type="password" class="con-form" placeholder="Enter Password"
                            autocomplete="off">
                        <button name="logBut" class="bbt mt-4 w-100">Login</button>
                    </div>
                </div>
                <div class="row p-5 " style="background:#1b1b1b">
                    <div class="col-md text-end border-end">
                        <h3 class="anc" id="reg"> Register here</h3>
                    </div>

                    <div class="col-md text-start">
                        <h3 class="anc">Forgot Password</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid " id="reg-form">
            <div class="container rounded-5 overflow-hidden"
                style="margin-top: 1%; width:30%;  border:5px solid #f5b754;position: relative;">

                <div class=" text-center row" style="background: #f5b754;color:#1b1b1b;">
                    <div class="cancel mt-3 position-fixed fa-2x " id="cancel2" onclick="cancel('reg-form')"
                        style="width: auto; border-radius: 20%; "> <i class="fa fa-close"></i> </div>
                    <h2 class="h2 p-3 px-4 fw-bold"> Create Account </h2>
                </div>
                <div class="row bg" style="background-color: #1b1b1b;">
                    <div class="social-container text-center">
                        <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fa fa-google"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                        <h5 class="text-light mt-3">or use your account</h5>
                    </div>
                </div>
                <div class="row p-3" style="background:#1b1b1b">
                    <div class="col-md">
                        <input name="regName" type="text" class="con-form" placeholder="Enter  Name">
                        <input name="regPhn" type="text" class="con-form" placeholder="Enter  Phone">
                        <input name="regEmail" type="text" class="con-form" placeholder="Enter  Email">
                        <input name="regPwd" type="password" class="con-form" placeholder="Enter Password">
                        <input name="" type="password" class="con-form" placeholder="Confirm Password">
                        <button name="regBut" class="bbt mt-4 w-100" id="regBut">Signup</button>
                    </div>
                </div>
                <div class="row p-5 " style="background:#1b1b1b">
                    <div class="col-md text-end">
                        <h3 href=""> <span style="font-size: 0.8em;"> Already have an account? </span><span class="anc"
                                id="log">LOGIN </span></h3>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

<script>
    document.getElementById("login").addEventListener("click", function (e) {
        document.getElementById("log-form").style.display = "block";
        document.getElementById("log-form").style.position = "fixed";
    });
    function cancel(form_id) {
        document.getElementById(form_id).style.display = "none";
    }

    const activePage = window.location.pathname;

    const navlink = document.querySelectorAll(".menu_items").forEach(link => {
        if (link.href.includes(`${activePage}`)) {
            link.classList.add('active');
        }
        else {
            link.classList.remove('active');
        }
    });

    document.getElementById("reg").addEventListener("click", function (e) {
        document.getElementById("log-form").style.display = "none";
        document.getElementById("reg-form").style.cssText = `
        display:block;
        position:fixed;
        backdrop-filter:blur(10px);
        `;
    });
    document.getElementById("log").addEventListener("click", function (e) {
        document.getElementById("reg-form").style.display = "none";
        document.getElementById("log-form").style.display = "block";
    });
    console.log();

</script>
<script>
    // When the user scrolls down 80px from the top of thewhite document, resize the navbar's padding and the logo's font size
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("header_menu").style.cssText =
                `top:0%;
        background:#1b1b1b;
        height:100px;
        padding-top: 35px;
        transition: 0.8s;
        width:100%;
        
        `;


        } else {
            document.getElementById("header_menu").style.cssText =
                `list-style-type: none;
    padding: auto;
    padding-left: 28%;
    display: flex;
    text-align: center;
    font-family: 'Merienda';
    justify-content: flex-start;
    position:fixed;
        `;

        }
    }
</script>

</html>
<style>
    .dropdown-item {
        font-size: large;
    }

    .drpbtn {
        font-size: large;
        background: #f5b754;
        border: none;
        color: black;

    }

    .drpbtn:hover {
        color: #f5b754;
        background: none;
        /* transform: translateY(-10px); */
    }


    .prl img {
        filter: invert(72%) sepia(54%) saturate(504%) hue-rotate(347deg) brightness(98%) contrast(95%);
    }

    #preloader {
        background: #000;
        height: 100vh;
        width: 100%;
        position: absolute;
        z-index: 100;
        top: 0;
    }

    .cancel:hover i {
        transform: scale3d(1.3, 1.3, 1.3);
    }

    .con-form:hover {
        border: solid #f5b754;
    }

    .anc {
        text-decoration: none;
        color: white;
        font-size: 1em;
    }

    .anc:hover {
        text-decoration: none;
        color: #f5b754;

    }

    #log-form,
    #reg-form {
        position: absolute;
        top: 0%;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99;
        backdrop-filter: blur(10px);
        display: none;
        transition: 0.8s ease-in;
    }

    .social-container {
        margin: 20px 0;
        background: #1b1b1b;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
        text-decoration: none;
        color: white;
    }

    .social:hover {
        background: #f5b754;
        transition: all 0.1s;
        color: #1b1b1b;
        box-shadow: 3px 3px 20px 0 #1b1b1b;
        transform: scale(1.4);
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        box-shadow: 0 0 3px 1px #227755;
        border-color: #f5b754;
        -moz-box-shadow: 0 0 0 transparent;
        -webkit-box-shadow: 0 0 0 transparent;
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

    .hlog:hover img {
        transform: translateY(-20%);
        -webkit-animation-name: rotate;
        -moz-animation-name: rotate;
        -ms-animation-name: rotate;
        -o-animation-name: rotate;
        animation-name: rotate;
        -webkit-animation-duration: 500ms;
        -moz-animation-duration: 500ms;
        -ms-animation-duration: 500ms;
        -o-animation-duration: 500ms;
        animation-duration: 500ms;
        -webkit-animation-iteration-count: 1;
        -moz-animation-iteration-count: 1;
        -ms-animation-iteration-count: 1;
        -o-animation-iteration-count: 1;
        animation-iteration-count: 1;
        -webkit-animation-timing-function: ease;
        -moz-animation-timing-function: ease;
        -ms-animation-timing-function: ease;
        -o-animation-timing-function: ease;
        animation-timing-function: ease;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        -ms-animation-fill-mode: forwards;
        -o-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        cursor: none;
    }

    @-webkit-keyframes rotate {
        0% {
            -webkit-transform: rotate(0deg) scale(1.0);
        }

        100% {
            -webkit-transform: rotate(360deg) scale(1.1);
        }
    }

    @-moz-keyframes rotate {
        0% {
            -moz-transform: rotate(0deg) scale(1.0);
        }

        100% {
            -moz-transform: rotate(360deg) scale(1.1);
        }
    }

    @-o-keyframes rotate {
        0% {
            -o-transform: rotate(0deg) scale(1.0);
        }

        100% {
            -o-transform: rotate(360deg) scale(1.1);
        }
    }

    @-ms-keyframes rotate {
        0% {
            -ms-transform: rotate(0deg) scale(1.0);
        }

        100% {
            -ms-transform: rotate(360deg) scale(1.1);
        }
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg) scale(1.0);
        }

        100% {
            transform: rotate(360deg) scale(1.1);
        }
    }

    @-webkit-keyframes rori {
        0% {
            -webkit-transform: rotate(360deg) scale(1.1);
        }

        100% {
            -webkit-transform: rotate(0deg) scale(1.0);
        }
    }

    @-moz-keyframes rori {
        0% {
            -moz-transform: rotate(360deg) scale(1.1);
        }

        100% {
            -moz-transform: rotate(0deg) scale(1.0);
        }
    }

    @-o-keyframes rori {
        0% {
            -o-transform: rotate(360deg) scale(1.1);
        }

        100% {
            -o-transform: rotate(0deg) scale(1.0);
        }
    }

    @-ms-keyframes rori {
        0% {
            -ms-transform: rotate(360deg) scale(1.1);
        }

        100% {
            -ms-transform: rotate(0deg) scale(1.0);
        }
    }

    @keyframes rori {
        0% {
            transform: rotate(360deg) scale(1.1);
        }

        100% {
            transform: rotate(0deg) scale(1.0);
        }
    }

    .con-form {
        max-width: 100%;
        padding: 18.5px 20px;
        height: auto;
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
        margin-top: 10px;
    }

    .con-form ::placeholder {
        color: red;
    }

    body {
        font-family: 'Outfit', sans-serif;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.95em;
        color: #999;
        overflow-x: hidden !important;
        background: #1b1b1b;
    }

    header {
        margin-top: 20px;
    }

    .logo {
        height: 45px;
        width: 40px;
        margin-top: -10px;
    }

    .logo>img {
        height: 100%;
        width: 100%;

    }

    .lgo {
        font-family: 'Merienda';
        color: white;
        font-size: 2.5em;
        font-weight: bolder;
        display: inline;
    }

    .hlog {
        position: fixed;
        display: flex;
        right: 2%;
        top: 5%;
        z-index: 99;
        font-size: 1.5em;
    }

    #header>#header_menu {
        list-style-type: none;
        padding: auto;
        padding-left: 28%;
        display: flex;
        text-align: center;
        font-family: 'Merienda';
        justify-content: flex-start;
        position: fixed;
    }

    .menu_bar>.menu_items {
        text-decoration: none;
        color: white;
        position: sticky;
        margin: 30px;
        font-size: large;
        font-weight: bold;
        height: 20px;


    }

    .active {
        color: #f5b754 !important;
    }

    .menu_items::before {
        content: "";
        position: absolute;
        display: block;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #f5b754;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .menu_items:hover,
    .menu_items:hover::before {
        transform: scaleX(1);
        color: #f5b754 !important;
        transition: .5s;
    }

    .dropdown-menu {
        background-color: #f5b754;
        color: white;
        width: 120%;
        text-align: center;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #222;
        color: #f5b754;
    }

    /*
nav {
    height: 5em;
    width: 100%;

}

nav ul {
    list-style-type: none;
    margin: -51px 150px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-family: 'Merienda';
    color: white;
}

li a {
    text-decoration: none;
    color: white
;
    position: sticky;
    margin: 30px;
    font-size: large;
    font-weight: bold;
    height: 20px;

}

.logo {
    top: 50%;
    right: 50%;
}

a::before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: rgb(255, 166, 0);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

a:hover,
a:hover::before {
    transform: scaleX(1);
    color: rgb(255, 166, 0) !important;
    transition: .5s;
}

.chk {
    color: white;
    font-size: 30px;
    float: left;
    line-height: 80px;
    cursor: pointer;
    margin-left: 40px;
    display: none;
}

#check {
    display: none;
}

@media (max-width:1260px) {
    nav ul {
        list-style-type: none;
        display: flex;
        padding: 0px;
        justify-content: safe;

    }

    li a {
        margin: 10px;
    }
}

@media (max-width:1100px) {
    nav ul {
        list-style-type: none;
        justify-content: center;
        padding-left: 50%;
    }

    li a {
        margin: 10px;
        position: relative;


    }

    .logo {
        position: relative;
        left: -20%;
    }

}

@media (max-width:755px) {

    nav ul {
        list-style-type: none;
        justify-content: space-around;
        display: block;
        margin-top: 0;
        left: -20px;
        position: relative;
        height: 200px;
    }

    li a {
        margin: -360px;
        justify-content: space-around;
        padding-top: 200px;
        position: relative;
    }

    .logo {
        display: block;
        margin-left: 20px;
        left: -10px;
    }

    .chk {
        display: block;
    }
}
*/
</style>
<script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        $('#preloader').fadeOut("slow");
        loader.style.display = "none";
    })
</script>
<?php



if ($_SESSION["ses"]) {
    echo "<script>
document.getElementById('login').style.display='none';
document.getElementById('profile').style.display='';
</script>";
} else {
    echo "<script>
    document.getElementById('login').style.display='';
    document.getElementById('profile').style.display='none';
    </script>";
}

?>