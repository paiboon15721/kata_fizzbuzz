<?php
require_once 'vendor/autoload.php'; 
class FizzbuzzTest extends PHPUnit_Framework_TestCase {

	function test1ShouldReturn1() {
		$expect = '1';
		$fizzBuzz = new Fizzbuzz(1);
		$actual = $fizzBuzz->getResult(); 
		$this->assertEquals($expect, $actual);
	}

	function test2ShouldReturn12() {
		$expect = '1, 2';
		$fizzBuzz = new Fizzbuzz(2);
		$actual = $fizzBuzz->getResult();
		$this->assertEquals($expect, $actual);
	}
}
