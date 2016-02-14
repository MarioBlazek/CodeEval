<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		$stringLine = trim( fgets( $fh ) );
		$lineLength = strlen( $stringLine );

		for ( $i = 1; $i <= $lineLength; $i++ )
		{
			$subString = substr( $stringLine, 0, $i );

			$arrayLine = explode( $subString, $stringLine );

			$empty = true;

			foreach ( $arrayLine as $line ) 
			{
				if ( !empty( $line ) )
				{
					$empty = false;
					break;
				}
			}

			if ( $empty )
			{
				echo strlen( $subString ) . PHP_EOL;
				break;
			}
		}
	}
?>