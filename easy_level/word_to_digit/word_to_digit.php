<?php
	
	$nums = array(
		'zero' 	=> 0,
		'one' 	=> 1,
		'two' 	=> 2,
		'three' => 3,
		'four' 	=> 4,
		'five' 	=> 5,
		'six' 	=> 6,
		'seven' => 7,
		'eight' => 8,
		'nine' 	=> 9,
	);


	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

		$numbersAsStrings = explode( ";", $stringLine);

		$numbers = '';
		foreach ( $numbersAsStrings as $numberAsString )
		{
			$numbers = $numbers . $nums[ $numberAsString ];
		}

		echo $numbers . PHP_EOL;
	
	}

?>