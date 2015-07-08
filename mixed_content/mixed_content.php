<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		$numbersAndStrings = explode( ",", $stringLine );

		$strings = array();

		foreach ( $numbersAndStrings as $key => $numberOrString ) 
		{
			if ( !is_numeric( $numberOrString ) )
			{
				$strings[] = $numberOrString;
			}
		}

		$numbers = array_diff( $numbersAndStrings, $strings );

		if ( !empty( $strings ) && !empty( $numbers ) ) 
		{
			echo implode( ",", $strings ) . "|" . implode( ",", $numbers ) . PHP_EOL;
		}
		else if ( !empty( $strings ) && empty( $numbers ) )
		{
			echo implode( ",", $strings ) . PHP_EOL;
		}
		else
		{
			echo implode( ",", $numbers ) . PHP_EOL;
		}
	
	}

?>