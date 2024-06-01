<?php
session_start();

$carid = $_GET["id"];
$name = $_SESSION["user"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$alter_phn = $_SESSION["alterphn"];
$adress = $_SESSION["addrs"];
$driving_no = $_SESSION["dlsno"];
$driving_img = $_SESSION["dlsimg"];
$proof_id = $_SESSION["add-id"];
$proof_img = $_SESSION["proofimg"];
$verify = $_SESSION["verify-status"];
$order=$_SESSION["orders"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="images/logo31.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <div class="slider" style="height:100px;">
    <?php include "header.php"; ?>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="height:600px;">
      <div class="item active">
        <img src="https://duruthemes.com/demo/html/renax/dark/img/slider/3.jpg " alt="Los Angeles"
          style="filter: brightness(50%); background-size:cover;" class="h-100">
        <div class="v-middle caption">
          <div class="">
            <div class="row">
              <div class="col-lg-12 text-center col-md-12">
                <div class="v-middle fa-5x  " style="margin-top:-130px">
                  <p class="text-light">Place Order <span style="color:#f5b754;"> Here</span></p>
                  <h1 class="gl">Get YOur Car</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="container mb-5" style="margin-top:-30px;">
      <div class="row ">
        <div class="col-md p-5" style=""></div>
        <div class="col-md "></div>
      </div>
      <div class="container py-3 position-relativemt-5 rounded-5 overflow-hidden" style="border:solid#f5b754;">
        <div class="row">
          <div class="col-md p-4  " style="border-right:solid#f5b754">
            <input type="text" name="" id="" class="con-form ">
            <label class="lbl px-1" for="">Location</label>
          </div>
          <div class="col-md p-4 " style="border-right:solid#f5b754">
            <input type="date" name="" id="" class="con-form ">
            <label class="lbl px-1" for="">Pick Up Date</label>
          </div>
          <div class="col-md p-4">
            <input type="date" name="" id="" class="con-form ">
            <label class="lbl px-1" for="">Return Date</label>
          </div>

          <div class="col-md-2 p-4 px-5" style="border-left:solid#f5b754">
            <button class="bbt mt-4 ">Rent Now</button>
          </div>

        </div>
      </div>
    </div> -->
      <div class="container mb-5" style="" id="data_form">
        <h2 class="gl  fw-bold h1 px-5 mt-5">*Basic Details </h2>
        <div class="container rounded-5 py-3 overflow-hidden" style="background-color:#333">
          <div class="row  p-3" style="">
            <div class="col-md  ">

              <label class="h3 px-1 text-center" for="customer-name">Name</label>
              <input   type="text" name="customer-name" id="customer-name" class="con-form " required
                value='<?php echo "$name"; ?>'>

            </div>

            <div class="col-md  ">

              <label class="h3 px-1 text-center" for="customer-email">Email</label>
              <input   type="text" name="customer-email" id="customer-email" class="con-form " value=<?php echo "$email"; ?>>

            </div>

          </div>

          <div class="row  p-3" style="">
            <div class="col-md ">

              <label class="h3 px-1 text-center" for="customer-phone">Phone Number</label>
              <input   type="text" name="customer-phone" id="customer-phone" class="con-form " value=<?php echo "$phone"; ?>>

            </div>

            <div class="col-md ">

              <label class="h3 px-1 text-center" for="customer-alter-phone">Alternate Phone Number</label>
              <input   type="text" name="customer-alter-phone" id="customer-alter-phone" class="con-form "
                value=<?php echo "$alter_phn"; ?>>

            </div>
          </div>

          <div class="row  p-3" style="">
            <div class="col-md">

              <label class="h3 px-1 text-center" for="customer-address">Address</label>
              <textarea   type="text" name="customer-address" id="customer-address" class="con-form " value=<?php echo "$adress"; ?>></textarea>

            </div>
          </div>
        </div>


        <!-- Enter driving details -->

        <h2 class="gl  fw-bold h1 px-5 mt-5">*Driving Details</h2>
        <div class="container rounded-5 py-3 overflow-hidden" style="background-color:#333">
          <div class="row  p-3" style="">
            <div class="col-md  ">

              <label class="h3 px-1 text-center" for="customer-dln">Driving License Number</label>
              <input   type="text" name="customer-dln" id="customer-dln" class="con-form "
                placeholder="Enter your Driving License Number">

            </div>

            <div class="col-md">

              <label class="h3 px-1 text-center" for="customer-dli">Driving License Image <small>Front &
                  Back</small></label>
              <input   type="file" name="customer-dli" id="customer-dli" class="con-form">
            </div>

          </div>

        </div>


        <h2 class="gl  fw-bold h1 px-5 mt-5">*Address/Id Proof </h2>
        <div class="container rounded-5 py-3 overflow-hidden " style="background-color:#333">
          <div class="row  p-3" style="">
            <div class="col-md">
              <label class="h3 px-1 text-center" for="customer-id">Select Address/Id Proof</label>
              <select name="customer-id" id="customer-id" class="con-form">
                <option disabled selected>Select Address or id proof</option>
                <option value="Adhaar Card">Adhaar Card</option>
                <option value="Voter Card">Voter Id Card</option>
              </select>
            </div>

            <div class="col-md">

              <label class="h3 px-1 text-center" for="customer-idimg">Address/Id Proof Image <small>Front &
                  Back</small></label>
              <input   type="file" name="customer-idimg" id="customer-idimg" class="con-form">
            </div>
          </div>
        </div>

        <h2 class="gl  fw-bold h1 px-5 mt-5">*Date </h2>
        <div class="container rounded-5 py-3 overflow-hidden" style="background-color:#333">
          <div class="row text-center p-3" style="">
            <div class="col-md  ">

              <label class="h3 px-1 text-center" for="date-from">From</label>
              <input   type="date" name="date-from" id="date-from" class="con-form w-100"
                placeholder="Enter your Driving License Number">

            </div>

            <div class="col-md r">

              <label class="h3 px-1 text-center" for="date-to">To </label>
              <input   type="date" name="date-to" id="date-to" class="con-form">
            </div>
            <div class="col-md">

              <label class="h3 px-1 text-center"></label>
              <button name="ent" id="ent" class="bbt con-form" style="background-color:#f5b754">Click to
                book car</button>
            </div>

          </div>

        </div>


      </div>
    
    <div class="container mb-3" id="msg">
      <div class="container fa-5x   text-center p-5" style="border:dotted #f5b754;color:#f5b754">
      <i class="fa  fa-cart-plus "></i>
      <h2> Your order has been placed</h2>
      <h3>Waiting For Confirmaation </h3>
      </div>
    </div>  
    <div class="container  py-5 rounded-5 overflow-hidden">
      <a href="cars.php?cat=all" style="text-decoration:none;"><button class="bbt w-25 " id="shop-more">Click To Get
          More</button></a>
    </div>
    </div>

    
</body>

</html>
<style>
  #msg{
    margin-top: 10px;
    display: none;

  }
  .bd {
    border: solid #f5b754;
  }

  .gl {
    color: #f5b754;
  }

  .lbl {
    position: absolute;
    margin-left: 7%;
    margin-top: -75px;
    font-size: 1.2em;
    background-image: linear-gradient(to bottom, #1b1b1b 50%, #222 50%);
    z-index: 1;
    color: #f5b754;

  }

  .bbt {
    display: inline-block;
    height: auto;
    width: auto;
    padding: 14px 42px;
    border: 1px solid #f5b754;
    border-radius: 30px;
    background-color: #f5b754;
    color: #1b1b1b;
    font-weight: 300;
    text-align: center;
    font-family: 'Outfit', sans-serif;
    font-size: 14px;
    transition: border-color 300ms ease, transform 300ms ease, background-color 300ms ease, color 300ms ease;
    transform-style: preserve-3d;
  }

  .bbt:hover {
    border: 1px solid #fff;
    background-color: #fff;
    color: #1b1b1b;
    transform: translate3d(0px, -6px, 0.01px);
    text-decoration: none;
  }

  .iimg {
    position: absolute;
    top: -200px;

  }

  input[type=date]::-webkit-datetime-edit-text,
  input[type=date]::-webkit-datetime-edit-month-field,
  input[type=date]::-webkit-datetime-edit-day-field,
  input[type=date]::-webkit-datetime-edit-year-field {
    background: none;
  }

  input:focus,
  textarea:focus,
  select:focus {
    outline: none;
    border-color: #f5b754;
    box-shadow: 0 0 3px 1px #227755;
    -moz-box-shadow: 0 0 0 #f5b754;
    -webkit-box-shadow: 0 0 0 #f5b754;

  }

  .con-form {
    max-width: 100%;
    padding: 18.5px 20px;
    background-color: #222;
    -webkit-box-shadow: none;
    box-shadow: none;
    display: block;
    width: 100%;
    line-height: 1.5em;
    font-family: 'Outfit', sans-serif;
    font-size: 14px;
    font-weight: 300;
    background-image: none;
    border: 3px solid transparent;
    border-radius: 30px;
  }

  .con-form ::placeholder {
    color: red;
  }

  input {
    padding: 10px 10px;
    color-scheme: dark;
  }

  input::file-selector-button {
    /* font-weight: bold;
  color: dodgerblue; */

    border: none;
    border-radius: 3px;
    background-color: transparent;
    border-right: 1px solid white;
  }

  input:-webkit-autofill,
  input:-webkit-autofill:hover,
  input:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0px 1000px transparent inset;
    transition: background-color #f5b754 5000s ease-in-out 0s;
    background-color: transparent;
  }

  #shop-more {
    display: none;
  }
</style>
<?php
if(isset($_POST['ent'])){
  $imgname=$_FILES["customer-dli"]["name"];
  $tmp=$_FILES["customer-dli"]["tmp_name"];
  // echo "<script>alert('$imgname $tmp')</script>";
}

?>
<script>
  $("input").attr("required", "true");
  $("#ent").click(function () {
    // $("#files").css("display","none");
    $("#msg").css("display","block");
    $(".v-middle").css("display","none");
    // alert("daa");
    // $("#shop-more").css("display","block");
    // $("#data_form").css("display","none");
    var carid='<?php echo $carid;?>';
    var orderno='<?php echo $order; ?>';
    var img=$("#customer-dli").prop('files')[0];
    var prof=$("#customer-idimg").prop('files')[0]; 
    var form_data = new FormData();
    form_data.append("name",$("#customer-name").val());
    form_data.append("email", $("#customer-email").val());
    form_data.append("phone", $("#customer-phone").val());
    form_data.append("alterphone", $("#customer-alter-phone").val());
    form_data.append("address",$("#customer-address").val());
    form_data.append("dateFrom",$("#date-from").val());
    form_data.append("dateTo",$("#date-to").val());
    form_data.append("carid",carid);
    form_data.append("customer-dli",img);
    form_data.append("customer-idimg",prof);
    form_data.append("id_prf",$("#customer-id").val());
    form_data.append("orderno",orderno);
    form_data.append("dln",$("#customer-dln").val());


    name = $("#customer-name").val();
    $.ajax({
      url: 'bokking_ins.php',
      method: 'POST',
      dataType: 'script',
      cache: false,
      contentType: false,
      processData: false,
      // data:form_data {
      //   name: $("#customer-name").val(),
      //   email: $("#customer-email").val(),
      //   phone: $("#customer-phone").val(),
      //   address: $("#customer-address").val(),
      //   dateFrom: $("#date-from").val(),
      //   dateTo: $("#date-to").val(),
      //   carid: '',
      //   drivingLicNo: $('#customer-dln').val(),
      //   drivingLic: '<?php echo $tmp; ?>',
      //   dln:''

      // },
      data:form_data,
      success: function (data) {
        // alert("adsd");
        $("#shop-more").css("display","block");
        $("#data_form").css("display","none");
      }
    });
  });
</script>