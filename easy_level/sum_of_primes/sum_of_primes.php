<?php

	function isPrime($number) {

		$rootNumber = (int) sqrt($number);

		for ( $j = 2; $j <= $rootNumber; $j++ ) {
			if ( $number % $j == 0) {
				return false;
			}
		}

		return true;
	}

	$sum = 0;
	$primes = 0;
	$number = 2;
	while ( $primes < 1000 ) {

		if ( isPrime($number) ) {
			
			$sum = $sum + $number;
			$primes++;

		}

		$number++;
	}

	echo $sum;

?>