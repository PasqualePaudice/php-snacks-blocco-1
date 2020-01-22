<?php

    $classe=
    [
        Alunno1 => [
            'nome' => 'Pasquale',
            'cognome' => 'Paudice',
            'voti'=>[
                8,9,7
            ]
        ],
        Alunno2 => [
            'nome' => 'Massimo',
            'cognome' => 'Rossi',
            'voti'=>[
                7,6,7
            ]
        ],
        Alunno3 => [
            'nome' => 'Luca',
            'cognome' => 'Verdi',
            'voti'=>[
                8,6,5
            ]
        ]
    ];



    foreach ($classe as $key => $value) {
        echo "<pre>";
        echo $value['nome'] . ' ';
        echo $value['cognome'] . '<br>';

        media_voti($value['voti']);

        echo "</pre>";
    }

    function media_voti($vettore){

        $somma = 0;
        for ($i=0; $i < count($vettore) ; $i++) {
            echo ' voto: ' . $vettore[$i];
            $somma += $vettore[$i];
        }

        $media = $somma / $i;

        echo '<br> Media: '. round($media,1);
    }

 ?>
