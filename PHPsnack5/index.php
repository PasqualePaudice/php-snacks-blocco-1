<!-- Creare un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il
paragrafo e suddividerlo in tanti paragrafi: ogni volta che si incontra un punto,
bisogna creare un nuovo paragrafo. -->

<?php

    $paragrafo = "Nato nel 1994 ad opera del danese Rasmus Lerdorf, PHP era in origine una raccolta di script CGI che permettevano una facile gestione delle pagine personali. Secondo l'annuncio originale di PHP 1.0 da parte dell'autore sul newsgroup comp.infosystems.www.authoring.cgi il significato originario dell'acronimo era Personal Home Page.
    Il pacchetto originario venne in seguito esteso e riscritto dallo stesso Lerdorf in C, aggiungendo funzionalità quali il supporto al database mSQL, e iniziò a chiamarsi PHP/FI, dove FI sta per Form Interpreter (interprete di form), prevedendo la possibilità di integrare il codice PHP nel codice HTML in modo da semplificare la realizzazione di pagine dinamiche. In quel periodo 50.000 domini Internet annunciarono di aver installato PHP.
    Il linguaggio cominciò a godere di una certa popolarità tra i progetti open source del web e venne così notato da Zeev Suraski e Andi Gutmans, due giovani programmatori. I due collaborarono nel 1998 con Lerdorf allo sviluppo della terza versione di PHP, il cui acronimo assunse il significato attuale, riscrivendone il motore che fu battezzato Zend da una contrazione dei loro nomi. Le caratteristiche chiave della versione PHP 3.0, frutto del loro lavoro, erano la straordinaria estensibilità, la connettività ai database e il supporto iniziale per il paradigma a oggetti. Verso la fine del 1998 PHP 3.0 era installato su circa il 10% dei server web presenti su Internet.";

    $testoModificato= '<p>' . str_replace('. ', '. </p><p>',$paragrafo);

    echo $testoModificato;


 ?>
