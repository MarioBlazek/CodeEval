<?php
	
	$precision = 100000;
	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {


		$number = trim(fgets($fh));

		$degress = intval($number);
		$fraction = intval( $number * $precision ) - $degress * $precision;
		$minutes = intval( $fraction * 60 / $precision );
		$seconds = intval(( $fraction * 60 - $minutes * $precision ) * 60 / $precision);
		
		printf("%d.%02d'%02d\"\n", $degress, $minutes, $seconds);
		
	}
	fclose($fh);

?>