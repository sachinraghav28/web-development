<html>
<head>
<title>Success page</title>
<style>
h1
{
color:red;
text-align:center;
}

</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
	{
	$x=$_SESSION['username'];
	echo "<h1>Hello $x</h1>";
	echo "<h1>Welcome to the success webpage</h1>";
	echo "<h1><a href=logout.php>Click Here</a> to logout</h1>";
	}
else
	{
	header("Location:index.php");
	}
?>

</body>
</html>