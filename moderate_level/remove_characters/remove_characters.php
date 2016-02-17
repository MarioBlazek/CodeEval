<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		list($string, $characters) = explode(",", trim($line));
		unset($line);

		$characters = str_split(trim($characters));

		$string = str_replace($characters, "", $string);

		echo $string . "\n";

		unset($string);
		unset($characters);
	}

	fclose($fh);
