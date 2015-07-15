
<?php
    
    $ordinaryToRomanMapper = array(
        1000    => 'M',
        900     => 'CM',
        500     => 'D',
        400     => 'CD',
        100     => 'C',
        90      => 'XC',
        50      => 'L',
        40      => 'XL',
        10      => 'X',
        9       => 'IX',
        5       => 'V',
        4       => 'IV',
        1       => 'I'
    );

    $fh = fopen( $argv[1], 'r' );

    while ( !feof( $fh ) )
    {
        $number = (int) trim( fgets( $fh ) );

        foreach ( $ordinaryToRomanMapper as $ordinaryNumber => $romanNumber )
        {
            while ( $number >= $ordinaryNumber )
            {
                $number = $number - $ordinaryNumber;

                echo $romanNumber;
            }
        }

        echo PHP_EOL;
        
    }
?>