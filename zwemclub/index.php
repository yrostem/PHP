
<?php

$team["spartelkuikens"] = 25;
$team["waterbuffels"] = 32;
$team["Plonsmderin"] = 11;
$team["Bommetje"] = 23;


$img =  "<img style='margin-bottom: -10px' width='30px' src='swim.png'";
foreach ($team as $naam => $aantal) {
	echo $naam ." ". $aantal;
    for ($i = 0; $i < round($aantal/5, 0, PHP_ROUND_HALF_DOWN); $i++){
        echo $img . "<br>";
    }
    echo "<br>";

}
?>