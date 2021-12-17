<!-- Snack 5 
Prendere un paragrafo abbastanza lungo, contenente
diverse frasi. Prendere il paragrafo e suddividerlo in 
tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
	$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident minima a consectetur vel facilis ab blanditiis. Voluptas quia architecto accusantium ex reprehenderit aspernatur animi sapiente. Quam dicta? Reiciendis, voluptatibus nulla?';
	$parArray =	explode('.', $paragrafo);
	
	for ($i=0; $i < count($parArray); $i++) { 
		echo 	$parArray[$i].'<br>';

	};
?>