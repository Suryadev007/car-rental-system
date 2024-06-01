<?php
include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/logo31.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <div class="slider" style="height:100px;">
    <?php
    session_start();
    
    include "header.php";
    $name = $_SESSION["user"];
    $phone = $_SESSION["phone"];
    $email = $_SESSION["email"];
    $alter_phn = $_SESSION["alterphn"];
    $adress = $_SESSION["addrs"];
    $driving_no = $_SESSION["dlsno"];
    $driving_img = $_SESSION["dlsimg"];
    $proof_id = $_SESSION["add-id"];
    $proof_img = $_SESSION["proofimg"];
    ?>
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
                <div class="v-middle">
                  <h5>Get in touch</h5>
                  <p>Contact <span style="color:#f5b754;"> Us </span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact   ">
      <div class="container " style="width:90%">
        <div class="row ">
          <div class="col-sm m-2  con">
            <a href="">
              <i class="bg-icn fa fa-envelope" aria-hidden="true"></i>
              <div class="icn "><i class=" fa fa-envelope" aria-hidden="true"></i></div>
              <div class="info mt-4 text-light">
                <h3>Email Us</h3>
                <h5>info@gmail.com</h5>
              </div>
            </a>
          </div>

          <div class="col-md m-2  con">
            <a href="">
              <i class="bg-icn fa fa-map-marker" aria-hidden="true"></i>
              <div class="icn "><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="info  mt-4 text-light">
                <h3> Our Address</h3>
                <h5>XYZ AB-Block LDH</h5>
              </div>
            </a>
          </div>

          <div class="col-md m-2   con">
            <a href="">
              <i class="bg-icn fa fa-clock-o" aria-hidden="true"></i>
              <div class="icn"><i class="fa fa-clock-o" aria-hidden="true" style="transform: scaleX(-1);"></i></div>
              <div class="info  mt-4 text-light">
                <h3>Opening Hours</h3>
                <h5>Mon-Sun: 8AM - 7PM</h5>
              </div>
            </a>
          </div>

          <div class="col-md m-2 act con " style="background-color:#f5b754">
            <a href="">
              <i class="bg-icn  fa fa-phone" aria-hidden="true" style="filter: brightness(100%);color: #EBB051;"></i>
              <div class="icn text-dark"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="info  mt-4 text-dark">
                <h3>Call Us</h3>
                <h5>+91-9876543210</h5>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
    <form action="feedback-query.php" method="post">
      <div class="container  mb-5" style="margin-top:10%;">
        <div class="row ">
          <div class="col-md">

            <div class="text-center text-light h1 fw-bold mt-2 ">Get In Touch</div>
            <form action="" method="post">
              <div class="container">
                <div class="row p-2">
                  <div class="col-md">
                    <input name="qrName" type="text" class="con-form  bg-dark text-light " placeholder=" Your Name " value=<?php echo "$name"; ?>>
                  </div>
                  <div class="col-md">
                    <input name="qrEmail" type="text" class="con-form  bg-dark text-light" placeholder=" Your Email " value=<?php echo "$email"; ?>>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-md">
                    <input name="qrNumber" type="text" class="con-form  bg-dark text-light" placeholder=" Your Number" value=<?php echo "$phone"; ?>>
                  </div>
                  <div class="col-md">
                    <select name="qrSubject" type="text" class="con-form  bg-dark text-light"
                      placeholder=" Your Subject">
                      <option diabled selected value="none">Select Subject</option>
                      <option value="Related to Booking">Related to Booking</option>
                      <option value="Related to Account">Related to Account</option>
                      <option value="other">Other</option>

                      </select>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-md">
                    <textarea input name="qrquery" type="text-area" class="con-form  bg-dark text-light" rows="3"
                      placeholder=" Your Message" required></textarea>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-md mt-2 ">
                    <button name="qrbtn" class="bbt btn">Submit</button>
                  </div>

                </div>
              </div>
            </form>
          </div>
          <div class="col-md">
            <div class="text-center text-light h1 overflow-hidden fw-bold mt-2 ">Location</div>
            <iframe class=" rounded-5 "
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.37343964339!2d75.774271768568!3d30.90031908946707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C%20Punjab!5e0!3m2!1sen!2sin!4v1714729965699!5m2!1sen!2sin"
              width="640" height="350" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </form>
    <div class="container p-2 mb-5 text-center">
      <div class="text-center  h1 fw-bold mt-2 " style="color:  #f5b754;">Write Your Feedback</div>
      <form action="feedback-query.php" method="post" class="container fom" enctype="multipart/form-data">
        <h2 class="m-4  h2">Rate US</h2>
        <div class="rating">

          <label>
            <input type="radio" name="stars" value="1" required/>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="2" required/>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="3" required/>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="4" required/>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="5" required/>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
        </div>
        <div class="row">
          <div class="col-md">
            <input name="fname" type="text" class="con-form  bg-dark text-light " placeholder=" Your Name " value=<?php echo "$name"; ?>>
          </div>
          <div class="col-md">
            <input name="fimage" id="media" type="file" class="con-form  d-none  bg-dark text-light " placeholder="" required>
            <label for="media" class="con-form  bg-dark text-start ">Add Your Stories </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md"><input name="feedback" type="text" class="con-form  bg-dark text-light "
              placeholder=" Enter Feedback " required></div>
        </div>

        <textarea name="fmessage" class="con-form  bg-dark text-light " id="" cols="30" rows="10"
          placeholder="Any Message" required></textarea>
        <button name="feedback-submit" class="mt-3  w-100 mt-2 bbt2 btn" id="feedbtn">Submit</button>
      </form>
    </div>
</body>

</html>
<style>
  .fom {
    width: 50%;
  }

  .bbt2 {
    width: 100%;
    display: inline-block;
    height: auto;
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

  .bbt2:hover {
    border: 1px solid #fff;
    background-color: #fff;
    color: #1b1b1b;

    text-decoration: none;
  }

  .rating {
    margin-top: px;
    display: inline-block;
    position: relative;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
  }

  .rating label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
  }

  .rating label:last-child {
    position: static;
  }

  .rating label:nth-child(1) {
    z-index: 5;
  }

  .rating label:nth-child(2) {
    z-index: 4;
  }

  .rating label:nth-child(3) {
    z-index: 3;
  }

  .rating label:nth-child(4) {
    z-index: 2;
  }

  .rating label:nth-child(5) {
    z-index: 1;
  }

  .rating label input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .rating label .icon {
    float: left;
    color: transparent;
  }

  .rating label:last-child .icon {
    color: whitesmoke;
  }

  .rating:not(:hover) label input:checked~.icon,
  .rating:hover label:hover input~.icon {
    color: #f5b754;
  }

  .rating label input:focus:not(:checked)~.icon:last-child {
    color: #000;
    text-shadow: 0 0 5px #f5b754;
  }


  input:focus,
  textarea:focus,
  select:focus {
    outline: none;
    box-shadow: 0 0 3px 1px #227755;
    border-color: #f5b754;
    -moz-box-shadow: 0 0 0 transparent;
    -webkit-box-shadow: 0 0 0 transparent;
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

  .con-form {
    max-width: 100%;
    padding: 18.5px 20px;
    height: auto;
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
    margin-top: 10px;
  }

  .con-form ::placeholder {
    color: red;
  }

  input {
    padding: 10px 10px;
  }

  a {
    text-decoration: none;
  }

  a:hover {
    text-decoration: none;
  }

  input {
    border: none;
    ;
  }

  .bg-icn {
    position: absolute;
    color: white;
    font-size: 14em;
    filter: brightness(15%);
    bottom: -10;
    right: 0;
    z-index: -1;

  }

  .act {
    background: #f5b754;
  }

  .con {
    background: #222;
    padding: 40px 30px;
    -webkit-transition: .5s;
    transition: .5s;
    position: relative;
    z-index: 1;
    margin-bottom: 30px;
    line-height: 1;
    text-align: left;
    overflow: hidden;

    border-radius: 20px;

  }

  .v-middle p {
    font-size: 5em;
    color: white;
    padding: 20px;
  }

  .v-middle h5 {
    color: #f5b754;
  }

  .v-middle {
    top: 30%;
  }

  .contact {
    background-color: transparent;
    margin-top: -100px;
    z-index: 1;
    position: absolute;
    width: 100%;
  }


  .icn {
    color: #f5b754;
    font-size: 3.5em;
  }

  .info h3 {
    font-size: 1.5em;
    font-weight: bold;
  }

  .info {
    padding-left: 10px;
  }

  .con:hover {
    background: #f5b754;
    position: relative;
    top: -20px;
    transition: 0.5ms;
  }

  .con:hover h3,
  .con:hover h5,
  .con:hover .icn {
    color: black;
  }

  .con:hover .bg-icn {
    /*display: none;*/
    color: #EBB051;
    filter: brightness(100%);
  }

  input:-webkit-autofill,
  input:-webkit-autofill:hover,
  input:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0px 1000px transparent inset;
    transition: background-color 5000s ease-in-out 0s;
    color: red;
    -webkit-text-fill-color: white !important;
  }
</style>

<script>
  $(':radio').change(function () {
    console.log('New star rating: ' + this.value);
  });
</script>

<script>

</script>