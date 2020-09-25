<?php
session_start();
if(isset($_SESSION['log']))
{
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Welcome sir</h1>
<a href="index.php" >logout</a>
</body>
</html>
<?php
}
else
{
	echo "The detalis Provided are not sufficient Please change it..";
	header("refresh:2;url=index.php");
}

?>
