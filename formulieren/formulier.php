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

$gebruikersnaam['piet@worldonline.nl'] = 'doetje123';
$gebruikersnaam['klaas@carpets.nl'] = 'snoepje777';
$gebruikersnaam['truushendriks@wegweg.nl'] = 'arkiearkie201';
if(isset($_POST['submit'])){
if(array_search($pass, $gebruikersnaam) === $user){
   echo 'Welkom';
}else{
	echo "Sorry, geen toegang!";
}
}