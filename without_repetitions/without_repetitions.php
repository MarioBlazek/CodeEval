<?php
	
	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		$stringLine = trim( fgets( $fh ) );

		if ( empty( $stringLine ) )
		{
			continue;
		}

		$lineLength = strlen( $stringLine );

		$checkLetter = substr( $stringLine, 0, 1 );
		$newLineString = $checkLetter;
		for ( $i = 1; $i < $lineLength;  $i++ )
		{
			$letter = substr( $stringLine, $i, 1 );
			if ( $letter === $checkLetter )
			{
				continue;
			}
			else
			{
				$newLineString = $newLineString . $letter;
				$checkLetter = $letter;
			} 
		}

		echo $newLineString . PHP_EOL;

	}	
?>