<?php
session_start();
$_SESSION["status"]=0;
include "../db.php";
if ($conn) {
    $name = $_POST['userName'];
    $pwds = $_POST['userPwd'];
    if (isset($_POST['but'])) {
        $res = mysqli_query($conn, "SELECT * FROM `admintbl` Where `user_name` ='$name' AND `user_pwd`='$pwds'");
        $row = mysqli_num_rows($res);
        $admin_ = mysqli_fetch_assoc($res);
        if ($row != 0) {
            header("LOCATION: dashboard.php");
            $_SESSION["status"]=1;
            $_SESSION["admin_name"] = $admin_['Name'];
            $_SESSION["admin_gender"] = $admin_["gender"];
            $_SESSION["adminid"] = $admin_["admin_id"];
            $_SESSION["img"] = $admin_["admin_img"];
            echo '<script> alert ("no error")   </script>';

        } else {
            echo '<script>Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Invalid Credentials!!",
                
              })</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <!-- <link rel="icon" href="../images/logo312.png" type="image/x-icon"> -->
    <title>Admin Panel</title>

    <style media="screen">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background-color: #ecf0f3;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 10px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;

        }

        form * {

            color: black;
            letter-spacing: 0.5px;
            outline: none;
            border: none;

        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
            font-family: 'fantasy';
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 1.2rem;
            font-weight: 300;
            border-radius: 20px;
            background: transparent;
            color: #666;

        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px transparent inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        ::placeholder {
            color: #666;
        }

        button {
            /* box-shadow: none; */
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 250px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
            letter-spacing: 1.3px;
            margin-top: 10px;

        }

        #lg {
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            border-radius: 100%;
            margin-bottom: 20px;
        }

        .form-field {
            padding-left: 10px;
            margin-bottom: 40px;
            margin-top: 40px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
            color: #666;

        }

        button:hover {
            transform: translatey(-10px);
        }

        span:hover img {
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
    </style>
</head>

<body class="">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="form bg">
        <form action="" method="post">
            <h3><span> <img id="lg" src="../images/logo312.png" style="height:80px; width:25%; top:-20px;"
                        class="bg-dark border-5 border-dark" alt=""></span><br>
                Login Here</h3>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" autocomplete="off">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="userPwd" id="pwd" placeholder="Password" autocomplete="off">
            </div>
            <button class="bg-primary" name="but">Login</button>
        </form>
    </div>
</body>

</html>