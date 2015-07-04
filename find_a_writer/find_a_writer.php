<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		if ( $stringLine == '' )
		{
			continue;
		}

		list ( $string, $numbers ) = explode( "|", $stringLine );

		
		$numbersArray = explode( " ", trim($numbers) );

		$writer = array();
		foreach ( $numbersArray as $number ) 
		{
			$number = intval( $number );
			$writer[] = substr( $string, $number - 1, 1);
		}			

		echo implode("", $writer)."\n";
	
	}

?>