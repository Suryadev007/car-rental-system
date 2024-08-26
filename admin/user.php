<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
$res=mysqli_query($conn,"SELECT * FROM `usertbl`");
$row=mysqli_num_rows($res);
$data=mysqli_fetch_all($res,MYSQLI_BOTH);


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
    <h3 class="card-title text-center pt-3"><i class=" fas fa-users" ></i> Users</h3>

            <table class="table" id="book-table">
                <thead>
                    <tr>
                        <th scope="col" style="width:2%" class="w-10">#</th>
                        <th scope="col" style="width:10%">Name</th>
                        <th scope="col" style="width:20%">Email</th>
                        <th scope="col" style="width:10%">phone</th>
                        <th scope="col" style="width:2%">Orders</th>
                        <th scope="col" class="text-center" style="width:10%">View</th>
                        
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    for ($i = 0; $i < $row; $i++) {
                        $sno = $i + 1;
                        $carName = $data[$i]["user_name"];
                        $email = $data[$i]["user_email"];
                        $userID=$data[$i]["user_id"];
                        $res2=mysqli_query($conn,"SELECT count(*) from bookingtbl where user_email='$email'");
                        $row2=mysqli_fetch_array($res2);
                        $orders=$row2[0];
                        $phone = $data[$i]["user_phone"];
                        // $orders = $data[$i]["orders"];
                        $img = "../" . $data[$i]["car_img"];
                        $tempval = $data[$i]["status"];
                        echo "
                                <tr>
                                    <th scope='row'>$sno</th>
                                    <td>$carName</td>
                                    <td>$email</td>
                                    <td>$phone</td>
                                    <td class='text-center'>$orders</td>
                                    <td class='text-center'><button id='$userID' class='w-100 btn btn-warning wo'> Watch orders </button> </td>
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
        pageLength: 7,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    })
</script>
<script>
    $(".wo").click(function(){
        // alert(this.id);
        window.location.href="watch-order.php?uid="+this.id
    });
</script>