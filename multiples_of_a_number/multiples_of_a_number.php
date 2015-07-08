<?php

	function nextGreaterThan( $numX, $numN )
	{
		$mul = 1;
		$multiple = 0;

		while ( $multiple < $numX ) 
		{
			$multiple = $numN * $mul;

			$mul++;
		}

		return $multiple;
	}


	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );
		list( $x, $n ) = explode( ",", $stringLine );

		$nextNum = nextGreaterThan( $x, $n );


		echo $nextNum . PHP_EOL;

	
	}

?>