<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		list($first, $second) = explode(";", trim($line));

		$first = parse_url($first);
		$second = parse_url($second);

		if ( strtolower($first['scheme']) !== strtolower($first['scheme']) ) {
			echo "False" . PHP_EOL;
			continue;
		}

		if (empty($first['port'])) {
			$first['port'] = 80;
		}

		if (empty($second['port'])) {
			$second['port'] = 80;
		}

		if ($first['port'] != $second['port']) {
			echo "False" . PHP_EOL;
			continue;
		}

		if ( strtolower($first['host']) !== strtolower($first['host']) ) {
			echo "False" . PHP_EOL;
			continue;
		}

		if ( urlencode($first['path']) !== urlencode($first['path']) ) {
			echo "False" . PHP_EOL;
			continue;
		}

		echo "True" . PHP_EOL;
	}
