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

function login($user, $pass){
	if($user == "piet@worldonline.nl" && $pass == "doetje123"){
		echo "True";
}else{
	echo "false";
}
}

if(isset($_POST['submit'])){
	login($user, $pass);
}