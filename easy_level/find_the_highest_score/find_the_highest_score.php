<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$table = trim( fgets( $fh ) );
        if (empty($table)) {
            continue;
        }

        $rows = explode("|", $table);

		$rowsArray = [];
		foreach ($rows as $row) {
			$rowsArray[] = explode(" ", trim($row));
		}

		$scores = [];

		for ($i = 0; $i < count($rowsArray); $i++) {

			for ($j = 0; $j < count($rowsArray[$i]); $j++) {
				$scores[$j][] = $rowsArray[$i][$j];
			}
		}

		unset($table, $rows, $rowsArray);

		$result = [];
		foreach ($scores as $score) {
			$result[] = max($score);
		}

		echo implode(" ", $result) . "\n";
	}

?>
