<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <form action="prac.php" method="post" enctype="multipart/form-data">
        <div class="container bg-light rounded-5 px-5 pb-4" id="bodycont">
            <div class="row ">
                <div class="col-md">
                    <h2 class="text-center pt-3"><i class="fa fa-car "></i> Add Car</h2>
                    <div class="row ">
                        <div class="img-card p-3 ">

                            <img class="file-img "
                                src="https://st2.depositphotos.com/4378907/8827/v/450/depositphotos_88278536-stock-illustration-white-car-icon.jpg"
                                id="file-img" alt="profile pic" class="">
                            <input type="file" name="car-img" id="pet-img" style="display:none;"
                                onchange="show(this,'pet-img','file-img')" required>

                            <label id="inp-label" class="inp-label rounded-pill fw-b  bg-primary" for="pet-img">Select
                                Car
                                Image</label>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md">

                    <label for="car-name"> Car Name</label>
                    <input type="text" name="car-name" id="car-name" class="form-control "
                        placeholder="Enter Name of Car" required>

                </div>
            </div>
            <div class="row">
                <div class="col-md">

                    <label for="car-cat"> Car Category</label>
                    <select id="car-cat" name="car-cat" class="h-10 form-control" required>
                        <option disabled selected value>Select Car Type</option>
                        <option vlaue="Suvs">Suvs</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Luxary">Luxary</option>
                        <option value="Sports">Sports</option>
                        <option value="Convertible">Convertible</option>
                        <option value="Regular">Regular</option>
                    </select>

                </div>

                <div class="col-md">

                    <label for="car-trans"> Car Transmission </label>
                    <select id="car-trans" name="car-trans" class="h-10 form-control" required>
                        <option disabled selected value>Select Car Transmission</option>
                        <option value="manual & automatic">Manual & Automatic</option>
                        <option vlaue="auto">Auto</option>
                        <option value="manual">Manual</option>
                    </select>

                </div>

                <div class="col-md">

                    <label for="car-ac">AC Available</label>
                    <select id="car-ac" name="car-ac" class="h-10 form-control" required>

                        <option vlaue="yes">Yes</option>
                        <option value="no">No</option>
                    </select>

                </div>
            </div>


            <div class="row">
                <div class="col-md">

                    <label for="car-brand"> Car Brand</label>
                    <input type="text" name="car-brand" id="car-brand" class="form-control "
                        placeholder="Enter Brand of Car" required>

                </div>

                <div class="col-md">

                    <label for="car-rent"> Car Rent <small class=""> /per day</small></label>
                    <input type="number" name="car-rent" id="car-rent" class="form-control "
                        placeholder="Enter Rent of car " required>

                </div>
            </div>



            <div class="row">
                <div class="col-md">

                    <label for="car-count"> Car Count </label>
                    <input type="number" name="car-count" id="car-count" class="form-control "
                        placeholder="Enter Total Number of Car Available" required>

                </div>

                <div class="col-md">

                    <label for="car-lug"> Lugaage </label>
                    <input type="number" name="car-lug" id="car-lug" class="form-control "
                        placeholder="Enter Total Number of Luggage can be put in a car" required>

                </div>
            </div>

            <div class="row">
                <div class="col-md">

                    <label for="car-doors"> Car Doors</label>
                    <input type="number" name="car-doors" id="car-doors" class="form-control "
                        placeholder="Enter Total Number of Doors in car" required>

                </div>

                <div class="col-md">

                    <label for="car-psg"> Car Passenger </label>
                    <input type="number" name="car-psg" id="car-psg" class="form-control "
                        placeholder="Enter Total Number of Passenger can sit in car" required>

                </div>
            </div>



            <button name="ent" class="hv form-control bg-primary text-light mt-4">Enter Car Data</button>

        </div>
    </form>
</body>

</html>
<style>
    .hv:hover {
        transform: translateY(-10px);
    }

    .form-control {
        border: 1px solid #333;
    }

    .img-card {

        border-radius: 25px;
        color: #333;
        text-align: center;
        margin-left: 0px;
        /* border:solid red; */
    }

    .img-card .inp-label {
        width: 150px;
        color: #fff;
        padding: 12px;

        margin: 10px auto;
        display: block;
        cursor: pointer;
        margin-top: 7px;
        font-size: 15px;
        font-weight: bold;

    }

    .inp-label:hover {
        filter: brightness(85%);
    }

    .img-card .file-img {
        height: 400px;
        width: auto;
        border-radius: 25px;
        background-size: cover;
    }

    .img-card .file-img:hover {
        filter: brightness(85%);
    }

    .form-control {
        height: 50px;
        background: #ecf0f4;
        border-color: transparent;
        padding: 0 15px;
        font-size: 16px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #00bcd9;
        -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    textarea.form-control {
        height: 160px;
        padding-top: 15px;
        resize: none;
    }

    input:hover,
    select:hover {
        border-color: #00bcd9;
    }
</style>
<script>
    function show(obj, inpFile, imgfile) {
        let profilePic = document.getElementById(imgfile);
        let inputFile = document.getElementById(inpFile);

        profilePic.src = URL.createObjectURL(inputFile.files[0]);
    }
</script>

<script>

</script>