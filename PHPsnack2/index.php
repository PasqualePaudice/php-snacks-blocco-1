<!-- Passare come parametri GET “name”, “mail” e “age”  -->

<?php
$nome= $_GET["name"];
$mail= $_GET["mail"];
$eta= $_GET["age"];





// <!-- e verificare (cercando i
// metodi che non conosciamo nella documentazione) che:
// ● “name” sia più lungo di 3 caratteri;

if (strlen($nome)>3){
    // ● “mail” contenga un punto e una chiocciola;
    if (strpos($mail, '.') !== false && strpos($mail, '@') !== false){

    // ● “age” sia un numero.

    if (is_numeric($eta) == true) {

        // Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
        echo 'Accesso riuscito';

    }else{
        echo "Accesso negato <br>";
        echo "non hai inserito un'età valida";
    }



    }else{
        echo "Accesso negato <br>";
        echo 'e-mail non valida <br>';
    }
}else{
    echo "Accesso negato <br>";
    echo 'Il nome deve essere più lungo di 3 caratteri.';
}



 ?>
