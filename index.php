<html>
<head>
<title>Registration page</title>
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

<script>
function validate()
{
var a=document.getElementById("psw").value;
var b=document.getElementById("psw2").value;
if(a!=b)
	{
	alert("Passwords do not match");
	return false;
	}
return true;
}

</script>
</head>
<body>
<center><h1 style="background-color:yellow">My Website</h1>
<br><br>
<center><h1>Register</h1></center>
<center><p>Please fill in this form to create an account.</p></center>
<hr>
<form action="store.php" method="post" onsubmit="return validate()">

<table align=center border=1>
	<tr>    
		<td>Name</td>
    		<td><input type="text" placeholder="Enter Name" name="name" required></td>
	</tr>
    	<tr>    
		<td>Email</td>
    		<td><input type="email" placeholder="Enter Email" name="email" required></td>
	</tr>
	<tr>    
		<td>Mobile</td>
    		<td><input type="number" placeholder="Enter Mobile" name="mobile" required></td>
	</tr>
	<tr>
    		<td>Password</td>
    		<td><input type="password" placeholder="Enter Password" name="psw" id="psw" required></td>
	</tr>
	<tr>
    		<td>Repeat Password</td>
    		<td><input type="password" placeholder="Repeat Password" name="psw2" id="psw2" required></td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" value="OK"></td>
	</tr>
</table>
</form>
<br><br>     
<center><p>Already have an account? <a href="login.php">Sign in</a>.</p></center>
</body>
</html>

