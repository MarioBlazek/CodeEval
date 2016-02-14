<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		list( $numbers, $positions ) = explode( ':', trim( $stringLine ) );

        $numbers = explode( ' ', trim( $numbers ) );
        $positions = explode( ',', trim( $positions ) );

        foreach ( $positions as $position ) 
        {
            list( $left, $right ) = explode( '-', trim( $position ) );
            $temp = $numbers[$left];
            $numbers[$left] = $numbers[$right];
            $numbers[$right] = $temp;
        }

        echo implode( ' ', $numbers ) . PHP_EOL;
	}

?>