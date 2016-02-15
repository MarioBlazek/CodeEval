<?php

	$possibleCards = array(
		'2' => 2,
		'3' => 3,
		'4' => 4,
		'5' => 5,
		'6' => 6,
		'7' => 7,
		'8' => 8,
		'9' => 9,
		'10' => 10,
		'J' => 11,
		'Q' => 12,
		'K' => 13,
		'A' => 14,
	);

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		list($cards, $trump) = explode(" | ", $line);
		unset($line);
		list($first, $second) = explode(" ", $cards);

		$trumpFirst = strpos($first, $trump);
		$trumpSecond = strpos($second, $trump);

		if ($trumpFirst !== false && $trumpSecond === false) {
			echo $first . "\n";
			continue;
		} elseif ($trumpFirst === false && $trumpSecond !== false) {
			echo $second . "\n";
			continue;
		}

		$firstCard = substr($first, 0, -1);
		$firstCard = $possibleCards[$firstCard];
		$secondCard = substr($second, 0, -1);
		$secondCard = $possibleCards[$secondCard];

		if ($firstCard > $secondCard) {
			echo $first . "\n";
			continue;
		} elseif($secondCard > $firstCard) {
			echo $second . "\n";
			continue;
		} else {
			echo $first . ' ' . $second . "\n";
			continue;
		}

		unset($first);
		unset($second);
		unset($trumpFirst);
		unset($trumpSecond);
		unset($firstCard);
		unset($secondCard);
	}
	fclose($fh);
?>
