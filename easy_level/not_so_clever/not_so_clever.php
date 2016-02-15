<?php

	function stupidSort($numbers) {

		$numbersLength = count($numbers);

		for ($i = 0; $i < ($numbersLength - 1); $i++) {

			if ($numbers[$i] > $numbers[$i+1]) {
				$temp = $numbers[$i+1];
				$numbers[$i+1] = $numbers[$i];
				$numbers[$i] = $temp;

				break;
			}
		}

		return $numbers;
	}

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		list($numbers, $iterations) = explode("|", $line);
		$iterations = intval(trim($iterations));
		$numbers = explode(" ", trim($numbers));

		while ($iterations > 0) {
			$numbers = stupidSort($numbers);
			$iterations--;
		}

		echo implode(" ", $numbers) . "\n";
	}

?>
