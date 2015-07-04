<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = fgets($fh);

		$stringLineLength = strlen( trim($stringLine) );
		
		$result = array();
		$upperCaseCount = preg_match_all( '/[A-Z]/', $stringLine, $result );
		$lowerCaseCount = preg_match_all( '/[a-z]/', $stringLine, $result );
		
		$percentageUpper = ( $upperCaseCount * 100 ) / $stringLineLength;
		$percentageLower = ( $lowerCaseCount * 100 ) / $stringLineLength;

		$echo = sprintf("lowercase: %.2f uppercase: %.2f", $percentageLower, $percentageUpper);

		echo $echo.PHP_EOL;	
	}

?>