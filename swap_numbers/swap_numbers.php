<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		$string = explode(" ", $stringLine);
 		
 		foreach ( $string as $one ) {

 			$result = array();
 			preg_match( '/(?P<first_number>\d)(?P<string>\w+)(?P<last_number>\d)/', $one, $result );

 			printf("%d%s%d ", $result['last_number'], $result['string'], $result['first_number']);
 		}
 		printf("\n");
	
	}

?>