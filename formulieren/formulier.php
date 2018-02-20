<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
	<input id="emailAddress" name="email" type="email" placeholder="Email adress"><br>
	<input type="password" name="password" value="password"><br>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
$user = $_POST['email'];
$pass = $_POST['password'];

	$accounts = array('piet@worldonline.nl' => 'doetje123',
		'klaas@carpets.nl' => 'snoepje777',
		'truushendriks@wegweg.nl' => 'arkiearkie201');

if(isset($_POST['submit'])){
if (isset($accounts[$user]) && $accounts[$user] == $pass){
	echo "Welkom";
}else{
	echo "Sorry, geen toegang!";
}
}