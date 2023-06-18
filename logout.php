
  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
   session_start();
   
   session_destroy();
      
  // echo"you have been logged out successfully.Please <a href='loginmodal.html'>Click here</a> to login again.";
  echo'<script>window.location="index.html";</script>'; 
  ?>

