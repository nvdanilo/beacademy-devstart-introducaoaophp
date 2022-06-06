<?php  // Procurar funções que transformem as strings

$nome = "danilo"; // Transformar em -> Danilo
$sobrenome = "NOGUEIRA"; // -> Nogueira
$nomeCompleto = "danilo nogueira valtão"; // -> Danilo Nogueira Valtão


echo ucfirst($nome).PHP_EOL;
echo ucfirst(strtolower($sobrenome)).PHP_EOL;
echo ucwords($nomeCompleto);