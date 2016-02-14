<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = fgets($fh);

		list( $string, $char) = explode( ",", trim($stringLine) );
			
		$result = strrpos( $string, $char );

		if ( $result == false ) 
		{
			echo "-1\n";
		} 
		else
		{
			echo $result."\n";
		} 
	}

?>