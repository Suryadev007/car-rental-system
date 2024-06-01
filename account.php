<?php
session_start();
$name = $_SESSION["user"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$pp=$_SESSION["userpwd"]
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
                                    <p class="text-light">Watch Your <span style="color:#f5b754;"> Profile</span></p>
                                    <h1 class="gl">Account Details</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="container p-5 rounded-5" style="background:#333">

            <div class="row p-3">
                <div class="col-md ">
                    <label class="h3 px-1 text-center" for="customer-name">Name</label>
                    <input type="text" class='con-form w-100' id="customer-name" value="<?php echo $name;?>">
                </div>

                <div class="col-md r">
                    <label class="h3 px-1 text-center" for="customer-phone">Phone</label>
                    <input type="text" class='con-form w-100' id="customer-phone" value="<?php echo $phone;?>">
                </div>
            </div>

            <div class="row p-3">
                <!-- <div class="col-md ">
                    <label class="h3 px-1 text-center" for="customer-name">Email</label>
                    <input type="text" class='con-form w-100' id="customer-name">
                </div> -->

                <div class="col-md ">
                    <label class="h3 px-1 text-center" for="customer-email">Email</label>
                    <input type="text" class='con-form w-100' id="customer-email" value="<?php echo $email;?>">
                </div>
            </div>

            <div class="row p-3">
                
                <div class="col-md ">
                    <label class="h3 px-1 text-center" for="customer-pwd">Password</label>
                    <input type="password" class='con-form w-100' id="customer-pwd" value="<?php echo $pp;?>">
                    <label class="eye" for><i class="fa fa-eye" id="eye-open"></i><i id="eye-close" class="fa fa-eye-slash"></i></label>
                </div>

                <div class="col-md " id="conpas">
                    <label class="h3 px-1 text-center" for="conf-pwd">Confirm Password</label>
                    <input type="password" class='con-form w-100' id="conf-pwd">
                   
                </div>

                <div class="col-md ">
                    <label class="h3 px-1 text-center" for="customer-name"></label>
                    <button  class='bbt con-form' id="customer-sub" value="" style="background-color:#f5b754"> 
                    <i class="fa fa-arrows"></i>
                    Click here to update </button>

                    <button  class='bbt con-form' id="customer-enter" value="" style="background-color:#f5b754"> 
                    <i class="fa fa-arrows"></i>
                    Enter </button>
                </div>

            </div>


        </div>
    </div>
</body>

</html>
<style>
    #customer-enter{
        display: none;
    }
    #conpas{
        display: none;
    }
    #eye-close, #eye-open{

        
        margin-top:-3.5%;
        margin-left: 38%;
        font-size: 1.2em;
        /* color:#f5b754; */
    }
    #eye-close{
      display:none; 
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
    $("#customer-sub").click(function(){
        $("#conpas").css("display","block");
        $("#customer-sub").css("display","none");
        $("#customer-enter").css("display","block");
    });
    $("#eye-close").click(function(){
        // alert("eye-close");
        $("#eye-close").css("display","none");
        $("#eye-open").css("display","block");
        $("#customer-pwd").attr("type","password");
    });

    $("#eye-open").click(function(){
        // alert("eye-open");
        $("#eye-close").css("display","block");
        $("#eye-open").css("display","none");
        $("#customer-pwd").attr("type","text"); 
    });
</script>