 <?php
		 
include('session.php');		 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$opassword=$_POST["opassword"];
$npassword=$_POST["npassword"];
$cpassword=$_POST["cpassword"];
$query="select * from register where htno='$login_session'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count!=0)
{
	if($row["password"]==$opassword && $npassword==$cpassword)
	{
		$query1 = "update register set password='$npassword' where htno='$login_session'";
		if ($conn->query($query1) === TRUE) {
    echo "New password has been set. Please login again with your new credentials.<br>";
} else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}
	}
	else{
		echo "New password and confirm password did not match";
	}
	
}
	
		 ?>