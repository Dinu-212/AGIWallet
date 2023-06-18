 <?php 
include('session.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$pin = $_GET["q"];

$query = "SELECT  pin FROM register WHERE htno='$login_session'  ";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

	
	  if($pin!=$row["pin"]) {
        echo "Wrong PIN";
      }else {
         echo " <span style='color:green;' class='glyphicon glyphicon-ok'></span>";
      }


?>