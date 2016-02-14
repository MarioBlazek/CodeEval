<?php

	$slang = array(
		', yeah!',
	    ', this is crazy, I tell ya.',
	    ', can U believe this?',
	    ', eh?',
	    ', aw yea.',
	    ', yo.',
	    '? No way!',
	    '. Awesome!'
	);

	$slangLength = count( $slang );

	$fh = fopen( $argv[1], "r" );
	$j = true;
	$count = 0;

	while ( !feof( $fh ) )
	{
		$stringLine = trim( fgets( $fh ) );
		$lineLength = strlen( $stringLine );

		$endString = '';
		for ( $i = 0; $i < $lineLength; $i++ )
		{
			$string = substr( $stringLine, $i, 1);

			if ( $string == '!' || $string == '?' || $string == '.' )
			{
				if ( $j )
				{
					$endString = $endString . $string;
					$j = false;
				}
				else
				{
					$endString = $endString . $slang[ $count ];
					$count = ( $count + 1 ) % $slangLength;
					$j = true;
				}
			}
			else
			{
				$endString = $endString . $string;
			}

		}

		echo $endString . PHP_EOL;
	}
?>