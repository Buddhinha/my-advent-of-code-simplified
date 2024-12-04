<?php 
	$arrayDoUser = readline("Digite uma lista de números, separados por virgula. \n");

	$array = explode(",",$arrayDoUser);

	$array = array_map('trim', $array);

	//$array = [12,13,7,6,9,98]; 
	
	function parimp ($array){
	$par = 0;
	$imp = 0;
	foreach ($array as $num) {
		
		if ($num%2 == 0) {
			$par++;
		} else{
			$imp++;
		}
		
	} return "impar: $imp, par:$par ";
}
echo parimp($array);
echo "\n";
?>