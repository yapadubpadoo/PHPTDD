<?php
require 'Random.php';
	class RandomTest extends PHPUnit_Framework_TestCase {
		function testRandomNumber() {
			$stub = $this->getMock('Random');
			
			$stub->expects($this->any())
				 ->method('getRandomNumber')
				 ->will($this->returnValue(1));
			
			$this->assertEquals(1, $stub->getRandomNumber());
		}
		
		function testRandomTextNumber() {
			$stub = $this->getMock('Random');
			
			$stub->expects($this->any())
				 ->method('getRandomTextNumber')
				 ->will($this->returnValue("One"));
			
			$this->assertEquals("One", $stub->getRandomTextNumber());
		}
		
		function testRandomOperator() {
			$stub = $this->getMock('Random');
			
			$stub->expects($this->any())
				 ->method('getRandomOperator')
				 ->will($this->returnValue("+"));
			
			$this->assertEquals("+", $stub->getRandomOperator());
		}
	}
?>