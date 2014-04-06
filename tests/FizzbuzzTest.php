<?php
require_once 'vendor/autoload.php'; 
class FizzbuzzTest extends PHPUnit_Framework_TestCase {

	function test1ShouldReturn1() {
		$expect = '1';
		$fizzbuzz = new Fizzbuzz(1);
		$actual = $fizzbuzz->getResult(); 
		$this->assertEquals($expect, $actual);
	}

	function test2ShouldReturn12() {
		$expect = '1, 2';
		$fizzbuzz = new Fizzbuzz(2);
		$actual = $fizzbuzz->getResult();
		$this->assertEquals($expect, $actual);
	}

	function test3ShouldReturn12fizz() {
		$expect = '1, 2, fizz';
		$fizzbuzz = new Fizzbuzz(3);
		$actual = $fizzbuzz->getResult();
		$this->assertEquals($expect, $actual);
	}
}
