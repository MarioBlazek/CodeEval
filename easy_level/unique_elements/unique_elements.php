<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$string = trim(fgets($fh));

		$numbers = explode(",", $string);

		$unique = array_unique($numbers);

		echo implode(",", $unique).PHP_EOL;
	
	}

?>