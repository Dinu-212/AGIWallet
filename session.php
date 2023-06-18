
<?php
   session_start();
   $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

   
   $login_session= $_SESSION['login_user'];
   
  /* $ses_sql = mysqli_query($conn,"select htno from register where htno = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['uname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }*/
?>