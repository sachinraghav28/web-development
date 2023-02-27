<html>
<head>
<title>Logged Out</title>
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
session_destroy();
echo "<h1>You have been logged out</h1>";
?>
<h1><a href=login.php>Click Here</a> to re-login</h1>
<h1><a href=index.php>Click Here</a> to register</h1>
</body>
</html>