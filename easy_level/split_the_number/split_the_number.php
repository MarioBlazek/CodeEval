<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {


		$stringLine = trim(fgets($fh));
		
		list($numbers, $letters) = explode(" ", $stringLine);

    	$result = array();
		preg_match( '/(?P<letter>[a-z]+)(?P<operation>[\+|\-])[a-z]+/', $letters, $result );

		$letter = $result['letter'];
		$operation = $result['operation'];

		$numberA = substr($numbers, 0, strlen($letter));
		$numberB = substr($numbers, strlen($letter));


		if ( $operation == '+' ) {
			echo $numberA + $numberB . "\n";
		} else {
			echo $numberA - $numberB . "\n";
		}
		
	}
	fclose($fh);

?>