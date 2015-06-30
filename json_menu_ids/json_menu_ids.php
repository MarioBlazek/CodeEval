<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));
		$json = json_decode($stringLine, true);

		if ( !is_array($json) ) {
			continue;
		}

		$sum = 0;
		foreach ($json['menu']['items'] as $item) {

			if ( !is_array($item) ) {
				continue;
			}

			if ( array_key_exists('label', $item) ) {
				$sum = $sum + $item['id'];
			}
		}

		echo $sum."\n";
	}
	fclose($fh);

?>