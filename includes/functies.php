<?php

function favArtiest(){
$favArtiest = array(
	'Michael Jackson' => 'Billie jeans' ,
 	'Tupac' => 'Ambition as a ridah' ,
 	'Lil kleine' => 'Alleen'
  );
foreach ($favArtiest as $artiest => $album) {
	echo $artiest ." - ". $album . "<br>";
}
}
echo favArtiest();
?>