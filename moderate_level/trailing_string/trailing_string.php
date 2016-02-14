<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		list($b, $a) = explode(",", trim($line));

		$countA = strlen($a);

		$endB = substr($b, - $countA);

		if ($a === $endB) {
			echo "1" . PHP_EOL;
		} else {
			echo "0" . PHP_EOL;
		}
	}
