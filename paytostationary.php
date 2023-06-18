<!DOCTYPE html>
<?php include('session.php'); ?>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>AGIWallet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #0D477C;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #66CCFF;
      font-size: 50px;
  }
  .logo {
      color: #66CCFF;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #66CCFF;
  }
  .carousel-indicators li {
      border-color: #66CCFF;
  }
  .carousel-indicators li.active {
      background-color: #66CCFF;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #66CCFF; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #66CCFF;
      background-color: #fff !important;
      color: #66CCFF;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #66CCFF !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #66CCFF;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #66CCFF;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #66CCFF !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      background-color: #66CCFF;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #66CCFF;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  input,#submit{
   width:100%;
    border-radius:10px;
    padding: 8px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
  
}

input:focus {
    border: 3px solid #3399ff;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ">
        <li><a href="index1.php">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
       
       
        <li><a href="#contact">CONTACT</a></li>
      </ul>
   <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size:15px;">
      <span class="glyphicon glyphicon-user"></span>&nbsp;
    
  <?php if (isset($_SESSION['login_user']) == true) {
    echo $login_session;
  } else
    echo "<li><a href='login.html'></span>Login</a></li>";
  ?><span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">

        <li style="background-color:#66CCFF;color:#fff;"><a href="profile.php">Profile</a></li>
    <li style="background-color:#66CCFF;color:#fff;"><a href="passbook.php">passbook</a></li>
        <li style="background-color:#66CCFF;color:#fff;"><a href="logout.php">Logout</a></li>
                    
      </ul>
    </li>  
   </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">

  <h1><img src="logo.png" height="100px" width="100px" ></img><i>AGIWallet</i></h1> 
  <p>pay easily</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div  class="container-fluid">
  <div class="row">
  <div class="col-sm-4">
     
    </div>
    <div class="col-sm-4">
     
  
   
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "wallet";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $payeehtno = "stationary";
    $amount = $_POST["amount"];
    $pin = $_POST["pin"];
    $sql = "SELECT balance,pin FROM register WHERE htno='$login_session'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $payer = $row["balance"];
    //echo $payer."<br>";
    $sql1 = "SELECT balance FROM register WHERE htno='$payeehtno'";
    $result1 = mysqli_query($conn, $sql1);

    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $payee = $row1["balance"];
    //echo $payee."<br>";
    $payeebal = $payee + $amount;
    $payerbal = $payer - $amount;
    //echo $payeebal."<br>";
//echo $payerbal."<br>";
    $sql2 = "update register set balance='$payeebal' where htno='$payeehtno'";
    if ($pin == $row["pin"]) {



      if ($conn->query($sql2) === TRUE) {

      } else {
        echo "Error updating record: ";
      }

      $sql3 = "UPDATE register SET balance='$payerbal' WHERE htno='$login_session'";

      if ($conn->query($sql3) === TRUE) {

      } else {
        echo "Error updating record: " . $conn->error;
      }
      date_default_timezone_set("Asia/Kolkata");

      $time = date("Y-m-d h:i:sa");
      $query = "INSERT INTO transaction VALUES(null,'$login_session','$payeehtno','$amount','$time')";

      if ($conn->query($query) === TRUE) {

      } else {
        echo "Error updating record: " . $conn->error;
      }
      echo "<div class='alert alert-success'>
  <strong> <span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Transaction successful</strong> 
</div>";
    } else {
      echo "wrong pin";
    }


    ?>
   
  </h4>

   </div>
    <div class="col-sm-4">
     
    </div>
  </div>
</div>





<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we can do with <i>AGIWallet</i></h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-log-out logo-small"></span>
      <h4>Send</h4>
      <p>Send money to your friends</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-log-in logo-small"></span>
      <h4>Accept money</h4>
      <p>Accept money from your friends</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>Canteen bills</h4>
      <p>Pay canteen bills</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4>Library fee</h4>
      <p>Pay library fee </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-pencil logo-small"></span>
      <h4>Stationary</h4>
      <p>Pay stationary fee</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4 style="color:#303030;">College fee</h4>
      <p>Pay college fee</p>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Hyderabad ,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9876543210</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> &copy; 2023 All rights reserved</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
