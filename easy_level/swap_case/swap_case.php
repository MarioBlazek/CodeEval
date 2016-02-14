<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		#echo lcfirst(strtoupper($stringLine)) . PHP_EOL;
		$string = strtolower($stringLine) ^ strtoupper($stringLine) ^ $stringLine;
		echo $string . PHP_EOL;
	
	}
	fclose($fh);

?>