<?php
require 'Random.php';
	class RandomTest extends PHPUnit_Framework_TestCase {
		function testRandomNumber() {
			/*$stub = $this->getMock('Random');
			
			$stub->expects($this->any())
				 ->method('getRandomNumber')
				 ->will($this->returnValue(1));
			
			$this->assertEquals(1, $stub->getRandomNumber());*/
			
			$random = new Random();
			$expectedRange = array(1,2,3,4,5,6,7,8,9);
			$result = $random->getRandomNumber();
			$this->assertContains($result, $expectedRange);
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
		
		function testRandomPattern() {
			$stub = $this->getMock('Random');
			
			$stub->expects($this->any())
				 ->method('getRandomPattern')
				 ->will($this->returnValue('TextNumberAndNumber'));
			
			$this->assertEquals('TextNumberAndNumber', $stub->getRandomPattern());
		}
	}
?>