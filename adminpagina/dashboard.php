<!DOCTYPE html>
<html>
<head>
	<title>Gebruikerspaneel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Gebruikers page</h1>
<?php
session_start();
if (!$_SESSION['logged_in']) {
	echo "Je moet eerst inloggen!";
	echo "<br>Je kunt inloggen via deze link: <a href='login.php'>Login</a>";
}else{
echo "Welkom, ". $_SESSION['username'] . ". Je hebt de rol:". $_SESSION['rol'];
echo "<br>Je kunt uitloggen via deze link: <a href='logout.php'>Logout</a>";
}
?>
</body>
</html>