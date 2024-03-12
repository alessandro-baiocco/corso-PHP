<?php
// 🍰 Esercizio 1
// Dichiarare una variabile intera chiamata "numero" e assegnarle il valore 5. Successivamente, stampare il valore della variabile.
$numero = 5;
echo "esercizio 1: " . $numero . "</br>";

// 🍰 Esercizio 2
// Dichiarare una variabile float chiamata "prezzo" e assegnarle il valore 9.99. Convertire la variabile in intero e stampare il risultato.

$prezzo = 9.99;
$prezzo = intval($prezzo) ;
echo "esercizio 2: " . $prezzo . "</br>";


// 🍰 Esercizio 3
// Dichiarare una variabile stringa chiamata "nome" e assegnarle il valore "Maria". Convertire la variabile in maiuscolo e stampare il risultato.
$nome = "Maria";
$nome = strtoupper($nome);
echo "esercizio 3: " . $nome . "</br>";

// 🍰 Esercizio 4
// Dichiarare una variabile booleana chiamata "is_valid" e assegnarle il valore true. Convertire la variabile in intero e stampare il risultato.

$is_valid = true;
$is_valid = 21414214;
echo "esercizio 4: " . $is_valid . "</br>";

// 🍰 Esercizio 5
// Dichiarare una variabile intera chiamata "anno" e assegnarle il valore 2023. Convertire la variabile in stringa e stampare il risultato.

$anno = 2023;
$anno = strval($anno);
echo "esercizio 5: " ; 
echo $anno . var_dump($anno) . "</br>";



// 🍰 Esercizio 6
// Dichiarare una variabile stringa chiamata "numero_telefono" e assegnarle il valore "123456789". Convertire la variabile in intero e stampare il risultato.

$numero_telefono = "123456789";
$numero_telefono = intval($numero_telefono) ;
echo "esercizio 6: "; 
echo var_dump($numero_telefono) . "</br>";


// 🍰 Esercizio 7
// Dichiarare una variabile float chiamata "altezza" e assegnarle il valore 1.75. Convertire la variabile in stringa e stampare il risultato.
$altezza = 1.75;
$altezza = strval($altezza);
echo "esercizio 7: "; 
echo var_dump($altezza) . "</br>";

// 🍰 Esercizio 8
// Dichiarare una variabile booleana chiamata "is_logged_in" e assegnarle il valore false. Convertire la variabile in stringa e stampare il risultato.
$is_logged_in = false;
$is_logged_in = $is_logged_in ? "true" : "false";
echo "esercizio 8: "; 
echo var_dump($is_logged_in) . "</br>";


// 🍰 Esercizio 9
// Dichiarare una variabile stringa chiamata "numero" e assegnarle il valore "123". Convertire la variabile in intero e sommarle il valore 7. Stampare il risultato.

$numero = "123";
$numero = intval($numero) + 7;
echo "esercizio 9: "; 
echo var_dump($numero) . "</br>";


// 🍰 Esercizio 10
// Dichiarare una variabile float chiamata "peso" e assegnarle il valore 62.5. Convertire la variabile in intero e sottrarre il valore 10. Stampare il risultato.


$peso = 62.5;
$peso = intval($peso) - 10;
echo "esercizio 10: "; 
echo var_dump($peso) . "</br>";


?>