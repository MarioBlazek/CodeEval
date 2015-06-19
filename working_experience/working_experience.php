<?php

	$fh = fopen($argv[1], "r");

	while ( !feof($fh) ) {
		
		$line = fgets($fh);

		$dates = explode(";", $line);

		$allDates = array();


		foreach ($dates as $date) {

			$twoDates = explode("-", $date);


			$firstDate = strtotime(trim($twoDates[0]));
			$secondDate = strtotime(trim($twoDates[1]));

			$allDates[] = array( $firstDate, true);
			$allDates[] = array( $secondDate, false);

		}

		sort($allDates);

		$datesStack[] = $allDates[0][0];
		

		

		$years = 0;

		$numberOfDates = count($allDates);
		for ($i = 1; $i < $numberOfDates; $i++) {

			$date = $allDates[$i][0];
			$isStartingDate = $allDates[$i][1];


			if ($isStartingDate) {

				$datesStack[] = $date;

			} else {

				if (count($datesStack) == 1) {
					$months = round((( $date - $datesStack[0]) * 12 / 3.15569e7) + 1);

					$years = $years + (int) $months;
					
				}

				array_pop($datesStack);
				
			}

		}

		$years = intval($years / 12);
		echo $years."\n";
		
	}

	fclose($fh);

?>