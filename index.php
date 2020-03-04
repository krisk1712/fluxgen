<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Fluxgen login page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="form">
		<h1>Fluxgen Tech</h1>
<form method="POST" action="loginapp1.php">
	<p>
		<label>Username:</label>
		<input type="text"  name="uname" placeholder="enter your Username" />
	</p>
	<p>
		<label>Password:</label>
		<input type="text"  name="password" placeholder="enter your password" />
	</p>
	<p>
		<input type="submit" id="btn"  value="Login" />
	</p>

</form>
</div>

</body>
</html>
<?php
session_destroy();
?>
