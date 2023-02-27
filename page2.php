<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session example</title>
</head>
<body>
<?php
session_start();
$a=$_GET['t1'];
$_SESSION['name']=$a;
?>
<form method=get action =page3.php>
email<input type=email name =email><br>
<input type=submit value=submit>
</form>
</body>
</html>