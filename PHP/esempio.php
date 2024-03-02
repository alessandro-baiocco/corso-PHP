<?php

$GLOBALS['name'] = $_POST['nome'];
$name_surname = "fabio coso"; //la più utilizzata
$nameSurname = "fabio";

function saluta(){
    echo 'Ciao '. $GLOBALS['name'] . ' ' . $_POST['cognome'];
}


define('INDIRIZZO' , 'Piazza Roma'); // creare una costante non modificabile n1 può essere definita dentro una funzione
const ADDRESS = 'Viale Genova'; // creare una costante non modificabile n2 non può essere definita dentro una funzione



saluta()


?>