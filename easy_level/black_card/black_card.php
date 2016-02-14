<?php

	class BlackCard
	{
		protected $players;

		protected $blackCard;

		protected $winner = null;

		public function __construct($players, $blackCard)
		{
			$this->players = explode(" ", $players);
			$this->blackCard = intval($blackCard);

		}

		public function play()
		{
			$haveWinner = false;
			$blackCard = $this->blackCard;
			while (!$haveWinner) {

				$count = count($this->players);
				$players = $this->players;
				if ($count == 1) {

					$haveWinner = true;
					$this->winner = array_pop($this->players);

				} elseif ($count < $this->blackCard) {

					$this->blackCard -= $count;

				} else {

					if (empty($this->players)) {
						break;
					}

					unset($this->players[$this->blackCard - 1]);
					$this->players = array_values($this->players);
					$this->blackCard = $blackCard;

				}
			}


		}

		public function getWinner()
		{
			return $this->winner;
		}
	}

	$fh = fopen( $argv[1], "r" );

	while ( !feof( $fh ) )
	{

		$line = trim( fgets( $fh ) );

		if (empty($line)) {
			continue;
		}

		$exploded = explode(" | ", $line);

		$blackCard = new BlackCard($exploded[0], $exploded[1]);
		$blackCard->play();

		echo $blackCard->getWinner() . "\n";
	}

?>
