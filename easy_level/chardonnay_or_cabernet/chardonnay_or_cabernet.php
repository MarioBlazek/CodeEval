<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$exploded = explode("|", $line);
		$vineNames = explode(" ", trim($exploded[0]));
		$letters = trim($exploded[1]);
		$lettersCount = strlen($letters);
		$found = false;
		$resultString = '';
		foreach ($vineNames as $vine) {
			$bingo = 0;

			for ($i = 0; $i < $lettersCount; $i++) {
				$letter = substr($letters, $i, 1);

				$result = strpos($vine, $letter);

				if ($result !== false) {
					$bingo++;
				}
			}

			if ($bingo === $lettersCount && strlen($vine) >= $lettersCount) {
				$resultString = $resultString . ' ' . $vine;
			}
		}

		$resultString = trim($resultString);

		if(empty($resultString)) {
			echo "False\n";
		} else {
			echo "$resultString\n";
		}
	}

?>
