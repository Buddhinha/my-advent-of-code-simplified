<?php
	function maximoMenorNumero ($array){
		$max = $array[0];
		$min = $array[0];
		foreach ($array as $num){
			
			if($max<$num){
				$max = $num;
			} 
			if($min > $num){
				$min =$num;
			}
		}return "a maxima: $max e a minima: $min";
	}
	$array =[12,23,45,99,2];
	
	echo maximoMenorNumero($array);
	
	