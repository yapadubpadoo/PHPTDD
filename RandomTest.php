<?php
require 'Random.php';
	class RandomTest extends PHPUnit_Framework_TestCase {
		function testRandomNumber() {			
			$random = new Random();
			$expectedRange = array(1,2,3,4,5,6,7,8,9);
			$result = $random->getRandomNumber();
			$this->assertContains($result, $expectedRange);
		}
		
		function testRandomTextNumber() {
			$random = new Random();
			$expectedRange = array("One", "Two", "Three", "Four", "Five","Six","Seven","Eight","Nine");
			$result = $random->getRandomTextNumber();
			$this->assertContains($result, $expectedRange);
		}
		
		function testRandomOperator() {
			$random = new Random();
			$expectedRange = array("+", "*");
			$result = $random->getRandomOperator();
			$this->assertContains($result, $expectedRange);
		}
		
		function testRandomPattern() {
			$random = new Random();
			$expectedRange = array("NumberAndTexNumber", "TextNumberAndNumber");
			$result = $random->getRandomPattern();
			$this->assertContains($result, $expectedRange);
		}
	}
?>