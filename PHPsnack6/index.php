<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
PM in un rettangolo verde. -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

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

           foreach($db as $key => $value) {
               echo $key;
               echo '<br>';
               foreach ($value as $nome) {
                   if ($key == 'teachers') {?>

                       <div class="grigio">
                           <?php echo $nome['name'] . $nome['lastname'] ?>
                       </div>


                       <?php

                   }else{?>

                       <div class="verde">
                           <?php echo $nome['name'] . $nome['lastname'] ?>
                       </div>

                       <?php

                   }

               }

           }


         ?>

    </body>
</html>
