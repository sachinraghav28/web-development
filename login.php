<html>
<head>
<title>Login</title>
<style>
table, td
{
border-radius:5px;
}

p
{
color:red;
font-weight:bold;
}

</style>
</head>
<body>
<center><h1 style="background-color:yellow">My Website</h1>
<br><br>
<center><h1>Login</h1></center>
<center><p>Please fill in this form to login to your account.</p></center>
<hr>
<form action="login_check.php" method="post">

<table align=center border=1>
	<tr>    
		<td>Email</td>
    		<td><input type="text" placeholder="Enter Email" name="email" required></td>
	</tr>
	<tr>
    		<td>Password</td>
    		<td><input type="password" placeholder="Enter Password" name="psw" required></td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" value="OK"></td>
	</tr>
</table>
</form>
<br><br>     
<center><p>Not registered yet? <a href="index.php">Sign up</a>.</p></center>
</body>
</html>
