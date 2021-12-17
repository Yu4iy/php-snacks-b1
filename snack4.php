<!-- Snack 4 
Creare un array con 15 numeri casuali, tenendo 
conto che l'array non dovrà contenere lo stesso numero 
più di una volta -->

<?php
	$count = 15;
	$arrayNum = [];
	$min = 1;
	$max = 100;
	
	for ($i=0; $i < $count; $i++) { 
		$randNumber = rand($min, $max);

		if(!in_array($randNumber, $arrayNum)){
			$arrayNum[] = $randNumber;
		};
		
	};

	var_dump($arrayNum);
?>

