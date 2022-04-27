<?php
	$url = 'https://pokeapi.co/api/v2/pokemon/?offset=5&limit=5';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$pokemons = (curl_exec($ch));
 	echo($pokemons);


?>
