<?php
class Capcha {
	function setFirstOperand($operand) {
		$this->first = $operand;
	}
	function setSecondOperand($operand) {
		$this->second = $operand;
	}
	function setOperator($operator) {
		$this->operator = $operator;
	}
	
	function getNumberValue($operand) {
		$number = $operand;
		switch($operand) {
			case 'One': $number = 1; break;
			case 'Two': $number = 2; break;
			case 'Three': $number = 3; break;
			case 'Four': $number = 4; break;
			case 'Five': $number = 5; break;
			case 'Six': $number = 6; break;
			case 'Seven': $number = 7; break;
			case 'Eight': $number = 8; break;
			case 'Nine': $number = 9; break;
		}
		return $number;
	}
	function getCapcha() {
		$expression = $this->first." ".$this->operator." ".$this->second;
		$result = "";
		
		$firstOperand = $this->getNumberValue($this->first);
		$secondOperand = $this->getNumberValue($this->second);
		
		if ($this->operator == '+') {
			$result = $firstOperand + $secondOperand;
		}
		else
			$result = $firstOperand * $secondOperand;
		
		return $expression." = ".$result;
	}
}
?>