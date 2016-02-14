<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($decimal = fgets($fh)) )
	{
		echo decbin($decimal) . PHP_EOL;
	}
