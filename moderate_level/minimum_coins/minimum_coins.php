<?php

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		$total = intval(trim($line));
		unset($line);

		$coins = new Coins($total);
		unset($total);

		echo $coins->getNumberOfCoins() . "\n";
		unset($coins);
	}

	fclose($fh);

	class Coins
	{
		const FIVE = 5;
		const THREE = 3;
		const ONE = 1;

		private $total;

		public function __construct($total)
		{
			$this->total = $total;
		}

		public function getNumberOfCoins()
		{
			$fives = intval($this->total / self::FIVE);
			$newTotal = $this->total - ($fives * self::FIVE);

			$threes = intval($newTotal / self::THREE);
			$newTotal = $newTotal - ($threes * self::THREE);

			$ones = intval($newTotal / self::ONE);

			return $fives + $threes + $ones;
		}
	}
