<?php
	
	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		$words = explode( " ", $stringLine );

		echo $words[ count($words) - 2 ] . PHP_EOL;
	
	}

?>