<?php
session_start();
//echo $_SESSION["admin_name"];
//echo $_SESSION["admin_gender"];
$img=$_SESSION["img"];
include "../db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="icon" href="../images/logo31.png" type="image/x-icon">
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  </link>
</head>

<body style=" background-color:#ecf0f3;">
  <nav style="top:0px; height:70px; position:fixed; z-index:99" class="w-100 bg-dark">
    <div class="row m-1 w-100" style=" ">

      <div class="col-sm-3 p-1  " id="left_side_header">
        <div class="row">
          <div class="col-sm-1">
            <input id="dropdown" class="input-box" type="checkbox" style="display:none;" onchange="hmbfun()">

            <label for="dropdown" class="dropdown">
              <span class="hamburger ">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </span>
            </label>
          </div>
          <div class="col-sm-10 rounded-start-5 h-100" id="admin-name" style="padding-left:25px;">

            <a style="" href="profile.php" class=" w-100  rounded-pill bg-primary" id="pro-admin">
              <div class="nav_logo rounded-pill" style="float:left; margin-left:20px;"><img id="nav_img" src="#"
                  alt="Avatar Logo" class="rounded-pill w-100"></div>
              <h5 class="text-light " style="padding:12px 0px 0px 4em; "><?php echo $_SESSION["admin_name"]; ?></h5>
          </div>
          </a>
        </div>
      </div>

      <div class="col-sm-6 bg-dark p-1 " id="center_side_header">
        <ul class="nav_ele w-100 text-end">
          <li class="le w-100 text-center rounded-pill">
            <a href="dashboard.php">
              <h3 for="" id="labl"> <img src="../images/logo312.png" style="width:50px;left:10px" alt="">
                <span class="" style="margin-top: 2%;position: absolute;"> Dashboard</span>
              </h3>
          </li>
          </a>
        </ul>
      </div>
      <div class="col-sm-3 bg-dark  p-1 text-end rounded-end-5" id="right_side_header">
        <div class="search-container w-100">
          <form action="" style="padding-right:25px;display:none">
            <input type="text" id="search-input" class=" rounded-start-5" placeholder="Search ..." name="search">
            <button type="submit" class=" rounded-end-5" id="search-input-button"><i
                class="fa f fa-search"></i></button>
          </form>
        </div>

      </div>
    </div>
  </nav>
</body>

</html>
<?php
$gen = $_SESSION["admin_gender"];
//echo $gen;
if ($gen == "Male" or $gen == "male") {
  echo "<script>document.getElementById('nav_img').src='../images/men_logo.png';</script>";
  $_SESSION["admin_img"] = "../images/men_logo_.png";
} elseif ($gen == "Female"or $gen == "female") {
  echo "<script>document.getElementById('nav_img').src='../images/female_logo.png';</script>";
  $_SESSION["admin_img"] = "../images/female_logo.png";
}
if (isset($_POST['logout_button'])) {
  session_destroy();
  header("Location:index.php");
}
?>
<style>
  .nav_logo {
    background-color: white;
    height: 50px;
    width: 50px;
  }

  .nav_logo img {}

  #nav_admin {
    /*background-color:red;*/


  }

  .nav__logo {}

  #nav__logo {
    height: 60px;
    margin-right: 25px;
    width: auto;
  }

  .nav_ele {}

  .nav_ele .le {}

  .nav_ele .le h3 {}

  .hmb {
    width: 40px;
    height: 35px;
    background-color: black;
    left: 5px;
    margin-top: 5px;
    position: relative;
  }

  .nav_ele .le a {
    text-decoration: none;
    color: #ecf0f3;


  }

  .search-container {
    float: right;
    right: 0px;
  }

  .search-container #search-input {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: transparent;
    width: 80%;

  }

  #search-input::placeholder {}

  .search-container #search-input-button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;

  }

  .search-container .f {
    font-size: large;
  }


  .search-container #search-input-button:hover {
    background: #ccc;
  }

  .search-container #search-input:focus {
    border: none;

  }

  .dropbtn {
    background-color: transparent;
    color: white;
    padding: 5px;
    font-size: 16px;
    border: solid red;

  }

  .dropdown {
    position: relative;
    display: inline-block;

  }

  .dropdown-content {
    display: none;
    position: absolute;

    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 10;
  }

  .dropdown-content a {
    color: black;
    padding: 10px 5px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {}

  .dropdown:hover .dropdown-content {
    display: block;
  }

  #labl img:hover {
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

  .dropdown:hover .dropbtn {}

  .form-le {
    right: 0%;
    position: absolute;
  }

  .nav_ele .le #labl:hover {
    color: #f5b754
  }

  #left_side_header {}

  #right_side_header {
    padding-right: 25px;
  }

  .admn {}

  .container {
    max-width: 800px;
    margin: 0 auto;
  }


  .hamburger {
    align-self: flex-end;
  }

  label {
    cursor: pointer;
  }

  input[type=checkbox]+label {
    .icon-bar {
      display: block;
      width: 22px;
      height: 2px;
      background-color: white;
      margin: 4px;
      transition: all 0.2s;
    }

    .top-bar {
      transform: rotate(0);
    }

    .middle-bar {
      opacity: 1;
    }
  }

  #bodycont {
    margin-top: 5%;
    margin-left: 20%;
  }

  input[type=checkbox]:checked+label {
    .top-bar {
      transform: rotate(45deg);
      transform-origin: 10% 10%;
    }

    .middle-bar {
      opacity: 0;
    }

    .bottom-bar {
      transform: rotate(-45deg);
      transform-origin: 10% 90%;
    }
  }

  @media screen and (max-width: 600px) {

    #sidebr {
      height: 100%;
      width: 100%
    }

    #admin-name {
      display: none;
    }

    #left_side_header {
      width: 10%;
    }

    #center_side_header {
      width: 90%;
      align: center;
    }

    #right_side_header {
      display: none;
    }

    .nav_ele .le h3 {
      font-size: 10px;
    }

    #bodycont {
      margin-top: 30%;
      margin-left: 0%;
    }
  }

  @media screen and (max-width: 900px) {

#sidebr {
  height: 100%;
  width: 100%
}

#admin-name {
  display: none;
}

#left_side_header {
  width: 10%;
}

#center_side_header {
  width: 90%;
  align: center;
}

#right_side_header {
  display: none;
}

.nav_ele .le h3 {
  font-size: 10px;
}

#bodycont {
  margin-top: 30%;
  margin-left: 10%;
}
}
</style>
<script>
  function hmbfun() {
    // Get the checkbox
    var checkBox = document.getElementById("dropdown").checked;
    // alert(checkBox);
    if (checkBox) {
      document.getElementById("sidebr").style.display = "none";
      document.getElementById("bodycont").style.marginLeft = "15%";
    }
    else {
      document.getElementById("sidebr").style.display = "block";
      document.getElementById("bodycont").style.marginLeft = "20%";
    }
    // Get the output text
    // document.getElementById("sidebr").style.display = "none";
    // If the checkbox is checked, display the output text
    // if (document.getElementById("sidebr").style.display == "block") {

    //   document.getElementById("sidebr").style.display = "none";
    //   document.getElementById("bodycont").style.marginLeft = "15%";
    // }
    // else {
    //   document.getElementById("sidebr").style.display = "block";
    //   document.getElementById("bodycont").style.marginLeft = "20%";
    // }

    // if(document.getElementById("dropdown").checked){
    //   alert(yes);
    // }
    // else{
    //   alert(no);
    // }
    var x = window.matchMedia("(max-width: 600px)");
    if (x.matches) { // If media query matches
      document.getElementById("sidebr").style.display = "none";
      if (checkBox) {
        document.getElementById("sidebr").style.display = "none";
        document.getElementById("bodycont").style.marginLeft = "0%";
        document.getElementById("bodycont").style.marginTop = "15%";
      }
      else {
        document.getElementById("sidebr").style.display = "block";
        document.getElementById("bodycont").style.marginLeft = "0%";
        document.getElementById("bodycont").style.marginTop = "15%";
      }
    }
  }


</script>