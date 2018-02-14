<!--Ik heb alle opdrachten van "busreis" in 1 bestand gezegt, overzichtelijk zodat ik niet alles
in apparte bestandjes hoef te zetten-->

<html>
<p>Kies de onderdeel om te bekijken</p>
<form action="" method="POST">
<input type="submit" name="autotyping" value="Autotyping">
<input type="submit" name="bool" value="Boolean">
<input type="submit" name="if" value="If-statement">
</form>
</html>

<?php
if(isset($_POST['autotyping'])){

	#Onderdeel: Autotyping.
	
	$a = "Hello";
	$b = "Wereld";

	$c = $a ." " . $b;

	echo gettype($c). "<br>";

	$d = 14;
	$e = "1.4";
	$f = $d + $e;
	echo gettype($f);
	echo "<br>" . $f;
	
	} elseif (isset($_POST['bool'])) {
			
			# Onderdeel boolean
			$bool = 326; echo "De waarde is: " . $bool;
			echo $bool ? "<br> Het is waar<br>" : "Het is niet waar<br>";
			echo gettype($bool);

	}elseif (isset($_POST['if'])) {
		# Onderdeel if-statement
		$bool = 326; echo "De waarde is: " . $bool;
		$test = 324;
		if ($bool > $test) {
			
			echo "Het is waar <br>";

		} else {
			echo "het is niet waar <br>";
		}
	}


?>