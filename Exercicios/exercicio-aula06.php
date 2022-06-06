<?php

$frutas = [
    "Laranja", // 0
    "Banana", // 1
    "Abacaxi" // 2
];

$frutas[] = "Maçã"; // 3
$frutas[10] = "Melancia"; // 10
$frutas[7] = "Morango"; // 7
$frutas[] = "Tangerina"; // 11



echo "<ul> -- Lista de Frutas --";
    
        foreach ($frutas as $i) {
            echo "<li>{$i}<br></li>";
        }
    
echo "</ul>";