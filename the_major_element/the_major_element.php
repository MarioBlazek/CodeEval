<?php

	$fh = fopen($argv[1], "r");

	$numberOfTestCases = 0;
	while ( !feof($fh) ) {
		
		if ( $numberOfTestCases > 40 ) {
			exit();
		}

		$stringLine = trim(fgets($fh));

		$numbers = explode(",", $stringLine);

		$countNumbers = count($numbers);
		if ( $countNumbers < 0 && $countNumbers > 100 ) {
			continue;
		}

		$count = array_count_values($numbers);

		arsort($count);

		$firstNumberFromArray = reset($count);

		if ( $firstNumberFromArray <= 10000 && $firstNumberFromArray >= 30000 ) {
			continue;
		}
		
		$checkL2 = $countNumbers / 2;
		
		if ( $firstNumberFromArray > $checkL2 ) {
			echo key($count)."\n";
			
		} else {
			echo "None\n";
		}

		$numberOfTestCases++;
	}

?>