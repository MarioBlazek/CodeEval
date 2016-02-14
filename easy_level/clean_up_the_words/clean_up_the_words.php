<?php

    $fh = fopen( $argv[1], "r" );

    while ( !feof( $fh ) ) {
        
        $stringLine = trim( fgets( $fh ) );

        $mess = str_split( $stringLine );
        $clean = array();

        $spaceIndicator = false;
        foreach ( $mess as $character )
        {
            if ( ctype_alpha( $character ) )
            {
                $clean[] = strtolower( $character );
                $spaceIndicator = true;
            }
            else if ( !ctype_alpha( $character ) && $spaceIndicator == true )
            {
                $clean[] = " ";
                $spaceIndicator = false;
            }

        }

        echo implode( '', $clean ) . PHP_EOL;

    
    }
    fclose( $fh );

?>