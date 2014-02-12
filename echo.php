<?php
	function generate_set($str) {
		$open = "";
		$close = "";
		$min = "";
		$max = "";
		$stroutput = '';
		
		$open = $str[0];
		$close = $str[strlen($str)-1];
		
		$str = str_replace(array('[',']','(',')'), "", $str);
		
		$temp = explode(",", $str);
		
		$min = $temp[0];
		$max = $temp[1];

		if($open == '['){
			$stroutput .= '{'.$min;
		}elseif($open == '('){
			$stroutput .= '{';			
		}
		
		//for
		if($close == ']'){
			$stroutput .= $max.'}';
		}elseif($close == '('){
			$stroutput .= '}';			
		}
		
		//$opera_start;
		if($open == '[')$min = $min;
		else	$min = $min + 1;
		
		if($close == ']')$max = $max;
		else $max = $max - 1;
		
		for($min ; $min <= $max ; $min ++)
		{
			echo $min . ',';
		}
		
		/*
		echo $open . '-' . $close;
		echo $min . '-' .$max; 
		*/
	}
	
	generate_set("(0,5)");
?>