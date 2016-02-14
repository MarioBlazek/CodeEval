<?php

	$fh = fopen($argv[1], "r");

	$cases = 0;
	while ( !feof($fh) ) {
		$cases++;

		if ( $cases > 40 ) {
			exit();
		}


		$stringLine = trim(fgets($fh));
		
		list($string, $mask) = explode(" ", $stringLine);
		$string = str_split($string);

		$count = count($string);
		if ( $count < 1 && $count > 20) {
			continue;
		}


		$mask = str_split($mask);
		
		foreach ( $mask as $key => $value ) {
			
			if ( $value == 1 ) {
				$string[$key] = strtoupper($string[$key]);
			}


		}

		echo implode("", $string) . PHP_EOL;
	}
	fclose($fh);

?>