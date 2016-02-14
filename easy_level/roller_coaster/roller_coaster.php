<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		$stringArray = str_split($stringLine);
		$count = count($stringArray);

		for ($i = 0, $ul = 0; $i < $count; $i++) {

			if ( ctype_alpha($stringArray[$i]) ) {

				if ( $ul % 2 == 0 ) {

					$stringArray[$i] = strtoupper($stringArray[$i]);
					$ul++;

				} else {

					$stringArray[$i] = strtolower($stringArray[$i]);
					$ul++;

				}

			}
		}

		$stringLine = implode("", $stringArray);
		echo ucfirst($stringLine).PHP_EOL;
	}
	fclose($fh);

?>