<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
$res = mysqli_query($conn, "SELECT * FROM `carstbl`");
$row = mysqli_num_rows($res);
$data = mysqli_fetch_all($res, MYSQLI_BOTH);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

</head>

<body>
    <div class="container rounded-4" style="margin-top:5%;margin-left:20%;" id="bodycont">

    <div class="table-responsive pb-5 pt-3">
            <h3 class="text-center pt-3"><i class="fa fa-car "></i> Manage Car</h3>
            <table class="table" id="book-table">
                <thead>
                    <tr class="">
                        <th scope="col" style="width:2%" class="w-10">#</th>
                        <th scope="col" style="width:10%">Image</th>
                        <th scope="col" style="width:10%">Car-Id</th>
                        <th scope="col" style="width:40%">Name</th>
                        <th scope="col" style="width:5%">Price<small>$/day</small></th>
                        <th scope="col" style="width:5%">Available </th>
                        <th style="width:15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $row; $i++) {
                        $name = $data[$i]["car_name"];
                        $img = "../" . $data[$i]["car_img"];
                        $rent = $data[$i]["car_rent"];
                        $avail = $data[$i]["avail_no"];
                        $carid = $data[$i]["car_id"];
                        $sno = $i + 1;
                        echo "
                            <tr>
                                <th scope='row'>$sno</th>
                                <td>
                                    <div>
                                    <img src='$img' class='w-100 h-100'>
                                    </div>
                                
                                </td>
                                <td class='text-capitalize' >$carid</td>
                                <td class='text-capitalize' >$name</td>
                                <td class='text-center'>$rent</td>
                                <td class='text-center'>$avail</td>
                                <td class='text-center'><a href='edit-car.php?cid=$carid' class='btn btn-primary w-75'>Edit</a>
                                <button id='$carid'class='call-btn m-2 w-75 btn btn-danger'>Delete</button>
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
    $(document).ready(function () {
        $.fn.myFunction = function (id) {
            $.ajax({
                url: 'delete.php',
                method: 'POST',
                data: {
                    name: id
                },
                success: function (data) {
                    alert("Car Deleted succesfully");
                    location.reload();
                }
            });

        }
        
        $(".call-btn").click(function () {
            var result = confirm("Want to delete ?");
            if (result) {
            $.fn.myFunction(this.id);
            }
        });
    });
</script>