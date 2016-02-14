<?php

	$fh = fopen($argv[1], "r");

 	while ( !feof($fh) ) {
		
		$stringLine = fgets($fh);

		$numberOfOccurences = 0;
		$stringLineLength = strlen($stringLine);

		for ( $i = 0; $i <= $stringLineLength; $i++ ) 
		{
			$part = substr( $stringLine, $i, 5 );

			if ( $part == '<--<<' || $part == '>>-->' ) 
			{
				$numberOfOccurences++;
			}
		}
		
		echo $numberOfOccurences.PHP_EOL;
	}

?>