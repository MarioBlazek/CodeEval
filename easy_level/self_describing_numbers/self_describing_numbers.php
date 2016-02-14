<?php

	function isSelfDescribingNumber( $stringLine ) 
	{
		$lineLength = strlen( $stringLine );
		for ( $i = 0; $i < $lineLength; $i++ )
		{
			$num = (int) substr( $stringLine, $i, 1 );
			$count = 0;

			for ( $j = 0; $j < $lineLength; $j++ )
			{
				if ( substr( $stringLine, $j, 1 ) == $i )
				{
					$count++;
				} 
			}

			if ( $count != $num )
			{
				return false;
			} 
		}

		return true;
	}



	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{

		$stringLine = trim( fgets( $fh ) );

		if ( isSelfDescribingNumber( $stringLine ) )
		{
			echo "1".PHP_EOL;
		}
		else 
		{
			echo "0".PHP_EOL;
		}
	}

?>