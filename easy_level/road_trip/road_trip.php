<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		$cities = explode( ';', rtrim( trim( $stringLine ), ';') );

        $distances = array();
        foreach ( $cities as $city ) 
        {
            list( $stop, $distance ) = explode( ',', trim( $city ) );
            $distances[] = $distance;
        }

        sort( $distances );

        $route = array( $distances[0] );
        $distanceCount = count( $distances );

        for ($n = 1; $n < $distanceCount; $n++) 
        {
            $route[] = $distances[$n] - $distances[$n - 1];
        }

        echo implode( ',', $route ) . PHP_EOL;
	}

?>