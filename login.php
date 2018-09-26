<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			margin-left: 35%;
			margin-top: 10%;
			width: 30%;
			border-left: 2px solid black;
			border-right: 2px solid black;
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			background-color:;
		}
	</style>
</head>
<body>
<h1 align="center">Login</h1>
<hr>
<table border="0" align="center">
	<form action="login-proses.php" method="POST">
	<tr>
		<th>Username</th>
		<td><input type="text" name="username" id="username"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td colspan="3"><input style="width: 50%;margin-left: 30%;margin-bottom: 10%;margin-top: 5%" type="submit" name="submit"></td>
	</tr>
</form> 
</table>
</body>
</html>
