<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$number = (int) trim(fgets($fh));

		if ( $number % 2 == 0) {
			echo 1 . PHP_EOL;
		} else {
			echo 0 . PHP_EOL;
		}
	
	}

?>