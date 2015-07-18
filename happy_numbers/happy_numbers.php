
<?php

    $fh = fopen( $argv[1], 'r' );

    while ( !feof( $fh ) )
    {
        $number = (int) trim( fgets( $fh ) );

        $steps = array();
        
        while ( 1 < $number && !in_array( $number, $steps ) ) 
        {
            $steps[] = $number;
            $digits  = str_split( $number );
            $number  = 0;

            foreach ( $digits as $digit ) 
            {
                $number = $number + ( $digit * $digit );
            }
        }

        if ( $number == 1 )
        {
            echo "1" . PHP_EOL;
        }
        else 
        {
            echo "0" . PHP_EOL;
        }
    }

    

?>