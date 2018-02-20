<?php
session_start();
if($_SESSION['logged_in']){
	
	switch ($_SESSION['rol']) {
		case 'Administrator':
		header("location: admin.php");
			break;

		case 'Gebruiker':
		header("location: dashboard.php");
			break;
	}
}

	$username = strtolower($_POST['u']);
	$password = strtolower($_POST['p']);

if (isset($_POST['submit'])) {
	if ($username == "admin" && $password == "pass")  {

		$_SESSION['logged_in'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['rol'] = "Administrator";
		header("location: admin.php");
		}

		elseif (!empty($username && $password)) {
		$_SESSION['logged_in'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['rol'] = "Gebruiker";
		header("location: dashboard.php");
}else{
	echo "Je moet je gegevens nog invullen";
}
}
?>
<!--
CSS EN HTML HEB IK VAN CODEPEN
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" />
        <input type="password" name="p" placeholder="Password" />
        <button type="submit"  name="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
</body>
</html>