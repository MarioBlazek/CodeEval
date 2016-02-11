<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$numbers = explode(" ", $line);

		$number = 0;
		for($i = 1; $i <= $numbers[1]; $i++) {
			$count = substr_count(decbin($i), '0');
		
			if ($count == $numbers[0]) {
				$number++;
			}
		}

		echo $number . "\n";
	}

?>
