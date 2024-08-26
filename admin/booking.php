<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
$sql = mysqli_query($conn, "SELECT * FROM bookingtbl INNER JOIN carstbl ON bookingtbl.car_id=carstbl.car_id");
$data = mysqli_fetch_all($sql, MYSQLI_BOTH);
$row=mysqli_num_rows($sql);
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
</head>

<body>
    <div class="container " style="margin-top:5%;margin-left:20%;" id="bodycont">
        <h3 class="card-title text-center pt-3"><i class=" fas fa-ticket-alt" ></i> Booking</h3>
        <div class="table-responsive">
            <table class="table table-hover" id="book-table">
                <thead>
                    <tr>
                        <th scope="col" style="width:2%" class="w-10">#</th>
                        <th scope="col" style="width:10%">Image</th>
                        <th scope="col" style="width:20%">Car Name</th>
                        <th scope="col" style="width:20%">Buyer Name</th>
                        <th scope="col" style="width:10%">From</th>
                        <th scope="col" style="width:10%">To </th>
                        <th scope="col" style="width:10%">Status </th>
                        <th style="width:15%" class="text-center">   </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $row; $i++) {
                        $sno = $i + 1;
                        $carName = $data[$i]["car_name"];
                        $buyerName=$data[$i]["user_name"];
                        $dataFrom = $data[$i]["date_from"];
                        $dateTo = $data[$i]["date_to"];
                        $img = "../" . $data[$i]["car_img"];
                        $bokid=$data[$i]["booking_id"];
                        $status = $data[$i]['status'];
                        if ($status == 0) {
                            $tmpstatus = "table-warning";
                            $sta="Awaiting";
                        } elseif ($status == 1) {
                            $tmpstatus = "table-success";
                            $sta="Confirmed";
                        } else {
                            $tmpstatus = "table-danger";
                            $sta="Cancled";
                        }
                        echo "
                            <tr class=''>
                                <th scope='row'>$sno</th>
                                <th scope='row'><div>
                                <img src='$img' class='w-100 h-100'>
                                </div></th>
                                <td class='text-capitalize'>$carName</td>
                                <td class='text-capitalize'>$buyerName</td>
                                <td>$dataFrom</td>
                                <td>$dateTo</td>
                                <td>$sta</td>
                                <td> <button id='$bokid' class='bokbtn btn btn-primary w-100'>View</button> 
                                </td>
                            </tr>";
                    }
                    ?>

                </tbody>

            </table>
        </div>

    </div>
</body>

</html>
<style>
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

    var table = $('#book-table').DataTable({
        pageLength: 100,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    })
</script>

<script>
    $(".bokbtn").click(function(){
        // alert(this.id);
        window.location.href = "order.php?bookid="+this.id;
    });
</script>

