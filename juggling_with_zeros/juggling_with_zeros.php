<?php

	$fh = fopen( $argv[1], 'r' );

	while ( !feof( $fh ) )
	{
		$stringLine = trim( fgets( $fh ) );

		$sequences = explode(' ', $stringLine );
	    $binary  = '';

	    while ( !empty( $sequences ) )
	    {
	        $flag = array_shift( $sequences );

	        $sequence  = array_shift( $sequences );

	        if ( '0' === $flag ) {

	            $binary = $binary . $sequence;

	        } else {

	            $binary = $binary . str_repeat( '1', strlen( $sequence ) );

	        }
	    }

	    echo bindec( $binary ) . PHP_EOL;
	} 

?>