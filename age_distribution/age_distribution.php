<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) {
		
		$age = intval(trim(fgets($fh)));

		if ( $age < 0 || $age > 100 ) 
		{
			echo "This program is for humans".PHP_EOL;
		}
		elseif ( $age >= 0 && $age <= 2 )
		{
			echo "Still in Mama's arms".PHP_EOL;
		}
		elseif ( $age >= 3 && $age <= 4 )
		{
			echo "Preschool Maniac".PHP_EOL;
		}
		elseif ( $age >= 5 && $age <= 11 )
		{
			echo "Elementary school".PHP_EOL;
		}
		elseif ( $age >= 12 && $age <= 14 )
		{
			echo "Middle school".PHP_EOL;
		}
		elseif ( $age >= 15 && $age <= 18 )
		{
			echo "High school".PHP_EOL;
		}
		elseif ( $age >= 19 && $age <= 22 )
		{
			echo "College".PHP_EOL;
		}
		elseif ( $age >= 23 && $age <= 65 )
		{
			echo "Working for the man".PHP_EOL;
		}
		elseif ( $age >= 66 && $age <= 100 )
		{
			echo "The Golden Years".PHP_EOL;
		}
	
	}

?>