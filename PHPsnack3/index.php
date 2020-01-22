<?php

//  Creare un array di array: ogni array figlio avrà come chiave una data in questo
// formato: DD-MM-YYYY (es 01-01-2007) e come valore un array di post
// associati a quella data.
$posts = [

'10/01/2019' => [
    [
        'title' => 'Post 1',
        'author' => 'Michele ',
        'text' => 'lorem ipsum'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Maurizio',
        'text' => 'ciao ciao'
    ],
],
'10/02/2019' => [
    [
        'title' => 'Post 3',
        'author' => 'Giovanni',
        'text' => 'Come va?'
    ]
],
'15/05/2019' => [
    [
        'title' => 'Post 4',
        'author' => 'Aurora',
        'text' => 'Ola!'
    ],
    [
        'title' => 'Post 5',
        'author' => 'Serena',
        'text' => 'Hey'
    ],
    [
        'title' => 'Post 6',
        'author' => 'Andrea',
        'text' => 'Hello!'
    ]
],
];



 // Stampare ogni data con i relativi post.

 foreach ($posts as $data => $valori){
     echo '<br>' . $data . '<br>';
     foreach ($valori as  $value) {
         echo '<br>' . $value['title'] .'<br>';
         echo $value['author']; echo '<br>';
         echo $value['text']; echo '<br>';




     }
}



 ?>
