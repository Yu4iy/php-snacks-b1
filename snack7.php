<!-- Snack 6
Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti 
scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
 
    $students = [
            [
                'name' => 'Paolo',
                'lastname' => 'Duzioni',
                'votes' => 
				[
				'Matematica' => 1,
				'Informatica' => 1,
				'Geologia' => 1,
				'Physica' => 1,
				'Geometria'	=> 1,
				]
		    
            ],
            [
			'name' => 'Michele',
			'lastname' => 'Papagni',
			'votes' => 
				  [
				  'Matematica' => rand(1, 12),
				  'Informatica' => rand(1, 12),
				  'Geologia' => rand(1, 12),
				  'Physica' => rand(1, 12),
				  'Geometria'	=> rand(1, 12),
				  ]
			
		],
		[
                'name' => 'Alfredo',
                'lastname' => 'Desantis',
                'votes' => 
				[
				'Matematica' => rand(1, 12),
				'Informatica' => rand(1, 12),
				'Geologia' => rand(1, 12),
				'Physica' => rand(1, 12),
				'Geometria'	=> rand(1, 12),
				],
		    
            ],
		[
			'name' => 'Silvio',
			'lastname' => 'Berlusconi',
			'votes' => 
				  [
				  'Matematica' => rand(1, 12),
				  'Informatica' => rand(1, 12),
				  'Geologia' => rand(1, 12),
				  'Physica' => rand(1, 12),
				  'Geometria'	=> rand(1, 12),
				  ],
			
		],  
	];



?>

<?php
	for ($i=0; $i < count($students); $i++) { 
		$keys = array_keys($students[$i]['votes']);

		echo $students[$i]['name'].' '.$students[$i]['lastname'].'<br>';

		for ($j=0; $j < count($students[$i]['votes']) ; $j++) { 
			$somma += $students[$i]['votes'][$keys[$j]];
		}
		echo $somma / count($students[$i]['votes']).'<br>';
	};		
?>	





