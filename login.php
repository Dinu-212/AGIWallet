<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
      $htno = $_POST['htno'];
      $password = $_POST['password']; 


$query = "SELECT  name FROM register WHERE htno='$htno' and password='$password' ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

	
	  if($count != 0) {
         //session_register("username");
         $_SESSION['login_user'] = $htno;
         
         //header("location: index.php");
		 echo'<script>window.location="index1.php";</script>';
      }else {
         // header("location: login.html");
		 
		 echo'<script>window.location="login.html";</script>';
      }





?>