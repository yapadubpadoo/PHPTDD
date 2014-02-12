<?php
require_once "Capcha.php";
class CapchaTest extends PHPUnit_Framework_TestCase {

	function testGetCapchaThreeNumberPlusFiveText() {
		$expected = "3 + Five = 8";
		$capcha = new Capcha();
		$capcha->setFirstOperand("3");
		$capcha->setSecondOperand("Five");
		$capcha->setOperator("+");
		$result = $capcha->getCapcha();
		$this->assertEquals($expected, $result);
	}
	
	function testGetCapchaFiveTextMultipleOneNumber() {
		$expected = "Five * 1 = 5";
		$capcha = new Capcha();
		$capcha->setFirstOperand("Five");
		$capcha->setSecondOperand("1");
		$capcha->setOperator("*");
		$result = $capcha->getCapcha();
		$this->assertEquals($expected, $result);
	}
	
	function testGetCapchaFourTextPlusTwoNumber() {
		$expected = "Four + 2 = 6";
		$capcha = new Capcha();
		$capcha->setFirstOperand("Four");
		$capcha->setSecondOperand("2");
		$capcha->setOperator("+");
		$result = $capcha->getCapcha();
		$this->assertEquals($expected, $result);
	}
	
	
	function testGetCapchaFiveTextMultipleSixNumber() {
		$expected = "Five * 6 = 30";
		$capcha = new Capcha();
		$capcha->setFirstOperand("Five");
		$capcha->setSecondOperand("6");
		$capcha->setOperator("*");
		$result = $capcha->getCapcha();
		$this->assertEquals($expected, $result);
	}
	
	function testGetCaphaArrayFourTextPlusTwoNumber() {
		//$expected = "Four + 2 = 6";
		$expected = array("Four", "+",  "2", "=","6");
		$capcha = new Capcha();
		$capcha->setFirstOperand("Four");
		$capcha->setSecondOperand("2");
		$capcha->setOperator("+");
		$result = $capcha->getCapchaArray();
		$this->assertEquals($expected, $result);
	}
	
	/*function testGetRandomOperator() {
		$expected = array('+', '*');
		$capcha = new Capcha();
		$result = $capcha->getRandomOperator();
		$this->assertContains($result, $expected);
	}*/
	
}
?>