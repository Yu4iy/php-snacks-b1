<!-- Creare un array di array. Ogni array figlio avrà come chiave
una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
un array di post associati a quella data. Stampare ogni data con i
relativi post.Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Pietro Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Silvio Berlusconi',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Donald Trump',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Angela Merkel',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Paolo Duzioni',
            'text' => 'Testo post 6'
        ]
    ],
];


$postsKeys = array_keys($posts)
?>



<?php

    for ($i=0; $i < count($postsKeys); $i++) { 
        echo'<br>';
        echo $postsKeys[$i].'<br>';
        echo'<br>';
        
        for ($j=0; $j < count($posts[$postsKeys[$i]]); $j++) { 
           echo $posts[$postsKeys[$i]][$j]['title'].'<br>';
           echo $posts[$postsKeys[$i]][$j]['author'].'<br>';
           echo $posts[$postsKeys[$i]][$j]['text'].'<br>';
           echo'<br>';
           
        }
        
        
        
    }
?>

