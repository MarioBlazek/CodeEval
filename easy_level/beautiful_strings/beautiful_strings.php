<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) {

		$stringLine = trim( fgets( $fh ) );

		$chars  = str_split( strtolower( $stringLine ) );

	    $count = array();
	    $niceString = 0;

	    foreach ( $chars as $char ) 
	    {
	        $charNum = ord( $char );

	        if ( 97 > $charNum || 122 < $charNum ) 
	        {
	            continue;
	        }

	        if ( empty( $count[$charNum - 97] ) ) 
	        {
	            $count[$charNum - 97] = 0;
	        }

	        $count[$charNum - 97]++;
	    }

	    rsort( $count );

	    for ( $n = 26; $n > 0; $n-- ) 
	    {
	        $i = abs( $n - 26 );

	        if ( empty( $count[$i] ) ) 
	        {
	            break;
	        }

	        $niceString = $niceString + ( $n * $count[$i] );
	    }
	    
	    echo $niceString . PHP_EOL;
	}
	fclose($fh);

?>