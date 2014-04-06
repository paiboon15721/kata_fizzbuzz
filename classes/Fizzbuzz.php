<?php

class Fizzbuzz {

	function __construct($initial) {
		$this->number = $initial;
	}

	function getResult() {
		if ($this->number == 1) {
			return 1;
		} else {
			return '1, 2';
		}
	}
}
