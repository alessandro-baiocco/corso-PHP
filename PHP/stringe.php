<?php 


$stringa = "lorem ipsum afgwagawg ag awg awggw";

$nome = "franco";

echo $nome . " avawgawgw L\' " . $stringa; // un modo per concatenare le stringe

echo strlen($stringa); //lungezza stringa

echo strtoupper($stringa); // stringa in caps 

echo trim($stringa); //rimuovere spazzi prima e dopo

echo str_word_count($stringa); // contare le parole

echo strrev($stringa); // rovesciare la string

echo strpos($stringa , "ipsum"); // trovare una parola (è case sensitive)

echo strpos($stringa , 6 , 10); // tagliare una string


?>