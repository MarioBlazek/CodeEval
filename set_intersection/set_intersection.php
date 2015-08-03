<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = fgets( $fh );

        list( $firstList, $secondList ) = explode( ';', $stringLine );

        $firstList  = explode( ',', trim( $firstList ) );
        $secondList = explode( ',', trim( $secondList ) );

        $intersection = array_intersect( $firstList, $secondList );

        echo implode( ',', $intersection ) . PHP_EOL;
	}

?>