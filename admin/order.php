<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
$bokid = $_GET["bookid"];
$res = mysqli_query($conn, "SELECT * FROM `bookingtbl` WHERE booking_id=$bokid");
$data = mysqli_fetch_assoc($res);

$sql = mysqli_query($conn, "SELECT * FROM bookingtbl INNER JOIN carstbl ON bookingtbl.car_id=carstbl.car_id where booking_id=$bokid");
$cardata = mysqli_fetch_assoc($sql);
if ($cardata['status'] == 1) {
    $css = "disabled";
} else {
    $css = "";
}
$sts = $cardata['status'];
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
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container " style="margin-top:5%;margin-left:20%;" id="bodycont">
        <?php //print_r($data);
        // print_r($cardata); ?>
        <h3 class="card-title text-center pt-3"><i class=" fas fa-ticket-alt"></i> Booking Details </h3>
        <div class="container bg-body rounded-4 p-2" id='data'>
            <!-- <h5 class="card-title ml-5 pt-3"><i class=" fas fa-user "></i> User Details </h5> -->

            <div class="row      pb-3">
                <div class="col-md pl-5">
                    <label for="">Name</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_name"] ?>">
                </div>

                <div class="col-md px-5">
                    <label for="">Phone</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_phone"] ?>">
                </div>

            </div>

            <div class="row      pb-3">
                <!-- <div class="col-md pl-5">
                    <label for="">Name</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_name"] ?>">
                </div> -->

                <div class="col-md px-5">
                    <label for="">Email</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_email"] ?>">
                </div>

            </div>

            <div class="row      pb-3">
                <!-- <div class="col-md pl-5">
                    <label for="">Name</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_name"] ?>">
                </div> -->

                <div class="col-md px-5">
                    <label for="">Email</label>
                    <textarea type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["user_addr"] ?>"><?php echo $data["user_addr"] ?>   </textarea>
                </div>

            </div>

            <div class="row      pb-3">
                <div class="col-md pl-5">
                    <label for="">License No</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["lic_no"] ?>">
                </div>

                <div class="col-md px-5">
                    <label for="">Email</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["proff"] ?>">
                </div>

            </div>

            <div class="row  pb-3">
                <div class="col-md-6 pl-5">
                    <!-- <label for="">License No</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["lic_no"] ?>"> -->
                    <img src="<?php echo "../" . $data["license"] ?>" alt="asd" class="rounded-5 ">
                </div>

                <div class="col-md-6 px-5">
                    <!-- <label for="">Email</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["proff"] ?>"> -->
                    <img src="<?php echo "../" . $data["idprof"] ?>" alt="asd" class="rounded-5 ">
                </div>

            </div>

            <div class="row      pb-3">
                <div class="col-md pl-5">
                    <label for="">Car Name</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $cardata["car_name"] ?>">
                </div>

                <div class="col-md px-5">
                    <label for="">Car Id</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $cardata["car_id"] ?>">
                </div>

            </div>

            <div class="row      pb-3">
                <div class="col-md-6 pl-5">
                    <!-- <label for="">License No</label>
                    <input type="text" class="form-control  pl-5  text-dark" readonly
                        value="<?php echo $data["lic_no"] ?>">
                     <img src="<?php echo "../" . $data["license"] ?>" alt="asd" class="">    -->
                    <img src="<?php echo "../" . $cardata["car_img"] ?>" alt="asd" class="rounded-5 ">
                </div>

                <div class="col-md-6 px-5">
                    <h3 for="" class="text-center m-3"> Booking date </h3>
                    <div class="row my-3">
                        <label for="">From</label>
                        <input type="text" class="form-control  pl-5  text-dark" readonly
                            value="<?php echo $data["date_from"] ?>">
                    </div>

                    <div class="row my-3">
                        <label for="">TO</label>
                        <input type="text" class="form-control txt rounded--5 pl-5  text-dark" readonly
                            value="<?php echo $data["date_to"] ?>">
                    </div>

                    <div class="row my-3 ">
                        <button id="conf-btn" class="btn bt btn-success    mt-3 my-2" <?php echo "$css"; ?>>Confirm <i
                                class="fas fa fa-check"></i></button>
                        <button id="conc-btn" class="btn bt btn-danger rounded--5 my-2">Cancel <i
                                class="fas fa fa-times"></i></button>
                    </div>


                </div>

            </div>

        </div>

        <div class="container mb-3" id="msg">
            <div class="container fa-5x text-success border-success text-center p-5" style="border:dotted">
                <i class="fa  fa-check "></i>
                <h2> This order has been already confirmed </h2>
                <button class="btn btn-danger" onclick="ved('#msg');">Click to view details</button>
            </div>
        </div>

        <div class="container mb-3" id="msg2">
            <div class="container fa-5x text-danger border-danger text-center p-5" style="border:dotted">
                <i class="fa  fa fa-close  "></i>
                <h2> This order has been already cancelled </h2>
                <button class="btn btn-danger" onclick="ved('#msg2');">Click to view details</button>
            </div>
        </div>
    </div>
</body>

</html>
<style>
    #msg,
    #msg2 {
        display: none;
    }

    input:hover,
    textarea:hover {
        border: 1px solid goldenrod;
    }

    .bt:hover {
        transform: translateY(-10px);
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
    $("#conf-btn").click(function () {
        var bookId = '<?php echo $bokid; ?>';
        // alert(bookId);
        $.ajax({
            url: 'fin.php',
            method: 'POST',
            data: {
                name: bookId,
            },
            success: function (data) {
                alert(data);
                location.reload();
            }
        });
    });

    $("#conc-btn").click(function () {
        var bookId = '<?php echo $bokid; ?>';
        // alert(bookId);
        $.ajax({
            url: 'can.php',
            method: 'POST',
            data: {
                name: bookId,
            },
            success: function (data) {
                alert(data);
                location.reload();
            }
        });
    });
</script>

<script>
    var stu = '<?php echo $sts; ?>'
    // alert(stu)
    if (stu == -1) {
        $('.bt').attr("disabled", "disabled");
    }
    if (stu == 1) {
        $("#data").css("display", "none")
        $("#msg").css("display", "block")
    }
    if (stu == -1) {
        $("#data").css("display", "none")
        $("#msg2").css("display", "block")
    }
    function ved(msq) {
        // $(this).css("display","none");
        // alert(this.id)
        console.log(msq)
        // $(this).addClass('d-none');
        $("#data").css("display", "block");
        $(msq).css("display", "none");
    }
</script>