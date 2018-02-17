<form method="POST" action="">
	<input type="text" name="leeftijd" placeholder="Leeftijd"><br>
	<input type="submit" name="submit" value="Check Prijs">
</form>
<?php
error_reporting(E_ALL);

$leeftijd = $_POST['leeftijd'];

if(isset($_POST['submit'])){
	if($leeftijd >= 13 && $leeftijd <= 65){
		echo "Prijs is: 10€";
	}elseif ($leeftijd >= 3 && $leeftijd <= 12 ) {
		echo "Prijs is: 5€";
	}elseif ($leeftijd > 65) {
		echo "Prijs is 5€";
	}elseif ($leeftijd < 3) {
		echo "Je mag gratis mee";
	}

}
?>