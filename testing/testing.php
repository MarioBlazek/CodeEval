<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$strings = explode(" | ", $line);
		$length = strlen($strings[0]);
		$bugs = 0;
		for ($i = 0; $i < $length; $i++) {
			if (substr($strings[0], $i, 1) !== substr($strings[1], $i, 1)) {
				$bugs++;
			}
		}

		if ($bugs === 0) {
			echo "Done\n";
		} elseif ($bugs > 0 && $bugs <= 2) {
			echo "Low\n";
		} elseif ($bugs > 2 && $bugs <= 4) {
			echo "Medium\n";
		} elseif ($bugs > 4 && $bugs <= 6) {
			echo "High\n";
		} elseif ($bugs > 6) {
			echo "Critical\n";
		}
	}

?>
