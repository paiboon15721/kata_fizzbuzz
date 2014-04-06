<?php
require_once 'vendor/autoload.php'; 
class FizzbuzzTest extends PHPUnit_Framework_TestCase {

	/**
		*@expectedException InvalidArgumentException
		*/
	function testRequiresNumericValue() {
		$fizzbuzz = new Fizzbuzz('one');
		$fizzbuzz->getResult();
	}

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

	function test4ShouldReturn12fizz4() {
		$expect = '1, 2, fizz, 4';
		$fizzbuzz = new Fizzbuzz(4);
		$actual = $fizzbuzz->getResult();
		$this->assertEquals($expect, $actual);
	}

	function test5ShouldReturn12fizz4buzz() {
		$expect = '1, 2, fizz, 4, buzz';
		$fizzbuzz = new Fizzbuzz(5);
		$actual = $fizzbuzz->getResult();
		$this->assertEquals($expect, $actual);
	}

	function test15ShouldReturn12fizz4buzz14fizzbuzz() {
		$expect = '1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz';
		$fizzbuzz = new Fizzbuzz(15);
		$actual = $fizzbuzz->getResult();
		$this->assertEquals($expect, $actual);
	}
}
