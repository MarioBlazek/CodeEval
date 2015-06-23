<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$stringLine = trim(fgets($fh));

		$words = explode(" ", $stringLine);

		$length = 0;
		$longestWord = '';
		foreach ( $words as $word ) {
			
			$wordLength = strlen($word);
			if ( $wordLength > $length ) {
				$length = $wordLength;
				$longestWord = $word;
			}
		}
		
		echo $longestWord."\n";
	}

?>