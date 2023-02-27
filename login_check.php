<html>
<head>
<title>login Check</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproj";

$email=$_POST['email'];
$pass=$_POST['psw'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM detail where email='".$email."' and password='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	$row = $result->fetch_assoc();
	$_SESSION['username']=$row['email'];
	header("Location:success.php");
	}
else
	{
	header("Location:error.php");
	}
?>
