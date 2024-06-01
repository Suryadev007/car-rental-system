<?php
include "../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="side_bar_menu bg-dark" id="sidebr">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                             <li>
                                <a href="dashboard.php" aria-expanded="true"><i class="ti-home " ></i><span>Dashboard</span></a>
                                
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-car"></i><span>Cars</span></a>
                                <ul class="collapse">
                                    
                                    <li><a href="add-cars.php">Add Cars</a></li>
                                    <li><a href="manage-cars.php">Manage Cars</a></li>
                                </ul>
                            </li>

                             <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-list"></i><span>Bookings</span></a>
                                <ul class="collapse">
                                    <li><a href="booking.php">Booking Page</a></li>
                                    <li><a href="booking-history.php">Booking History</a></li>
                                </ul>
                            </li>
                           
                          <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User</span></a>
                                <ul class="collapse">
                                    <li><a href="user.php">Users details</a></li>
                                    <li><a href="query.php">Query  </a></li>
                                    <!-- <li><a href="between-dates-foreignerreports.php">Foreigner People Report</a></li> -->
                                </ul>
                            </li>
                            
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                                <ul class="collapse">
                                    <li><a href="profile.php">Show Admin Profile</a></li>
                                    <li><a href="add-admin.php">Add New Admin</a></li>
                                </ul>
                            </li>
                            <li>
                                <a onclick="fun()" style="color:#8d97ad;" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Log Out
                                    </span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</body>
</html>
<style>
    ._body{
    margin-left:19%;
    margin-top:6em;
}
    .side_bar_menu{    
        left: 0px;
        height: 100%;
        top:75px;
        width: 280px;
        overflow: hidden;
        background: #303641;
        margin-top:-5px;
        box-shadow: 2px 0 32px rgba(0, 0, 0, 0.05);
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        position:fixed;
        z-index: 999;
        display: block;
    }
</style>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all bar chart activation -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        
        function fun(){
            document.getElementById("form_01").style.display="block";
        }
    </script>
   
    <form id="form_01" class="bg-body-tertiary  container-fluid py-4" action="" method="post"  style="display:none;">
       
        <center> <i style="font-size:7em;" class=" pt  fa fa-question-circle" aria-hidden="true"></i>
        <h3 class="pt-3">Are You Sure You Want TO LogOut</h3><br>
        <button class="btn btn-danger mt-3 " name="yes" style="font-size:1.2em;">Confirm</button></center>
        <button class="logbut" name="no"><i class="fa fa-times" aria-hidden="true"></i></button>
        <?php
            if(isset($_POST['yes'])){
                session_destroy();
                echo "<script>window.location.href='index.php';</script>";
            }
        ?>
    </form>
    <style>
        #form_01{
            position: fixed;
            top:30%;
            left:40%;
            height: auto;
            width: 55vh;
            background-color:wheat;
            z-index: 99;
            transition: 0.5s ease-in;
            box-shadow: 0px 0px 5px black;
            backdrop-filter: blur(0.5);
        }
        label{
            margin-top:10px;
            font-weight:bold;
            color:black;
        }
        .logbut{
            top:0px;
            right:0px;
            padding:5px;
            width: 50px;
            position: absolute;
            background-color: transparent;
            border: none;
            font-size: 2.5em;
        }

    </style>
    <script>
          
    </script>