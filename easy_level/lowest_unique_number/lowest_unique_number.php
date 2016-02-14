<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		$numbers = explode( ' ', trim( $stringLine ) );
        $count  = array_count_values( $numbers );
        $uniqueNumbers = array_keys( array_filter( $count, function( $num ) 
            { 
                return $num == 1; 
            })
        );

        if ( 0 == count( $uniqueNumbers ) )
        {
            echo '0' . PHP_EOL;
            continue;
        }

        sort($uniqueNumbers);

        $players = array_flip( $numbers );
        $player = array_shift( $uniqueNumbers );

        echo ( $players[ $player ] + 1 ) . PHP_EOL;
	}

?>