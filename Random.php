<?php

class Random {
	function getRandomNumber() {
		return rand(1,9);
	}
	
	function getRandomTextNumber() {
		$textNumbers = array("One", "Two", "Three", "Four", "Five","Six","Seven","Eight","Nine");
		$index = rand(0,8);
		return $textNumbers[$index];
	}
	
	function getRandomOperator() {
		$operator = array("+", "*");
		$index = rand(0,1);
		return $operator[$index];
	}
	
	function getRandomPattern() {
	}
}
?>