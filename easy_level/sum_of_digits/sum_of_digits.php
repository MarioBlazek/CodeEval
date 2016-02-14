<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = strval(fgets($fh));

		$numbers = str_split($stringLine);

		echo array_sum($numbers).PHP_EOL;

	}

?>