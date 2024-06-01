<?php include ('header.php');
include ('sidebar.php');
include ('../db.php');
session_start();
$id = $_SESSION["adminid"];
$sql = "SELECT * FROM `admintbl` WHERE admin_id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$name = $data["Name"];
$temp = explode(" ", $name);
$fname = $temp[0];
$lname = $temp[1];
$img = $_SESSION["admin_img"];
$dob = $data["dob"];
$tempdob = explode("-", $dob);
$year = $tempdob[0];
$month = $tempdob[1];
$day = $tempdob[2];
$date = $day . "-" . $month . "-" . $year;
$img = $data["admin_img"];
if ($img == "") {
  $img = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png";
}
// if($data['gender']=="male" or $data['gender']=="Male"){
  
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>
  <div class="container w-100" style="" id="bodycont">

    <div class="profile-card p-4 rounded-5 mt-5">
      <h2 class="text-center"><i class="fa fa-user"></i> Admin Profile </h2>
      <div class="row ">
        <div class="col-md-3 mt-3  ml-5" style=";">
          <div class="img-card">

            <img src='<?php echo $img; ?>' for="admin-img" id="file-img" alt="profile pic">
            <input type="file" name="car-img" id="admin-img" style="display:none;"
              onchange="show(this,'admin-img','file-img')" readonly required class="input">
            <label id="inp-label" style="display:none" class="btn bg-info" for="admin-img">Select Image</label>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class="form-group mt-5">
            <label id="name-label" class="labels" for="fname">First Name</label>
            <input type="text" id="fname" name="admin-f-name" readonly placeholder=""
              class="inputDisabled form-control input" required value='<?php echo $fname; ?>'>
          </div>
          <div class="form-group">
            <label id="" class="labels" for="user-name">User Name</label>
            <input type="text" id="user-name" name="user-name" readonly placeholder="" class="form-control input"
              required value='<?php echo $data['user_name']; ?>'>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="form-group mt-5">
            <label id="last-label" class="labels" for="lname">Last Name</label>
            <input type="text" id="lname" name="admin-l-name" readonly placeholder="" class="form-control input"
              required value='<?php echo $lname; ?>'>
          </div>
          <div class="form-group">
            <label id="" class="labels" for="phn-input">Phone</label>
            <input type="text" id="phn-input" name="phn-input" readonly placeholder="" class="form-control input"
              required value='<?php echo $data['phone']; ?>'>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="col-md-3">
          <div class="col-md ml-5 " style="margin-right:35px;">
            <div class="form-group">
              <label id="" class="labels" for="gen-input">Gender</label>
              <select type="text" id="gen-input" name="admin-gender" readonly placeholder="" class="form-control input"
                disabled value='<?php echo $data['gender']; ?>'>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md ml-5 " style="margin-right:35px;">
          <div class="form-group">
            <label id="" class="labels" for="email">Email</label>
            <input type="email" id="email" name="admin-email" readonly placeholder="" class="form-control" required
              value='<?php echo $data["email"]; ?>'>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-md-3">
          <div class="col-md ml-5 " style="margin-right:35px;">
            <div class="form-group">
              <label id="" class="labels" for="dob-input">Birthday</label>
              <input type="text" id="dob-input" name="dob-input" readonly placeholder="" class="form-control inpout"
                required value='<?php echo $date; ?>'>
            </div>
          </div>
        </div>
        <div class="col-md ml-5 " style="margin-right:35px;">
          <div class="form-group">
            <label id="" class="labels" for="pwd-input">Password</label>
            <input type="password" id="pwd-input" name="admin-gender" readonly placeholder="" class="form-control input"
              required value='<?php echo $data["user_pwd"]; ?>' style="height:48.23px">
            <input type="checkbox" id="ppd" class="d-none" onclick="myFunction(this,'pwd-input')"> <label class="eye"
              for="ppd"><i class="fa fa-eye"></i></label>
          </div>
        </div>
      </div>
      <div class="mx-5 mt-2">
        <button style="font-size:1.2em" id="edit-but" class="w-100 rounded-pill text-center btn btn-info">Click here to
          Edit</button>
      </div>

      <div class="row ">
        <div class="col-md-3">
          <div class="col-md" style="margin-right:35px;">
            <div class="col-md-8">


            </div>
          </div>
        </div>
        <div class="col-md ml-5 " style="margin-right:25px;margin-top:-10px">
          <div class="form-group" id="chkpwd" style="display:none;">
            <label id="" class="labels input" for="chk-input">Confirm Password</label>
            <input type="password" id="chk-input" name="admin-gender" placeholder="" class="form-control gncp" required>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md ml-5">
            <button style="display:none; font-size:1em;" id="save-but"
              class="w-100 rounded-pill form-control btn btn-info ">Click here to update Profile</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="row ">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="col-md">

      </div>
    </div>
  </div>

  </div>

  </div>
</body>

</html>
<style>
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

  @keyframes shake {
    0% {
      transform: translate(1px, 1px) rotate(0deg);
    }

    10% {
      transform: translate(-1px, -2px) rotate(-1deg);
    }

    20% {
      transform: translate(-3px, 0px) rotate(1deg);
    }

    30% {
      transform: translate(3px, 2px) rotate(0deg);
    }

    40% {
      transform: translate(1px, -1px) rotate(1deg);
    }

    50% {
      transform: translate(-1px, 2px) rotate(-1deg);
    }

    60% {
      transform: translate(-3px, 1px) rotate(0deg);
    }

    70% {
      transform: translate(3px, 1px) rotate(-1deg);
    }

    80% {
      transform: translate(-1px, -1px) rotate(1deg);
    }

    90% {
      transform: translate(1px, 2px) rotate(0deg);
    }

    100% {
      transform: translate(1px, -2px) rotate(-1deg);
    }
  }
</style>
<script>
  function myFunction(obj, id) {
    var x = document.getElementById(id);
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  let editButton = document.getElementById("edit-but");
  let saveButton = document.getElementById("save-but")
  let chkPwd = document.getElementById("chkpwd");
  let inp = document.getElementsByTagName("input");
  editButton.onclick = function () {
    
    let btn = document.getElementById("edit-but");
    editButton.style.display = "none";
    saveButton.style.cssText = `display:"block";font-size:1.3em `;
    chkPwd.style.cssText = `display:"block" `;
    document.getElementById("inp-label").style.cssText = `display:"block" `;
    //document.querySelector('input').text = 'Whatever you want!';
    //document.getElementById('name-label').disabled = false;
    $('input').removeAttr("readonly");
    $('#gen-input').removeAttr("disabled")
    $('#gen-input').removeAttr("readonly")
    document.getElementById('dob-input').type = "date";

  }


</script>
<!-- <script>
  let input = document.querySelector(".gncp");
  let button = document.querySelector("#save-but");

  button.disabled = true; //setting button state to disabled

  input.addEventListener("change", stateHandle);

  function stateHandle() {
    if (document.querySelector(".form-control").value === "") {
      button.disabled = true; //button remains disabled
    } else {
      button.disabled = false; //button is enabled
    }
  }
</script> -->

<script>
  // $("#chk-input").keyup(function () {
  //   var pass = $("#pwd-input").val();
  //   var conpas = $("#chk-input").val();

  //   // $("#chk-input").css("background-color", "pink");
  //   if (pass == conpas) {
  //     $("#pwd-input").css("border", "solid green");
  //     $("#chk-input").css("border", "solid green");
  //   }
  //   else {
  //     $("#pwd-input").css("border", "solid red");
  //     $("#chk-input").css("border", "solid red");
  //   }
  // });
  $("#save-but").click(function () {
    var pass = $("#pwd-input").val();
    var conpas = $("#chk-input").val();
    // alert(pass+" "+conpas);
    if (pass == conpas && $(".input") != "") {
      var img = $("#admin-img").prop('files')[0];
      var id = '<?php echo $id; ?>';
      // alert("yes")
      // $("#pwd-input").css("border","solid green");
      // $("#chk-input").css("border","solid green");
      $("#chk-input").css("background-color", "#65FD08");
      var form_data = new FormData();
      form_data.append("fname", $("#fname").val());
      form_data.append("lname", $("#lname").val());
      form_data.append("uname", $("#user-name").val());
      form_data.append("gender", $("#gen-input").val());
      form_data.append("phone", $("#phn-input").val());
      form_data.append("email", $("#email").val());
      form_data.append("dob", $("#dob-input").val());
      form_data.append("password", $("#pwd-input").val());
      form_data.append("img", img);
      form_data.append("iid", id);
      
      $.ajax({
        url: 'upd.php',
        method: 'POST',
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        // {
        //   name: name
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
            title: "Profile Updated successfully"
          });
          var timer = setTimeout(function () {
            location.reload();
          }, 3000);
        }

      });

    }
    else {
      // alert("Password doesn't Match")
      $("#chk-input").css("background-color", "pink");
      $("#chk-input").effect("shake");


    }
  })

</script>
<script>
  function show(obj, inpFile, imgfile) {
    let profilePic = document.getElementById(imgfile);
    let inputFile = document.getElementById(inpFile);

    profilePic.src = URL.createObjectURL(inputFile.files[0]);
  }
</script>
<script>
  // $("#gen-input").val().att("selected","selected")
  var gen= '<?php echo $data['gender']; ?>'
  // alert(gen);
  if(gen=='male' || gen=="Male"){
  $('#gen-input option:eq(0)').attr('selected', 'selected')
  }
  if(gen=='Female' || gen=="female"){
    $('#gen-input option:eq(1)').attr('selected', 'selected')
  }
</script>