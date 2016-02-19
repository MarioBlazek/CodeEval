<?php

	class Stack
	{
		private $items;

		public function __construct(array $items)
		{
			$this->items = $items;
		}

		public function getAlternates()
		{
			$alternates = array();

			$items = array_reverse($this->items);
			while(count($items)) {
				$alternates[] = array_shift($items);

				if(count($items)) {
					array_shift($items);
				}
			}

			return $alternates;
		}
	}

	$fh = fopen( $argv[1], "r" );

	while ( false !== ($line = fgets($fh)) )
	{
		$items = explode(" ", trim($line));
		unset($line);

		$stack = new Stack($items);

		echo implode(" ", $stack->getAlternates()) . "\n";

		unset($stack);
	}

	fclose($fh);
