<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		echo ucwords($stringLine)."\n";
	
	}

?>