<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$numbers = explode(" ", $line);

		$numbersEdited = [];
		$sum = 0;
		foreach ($numbers as $number) {

			$chars = str_split($number);

			$chars[0] = strval(intval($chars[0]) * 2);
			$chars[2] = strval(intval($chars[2]) * 2);

			$sum += array_sum($chars);
		}

		if (($sum % 10) === 0 ) {
			echo "Real\n";
		} else {
			echo "Fake\n";
		}
	}

?>
