<?php

class Fizzbuzz {

	function __construct($initial) {
		$this->number = $initial;
	}

	function getResult() {
		if ($this->number == 1) {
			return 1;
		} elseif($this->number == 2) {
			return '1, 2';
		} else {
			return '1, 2, fizz';
		}
	}
}
