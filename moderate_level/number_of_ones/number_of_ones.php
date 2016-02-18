<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		$number = intval(trim($line));
		$binary = decbin($number);
		unset($number);

		$ones = substr_count($binary, '1');
		unset($binary);

		echo $ones . "\n";
		unset($ones);
	}

	fclose($fh);
