<?php

	$fh = fopen($argv[1], "r");

	$numberOfTestCases = 0;
	while ( !feof($fh) ) {
		
		if ( $numberOfTestCases > 20 ) {
			exit();
		}

		$stringLine = trim(fgets($fh));

		list($days, $numbers) = explode(";", $stringLine);

		if ( $days < 1 && $days > 99 ) {
			continue;
		}

		$numbers = explode(" ", $numbers);

		$gain = 0;
		$partArraySum = array();
		$runningPeriod = (count($numbers) - $days) + 1;
		for ( $i = 0; $i <= $runningPeriod; $i++) {

			$partArray = array_slice($numbers, $i, $days);
			$partArraySum[] = array_sum($partArray);
			$gain = max($partArraySum);

		}

		if ( $gain < -99 && $gain > 99) {
			continue;
		}

		if ( $gain > 0 ) {

			echo $gain."\n";

		} else {

			echo "0\n";

		}

		$numberOfTestCases++;
	}

?>