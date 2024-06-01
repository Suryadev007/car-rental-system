<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
$res = mysqli_query($conn, "SELECT COUNT(*) as carCount FROM `carstbl`");
$res2 = mysqli_query($conn, "SELECT COUNT(*) as userCount FROM `usertbl`");
$res3 = mysqli_query($conn, "SELECT COUNT(*) as orderCount FROM `bookingtbl`");
$res4 = mysqli_query($conn, "SELECT COUNT(*) as veriCount FROM `bookingtbl` WHERE status=1;");
$res5 = mysqli_query($conn, "SELECT COUNT(*) as stusnum FROM `bookingtbl` WHERE status =0;");
$res6 = mysqli_query($conn, "SELECT COUNT(*) as qryct FROM `querytbl`");
$res7 = mysqli_query($conn, "SELECT COUNT(*) as st FROM `querytbl` where status='0'");

$sql = mysqli_query($conn, "SELECT * FROM bookingtbl INNER JOIN carstbl ON bookingtbl.car_id=carstbl.car_id order by field(bookingtbl.`status`, 0,1,-1)");
$data = mysqli_fetch_all($sql, MYSQLI_BOTH);

$row = mysqli_fetch_array($res);
$row2 = mysqli_fetch_array($res2);
$row3 = mysqli_fetch_array($res3);
$row4 = mysqli_fetch_array($res4);
$row5 = mysqli_fetch_array($res5);
$row6 = mysqli_fetch_array($res6);
$row7 = mysqli_fetch_array($res7);

$carCount = $row["carCount"];
$userCount = $row2["userCount"];
$orderCount = $row3["orderCount"];
$status= $row5["stusnum"];
$ver = $row4["veriCount"];
$qrycnt = $row6["qryct"];
$qryst = $row7["st"];

if ($qryst > 0 ) {
    $css = "border-3 border-danger";
} else {
    $css = "";
}
if( $status> 0){
    $css2 = "border-3 border-danger";
}else{
    $css2 = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container " id="bodycont">

        <div class="row overflow-hidden pt-3 cardss">
            <div class="col-md-4 pb-5">
                <a href="user.php">
                    <div class='dashboard-card  overflow-hidden rounded-5'>
                        <div class="data">
                            <h5 class="fw-bold ">Number of Users</h5>
                            <h4 class="fw-bold " style="float:right;margin-top:5%"><?php echo $userCount; ?> </h4>
                            <i class='bg-icon fas fa-users'></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 pb-5">
                <a href="manage-cars.php">
                    <div class='dashboard-card rounded-5'>
                        <div class="data">
                            <h5 class="fw-bold ">Number Of Cars</h5>
                            <i class='bg-icon fas fa-car' style="margin-top:-25%;"></i>
                            <h4 class="fw-bold " style="float:right;margin-top:5%"><?php echo "$carCount"; ?></h4>
                        </div>
                    </div>
                    <a href="manage-cars.php"></a>
            </div>

            <div class="col-md-4 pb-5">
                <a href="booking.php">
                    <div class='dashboard-card rounded-5 <?php echo $css2; ?>'>
                        <div class="data">
                            <h5 class="fw-bold ">Booking</h5>
                            <i class='bg-icon fas fa-ticket-alt' style="margin-top:-25%;"></i>
                            <h4 class="fw-bold " style="float:right;margin-top:5%"><?php echo "$orderCount"; ?></h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-md-4 pb-5">
                <div class='dashboard-card  overflow-hidden rounded-5'>
                    <div class="data">
                        <h5 class="fw-bold ">Verified Users</h5>
                        <h4 class="fw-bold " style="float:right;margin-top:5%"><?php echo $verfi; ?> </h4>
                        <i class='bg-icon fas fa-user'></i>
                    </div>
                </div>
            </div> -->

            

            <div class="col-md-4 pb-5">
                <a href="query.php">
                    <div class='dashboard-card  overflow-hidden rounded-5 <?php echo $css; ?>'>
                        <div class="data">
                            <h5 class="fw-bold ">Queries</h5>
                            <h4 class="fw-bold " style="float:right;margin-top:5%;"><?php echo $qrycnt; ?> </h4>
                            <i class='bg-icon fas fa-comments' style="font-size:5.5em; left:0%;margin-top:-17%"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 pb-5">
            <a href="booking.php">
                <div class='dashboard-card  overflow-hidden rounded-5'>
                    <div class="data">
                        <h5 class="fw-bold ">Confirmed Booking</h5>
                        <h4 class="fw-bold " style="float:right;margin-top:5%"><?php echo $ver; ?> </h4>
                        <i class='bg-icon fas fa-chain '></i>
                    </div>
                </div>
                </a>
            </div>

        </div>


        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="card-title">Booking</h5>
                                    <div class="table-responsive">
                                        <table class="table able-striped table-hover" id="book-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:2%" class="w-10">#</th>
                                                    <th scope="col" style="width:10%">Image</th>
                                                    <th scope="col" style="width:20%">Car Name</th>
                                                    <th scope="col" style="width:10%">From</th>
                                                    <th scope="col" style="width:10%">To </th>
                                                    <th style="width:15%" class="text-center">Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < $orderCount; $i++) {
                                                    $sno = $i + 1;
                                                    $carName = $data[$i]["car_name"];
                                                    $dataFrom = $data[$i]["date_from"];
                                                    $dateTo = $data[$i]["date_to"];
                                                    $img = "../" . $data[$i]["car_img"];
                                                    $tempval=$data[$i]["status"];
                                                    $bid=$data[$i]["booking_id"];
                                                    if ($tempval == 0) {
                                                        $status = "Pending";
                                                        $cls = "btn-warning fa fa-clock";
                                                    } else {
                                                        if ($tempval == -1) {
                                                            $status = "Cancelled ";
                                                            
                                                            $cls = "btn-danger fa fa-times";
                                                        } else {
                                                            $status = "Confirmed";
                                                            $cls = "btn-success fa fa-check";
                                                        }
                            
                                                    }
                                                    echo "
                                                    <tr >
                                                        <th scope='row'>$sno</th>
                                                        <th scope='row'><div>
                                                        <img src='$img' class='w-100'>
                                                        </div></th>
                                                        <td>$carName</td>
                                                        <td>$dataFrom</td>
                                                        <td>$dateTo</td>
                                                        <td class='text-center'><button id='$bid' class='view w-100 btn $cls'> $status </button> </td>
                                                    </tr>";
                                                }
                                                ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<style>
    .cardss a {
        color: black;
    }

    #btn-back {
        float: right;
    }

    .bg-icon {
        position: relative;
        background-color: transparent;
        margin-top: -20%;
        /* left: 50%; */
        font-size: 8em;
        filter: opacity(0.1);

    }

    .dashboard-header {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .dashboard-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }

    .dashboard-card {
        /* background: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg'); */
        border: 1px solid #ddd;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        font-size: 1.5em;
        transition: 0.5s;
        height: 15vh;
        width: auto;
        overflow: hidden;
    }

    .table-dashboard {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table-dashboard th,
    .table-dashboard td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table-dashboard th {
        background-color: #f8f9fa;
    }

    .dashboard-card:hover {
        transform: scale(1.05);
        transition: 0.5s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
</style>
<script>

    var x = $("#book-table").children('tbody').children('tr').length;
    var red = "Found " + x + " tr elements in the table.";
    console.log(x);

    var table = $('#book-table').DataTable({
        pageLength: 100,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    })
</script>
<script>
    $(".view").click(function() {
        // alert(this.id)
        // var id=this.id
        window.location.href = "order.php?bookid="+this.id;
    })
</script>