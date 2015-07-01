<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {


		$number = trim(fgets($fh));
		
		echo getFibonacciNumber($number)."\n";
		
	}
	fclose($fh);


	function getFibonacciNumber($num) {
		
		if ( $num == 0 ) {

			return 0;

		} elseif ( $num == 1) {

			return 1;

		} elseif ( $num > 1 ) {

			return getFibonacciNumber( $num - 1) + getFibonacciNumber( $num -2 );

		}

	}

?>