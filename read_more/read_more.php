<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$string = trim(fgets($fh));

		// If line length is ≤ 55 characters, print it without any changes.
		if ( strlen(trim($string)) <= 55 ) {
			
			echo $string."\n";

		// If the line length is > 55 characters, change it as follows:
		} else if ( strlen($string) > 55 ) {

			$stringToAppend = '... <Read More>';

			// Trim the line to 40 characters.
			$string = substr($string, 0, 40);

			// If there are spaces ‘ ’ in the resulting string, trim it once again to the last space (the space should be trimmed too).
			$lastWhiteSpace = strrpos($string, ' ');
			if ( $lastWhiteSpace ) {
				$string = substr($string, 0, $lastWhiteSpace);
			}

			// Add a string ‘... <Read More>’ to the end of the resulting string and print it.
			$resultString = $string.$stringToAppend;

			echo $resultString."\n";
		}
	
	}

?>