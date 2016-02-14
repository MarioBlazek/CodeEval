<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$test = fgets($fh);

		$exploded = explode(" ", trim($test));
		//var_dump($exploded);
		$reversed = array_reverse($exploded);

		//var_dump($reversed);
			
		$imploded = implode(" ", $reversed);

		//var_dump($imploded);

		echo $imploded."\n";
	
	}

?>