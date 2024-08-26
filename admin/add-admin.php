<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
// Define a function named password_generate that takes the number of characters as input
function password_generate($chars)
{
    // Define a string containing all possible characters for the password
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    // Shuffle the characters in the string and extract a substring of length $chars
    return substr(str_shuffle($data), 0, $chars);
}
// Call the password_generate function with 7 characters and echo the generated password
echo password_generate(7) . "\n";

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
    <div class="container " style="margin-top:5%;margin-left:20%;" id="bodycont">
        <!-- <button class="btn btn-danger" id="enter" onclick="enter();">Enter</button> -->
        <div class="profile-card p-4 rounded-5 mt-5" id="admin-data">
            <h2 class="text-center"><i class="fa fa-user"></i> Admin Profile </h2>
            <button id="back-btn" style="display:none"><i class=" fa fa-arrow-circle-left">Back</i></button>
            <div class="row ">
                <div class="col-md-3 mt-3  ml-5" style=";">
                    <div class="img-card p-3 ">

                        <img class="file-img "
                            src="https://t4.ftcdn.net/jpg/01/86/29/31/360_F_186293166_P4yk3uXQBDapbDFlR17ivpM6B1ux0fHG.jpg"
                            id="file-img" alt="profile pic" class="">
                        <input type="file" name="car-img" id="pet-img" style="display:none;"
                            onchange="show(this,'pet-img','file-img')" required class="input">

                        <label id="inp-label" class="inp-label rounded-pill fw-b  bg-primary" for="pet-img">Select Car
                            Image</label>

                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="form-group mt-5">
                        <label id="name-label" class="labels" for="fname">First Name</label>
                        <input type="text" id="fname" name="admin-f-name" placeholder="" class="input  form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label id="" class="labels" for="gen-input">Gender</label>
                            <select type="text" id="gen-input" name="admin-gender" placeholder="" class="form-control"
                                style="height:48.23px" required>
                                <option selected disabled>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group mt-5">
                        <label id="last-label" class="labels" for="lname">Last Name</label>
                        <input type="text" id="lname" name="admin-l-name" placeholder="" class="input form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label id="" class="labels" for="phn-input">Phone</label>
                        <input type="text" id="phn-input" name="phn-input" placeholder="" class="input form-control"
                            required>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-3">
                    <div class="col-md ml-5 " style="margin-right:35px;">
                        <div class="form-group">
                            <label id="" class="labels" for="dob-input">Birthday</label>
                            <input type="date" id="dob-input" name="dob-input" placeholder="" class="input form-control"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-md ml-5 " style="margin-right:35px;">
                    <div class="form-group">
                        <label id="" class="labels" for="email">Email</label>
                        <input type="email" id="email" name="admin-email" placeholder="" class="input form-control"
                            required>
                    </div>

                </div>
            </div>

            <div class="row ">
                <div class="col-md-3">
                    <div class="col-md ml-5 " style="margin-right:35px;">

                        <!-- <div class="form-group">
                            <label id="" class="labels" for="user-name">User Name</label>
                            <input type="text" id="user-name" name="user-name" placeholder="" class="form-control"
                                readonly required>
                        </div> -->
                    </div>
                </div>
                <div class="col-md ml-5 " style="margin-right:35px;">
                    <!-- <div class="form-group">
                        <label id="" class="labels" for="pwd-input">Password</label>
                        <input type="password" id="pwd-input" name="admin-gender" placeholder="" class="form-control"
                            readonly required style="height:48.23px">
                        <input type="checkbox" id="ppd" class="d-none" onclick="myFunction(this,'pwd-input')"> <label
                            class="eye" for="ppd"><i class="fa fa-eye"></i></label>
                    </div> -->
                </div>
            </div>
            <div class="mx-5 mt-2">


                <div class="row ">

                    <div class="col-md ml-5">
                        <button style="font-size:1.2em;display:none;" id="gen-but"
                            class="w-100 rounded-pill form-control btn btn-info ">Click to Generate Username
                            Password</button>


                        <button style="font-size:1.2em;" id="save-but"
                            class="w-100 rounded-pill form-control btn btn-info " onclick="enter();">Click to Save
                            Data</button>
                    </div>



                </div>
            </div>
        </div>

    </div>

    <div class="border " id="gendisp" style="">
        <div class="container w-25 ms">
            <h2 class="text-center mt-5"><i class="fa fa-user"></i><br>New Admin's </h2>
            <div class="row ">
                <div class="col-md-11 ml-3">
                    <div class="form-group">
                        <label id="" class="labels" for="user-name">User Name</label>
                        <input type="text" id="user-name" name="user-name" placeholder="" class="form-control" readonly
                            required>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-11 ml-3">
                    <div class="form-group">
                        <label id="" class="labels" for="pwd-input">Password</label>
                        <input type="password" id="pwd-input" name="admin-gender" placeholder="" class=" form-control"
                            readonly required style="height:48.23px">
                        <input type="checkbox" id="ppd" class="d-none" onclick="myFunction(this,'pwd-input')"> <label
                            class="eye" for="ppd"><i class="fa fa-eye"></i></label>
                    </div>
                </div>
            </div>
            <div class="cross">
                <button class="btn-xn" id='can' style="border:none;background:transparent"><i
                        class="fa fa-times-circle"></i></button>
            </div>
        </div>

    </div>

</body>

</html>
<style>
    .btn-xn {
        font-size: 1.8em;
        border: none;
        background: transparent;
        border-radius: 50%;
        width: 40px;
        position: absolute;
        top: 2%;
        right: 2%;


    }

    .ms {
        top: 20%;
        left: 42%;
        z-index: 99;
        position: absolute;
        box-shadow: 0px 0px 10px black;
        height: 50vh;
        border-radius: 25px;
        background-color: white;
    }

    #gendisp {
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        width: 100%;
        backdrop-filter: blur(10px);
        display: none;
    }

    #back-btn {
        position: absolute;
        top: 15%;
        left: 25%;
        background: transparent;
        border: none;
        font-size: large;
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

    .eye {
        position: absolute;
        top: 50px;
        right: 25px;
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

    .img-card {
        height: 250px;
        width: 200px;
        background-color: white;
        border-radius: 25px;
        color: #333;
        text-align: center;
        margin-left: 0px;
        margin-top: 15px;
        padding-top: 10px;
        border-top-right-radius: 25px;
        border-top-left-radius: 25px;
    }

    #file-img {
        border-radius: 25px;
    }

    #inp-label {
        width: 75%;
        height: 25px;
        color: white;
        border-radius: 25px;
        padding-top: 2px;
    }

    .profile-card {

        height: auto;
        max-width: 1230px;
        background-color: white;

    }

    .admin-img {
        height: 150px;
        width: 150px;
        top: -60px;
        position: fixed;
        left: 40%;
        background-image: linear-gradient(white, #EDF6FF);
        border: solid black;
        position: relative;
    }

    .profile-form {
        margin-top: -70px;
    }

    .profile-form label {
        font-size: 1.2em;
        margin-left: 45px;

        font-weight: bold;
        padding: 10px;

    }

    .profile-form input {
        display: flex;
        flex: row;
        margin-left: 125px;
        font-size: 1.1em;
        border-radius: 5px;
        text-align: center;
        color: black;
        border: solid transparent;
        width: 50%;
        box-shadow: inset 8px 8px 8px #ecf0f3, inset -8px -8px 8px #ecf0f3;
    }

    .profile-form button {
        box-shadow: none;
        width: 20%;
        height: 40px;
        float: right;
        border-radius: 25px;
        margin-top: 30px;
        margin-right: 50px;

    }

    input[type=text]:focus {}

    input[type=text],
    input[type=email] {
        font-size: 1.2em;
    }

    .labels {
        display: block;
        font-size: 18px;
        color: #000;
    }
</style>
<script>
    function enter() {
        $("#gendisp").css("display", "block");
        let ppt = '<?php echo password_generate(7); ?>';
        let uname = $("#lname").val() + "@" + Math.floor((Math.random() * 1000) + 1);
        $("#user-name").val(uname);
        $("#pwd-input").val(ppt);
        var prof = $("#pet-img").prop('files')[0];
        let namer = $("#fname").val() + " " + $("#lname").val();
        var form_data = new FormData();
        form_data.append("name", namer);
        form_data.append("email", $("#email").val());
        form_data.append("gender", $("#gen-input").val());
        form_data.append("dob", $("#dob-input").val());
        form_data.append("img", prof);
        form_data.append("phone", $("#phn-input").val());
        form_data.append("uname", $("#user-name").val());
        form_data.append("pwd", $("#pwd-input").val());
        $.ajax({
            url: 'insert.php',
            method: 'POST',
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            // data: {
            //     name: $("#fname").val() + " " + $("#lname").val(),
            //     email: $("#email").val(),
            //     gender: $("#gen-input").val(),
            //     dob: $("#dob-input").val(),
            //     phone: $("#phn-input").val(),
            //     uname: $("#user-name").val(),
            //     pwd: $("#pwd-input").val(),
            //     img=prof
            // },
            success: function (data) {
                // alert(data);
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "Admin Added in successfully"
                });

                ("#admin-data").css("display", "none")
            }

        });
    }

</script>

<script>
    function myFunction(obj, id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    let genButton = document.getElementById("gen-but");
    let saveButton = document.getElementById("save-but");
    let backBtn = document.getElementById("back-btn");
    let chkPwd = document.getElementById("chkpwd");
    let inp = document.getElementsByTagName("input");
    let ppt = '<?php echo password_generate(7); ?>';
    genButton.onclick = function () {
        let uname = $("#lname").val() + "@" + Math.floor((Math.random() * 1000) + 1);
        // alert(uname)
        genButton.style.display = "none";
        saveButton.style.cssText = `display:"block" `;
        backBtn.style.cssText = `display:"block" `;
        $("#user-name").val(uname);
        $("#pwd-input").val(ppt);
        // document.getElementById("user-name").innerText="asdas";
        // alert($("#user-name").val())
    }

    backBtn.onclick = function () {
        genButton.style.display = "block";
        saveButton.style.display = "none";
        backBtn.style.display = "none";
        $("#user-name").val("");

    }



</script>

<script>
    function show(obj, inpFile, imgfile) {
        let profilePic = document.getElementById(imgfile);
        let inputFile = document.getElementById(inpFile);

        profilePic.src = URL.createObjectURL(inputFile.files[0]);
    }
</script>
<script>
    $("#can").click(function () {
        $("#gendisp").css("display", "none");
        location.reload();
    })
</script>
<script>
    let input = document.querySelector(".input");
    let button = document.querySelector("#save-but");

    button.disabled = true; //setting button state to disabled

    input.addEventListener("change", stateHandle);

    function stateHandle() {
        if (document.querySelector(".input").value === "") {
            button.disabled = true; //button remains disabled
        } else {
            button.disabled = false; //button is enabled
        }
    }
</script>