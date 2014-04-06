<?php

class Fizzbuzz {

	function __construct($initial) {
		$this->number = $initial;
	}

	function getResult() {
		if(!is_numeric($this->number)) {
			throw new InvalidArgumentException;
		}
		$result = '';
		for($i = 1; $i <= $this->number; $i++) {
			if(($i % 3 == 0) and ($i % 5 == 0)) {
				$result .= 'fizzbuzz, ';
			} elseif($i % 3 == 0) {
				$result .= 'fizz, ';
			} elseif ($i % 5 == 0) {
				$result .= 'buzz, ';
			} else {
				$result .= $i.', ';
			}
		}
		$result = substr($result, 0, -2);
		return $result;
	}
}
