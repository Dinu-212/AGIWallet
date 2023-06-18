 <?php
		 
include('session.php');		 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wallet";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$opin=$_POST["opin"];
$npin=$_POST["npin"];
$cpin=$_POST["cpin"];
$query="select * from register where htno='$login_session'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count!=0)
{
	if($row["pin"]==$opin && $npin==$cpin)
	{
		$query1 = "update register set pin='$npin' where htno='$login_session'";
		if ($conn->query($query1) === TRUE) {
    echo "New pin has been set.<br>";
} else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}
	}
	else{
		echo "New pin and confirm pin did not match";
	}
	
}
	
		 ?>