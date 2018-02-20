<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Admin page</h1>
<?php
session_start();
if ($_SESSION['rol'] != "Administrator") {
	echo "Geen toegang.";

}
if (!$_SESSION['logged_in']) {
	echo "Je moet eerst inloggen!";
	echo "<br>Je kunt inloggen via deze link: <a href='login.php'>Login</a>";
}elseif ($_SESSION['rol'] == "Administrator") {
	echo "Welkom, ". $_SESSION['username'] . ". Je hebt de rol:". $_SESSION['rol'];
	echo "<br>Je kunt uitloggen via deze link: <a href='logout.php'>Logout</a>";
}
?>
</body>
</html>