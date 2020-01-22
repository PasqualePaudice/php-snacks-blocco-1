<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

numeri_casuali(20,50);

function numeri_casuali($min, $max) {

    $array= array();

    $a = 1;

    while ($a <= 15) {

        $numero=rand($min,$max);

        if (in_array($numero,$array) == false) {
            $array[] = $numero;
            $a += 1;

        }

        }



    var_dump($array);
    echo "<br>";

}



 ?>
