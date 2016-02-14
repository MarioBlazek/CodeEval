<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {


		$stringLine = trim(fgets($fh));
		
		$numbers = explode(" ", $stringLine);
		
		asort($numbers);

		echo implode(" ", $numbers) . PHP_EOL;		
	}
	fclose($fh);

?>