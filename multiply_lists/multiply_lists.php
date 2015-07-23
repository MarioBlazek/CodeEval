<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

        list( $firstList, $secondList ) = explode('|', trim( $stringLine ) );

	    $firstList = explode( ' ', trim( $firstList ) );
	    $secondList = explode( ' ', trim( $secondList ) );

	    $result = array();
	    $firstListLength = count( $firstList );

	    for ($i = 0; $i < $firstListLength; $i++) 
	    {
	        $result[] = $firstList[$i] * $secondList[$i];
	    }
	    
	    echo implode( ' ', $result ) . PHP_EOL;
	}

?>