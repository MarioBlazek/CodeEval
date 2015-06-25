<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {


		$stringLine = trim(fgets($fh));
		
		$numbers = explode(" ", $stringLine);

		$num = $numbers[0];
		$count = 0;
		$i = 0;
		$countSize = count($numbers);
		foreach ($numbers as $number) {
			$i++;

			if ($number == $num) {

				$count++;

			} else {

				echo "$count $num";
				echo " ";

				$num = $number;
				$count = 1;
			}

			if ( $i == $countSize ) {
				echo "$count $num";
				echo " ";
			}
		}

		echo "\n";
	}
	fclose($fh);

?>