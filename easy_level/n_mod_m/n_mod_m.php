<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		list($n, $m) = explode(",", $stringLine);

		if ( $m > $n ) {

			echo $n."\n";
			continue;

		}

		$result = $n / $m;

		if ( $result == 0) {

			echo "0\n";
			continue;

		} else {

			echo $n - ( $m * (int) $result )."\n";

		}

	}

?>