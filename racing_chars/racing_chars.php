 <?php

    $raceTrack = array();

    $fh = fopen( $argv[1], 'r' );

    while ( !feof( $fh ) )
    {
        $stringLine = trim( fgets( $fh ) );

        $raceTrack[] = str_split( $stringLine );
    }

    $position = $previous = array_search( '_', $raceTrack[0] );

    $raceTrack[0][$position]  = '|';

    $trackLength = count( $raceTrack );
    for ( $row = 1; $row < $trackLength; $row++ ) 
    {
        $position = array_search( 'C', $raceTrack[$row] );
        $position = $position ?: array_search( '_', $raceTrack[$row] );

        if ( $position < $previous ) 
        {
            $raceTrack[$row][$position] = '/';

        } 
        elseif ( $position > $previous ) 
        {
            $raceTrack[$row][$position] = '\\';
        } 
        else 
        {
            $raceTrack[$row][$position] = '|';
        }
        
        $previous = $position;
    }

    array_walk( $raceTrack, function( $row ) 
    {
        echo implode( '', $row ) . PHP_EOL;
    });

?>