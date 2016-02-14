<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$timestamps = explode(" ", $line);

		rsort($timestamps);

		echo implode(" ", $timestamps) . PHP_EOL;
	}

?>
