<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		$candies = array();

		preg_match('/Vampires: (\d+), Zombies: (\d+), Witches: (\d+), Houses: (\d+)/', $line, $candies);

		if (empty($candies)) {
			continue;
		}

		$candiesTotal = (($candies[1] * 3) + ($candies[2] * 4) + ($candies[3] * 5)) * $candies[4];
		$childrenTotal = $candies[1] + $candies[2] + $candies[3];

		echo floor($candiesTotal / $childrenTotal) . "\n";
	}

?>
