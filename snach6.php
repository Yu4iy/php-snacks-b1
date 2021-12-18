<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un 
rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Snack5</title>
</head>
<body style="display:flex">
	<div style="background: gray; width:50%;" >
		<?php
			for ($i=0; $i < count($db['teachers']); $i++) { 
				echo 	$db['teachers'][$i]['name'].' ';
				echo 	$db['teachers'][$i]['lastname'].'<br>';
			};		
		?>	
	</div>

	<div style="background: green; width:50%;">
		<?php
			for ($i=0; $i < count($db['pm']); $i++) { 
				echo 	$db['teachers'][$i]['name'].' ';
				echo 	$db['teachers'][$i]['lastname'].'<br>';
			};		
		?>	
	</div>
</body>
</html>

