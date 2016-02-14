<?php

    $numbers = array(
        array(
            '-**--',
            '*--*-',
            '*--*-',
            '*--*-',
            '-**--',
            '-----'
        ),
        array(
            '--*--',
            '-**--',
            '--*--',
            '--*--',
            '-***-',
            '-----'
        ),
        array(
            '***--',
            '---*-',
            '-**--',
            '*----',
            '****-',
            '-----'
        ),
        array(
            '***--',
            '---*-',
            '-**--',
            '---*-',
            '***--',
            '-----'
        ),
        array(
            '-*---',
            '*--*-',
            '****-',
            '---*-',
            '---*-',
            '-----'
        ),
        array(
            '****-',
            '*----',
            '***--',
            '---*-',
            '***--',
            '-----'
        ),
        array(
            '-**--',
            '*----',
            '***--',
            '*--*-',
            '-**--',
            '-----'
        ),
        array(
            '****-',
            '---*-',
            '--*--',
            '-*---',
            '-*---',
            '-----'
        ),
        array(
            '-**--',
            '*--*-',
            '-**--',
            '*--*-',
            '-**--',
            '-----'
        ),
        array(
            '-**--',
            '*--*-',
            '-***-',
            '---*-',
            '-**--',
            '-----'
        )
    );

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) ) 
	{
		
		$stringLine = trim( fgets( $fh ) );

        $lineNumbers  = str_split( trim( $stringLine ) );
        $result = array();

        foreach ( $lineNumbers as $number ) 
        {
            if ( !is_numeric( $number ) ) 
            {
                continue;
            }
        
            $result[] = $numbers[$number];
        }

        for ($i = 0; $i < 6; $i++) 
        {
            foreach ( $result as $number ) 
            {
                echo $number[$i];
            }
            echo PHP_EOL;
        }
	}

?>