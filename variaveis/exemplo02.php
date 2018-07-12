<?php

$nome = "Sujeito";
$site = 'www.globo.com';
$ano = 1978;
$salario = 5400.00;
$bloqueado = false;

////////////////////////////////////////////

$frutas = array("Abacaxi", "Uva", "Laranja", "Morango");
echo $frutas[3];

echo "<br/>";

$dataatual = new DateTime();
var_dump($dataatual);
//////////////////////////////

echo "<br/>";

$arquivo = fopen("exemplo01.php", "r");
var_dump($arquivo);

////////////////////////
$nulo = NULL;

$vazio = "";

?>