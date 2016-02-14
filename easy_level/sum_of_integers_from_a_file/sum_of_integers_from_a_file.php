<?php

	$fh = fopen($argv[1], "r");

	$sum = 0;
	while ( !feof($fh) ) {
		
		$number = (int) trim(fgets($fh));
		$sum = $sum + $number;
		
	
	}
	fclose($fh);

	echo $sum . PHP_EOL;

?>