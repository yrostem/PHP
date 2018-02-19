<html>
<form method="POST" action="">
	<input type="text" name="naam" placeholder="Naam"><br>
	<input type="text" name="adress" placeholder="straatnaam"><br>
	<input id="emailAddress" name="email" type="email" placeholder="Email adress"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</html>
<?php
$naam = $_POST['naam'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$submit = $_POST['submit'];


if (isset($submit)) {
	if (!empty($naam && $adress && $email && $password)) {
		echo $naam . "<br>";
		echo $adress . "<br>";
		echo $email . "<br>";
		echo $password . "(Encrypted)<br>";
	}else{
		echo "Niet alle gegevens zijn nog ingevuld.";
	}
}