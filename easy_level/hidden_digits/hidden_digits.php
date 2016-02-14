<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$string = trim(fgets($fh));


		echo getHiddenNumbers($string)."\n";
	
	}

	function getHiddenNumbers($string)
	{
		$stringLength = strlen($string);
		$numberOfDigits = 0;
		$digits = '';

		for ($i = 0; $i <= $stringLength; $i++) {
			$character = substr($string, $i, 1);

			$checked = checkForDigit($character);
		
			if ( $checked !== 'NOT_NUMBER' ) {
				$digits = $digits.$checked;
				$numberOfDigits++;
			}
		}

		if ( $numberOfDigits == 0 ) {
			$digits = 'NONE';
		}

		return $digits;
	}


	function checkForDigit($character)
	{
		if ( is_numeric($character) ) {
			return $character;

		} else if ( ctype_alpha($character) ) {
		
			return isInsideGivenLetterRange($character);

		} else {

			return 'NOT_NUMBER';
		}
	}

	function isInsideGivenLetterRange($character)
	{	
		$letterToNumber = array(
			"a" => 0,
			"b" => 1,
			"c" => 2,
			"d" => 3,
			"e" => 4,
			"f" => 5,
			"g" => 6,
			"h" => 7,
			"i" => 8,
			"j" => 9,
		);

		if ( array_key_exists($character, $letterToNumber) ) {

			return $letterToNumber[$character];

		} else {

			return 'NOT_NUMBER';

		}
		
	}

?>