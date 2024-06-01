<?php
session_start();
include "db.php";
$ins="SELECT * FROM `feedbacktbl`";
$res=mysqli_query($conn,$ins);
$data=mysqli_fetch_all($res,MYSQLI_BOTH);
// print_r($data[0]);
$row=mysqli_num_rows($res);
// echo $row;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/logo31.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="slider" style="height:100px;">
<?php include "header.php";
?>
</div>
<div class="conatiner-fluid  opacity-50">
  <div class='slide'>
    <?php
    for($i=0;$i<$row;$i++){
      $img=$data[$i]["image"];
      $msg=$data[$i]["message"];
      $feed=$data[$i]["feedback"];
      $rat=$data[$i]["ratings"];
      $butid=$i.'but';
      $pid=$i.'p';
      echo "<div class='item' style='background:url($img);background-size: cover'>
      <div class='content'>";
        echo "<div class='info'>";
        for($j=0;$j<$rat;$j++){
          echo "<i class='fa-solid fa-star'></i>";
        }
        echo"</div>";
        echo"<div class='ab'>$feed</div>
        <p id='$pid' class='msg'>$msg</p>
        <button id='$butid ' class='' onclick=myFunction(this.id,'$pid')>See More</button>
      </div>
    </div>";
    }
    ?>
    

    <!-- <div class='item' style='background:url("https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?cs=srgb&dl=pexels-pixabay-210019.jpg&fm=jpg");background-size: cover' >
      <div class="content">
        <div class="info">0001</div>
        <div class="ab">0002</div>
        <button>See more</button>
      </div>
    </div> -->

    <!-- <div class='item' style='background:url("https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg");background-size: cover'>
      <div class="content">
        <div class="info">0001</div>
        <div class="ab">0002</div>
        <button>See more</button>
      </div>
    </div>

    <div class='item' style='background:url("https://www.hdwallpapers.in/download/red_lamborghini_aventador_in_blur_buildings_background_hd_lamborghini-1366x768.jpg");background-size: cover'>
      <div class="content">
        <div class="info">0001</div>
        <div class="ab">0002</div>
        <button>See more</button>
      </div>
    </div>

    <div class='item' style='background:url("https://picstatio.com/large/f67fe6/BMW-M5-luxury-car-motion-blur-4k-2017.jpg");background-size: cover'>
      <div class="content">
        <div class="info">0001</div>
        <div class="ab">0002</div>
        <button>See more</button>
      </div>
    </div>

    <div class='item' style='background:url("https://e1.pxfuel.com/desktop-wallpaper/409/671/desktop-wallpaper-backgrounds-blur-car-blur-car.jpg");background-size: cover'>
      <div class="content">
        <div class="info">0001</div>
        <div class="ab">0002</div>
        <button>See more</button>
      </div>
    </div> -->

  </div>

  <div class="button">
    <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
  </div>
</div>
</body>
</html>
<style>
  #bg-img{
    background-position:cover;
    /* filter:brightness(70%); */
    width:100%;
  }
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{

  }
 
   .item{
    transform:translate(0,-50%);
    background-size: cover;
    position: absolute;
    width: 200px;
    height:300px;
    top:50%;
    border-radius: 20px;
    box-shadow: 0px 30px 50px #505050;
    background-position: 50% 50%;
    display:inline-block;
    transition:0.5s;
  }
  .item{
    background-size: cover
  }
  .slide .item:nth-child(1),
  .slide .item:nth-child(2){
    top:0;
    left:0;
    transform:translate(0,0);
    border-radius:0;
    width:100%;
    height:100%;
  }
  .slide .item:nth-child(3){
    top:50%;
    left:90%;
  }

  .slide .item:nth-child(4){
    top:50%;
    left:calc(90% + 220px);
  }
  .slide .item:nth-child(5){
    top:50%;
    left:calc(90% + 440px);
  }
  .slide .item:nth-child(n+6){
    top:50%;
    left:calc(90% + 600px);
    opacity: 0;
  }

  .item .content{
    position: absolute;
    top:50%;
    left:100px;
    width:300px;
    color:#eee;
    transform:translate(0,-50%;);
    font-family: 'Roboto', sans-serif;
    font-size: 1.5em;
    display:none;
    filter: contrast(200);
 
  }
  .slide .item:nth-child(2) .content{
    display:block;
  }
  .content .info{
    font-size:40px;
    text-transform:uppercase;
    font-weight: 700;
    color:#f5b754;
    opacity: 1;
    animation: animate 1s ease-in-out 1 forwards; 
    
  }

  .content .ab{
    margin-top:10px;
    margin-bottom:10px;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards; 

  backdrop-filter: blur(5px);
  }

  .content button{
    padding:10px 20px;
    color:#000;
    border:none;
    cursor:pointer;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards; 
  }
  @keyframes animate {
    from{
      opacity:0;
      transform:translate(0,100px);
      filter:blur(33px)
    }
    to{
      opacity: 1;
      transform:translate(0);
      filter:blur(0);
    }
  }
  .button{
    width:100%;
    text-align:center;
    position:absolute;
    bottom:20px;
  }
  .button button{
    width:40px;
    height: 35px;
    border-radius:8px;
    border:1px solid #000;
    cursor:pointer;
    margin : 0 5px;
    transition:0.3s;
    
  }
  .button button:hover{
    background: #f5b754;
    color:white;
  }
  input:focus{}
  .msg{
    display: none;
    animation: animate 1s ease-in-out 1 forwards; 
    color:white;
    

  }
  
</style>
<script>
  let next=document.querySelector(".next");
  let prev=document.querySelector(".prev");
  next.addEventListener("click",function(){
    let items=document.querySelectorAll(".item");
    document.querySelector(".slide").appendChild(items[0]);
  });
  prev.addEventListener("click",function(){
    let items=document.querySelectorAll(".item");
    document.querySelector(".slide").prepend(items[items.length - 1]);
  });

  document.body.addEventListener("keydown",(ev)=>{
    console.log(ev);
    if(ev.key === "ArrowRight"){
      //alert("ArrowRight"); 
      let items=document.querySelectorAll(".item");
    document.querySelector(".slide").appendChild(items[0]);
    }
    if(ev.key === "ArrowLeft"){
      //alert("ArrowLeft"); 
      let items=document.querySelectorAll(".item");
    document.querySelector(".slide").prepend(items[items.length - 1]);
    }
  });

  function myFunction(but_id,pid){
    // alert(but_id+" "+pid);
    let btn=document.getElementById(but_id);
    // alert(btn.innerHTML);
    a=0;
    if(btn.innerText=="See More"){
      document.getElementById(pid).style.display="block";
      btn.innerText="See Less"
    }
    else{
      btn.innerText="See More";
      document.getElementById(pid).style.display="none";
    }
  }
</script>