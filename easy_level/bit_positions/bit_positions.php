<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		list( $number, $p1, $p2 ) = explode( ',', $stringLine );

    	$bits = decbin( $number );
    	$bitsLength = strlen( $bits );

    	$leftBit  = $bits[ $bitsLength - $p1 ];
    	$rightBit = $bits[ $bitsLength - $p2 ];

    	if ( $leftBit == $rightBit )
    	{
    		echo "true" . PHP_EOL;
    	}
    	else
    	{
    		echo "false" . PHP_EOL;
    	}
	}

?>