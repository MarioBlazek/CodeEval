<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) {

		$letters = array();

		$words = explode( " ", trim( fgets( $fh ) ) );
		$longest = '';

		foreach ( $words as $word ) 
		{
	        if ( strlen( $word ) <= strlen( $longest ) ) 
	        {
	            continue;
	        }
	        
	        $longest = $word;
		}

		$longestLength = strlen( $longest );

		for ( $i = 0; $i < $longestLength; ++$i ) 
		{
			if ( 0 < $i ) 
			{
		        echo ' ';
		    }

		    echo str_repeat( '*', $i ) . $longest[$i];
		}

		echo PHP_EOL;

	}
	fclose($fh);

?>