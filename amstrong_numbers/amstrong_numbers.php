<?php

	function isAmstrong( $number )
	{
		$digits = countDigits( $number );

		$sum = 0;
		$current = $number;

        while ( $current > 0 ) 
        {
            $digit = $current % 10;
            $multipliedDigit = $digit;

            for ( $i = 1; $i < $digits; $i++ ) 
            {
                $multipliedDigit = $multipliedDigit * $digit;
            }

            $sum = $sum + $multipliedDigit;
            $current = $current / 10;
        }

        return $sum == $number;
	}


	function countDigits( $digits )
	{
		return strlen ( strval( $digits ) );
	}


	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$number = (int) trim( fgets( $fh ) );

		if ( isAmstrong( $number ) )
		{
			echo "True" . PHP_EOL;
		}
		else
		{
			echo "False" . PHP_EOL;
		}
	
	}

?>