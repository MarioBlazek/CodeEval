<?php
	
	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		$stringLine = trim( fgets( $fh ) );

		if ( empty( $stringLine ) )
		{
			continue;
		}

		$matrix = explode( ",", $stringLine );
		$matrixLength = count( $matrix );

		$iterations = 0;

		while ( true )
		{
			$finished = false;

			for ( $i = 0; $i < count($matrix); $i++ )
			{
				$row = $matrix[ $i ];

				if ( strstr( $row, '.Y') && strstr( $row, 'XY') == false )
				{
					$matrix[ $i ] = str_replace( ".Y", "Y", $row );
				}
				else 
				{
					$finished = true;
					break;
				}
			}

			if ( $finished )
			{
				break;
			}

			$iterations = $iterations + 1;
		}


		echo $iterations . PHP_EOL;
	
	}

?>