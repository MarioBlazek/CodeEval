<?php

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$countries = explode("|", $line);

		$teamsVotes = [];
		foreach ($countries as $country => $teams) {

			$teams = explode(" ", trim($teams));

			foreach ($teams as $team) {

				$teamsVotes[$team][] = $country + 1;

			}
		}

		ksort($teamsVotes);

		$results = [];
		foreach ($teamsVotes as $country => $teams) {

			$teams = implode(",", $teams);
			$result = "$country:$teams;";

			$results[] = $result;

		}

		echo implode(" ", $results) . "\n";

	}

?>
