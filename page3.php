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
$b=$_GET['t2'];
$_SESSION['email']=$b;
?>
<form method=get action="page4.php"></form>
phone<inpput type=number name=phone><br>
<input tpye=submmit value=submit>
</form>    
</body>
</html>