<?php

//functie opdr 1 fahrenheit
function getTemp($value){

echo ($value * 9/5) + 32 . "<br>";
}
getTemp(15);

function checkDeelbaar(int $value){
	if($value %3 != 0){
		echo "false";
	}else{
		echo "true";
	}
	}
	checkDeelbaar(60);

	function omkeren(string $string){
		$value = strrev($string);
		echo $value;
	}
	echo "<br>";
	omkeren("Hallo mijn naam is Yad");


?>