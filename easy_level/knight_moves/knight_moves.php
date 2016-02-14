<?php

    $fh = fopen( $argv[1], "r" );

    while ( !feof( $fh ) ) {
        
        $stringLine = trim( fgets( $fh ) );

        $moves = array();

        list( $x, $y ) = array( ord( $stringLine[0] ) - 96, (int)$stringLine[1] );

        if ( $x > 2 && $y > 1 ) 
        { 
            $moves[] = chr( 96 + $x - 2 ) . ( $y - 1 ); 
        }

        if ( $x > 2 && $y < 8 ) 
        { 
            $moves[] = chr( 96 + $x - 2 ) . ( $y + 1 ); 
        }

        if ( $x > 1 && $y > 2 ) 
        { 
            $moves[] = chr( 96 + $x - 1 ) . ( $y - 2 ); 
        }

        if ( $x > 1 && $y < 7 ) 
        { 
            $moves[] = chr( 96 + $x - 1 ) . ( $y + 2 ); 
        }

        if ( $x < 8 && $y > 2 ) 
        { 
            $moves[] = chr( 96 + $x + 1 ) . ( $y - 2 ); 
        }

        if ( $x < 8 && $y < 7 ) 
        { 
            $moves[] = chr( 96 + $x + 1 ) . ( $y + 2 ); 
        }

        if ( $x < 7 && $y > 1 ) 
        { 
            $moves[] = chr( 96 + $x + 2 ) . ( $y - 1 ); 
        }

        if ( $x < 7 && $y < 8 ) 
        { 
            $moves[] = chr( 96 + $x + 2 ) . ( $y + 1 ); 
        }

        echo implode(' ', $moves) . PHP_EOL;
    
    }

?>